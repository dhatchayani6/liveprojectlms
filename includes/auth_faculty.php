<?php

include "config.php";

// ✅ Block access if user not logged in or not faculty
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    header("Location: ../index.php");
    exit;
}

$faculty_id = $_SESSION['user_id'];
$department = "N/A";

// Enable MySQLi exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $sql = "
        SELECT c.department, u.profile_image
        FROM users u
        INNER JOIN launch_courses lc ON lc.faculty_id = u.user_id 
        LEFT JOIN courses c ON c.course_id = lc.course_id 
        WHERE lc.faculty_id = ?
        LIMIT 1
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $faculty_id);
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
