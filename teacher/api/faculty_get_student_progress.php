<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = $_GET['launch_id'] ?? 0;
$faculty_id = $_SESSION['user_id'] ?? 0;

if (!$launch_id || !$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Missing launch_id or faculty"]);
    exit;
}

// ✅ Get all approved students for this course launch
$sql = "
    SELECT 
        u.user_id,
        u.name,
        u.email,
        u.reg_no,
        COALESCE(scp.course_percent, 0) AS progress
    FROM student_course_approval sca
    JOIN users u ON sca.student_id = u.user_id
    LEFT JOIN student_course_progress scp 
        ON scp.student_id = u.user_id AND scp.launch_id = sca.launch_id
    WHERE sca.launch_id = ? AND sca.status = 'approved'
    ORDER BY u.name ASC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $launch_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = [
        "student_id" => $row["user_id"],
        "name" => $row["name"],
        "email" => $row["email"],
        "reg_no" => $row["reg_no"],
        "progress" => intval($row["progress"]),
        "attendance" => rand(80, 100) // placeholder — connect later
    ];
}

echo json_encode(["status" => 200, "students" => $data]);
