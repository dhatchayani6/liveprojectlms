<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$faculty_id = $_SESSION['user_id'] ?? null;
$sub_id = intval($_GET['sub_id'] ?? 0);

if (!$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Unauthorized access"]);
    exit;
}

// 🔹 Fetch all assignments for this faculty
$sql = "
SELECT 
    s.sub_id,
    s.ass_id,
    s.student_id,
    s.context,
    s.file_url,
    s.marks_obtained,
    s.comments,
    s.submission_date,
    a.title AS assignment_title,
    a.due_date,
    a.marks,
    c.course_name,
    u.name AS student_name,
    u.reg_no,
    lc.faculty_id
FROM assignment_submissions s
JOIN assignments a ON s.ass_id = a.ass_id
JOIN launch_courses lc ON a.launch_id = lc.launch_id
JOIN courses c ON lc.course_id = c.course_id
JOIN users u ON s.student_id = u.user_id
WHERE lc.faculty_id = ?
ORDER BY s.submission_date ASC
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$res = $stmt->get_result();

$assignments = [];
$clicked = null;

while ($row = $res->fetch_assoc()) {
    $status = "On Time";
    if ($row['due_date'] && $row['submission_date'] > $row['due_date']) {
        $status = "Late";
    }

    $files = json_decode($row['file_url'] ?? "[]", true);

    $assignment = [
        "sub_id" => $row['sub_id'],
        "assignment_title" => $row['assignment_title'],
        "course_name" => $row['course_name'],
        "student_name" => $row['student_name'],
        "reg_no" => $row['reg_no'],
        "context" => $row['context'],
        "submission_date" => date("Y-m-d", strtotime($row['submission_date'])),
        "due_date" => date("Y-m-d", strtotime($row['due_date'])),
        "status" => $status,
        "marks_obtained" => $row['marks_obtained'],
        "comments" => $row['comments'],
        "marks" => $row['marks'],
        "file_urls" => $files
    ];

    // 🔸 Separate the clicked one
    if ($sub_id && $row['sub_id'] == $sub_id) {
        $clicked = $assignment;
    } else {
        $assignments[] = $assignment;
    }
}

// 🔹 Place clicked submission first
if ($clicked) {
    array_unshift($assignments, $clicked);
}

echo json_encode([
    "status" => 200,
    "data" => $assignments,
    "message" => $clicked ? "Highlighted submission first" : "All submissions loaded"
]);
?>
