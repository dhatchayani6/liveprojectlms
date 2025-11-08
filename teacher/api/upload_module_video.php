<?php
// api/upload_module.php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");

include "../../includes/config.php"; // adjust path if needed

// ✅ Required POST fields
$launch_id = intval($_POST['launch_id'] ?? 0);
$topic_id  = intval($_POST['topic_id'] ?? 0);
$co_id     = intval($_POST['co_id'] ?? 0);
$learning_type = trim($_POST['learning_type'] ?? '');

if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0 || $learning_type === '') {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Missing required fields."]);
    exit;
}

// ✅ Validate uploaded file
if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "No file uploaded or upload error."]);
    exit;
}

$file = $_FILES['file'];
$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

$allowed_pdf = ['pdf'];
$allowed_video = ['mp4', 'mov', 'avi', 'mkv', 'webm'];

if ($learning_type === 'pdf' && !in_array($ext, $allowed_pdf)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid PDF file type."]);
    exit;
}
if ($learning_type === 'video' && !in_array($ext, $allowed_video)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid video file type."]);
    exit;
}

// ✅ Limit file size to 1GB
$maxSize = 1024 * 1024 * 1024; // 1GB
if ($file['size'] > $maxSize) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "File exceeds 1GB upload limit."]);
    exit;
}

// ✅ Upload directory (one level above teacher/)
$upload_dir_fs = __DIR__ . "/../../uploads/materials/";
if (!is_dir($upload_dir_fs)) {
    if (!mkdir($upload_dir_fs, 0777, true)) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Failed to create upload directory."]);
        exit;
    }
}

// ✅ Generate safe unique filename
$basename = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', pathinfo($file['name'], PATHINFO_FILENAME));
$new_name = $basename . "_" . time() . "." . $ext;
$target_path = $upload_dir_fs . $new_name;

// ✅ Safe move function for large files
function moveLargeFile($source, $destination) {
    $input = fopen($source, 'rb');
    if (!$input) return false;

    $output = fopen($destination, 'wb');
    if (!$output) {
        fclose($input);
        return false;
    }

    while (!feof($input)) {
        $buffer = fread($input, 1048576); // 1MB chunks
        if ($buffer === false) break;
        fwrite($output, $buffer);
    }

    fclose($input);
    fclose($output);

    return file_exists($destination);
}

// ✅ Move uploaded file safely
if (!moveLargeFile($file['tmp_name'], $target_path)) {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => "Failed to move uploaded file."]);
    exit;
}

// ✅ Only store filename in DB
$db_filename = $new_name;

// ✅ Check existing record (unique by co_id + topic_id + learning_type)
$check_sql = "SELECT module_id, url FROM modules WHERE co_id = ? AND topic_id = ? AND learning_type = ? LIMIT 1";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("iis", $co_id, $topic_id, $learning_type);
$check_stmt->execute();
$check_res = $check_stmt->get_result();

if ($check_res->num_rows > 0) {
    // Update existing
    $row = $check_res->fetch_assoc();
    $module_id = intval($row['module_id']);
    $old_file = $row['url']; // only filename

    $upd = $conn->prepare("UPDATE modules SET url = ?, launch_id = ?, created_at = CURRENT_TIMESTAMP WHERE module_id = ?");
    $upd->bind_param("sii", $db_filename, $launch_id, $module_id);
    $ok = $upd->execute();
    $upd->close();

    // Remove old file if exists
    if ($old_file) {
        $old_path = $upload_dir_fs . $old_file;
        if (file_exists($old_path)) @unlink($old_path);
    }

    $check_stmt->close();
    $conn->close();

    if ($ok) {
        echo json_encode([
            "status" => "success",
            "message" => "Material updated successfully.",
            "filename" => $db_filename,
            "module_id" => $module_id
        ]);
    } else {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Database update failed."]);
    }
    exit;
} else {
    // Insert new record
    $ins = $conn->prepare("INSERT INTO modules (launch_id, topic_id, co_id, learning_type, url) VALUES (?, ?, ?, ?, ?)");
    $ins->bind_param("iiiss", $launch_id, $topic_id, $co_id, $learning_type, $db_filename);
    $ok = $ins->execute();
    $new_id = $conn->insert_id;
    $ins->close();
    $check_stmt->close();
    $conn->close();

    if ($ok) {
        echo json_encode([
            "status" => "success",
            "message" => "Material uploaded successfully.",
            "filename" => $db_filename,
            "module_id" => $new_id
        ]);
    } else {
        if (file_exists($target_path)) @unlink($target_path);
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Database insert failed."]);
    }
    exit;
}
?>
