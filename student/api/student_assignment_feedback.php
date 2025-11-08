<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$student_id = $_SESSION['user_id'] ?? null;
// $student_id = 1; // Uncomment for testing
$ass_id = intval($_GET['ass_id'] ?? 0);

if (!$student_id || !$ass_id) {
    echo json_encode(["status" => 400, "message" => "Invalid request"]);
    exit;
}

$sql = "
SELECT 
    a.ass_id,
    a.title AS assignment_title,
    a.instruction,
    a.notes,
    a.due_date,
    c.course_name,
    s.sub_id,
    s.context AS student_answer,
    s.file_url,
    s.submission_date,
    s.marks_obtained,
    s.comments AS faculty_feedback
FROM assignments a
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
LEFT JOIN assignment_submissions s ON a.ass_id = s.ass_id AND s.student_id = ?
WHERE a.ass_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $student_id, $ass_id);
$stmt->execute();
$res = $stmt->get_result();

if (!$res->num_rows) {
    echo json_encode(["status" => 404, "message" => "Assignment not found"]);
    exit;
}

$row = $res->fetch_assoc();

$file_urls = json_decode($row['file_url'] ?? "[]", true);
$data = [
    "ass_id" => $row['ass_id'],
    "assignment_title" => $row['assignment_title'],
    "instruction" => $row['instruction'],
    "notes" => $row['notes'],
    "course_name" => $row['course_name'],
    "due_date" => date("Y-m-d", strtotime($row['due_date'])),
    "student_answer" => $row['student_answer'],
    "submission_date" => $row['submission_date'] ? date("Y-m-d", strtotime($row['submission_date'])) : "Not Available",
    "marks_obtained" => $row['marks_obtained'],
    "faculty_feedback" => $row['faculty_feedback'],
    "file_urls" => $file_urls
];

echo json_encode(["status" => 200, "data" => $data]);
?>
