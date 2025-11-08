<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? null;
$launch_id = intval($_GET['launch_id'] ?? 0);

if (!$student_id || !$launch_id) {
    echo json_encode(["status" => 400, "message" => "Invalid access"]);
    exit;
}

/*
    🎯 Fetch all course topics + outcomes for this launch_id
    and join each with their modules, practise_questions, and assignments.
*/

$sql = "
SELECT 
    ct.c_topic_id AS topic_id,
    ct.topic_title,
    ct.topic_description,
    co.co_id,
    co.co_level,
    co.course_description AS co_description,
    co.po_level,
    co.po_description,
    co.po_mapping,

    -- Count total modules for progress
    (SELECT COUNT(*) FROM modules m WHERE m.co_id = co.co_id AND m.launch_id = ?) AS total_modules,
    -- Count completed modules by student
    (SELECT COUNT(*) FROM student_chapter_progress scp 
        JOIN modules m ON scp.module_id = m.module_id
        WHERE scp.student_id = ? AND scp.launch_id = ? AND m.co_id = co.co_id
    ) AS completed_modules

FROM course_topic ct
LEFT JOIN course_outcome co ON ct.c_topic_id = co.topic_id
WHERE ct.launch_id = ?
ORDER BY ct.c_topic_id, co.co_id
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiii", $launch_id, $student_id, $launch_id, $launch_id);
$stmt->execute();
$res = $stmt->get_result();

$data = [];
while ($row = $res->fetch_assoc()) {
    $co_id = $row['co_id'];

    // Fetch Modules
    $mod_sql = "SELECT module_id, learning_type, url FROM modules WHERE co_id=? AND launch_id=?";
    $mod_stmt = $conn->prepare($mod_sql);
    $mod_stmt->bind_param("ii", $co_id, $launch_id);
    $mod_stmt->execute();
    $modules = $mod_stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    // Fetch Practise Questions
    $pq_sql = "SELECT pq_id, question, options, answer FROM practise_question WHERE co_id=? AND launch_id=?";
    $pq_stmt = $conn->prepare($pq_sql);
    $pq_stmt->bind_param("ii", $co_id, $launch_id);
    $pq_stmt->execute();
    $pquestions = $pq_stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    // Fetch Assignments
    $ass_sql = "SELECT ass_id, title, instruction, due_date, notes, marks FROM assignments WHERE co_id=? AND launch_id=?";
    $ass_stmt = $conn->prepare($ass_sql);
    $ass_stmt->bind_param("ii", $co_id, $launch_id);
    $ass_stmt->execute();
    $assignments = $ass_stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    // Calculate progress
    $progress = 0;
    if ($row['total_modules'] > 0) {
        $progress = round(($row['completed_modules'] / $row['total_modules']) * 100, 1);
    }

    $data[] = [
        "topic_id" => $row['topic_id'],
        "topic_title" => $row['topic_title'],
        "topic_description" => $row['topic_description'],
        "co_id" => $row['co_id'],
        "co_level" => $row['co_level'],
        "co_description" => $row['co_description'],
        "po_level" => $row['po_level'],
        "po_description" => $row['po_description'],
        "po_mapping" => $row['po_mapping'],
        "progress" => $progress,
        "modules" => $modules,
        "practise_questions" => $pquestions,
        "assignments" => $assignments
    ];
}

echo json_encode([
    "status" => 200,
    "launch_id" => $launch_id,
    "student_id" => $student_id,
    "data" => $data
]);
?>
