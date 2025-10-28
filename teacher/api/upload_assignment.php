<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
include "../../includes/config.php";

$launch_id   = intval($_POST['launch_id'] ?? 0);
$topic_id    = intval($_POST['topic_id'] ?? 0);
$co_id       = intval($_POST['co_id'] ?? 0);
$title       = trim($_POST['title'] ?? '');
$instruction = trim($_POST['instruction'] ?? '');
$marks       = intval($_POST['marks'] ?? 0);
$due_date    = $_POST['due_date'] ?? null;

// ✅ Validate required fields
if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0 || $title === '') {
    echo json_encode([
        "status" => "error",
        "message" => "Missing required fields (launch_id, topic_id, co_id, title)"
    ]);
    exit;
}

// ✅ Create upload directory if missing
$upload_dir_fs = __DIR__ . "/../../uploads/assignments/";
if (!is_dir($upload_dir_fs)) mkdir($upload_dir_fs, 0777, true);

$file_path = null;
$file_uploaded = false;

// ✅ Handle optional file upload
if (isset($_FILES['file']) && $_FILES['file']['error'] !== UPLOAD_ERR_NO_FILE) {
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));

        if ($ext !== 'pdf') {
            echo json_encode([
                "status" => "error",
                "message" => "Invalid file type. Only PDF files are allowed."
            ]);
            exit;
        }

        $safe_name = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', pathinfo($_FILES['file']['name'], PATHINFO_FILENAME));
        $new_name  = $safe_name . "_" . time() . ".pdf";
        $target    = $upload_dir_fs . $new_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
            $file_path = $new_name;
            $file_uploaded = true;
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Failed to upload the PDF file. Please try again."
            ]);
            exit;
        }
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Error uploading file. (Error Code: " . $_FILES['file']['error'] . ")"
        ]);
        exit;
    }
} else {
    // ✅ No file uploaded, so just set to empty string instead of null
    $file_path = "";
}

// ✅ Check if assignment exists
$check = $conn->prepare("SELECT ass_id, notes FROM assignments WHERE launch_id=? AND topic_id=? AND co_id=? LIMIT 1");
$check->bind_param("iii", $launch_id, $topic_id, $co_id);
$check->execute();
$res = $check->get_result();

if ($res->num_rows > 0) {
    // ✅ Update existing
    $row = $res->fetch_assoc();
    $ass_id   = $row['ass_id'];
    $old_file = $row['notes'];

    // If no new file, keep old one
    if (empty($file_path)) {
        $file_path = $old_file;
    }

    $sql = "UPDATE assignments 
            SET title=?, instruction=?, marks=?, due_date=?, notes=?, created_at=CURRENT_TIMESTAMP 
            WHERE ass_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssissi", $title, $instruction, $marks, $due_date, $file_path, $ass_id);
    $ok = $stmt->execute();
    $stmt->close();

    // Delete old file if replaced
    if ($file_uploaded && $old_file && file_exists($upload_dir_fs . $old_file)) {
        @unlink($upload_dir_fs . $old_file);
    }

    echo json_encode([
        "status" => $ok ? "success" : "error",
        "message" => $ok
            ? ($file_uploaded ? "Assignment updated successfully with new PDF." : "Assignment updated successfully.")
            : "Failed to update assignment."
    ]);

} else {
    // ✅ Insert new
    $sql = "INSERT INTO assignments (launch_id, topic_id, co_id, title, instruction, notes, marks, due_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiisssis", $launch_id, $topic_id, $co_id, $title, $instruction, $file_path, $marks, $due_date);
    $ok = $stmt->execute();
    $stmt->close();

    echo json_encode([
        "status" => $ok ? "success" : "error",
        "message" => $ok
            ? ($file_uploaded ? "Assignment created successfully with PDF." : "Assignment created successfully without PDF.")
            : "Failed to create assignment."
    ]);
}

$conn->close();
?>
