<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? null;

$ass_id = intval($_GET['ass_id'] ?? 0);

if (!$student_id || !$ass_id) {
    echo json_encode(["status" => 400, "message" => "Missing student or assignment ID"]);
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
    s.context AS student_answer,
    s.file_url,
    s.submission_date,
    s.comments,
    s.marks_obtained,
    CASE
        WHEN s.comments IS NULL THEN 'submitted'
        ELSE 'feedback'
    END AS status
FROM assignments a
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN student_course_approval sca ON sca.launch_id = lc.launch_id
LEFT JOIN assignment_submissions s 
    ON s.ass_id = a.ass_id AND s.student_id = sca.student_id
WHERE a.ass_id = ? AND sca.student_id = ?
LIMIT 1
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $ass_id, $student_id);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 0) {
    echo json_encode(["status" => 404, "message" => "Assignment not found"]);
    exit;
}

$data = $res->fetch_assoc();

// Convert JSON file URLs into array
if (!empty($data['file_url'])) {
    $data['file_list'] = json_decode($data['file_url'], true);
} else {
    $data['file_list'] = [];
}

echo json_encode(["status" => 200, "data" => $data]);
