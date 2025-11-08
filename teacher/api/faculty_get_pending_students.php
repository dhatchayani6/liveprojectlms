<?php

header("Content-Type: application/json; charset=UTF-8");

include "../../includes/config.php"; 

$faculty_id = $_SESSION['user_id'] ?? null;


if (!$faculty_id) {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

$sql = "
SELECT 
    sca.approval_id,
    sca.student_id,
    sca.status,
    sca.created_at,
    lc.launch_id,
    lc.course_id,
    lc.seat_allotment,
    c.course_code,
    c.course_name,
    lc.slot,
    c.department,
    u.name AS student_name,
    u.reg_no AS reg_no
FROM student_course_approval sca
JOIN launch_courses lc ON sca.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN users u ON sca.student_id = u.user_id
WHERE lc.faculty_id = ? AND sca.status = 'pending'
ORDER BY sca.created_at ASC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$res = $stmt->get_result();

$data = [];
while ($row = $res->fetch_assoc()) {
    // get how many already approved in this launch
    $countQuery = $conn->prepare("SELECT COUNT(*) AS approved_count FROM student_course_approval WHERE launch_id = ? AND status = 'approved'");
    $countQuery->bind_param("i", $row['launch_id']);
    $countQuery->execute();
    $countRes = $countQuery->get_result()->fetch_assoc();
    $row['approved_count'] = $countRes['approved_count'] ?? 0;
    $row['remaining_seats'] = max(0, $row['seat_allotment'] - $row['approved_count']);
    $data[] = $row;
}

echo json_encode(["status" => 200, "data" => $data]);
?>