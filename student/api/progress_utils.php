<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? 0;
$launch_id  = $_POST['launch_id'] ?? 0;

if (!$student_id || !$launch_id) {
    echo json_encode(["status"=>400,"message"=>"Missing launch_id / student"]);
    exit;
}

try {
    // ✅ Course Progress
    $sqlCourse = "SELECT course_percent FROM student_course_progress 
                  WHERE student_id=? AND launch_id=?";
    $stmt = $conn->prepare($sqlCourse);
    $stmt->bind_param("ii", $student_id, $launch_id);
    $stmt->execute();
    $courseRow = $stmt->get_result()->fetch_assoc();
    $course_progress = intval($courseRow['course_percent'] ?? 0);
    $stmt->close();

    // ✅ Topic Progress list
    $sqlTopic = "SELECT module_id AS topic_id, chapter_percent 
                 FROM student_chapter_progress
                 WHERE student_id=? AND launch_id=?";
    $stmt = $conn->prepare($sqlTopic);
    $stmt->bind_param("ii", $student_id, $launch_id);
    $stmt->execute();
    $topicData = [];

    $res = $stmt->get_result();
    while ($row = $res->fetch_assoc()) {
        $topicData[] = [
            "topic_id" => $row['topic_id'],
            "progress" => intval($row['chapter_percent'])
        ];
    }
    $stmt->close();

    echo json_encode([
        "status" => 200,
        "course_progress" => $course_progress,
        "topics" => $topicData
    ]);

} catch (Exception $e) {
    echo json_encode(["status"=>500,"message"=>$e->getMessage()]);
}
