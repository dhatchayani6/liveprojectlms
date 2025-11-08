<?php
// api/student_assignments.php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? null;
// $student_id = 1; // for testing

if (!$student_id) {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

/*
We need all assignments from launch_courses where student is approved,
plus submission info (if exists).
*/
$sql = "
SELECT 
    a.ass_id,
    a.title,
    a.instruction,
    a.due_date,
    c.course_name,
    c.course_code,
    a.launch_id,
    COALESCE(s.marks_obtained, 0) AS marks_obtained,
    s.comments,
    s.marks_obtained,
    CASE 
        WHEN s.sub_id IS NULL THEN 'pending'
        WHEN s.sub_id IS NOT NULL AND s.comments IS NULL THEN 'submitted'
        WHEN s.sub_id IS NOT NULL AND s.comments IS NOT NULL THEN 'feedback'
    END AS status
FROM assignments a
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN student_course_approval sca ON sca.launch_id = lc.launch_id
LEFT JOIN assignment_submissions s 
       ON s.ass_id = a.ass_id AND s.student_id = sca.student_id
WHERE sca.student_id = ? AND sca.status = 'approved'
ORDER BY a.due_date ASC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_id);
$stmt->execute();
$res = $stmt->get_result();

$assignments = [];
while ($row = $res->fetch_assoc()) {
    $assignments[] = $row;
}

echo json_encode(["status" => 200, "data" => $assignments]);
