<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../includes/config.php";


// Decode JSON input
$input = json_decode(file_get_contents("php://input"), true);

$emailOrRegNo = trim($input['email'] ?? '');
$pass = trim($input['password'] ?? '');

// Remove whitespace inside the string also
$emailOrRegNo = preg_replace('/\s+/', '', $emailOrRegNo);

// Validate input
if (empty($emailOrRegNo) || empty($pass)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Email/Reg No and password are required"
    ]);
    exit;
}

// Secure input
$email_safe = mysqli_real_escape_string($conn, $emailOrRegNo);

// ✅ Query: match either email or registration no, remove whitespace in DB email also
$sql = "SELECT user_id, name, REPLACE(email, ' ', '') AS email, password_hash, user_type, reg_no, is_active 
        FROM users 
        WHERE REPLACE(email, ' ', '')='$email_safe' 
           OR reg_no='$email_safe'
        LIMIT 1";

$result = mysqli_query($conn, $sql);

// Check user exists
if (!$result || mysqli_num_rows($result) === 0) {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email/reg no or password"
    ]);
    exit;
}

$user = mysqli_fetch_assoc($result);

// Account active?
if ($user['is_active'] == 0) {
    http_response_code(403);
    echo json_encode([
        "status" => "error",
        "message" => "Account is deactivated. Contact administrator."
    ]);
    exit;
}

// Compare plain password
if ($pass !== $user['password_hash']) {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email/reg no or password"
    ]);
    exit;
}

// Redirect
$redirectMap = [
    "admin"   => "admin/courses.php",
    "faculty" => "teacher/dashboard.php",
    "student" => "student/dashboard.php"
];

$role = strtolower($user['user_type']);
$redirectUrl = $redirectMap[$role] ?? "/";

$_SESSION['user_id']  = $user['user_id'];
$_SESSION['role']     = $role;
$_SESSION['name']     = $user['name'];
$_SESSION['regno']    = $user['reg_no'];

// Success
http_response_code(200);
echo json_encode([
    "status"  => "success",
    "message" => "Login successful",
    "data"    => [
        "user_id" => $user['user_id'],
        "name"    => $user['name'],
        "email"   => $user['email'],
        "role"    => $role,
        "reg_no"  => $user['reg_no']
    ],
    "redirect" => $redirectUrl
]);

mysqli_close($conn);
?>
