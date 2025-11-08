<?php
// api/faculty_pending_count.php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php"; 

$faculty_id = $_SESSION['user_id'] ?? null;

if (!$faculty_id) {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

// Count all pending student approvals for faculty's courses
$sql = "
SELECT COUNT(*) AS pending_count
FROM student_course_approval sca
JOIN launch_courses lc ON sca.launch_id = lc.launch_id
WHERE lc.faculty_id = ? AND sca.status = 'pending'
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();

$count = $res['pending_count'] ?? 0;

echo json_encode([
    "status" => 200,
    "pending_count" => intval($count)
]);
