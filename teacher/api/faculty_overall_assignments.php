<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$faculty_id = $_SESSION['user_id'] ?? null;

if (!$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Unauthorized access"]);
    exit;
}


$sql = "
SELECT 
    s.sub_id,
    s.ass_id,
    s.student_id,
    s.submission_date,
    s.marks_obtained,
    u.name AS student_name,
    u.reg_no AS reg_no,
    a.title AS assignment_title,
    a.due_date,
    c.course_name
FROM assignment_submissions s
JOIN assignments a ON s.ass_id = a.ass_id
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN users u ON s.student_id = u.user_id
WHERE lc.faculty_id = ?
ORDER BY s.submission_date DESC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$result = $stmt->get_result();

$assignments = [];
while ($row = $result->fetch_assoc()) {
    // Calculate on-time / late
    $status = "On Time";
    if ($row['due_date'] && $row['submission_date'] > $row['due_date']) {
        $status = "Late";
    }

    $assignments[] = [
        "sub_id" => $row['sub_id'],
        "assignment_title" => $row['assignment_title'],
        "course_name" => $row['course_name'],
        "student_name" => $row['student_name'],
        "reg_no" => $row['reg_no'],
        "submission_date" => date("Y-m-d", strtotime($row['submission_date'])),
        "status" => $status,
        "marks_obtained" => $row['marks_obtained']
    ];
}

echo json_encode([
    "status" => 200,
    "data" => $assignments
]);
