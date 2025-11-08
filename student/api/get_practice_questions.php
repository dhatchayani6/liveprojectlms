<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id = intval($_GET['topic_id'] ?? 0);
$co_id = intval($_GET['co_id'] ?? 0);

if (!$launch_id || !$topic_id || !$co_id) {
    echo json_encode(["status" => 400, "message" => "Missing parameters"]);
    exit;
}

$sql = "SELECT pq_id, question, options, answer 
        FROM practise_question 
        WHERE launch_id = ? AND topic_id = ? AND co_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();

$questions = [];
while ($row = $res->fetch_assoc()) {
    $row['options'] = json_decode($row['options'], true);
    unset($row['answer']); // Hide correct answer from student
    $questions[] = $row;
}

echo json_encode([
    "status" => 200,
    "data" => $questions
]);
?>
