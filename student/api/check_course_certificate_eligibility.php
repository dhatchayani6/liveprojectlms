<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$student_id = $_SESSION['user_id'] ?? 0;
$launch_id  = intval($_POST['launch_id'] ?? 0);

if (!$student_id || !$launch_id) {
    echo json_encode(["status"=>400, "eligible"=>false, "msg"=>"Missing data"]);
    exit;
}

// ✅ Check course progress
$sqlCourse = $conn->prepare("
    SELECT course_percent 
    FROM student_course_progress 
    WHERE student_id=? AND launch_id=?
");
$sqlCourse->bind_param("ii", $student_id, $launch_id);
$sqlCourse->execute();
$row = $sqlCourse->get_result()->fetch_assoc();
$course_percent = intval($row["course_percent"] ?? 0);
$course_done = ($course_percent >= 100);

// ✅ Check assignments progress
$sqlAssign = $conn->prepare("
    SELECT COUNT(a.ass_id) AS total_assignments,
           SUM(CASE WHEN s.marks_obtained IS NOT NULL THEN 1 ELSE 0 END) AS completed_assignments
    FROM assignments a
    LEFT JOIN assignment_submissions s 
      ON a.ass_id = s.ass_id AND s.student_id = ?
    WHERE a.launch_id = ?
");
$sqlAssign->bind_param("ii", $student_id, $launch_id);
$sqlAssign->execute();
$a = $sqlAssign->get_result()->fetch_assoc();

$total     = intval($a['total_assignments']);
$completed = intval($a['completed_assignments']);
$assign_done = ($total === 0 || $completed >= $total);

// ✅ Decide message
if ($course_done && $assign_done) {
    echo json_encode(["status"=>200, "eligible"=>true, "msg"=>"Congratulations! You can now download your certificate."]);
    exit;
}

if (!$course_done && $assign_done) {
    echo json_encode(["status"=>200, "eligible"=>false, "msg"=>"Complete all learning materials to unlock certificate."]);
    exit;
}

if ($course_done && !$assign_done) {
    echo json_encode(["status"=>200, "eligible"=>false, "msg"=>"Complete all assignments to unlock certificate."]);
    exit;
}

// default: both pending
echo json_encode(["status"=>200, "eligible"=>false, "msg"=>"Complete your lessons & assignments to unlock certificate."]);
