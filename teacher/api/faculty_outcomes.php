<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../../includes/config.php"; // $conn = mysqli_connect(...)

// --- Validate input ---
if (!isset($_GET['topic_id']) || trim($_GET['topic_id']) === '') {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Missing topic_id parameter"
    ]);
    exit;
}

$topic_id = intval($_GET['topic_id']);
if ($topic_id <= 0) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid topic_id"
    ]);
    exit;
}

// --- Optional: fetch launch_id for topic to verify faculty ownership (if logged in) ---
$launch_id = null;
$stmt = mysqli_prepare($conn, "SELECT launch_id FROM course_topic WHERE c_topic_id = ?");
if (!$stmt) {
    http_response_code(500);
    echo json_encode(["status"=>"error","message"=>"Prepare failed: ".mysqli_error($conn)]);
    exit;
}
mysqli_stmt_bind_param($stmt, "i", $topic_id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $launch_id_db);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);

if ($launch_id_db === null) {
    http_response_code(404);
    echo json_encode([
        "status" => "error",
        "message" => "Topic not found"
    ]);
    exit;
}
$launch_id = intval($launch_id_db);

// If a faculty is logged in, ensure they own the launch (prevents cross-faculty access)
if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'faculty') {
    $faculty_id = intval($_SESSION['user_id']);
    $chk = mysqli_prepare($conn, "SELECT 1 FROM launch_courses WHERE launch_id = ? AND faculty_id = ? LIMIT 1");
    if (!$chk) {
        http_response_code(500);
        echo json_encode(["status"=>"error","message"=>"Prepare failed: ".mysqli_error($conn)]);
        exit;
    }
    mysqli_stmt_bind_param($chk, "ii", $launch_id, $faculty_id);
    mysqli_stmt_execute($chk);
    mysqli_stmt_store_result($chk);
    $owns = mysqli_stmt_num_rows($chk) > 0;
    mysqli_stmt_close($chk);

    if (!$owns) {
        http_response_code(403);
        echo json_encode([
            "status" => "error",
            "message" => "Unauthorized: you do not have access to outcomes for this topic"
        ]);
        exit;
    }
}

// --- Fetch outcomes from course_outcome table ---
$sql = "SELECT co_id, co_level, course_description, po_level, po_description, topic_id, launch_id, created_at
        FROM course_outcome
        WHERE topic_id = ?
        ORDER BY created_at DESC, co_id DESC";

$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    http_response_code(500);
    echo json_encode(["status"=>"error","message"=>"Prepare failed: ".mysqli_error($conn)]);
    exit;
}

mysqli_stmt_bind_param($stmt, "i", $topic_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if ($result === false) {
    http_response_code(500);
    echo json_encode(["status"=>"error","message"=>"Query failed: ".mysqli_error($conn)]);
    mysqli_stmt_close($stmt);
    exit;
}

$outcomes = [];
while ($row = mysqli_fetch_assoc($result)) {
    $outcomes[] = [
        "co_id" => (int)$row['co_id'],
        "co_level" => $row['co_level'],
        "course_description" => $row['course_description'],
        "po_level" => $row['po_level'],
        "po_description" => $row['po_description'],
        "topic_id" => (int)$row['topic_id'],
        "launch_id" => (int)$row['launch_id'],
        "created_at" => $row['created_at']
    ];
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

http_response_code(200);
echo json_encode([
    "status" => "success",
    "message" => "Outcomes fetched",
    "data" => $outcomes
]);
exit;
