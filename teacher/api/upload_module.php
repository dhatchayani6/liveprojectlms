<?php
// api/upload_module.php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

include "../../includes/config.php";

// Required
$launch_id = intval($_POST['launch_id'] ?? 0);
$topic_id  = intval($_POST['topic_id'] ?? 0);
$co_id     = intval($_POST['co_id'] ?? 0);
$learning_type = trim($_POST['learning_type'] ?? '');

if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0 || $learning_type === '') {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

// ✅ VIDEO: Save YouTube URL only — no file upload
if ($learning_type === "video") {

    $url = trim($_POST['url'] ?? '');

    if ($url === '' || (!str_contains($url, "youtube.com") && !str_contains($url, "youtu.be"))) {
        echo json_encode(["status" => "error", "message" => "Invalid YouTube link"]);
        exit;
    }

    // Check existing record
    $check = $conn->prepare("SELECT module_id FROM modules WHERE co_id=? AND topic_id=? AND learning_type='video' LIMIT 1");
    $check->bind_param("ii", $co_id, $topic_id);
    $check->execute();
    $res = $check->get_result();

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $module_id = $row['module_id'];

        $upd = $conn->prepare("UPDATE modules SET url=?, launch_id=?, created_at=NOW() WHERE module_id=?");
        $upd->bind_param("sii", $url, $launch_id, $module_id);
        $upd->execute();
        $upd->close();

        echo json_encode(["status" => "success", "message" => "YouTube link updated", "url" => $url]);
        exit;
    } else {
        $ins = $conn->prepare("INSERT INTO modules (launch_id, topic_id, co_id, learning_type, url) VALUES (?, ?, ?, 'video', ?)");
        $ins->bind_param("iiis", $launch_id, $topic_id, $co_id, $url);
        $ins->execute();
        $ins->close();

        echo json_encode(["status" => "success", "message" => "YouTube link saved", "url" => $url]);
        exit;
    }
}

// ✅ PDF upload logic continues below
// Check PDF upload
if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "No file uploaded"]);
    exit;
}

$file = $_FILES['file'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

// Only allow PDF
if ($learning_type === 'pdf' && $ext !== 'pdf') {
    echo json_encode(["status" => "error", "message" => "Invalid PDF file"]);
    exit;
}

// Upload directory
$upload_dir = __DIR__ . "/../../uploads/materials/";
if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

// New filename
$basename = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', pathinfo($file['name'], PATHINFO_FILENAME));
$new_name = $basename . "_" . time() . ".pdf";
$target = $upload_dir . $new_name;

// Move file
move_uploaded_file($file['tmp_name'], $target);

// DB save PDF
$check = $conn->prepare("SELECT module_id, url FROM modules WHERE co_id=? AND topic_id=? AND learning_type='pdf' LIMIT 1");
$check->bind_param("ii", $co_id, $topic_id);
$check->execute();
$res = $check->get_result();

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $old_file = $row['url'];
    $module_id = $row['module_id'];

    $upd = $conn->prepare("UPDATE modules SET url=?, launch_id=?, created_at=NOW() WHERE module_id=?");
    $upd->bind_param("sii", $new_name, $launch_id, $module_id);
    $upd->execute();

    if ($old_file && file_exists($upload_dir . $old_file)) unlink($upload_dir . $old_file);

    echo json_encode(["status" => "success", "message" => "PDF updated", "filename" => $new_name]);
    exit;
} else {
    $ins = $conn->prepare("INSERT INTO modules (launch_id, topic_id, co_id, learning_type, url) VALUES (?, ?, ?, 'pdf', ?)");
    $ins->bind_param("iiis", $launch_id, $topic_id, $co_id, $new_name);
    $ins->execute();

    echo json_encode(["status" => "success", "message" => "PDF uploaded", "filename" => $new_name]);
    exit;
}
?>
