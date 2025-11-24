<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id  = intval($_GET['launch_id'] ?? 0);
$topic_id   = intval($_GET['topic_id'] ?? 0);
$student_id = intval($_GET['student_id'] ?? 0);
$co_id      = $_GET['co_id'] ?? "";

$sql = "SELECT pq.pq_id, pq.question, pq.options, pq.answer,
               pa.selected_answer, pa.is_correct
        FROM practise_question pq
        LEFT JOIN practise_answer pa
        ON pa.pq_id = pq.pq_id AND pa.student_id = ?
        WHERE pq.launch_id = ? AND pq.topic_id = ? AND pq.co_id = ?
        ORDER BY pq.pq_id ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiis", $student_id, $launch_id, $topic_id, $co_id);
$stmt->execute();

$res = $stmt->get_result();
$data = [];
$total = 0; $correct = 0;

while ($row = $res->fetch_assoc()) {
    $row["options"] = json_decode($row["options"], true);
    $data[] = $row;
    $total++;
    if ($row["is_correct"] == 1) $correct++;
}

$score = $total > 0 ? round(($correct / $total) * 100) : 0;

echo json_encode([
    "status" => 200,
    "data" => $data,
    "score" => $score
]);
?>
