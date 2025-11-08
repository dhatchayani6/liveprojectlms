<?php
include "../../includes/config.php";

// Prefer session-stored student ID
$student_id = $_SESSION['user_id'] ?? null;
if (!$student_id) {
    http_response_code(401);
    echo json_encode(["status"=>401, "message"=>"Login required"]);
    exit;
}


$slot = $_GET['slot'] ?? '';
if (empty($slot)) {
    echo json_encode(["status" => 400, "message" => "Slot missing"]);
    exit;
}

$sql = "
SELECT 
    lc.launch_id,
    lc.course_id,
    c.course_code,
    c.course_name,
    u.name,
    lc.faculty_id,
    lc.seat_allotment,
    COALESCE(sca.status, 'none') AS approval_status
FROM launch_courses lc
JOIN courses c ON lc.course_id = c.course_id
LEFT JOIN student_course_approval sca 
  ON sca.launch_id = lc.launch_id AND sca.student_id = ?
LEFT JOIN users u ON lc.faculty_id = u.user_id
WHERE lc.slot = ?
ORDER BY c.course_code ASC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $student_id, $slot);
$stmt->execute();
$res = $stmt->get_result();

$data = [];
while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode(["status" => 200, "data" => $data]);
