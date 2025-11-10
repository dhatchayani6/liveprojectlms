<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$data = json_decode(file_get_contents("php://input"), true);

$course_id = intval($data['course_id']);
$seat      = intval($data['seat_allotment']);
$faculty   = intval($data['faculty_id']);
$slot      = trim($data['slot']);

if(!$course_id || !$seat || !$faculty || !$slot){
    echo json_encode(["status"=>false,"message"=>"All fields required"]);
    exit;
}

try {
    $stmt = $conn->prepare("INSERT INTO launch_courses(course_id, code, seat_allotment, faculty_id, slot)
                            SELECT course_id, course_code, ?, ?, ? FROM courses WHERE course_id = ?");
    $stmt->bind_param("iisi", $seat, $faculty, $slot, $course_id);
    $stmt->execute();

    echo json_encode(["status" => true, "message" => "Course launched successfully"]);

} catch(Exception $e){
    echo json_encode(["status"=>false,"message"=>$e->getMessage()]);
}
?>
