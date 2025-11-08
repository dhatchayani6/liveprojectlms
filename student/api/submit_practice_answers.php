<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$input = json_decode(file_get_contents("php://input"), true);

$student_id = $_SESSION['user_id'] ?? 0;
$app_id = 1; // your valid app id
$answers = $input['answers'] ?? [];

if (!$student_id || empty($answers)) {
    echo json_encode(["status" => 400, "message" => "Invalid input"]);
    exit;
}

$correct = 0;
$total = count($answers);

foreach ($answers as $a) {
    $pq_id = intval($a['pq_id']);
    $selected = $a['selected_answer'];

    // Get correct answer
    $stmt = $conn->prepare("SELECT answer FROM practise_question WHERE pq_id = ?");
    $stmt->bind_param("i", $pq_id);
    $stmt->execute();
    $res = $stmt->get_result()->fetch_assoc();

    $is_correct = ($res && strtoupper($res['answer']) === strtoupper($selected)) ? 1 : 0;
    if ($is_correct) $correct++;

    // Insert answer
    $insert = $conn->prepare("
        INSERT INTO practise_answer (pq_id, student_id, selected_answer, is_correct, app_id)
        VALUES (?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE 
            selected_answer = VALUES(selected_answer),
            is_correct = VALUES(is_correct),
            created_at = CURRENT_TIMESTAMP
    ");
    $insert->bind_param("iisii", $pq_id, $student_id, $selected, $is_correct, $app_id);
    $insert->execute();
}

// Return score
$score = round(($correct / $total) * 100);
echo json_encode([
    "status" => 200,
    "message" => "Practice submitted successfully",
    "score" => $score
]);
?>
