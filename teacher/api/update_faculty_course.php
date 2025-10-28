<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../../includes/config.php"; // Contains $conn


// ✅ Validate login
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    echo json_encode(["status" => "error", "message" => "Unauthorized access."]);
    exit;
}

$faculty_id = intval($_SESSION['user_id']);

// ✅ Read and decode input
$input = json_decode(file_get_contents("php://input"), true);
if (!$input) {
    echo json_encode(["status" => "error", "message" => "Invalid JSON input."]);
    exit;
}

$launch_id = intval($input['launch_id'] ?? 0);
if ($launch_id <= 0) {
    echo json_encode(["status" => "error", "message" => "Missing launch_id."]);
    exit;
}

// ✅ Ensure faculty owns this launch
$chk = $conn->prepare("SELECT course_id FROM launch_courses WHERE launch_id = ? AND faculty_id = ?");
$chk->bind_param("ii", $launch_id, $faculty_id);
$chk->execute();
$res_chk = $chk->get_result();
if ($res_chk->num_rows === 0) {
    echo json_encode(["status" => "error", "message" => "You are not authorized to update this course."]);
    exit;
}
$row = $res_chk->fetch_assoc();
$course_id = $row['course_id'];
$chk->close();

// ✅ Extract sanitized input fields
$course_code = trim($input['course_code'] ?? '');
$course_name = trim($input['course_name'] ?? '');
$department = trim($input['department'] ?? '');
$credit_hours = trim($input['credit_hours'] ?? '');
$course_description = trim($input['course_description'] ?? '');
$schedule = trim($input['schedule'] ?? '');
$location = trim($input['location'] ?? '');
$prerequisites = trim($input['prerequisites'] ?? '');
$coordinator_name = trim($input['coordinator_name'] ?? '');
$email = trim($input['email'] ?? '');
$phone = trim($input['phone'] ?? '');

// ✅ 1️⃣ Update "courses" table
$update_course = $conn->prepare("
    UPDATE courses 
    SET 
        course_code = ?, 
        course_name = ?, 
        department = ?, 
        credit_hours = ?, 
        course_description = ?, 
        Schedule = ?, 
        Location = ?, 
        Prerequisites = ?
    WHERE course_id = ?
");
$update_course->bind_param(
    "ssssssssi",
    $course_code,
    $course_name,
    $department,
    $credit_hours,
    $course_description,
    $schedule,
    $location,
    $prerequisites,
    $course_id
);

if (!$update_course->execute()) {
    echo json_encode(["status" => "error", "message" => "Failed to update course details."]);
    exit;
}
$update_course->close();

// ✅ 2️⃣ Update "users" table for coordinator info
$update_user = $conn->prepare("
    UPDATE users 
    SET name = ?, email = ?, phone = ?
    WHERE user_id = ?
");
$update_user->bind_param("sssi", $coordinator_name, $email, $phone, $faculty_id);

if (!$update_user->execute()) {
    echo json_encode(["status" => "error", "message" => "Course updated, but failed to update coordinator details."]);
    exit;
}
$update_user->close();

echo json_encode([
    "status" => "success",
    "message" => "Course and coordinator details updated successfully."
]);

$conn->close();
?>
