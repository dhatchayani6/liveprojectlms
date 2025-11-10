<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../../includes/config.php"; 

// ✅ Validate login
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    echo json_encode(["status" => "error", "message" => "Unauthorized access."]);
    exit;
}

$faculty_id = intval($_SESSION['user_id']);

// ✅ Read POST form data (not JSON)
$input = $_POST;

$launch_id = intval($input['launch_id'] ?? 0);
if ($launch_id <= 0) {
    echo json_encode(["status" => "error", "message" => "Missing launch_id."]);
    exit;
}

// ✅ Check if this course belongs to faculty
$chk = $conn->prepare("SELECT course_id FROM launch_courses WHERE launch_id = ? AND faculty_id = ?");
$chk->bind_param("ii", $launch_id, $faculty_id);
$chk->execute();
$res = $chk->get_result();
if ($res->num_rows === 0) {
    echo json_encode(["status" => "error", "message" => "You are not authorized to update this course."]);
    exit;
}
$row = $res->fetch_assoc();
$course_id = $row['course_id'];
$chk->close();

// ✅ Get input fields
$course_code        = trim($input['course_code'] ?? '');
$course_name        = trim($input['course_name'] ?? '');
$department         = trim($input['department'] ?? '');
$credit_hours       = trim($input['credit_hours'] ?? '');
$course_description = trim($input['course_description'] ?? '');
$schedule           = trim($input['schedule'] ?? '');
$location           = trim($input['location'] ?? '');
$prerequisites      = trim($input['prerequisites'] ?? '');
$coordinator_name   = trim($input['coordinator_name'] ?? '');
$email              = trim($input['email'] ?? '');
$phone              = trim($input['phone'] ?? '');

// ✅ Update course table
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
    $course_code, $course_name, $department, $credit_hours,
    $course_description, $schedule, $location, $prerequisites, $course_id
);

if (!$update_course->execute()) {
    echo json_encode(["status" => "error", "message" => "Failed to update course details."]);
    exit;
}
$update_course->close();

// ✅ Update coordinator info in users table
$update_user = $conn->prepare("
    UPDATE users 
    SET name = ?, email = ?, phone = ?
    WHERE user_id = ?
");
$update_user->bind_param("sssi", $coordinator_name, $email, $phone, $faculty_id);
$update_user->execute();
$update_user->close();


// ✅ Handle profile image upload (if provided)
if (isset($_FILES["profile_image"]) && $_FILES["profile_image"]["name"] != "") {

    $targetDir = "../../images/";

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = time() . "_" . basename($_FILES["profile_image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFilePath)) {
        
        // ✅ save only filename in DB
        $update_img = $conn->prepare("UPDATE users SET profile_image = ? WHERE user_id = ?");
        $update_img->bind_param("si", $fileName, $faculty_id);
        $update_img->execute();
        $update_img->close();
    }
}

// ✅ Final response
echo json_encode([
    "status" => "success",
    "message" => "Course, coordinator, and profile updated successfully."
]);

$conn->close();
?>
