<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


include "../../includes/config.php"; // DB connection

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    http_response_code(401);
    echo json_encode(["status" => "error", "message" => "Login required"]);
    exit;
}

$faculty_id = intval($_SESSION['user_id']);
$launch_id = intval($_POST['launch_id'] ?? 0);
$topic_title = trim($_POST['topic_title'] ?? '');
$topic_description = trim($_POST['topic_description'] ?? '');

if ($launch_id <= 0 || empty($topic_title) || empty($topic_description)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "All fields are required"]);
    exit;
}

// ✅ Verify ownership
$check = mysqli_query($conn, "SELECT 1 FROM launch_courses WHERE launch_id = $launch_id AND faculty_id = $faculty_id LIMIT 1");
if (!$check || mysqli_num_rows($check) === 0) {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Unauthorized access"]);
    exit;
}

// ✅ Insert new topic
$stmt = mysqli_prepare($conn, "INSERT INTO course_topic (topic_title, topic_description, launch_id) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssi", $topic_title, $topic_description, $launch_id);

if (mysqli_stmt_execute($stmt)) {
    http_response_code(200);
    echo json_encode(["status" => "success", "message" => "Topic added successfully"]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
