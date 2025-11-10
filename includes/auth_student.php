<?php

include "config.php";

// ✅ Block access if user not logged in or not faculty
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: ../index.php");
    exit;
}

$student_id = $_SESSION['user_id'];
$department = "N/A";

// Enable MySQLi exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $sql = "SELECT * FROM users WHERE user_id = ? ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $department = $row['department'] ?? "N/A";
        $profile = $row['profile_image'] ?? "image.png";
    }

    $stmt->close();

} catch (Exception $e) {
    error_log("Error fetching faculty profile: " . $e->getMessage());
    $department = "N/A";
    $profile = "image.png";
}
?>
