<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


include "../../includes/config.php";

// Get POST data
$reg_no = $_POST['reg_no'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$name = $_POST['name'] ?? '';

// Validate
if (!$reg_no || !$email || !$mobile || !$name) {
    echo json_encode([
        "status" => "error",
        "message" => "All fields are required."
    ]);
    exit();
}

// Check if user already exists
$check = $conn->prepare("
    SELECT user_id FROM users 
    WHERE reg_no = ? OR email = ? OR phone = ?
");
$check->bind_param("sss", $reg_no, $email, $mobile);
$check->execute();
$check_result = $check->get_result();

if ($check_result->num_rows > 0) {
    echo json_encode([
        "status" => "exists",
        "message" => "A student with this Register No or Email already exists!"
    ]);
    exit();
}

$pwd = "welcome";
$utype = "student";
$img = "image.png";

$stmt = $conn->prepare("
    INSERT INTO users (reg_no, email, phone, name, password_hash, user_type, profile_image)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param("sssssss", $reg_no, $email, $mobile, $name, $pwd, $utype, $img);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "success",
        "message" => "Student added successfully!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Database error: " . $stmt->error
    ]);
}

$conn->close();
?>
