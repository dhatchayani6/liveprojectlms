<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id  = intval($_GET['launch_id'] ?? 0);
$topic_id   = intval($_GET['topic_id'] ?? 0);
$student_id = intval($_GET['student_id'] ?? 0);
$co_id      = $_GET['co_id'] ?? "";

$sql = "SELECT COUNT(*) as attempt_count,
               COALESCE(AVG(is_correct) * 100, 0) as score
        FROM practise_answer pa
        JOIN practise_question pq ON pa.pq_id = pq.pq_id
        WHERE pa.student_id = ? AND pq.topic_id = ? AND pq.launch_id = ? AND pq.co_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiis", $student_id, $topic_id, $launch_id, $co_id);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();

echo json_encode([
    "attempted" => $res['attempt_count'] > 0,
    "score" => intval($res['score'])
]);
?>
