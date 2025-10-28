<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = $_POST['launch_id'] ?? '';
$topic_id = $_POST['topic_id'] ?? '';
$co_id = $_POST['co_id'] ?? '';
$questions = json_decode($_POST['questions'] ?? '[]', true);

if (!$launch_id || !$topic_id) {
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

if (empty($questions)) {
    echo json_encode(["status" => "error", "message" => "No questions received"]);
    exit;
}

$updated = 0;
$inserted = 0;
$skipped = 0;

foreach ($questions as $q) {
    $pq_id = intval($q['pq_id'] ?? 0);
    $question = trim($q['question'] ?? '');
    $options = $q['options'] ?? [];
    $answer = trim($q['answer'] ?? '');

    // ✅ Skip incomplete questions
    if ($question === '' || count(array_filter($options)) < 4 || $answer === '') {
        $skipped++;
        continue;
    }

    $questionEsc = $conn->real_escape_string($question);
    $optionsJson = $conn->real_escape_string(json_encode($options));
    $answerEsc = $conn->real_escape_string($answer);

    if ($pq_id > 0) {
        // ✅ Update existing record
        $sql = "UPDATE practise_question 
                SET question='$questionEsc', options='$optionsJson', answer='$answerEsc'
                WHERE pq_id='$pq_id' AND launch_id='$launch_id' AND topic_id='$topic_id' AND co_id='$co_id'";
        if ($conn->query($sql)) $updated++;
    } else {
        // ✅ Insert new record
        $sql = "INSERT INTO practise_question (launch_id, topic_id, question, options, answer, co_id)
                VALUES ('$launch_id', '$topic_id', '$questionEsc', '$optionsJson', '$answerEsc', '$co_id')";
        if ($conn->query($sql)) $inserted++;
    }
}

echo json_encode([
    "status" => "success",
    "message" => "✅ $updated updated, $inserted added, $skipped skipped"
]);
?>
