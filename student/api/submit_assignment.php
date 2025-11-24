<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$student_id = $_SESSION['user_id'] ?? null;
$ass_id = intval($_POST['ass_id'] ?? 0);
$context = trim($_POST['context'] ?? '');

if (!$student_id || !$ass_id) {
    echo json_encode(["status" => 400, "message" => "Invalid session or assignment ID"]);
    exit;
}

// 🔹 File Upload Handling
$file_names = [];

if (!empty($_FILES['files']['name'][0])) {
    // Path from current file (teacher/api/) to project_root/uploads/assignments/
    $uploadDir = __DIR__ . "/../../uploads/assignments/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    foreach ($_FILES['files']['name'] as $i => $filename) {
        $tmpName = $_FILES['files']['tmp_name'][$i];
        $error = $_FILES['files']['error'][$i];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        // ✅ Allow only images and PDFs
        if ($error !== UPLOAD_ERR_OK) continue;
        if (!in_array($ext, ['jpg', 'jpeg', 'png', 'pdf'])) continue;

        // Create unique filename
        $newName = time() . "_" . uniqid() . "." . $ext;
        $targetPath = $uploadDir . $newName;

        // Move file to uploads/assignments directory
        if (move_uploaded_file($tmpName, $targetPath)) {
            $file_names[] = $newName; // ✅ Save only file name (not path)
        }
    }
}

// Convert file names to JSON
$file_json = json_encode($file_names);

// 🔹 Check if submission already exists
$check = $conn->prepare("SELECT sub_id FROM assignment_submissions WHERE ass_id=? AND student_id=?");
$check->bind_param("ii", $ass_id, $student_id);
$check->execute();
$exists = $check->get_result()->fetch_assoc();

// 🔹 Insert or Update Submission
if ($exists) {
    $stmt = $conn->prepare("
        UPDATE assignment_submissions 
        SET context=?, file_url=?, submission_date=NOW()
        WHERE sub_id=?
    ");
    $stmt->bind_param("ssi", $context, $file_json, $exists['sub_id']);
} else {
    $stmt = $conn->prepare("
        INSERT INTO assignment_submissions (ass_id, student_id, context, file_url, submission_date)
        VALUES (?, ?, ?, ?, NOW())
    ");
    $stmt->bind_param("iiss", $ass_id, $student_id, $context, $file_json);
}

$q = $conn->prepare("SELECT launch_id, topic_id, co_id FROM assignments WHERE ass_id = ?");
$q->bind_param("i", $ass_id);
$q->execute();
$assignment = $q->get_result()->fetch_assoc();

if ($stmt->execute()) {
    echo json_encode([
        "status" => 200,
        "message" => "Assignment submitted successfully",
        "launch_id" => $assignment['launch_id'],
        "topic_id"  => $assignment['topic_id'],
        "material_id" => $assignment['co_id'], // this is the CO/Material ID
        "type" => "assignment"
    ]);
}else {
    echo json_encode(["status" => 500, "message" => "Database error: " . $stmt->error]);
}
