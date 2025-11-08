<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = $_GET['launch_id'] ?? 0;
$student_id = $_SESSION['user_id'] ?? 0;

if (!$launch_id || !$student_id) {
    echo json_encode(["status" => 400, "message" => "Missing launch_id or user"]);
    exit;
}

// ✅ Get Course Info
$courseSql = "
    SELECT c.course_code, c.course_name, c.course_description
    FROM launch_courses lc
    INNER JOIN courses c ON lc.course_id = c.course_id
    WHERE lc.launch_id = ?
";
$stmt = $conn->prepare($courseSql);
$stmt->bind_param("i", $launch_id);
$stmt->execute();
$course = $stmt->get_result()->fetch_assoc();
$stmt->close();

// ✅ Get Topics (no progress)
$topicsSql = "
    SELECT c_topic_id, topic_title, topic_description
    FROM course_topic
    WHERE launch_id = ?
    ORDER BY c_topic_id ASC
";
$stmt = $conn->prepare($topicsSql);
$stmt->bind_param("i", $launch_id);
$stmt->execute();
$res = $stmt->get_result();

$topics = [];
while ($row = $res->fetch_assoc()) {
    $topics[] = [
        "topic_id" => $row['c_topic_id'],
        "title" => $row['topic_title'],
        "description" => $row['topic_description']
    ];
}
$stmt->close();

echo json_encode([
    "status" => 200,
    "course" => $course,
    "data" => $topics
]);
