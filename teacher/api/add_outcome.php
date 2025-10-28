<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../../includes/config.php";


if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    http_response_code(401);
    echo json_encode(["status" => "error", "message" => "Unauthorized access."]);
    exit;
}

$faculty_id = intval($_SESSION['user_id']);
$topic_id = intval($_POST['topic_id'] ?? 0);
$launch_id = intval($_POST['launch_id'] ?? 0);
$outcome_title = trim($_POST['outcome_title'] ?? '');
$course_description = trim($_POST['course_description'] ?? '');
$po_level = trim($_POST['po_level'] ?? '');
$po_description = trim($_POST['po_description'] ?? '');
$po_map = trim($_POST['po_Map'] ?? '');

// ✅ Validation
if ($topic_id <= 0 || $launch_id <= 0 || empty($outcome_title) || empty($course_description) || empty($po_level) || empty($po_description)) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "All fields are required."]);
    exit;
}

// ✅ Check topic ownership (ensure the topic belongs to the given launch_id and faculty)
$check = mysqli_query($conn, "
    SELECT 1 
    FROM course_topic ct
    JOIN launch_courses lc ON ct.launch_id = lc.launch_id
    WHERE ct.c_topic_id = $topic_id 
      AND lc.launch_id = $launch_id 
      AND lc.faculty_id = $faculty_id
    LIMIT 1
");

if (!$check || mysqli_num_rows($check) === 0) {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Unauthorized access or invalid launch/topic."]);
    exit;
}

// ✅ Use Outcome Title as CO Level directly (NO auto generation)
$co_level = $outcome_title;

// ✅ Insert new record
$stmt = mysqli_prepare($conn, "
    INSERT INTO course_outcome (launch_id, topic_id, co_level, course_description, po_level, po_mapping, po_description)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
mysqli_stmt_bind_param($stmt, "iisssss", $launch_id, $topic_id, $co_level, $course_description, $po_level, $po_map, $po_description);

if (mysqli_stmt_execute($stmt)) {
    echo json_encode([
        "status" => "success",
        "message" => "Outcome created successfully",
        "data" => [
            "launch_id" => $launch_id,
            "topic_id" => $topic_id,
            "co_level" => $co_level,
            "po_level" => $po_level
        ]
    ]);
} else {
    http_response_code(500);
    echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
