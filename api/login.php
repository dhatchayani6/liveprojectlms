<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *"); // allow mobile & web
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

include "../includes/config.php"; // contains $conn = mysqli_connect(...);

// Decode JSON input
$input = json_decode(file_get_contents("php://input"), true);
$email = trim($input['email'] ?? '');
$pass = trim($input['password'] ?? '');

// Validate input
if (empty($email) || empty($pass)) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Email and password are required"
    ]);
    exit;
}

// Secure input
$email_safe = mysqli_real_escape_string($conn, $email);
$sql = "SELECT user_id, name, email, password_hash, user_type, reg_no, is_active 
        FROM users 
        WHERE email='$email_safe' LIMIT 1";
$result = mysqli_query($conn, $sql);

// Check if user exists
if (!$result || mysqli_num_rows($result) === 0) {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email or password"
    ]);
    exit;
}

$user = mysqli_fetch_assoc($result);

// Check if account active
if ($user['is_active'] == 0) {
    http_response_code(403);
    echo json_encode([
        "status" => "error",
        "message" => "Account is deactivated. Contact administrator."
    ]);
    exit;
}

// Compare plain text password
if ($pass !== $user['password_hash']) {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid email or password"
    ]);
    exit;
}


// Role-based redirect
$redirectMap = [
    "admin"   => "admin/dashboard.php",
    "faculty" => "teacher/dashboard.php",
    "student" => "student/dashboard.php"
];

$role = strtolower($user['user_type']);
$redirectUrl = $redirectMap[$role] ?? "/";

$_SESSION['user_id'] = $user['user_id'];
$_SESSION['role'] = $role;
$_SESSION['name'] = $user['name'];
$_SESSION['regno'] = $user['reg_no'];

// ✅ Successful login response
http_response_code(200);
echo json_encode([
    "status" => "success",
    "message" => "Login successful",
    "data" => [
        "user_id" => $user['user_id'],
        "name"    => $user['name'],
        "email"   => $user['email'],
        "role"    => $role
    ],
    "redirect" => $redirectUrl
]);

mysqli_close($conn);
?>
