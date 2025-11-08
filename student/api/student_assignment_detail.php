<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";



$student_id = $_SESSION['user_id'] ?? null;
// $student_id = 1; // Uncomment for local testing
$ass_id = intval($_GET['ass_id'] ?? 0);

if (!$student_id || !$ass_id) {
    echo json_encode(["status" => 400, "message" => "Missing parameters"]);
    exit;
}

$sql = "
SELECT 
    a.ass_id,
    a.title,
    a.instruction,
    a.notes,
    a.due_date,
    c.course_name,
    c.course_code,
    ct.topic_title,
    ct.topic_description,
    COALESCE(s.context, '') AS submitted_text,
    COALESCE(s.file_url, '') AS file_url,
    COALESCE(s.marks_obtained, '') AS marks_obtained,
    COALESCE(s.comments, '') AS comments,
    CASE 
        WHEN s.sub_id IS NULL THEN 'pending'
        WHEN s.sub_id IS NOT NULL AND s.comments IS NULL THEN 'submitted'
        WHEN s.sub_id IS NOT NULL AND s.comments IS NOT NULL THEN 'feedback'
    END AS status
FROM assignments a
JOIN course_topic ct ON a.topic_id = ct.c_topic_id
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN student_course_approval sca 
    ON sca.launch_id = lc.launch_id AND sca.student_id = ?
LEFT JOIN assignment_submissions s 
    ON s.ass_id = a.ass_id AND s.student_id = sca.student_id
WHERE a.ass_id = ?
LIMIT 1
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $student_id, $ass_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(["status" => 404, "message" => "Assignment not found"]);
    exit;
}

$data = $result->fetch_assoc();
echo json_encode(["status" => 200, "data" => $data]);
?>