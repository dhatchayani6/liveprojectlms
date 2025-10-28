<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
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
    echo json_encode(["status" => "error", "message" => "No valid questions found"]);
    exit;
}

$valid_count = 0;
foreach ($questions as $q) {
    $question = trim($q['question'] ?? '');
    $options = $q['options'] ?? [];
    $answer = trim($q['answer'] ?? '');

    // Skip incomplete
    if ($question === '' || count(array_filter($options)) < 4 || $answer === '') continue;

    $questionEsc = $conn->real_escape_string($question);
    $optionsJson = $conn->real_escape_string(json_encode($options));
    $answerEsc = $conn->real_escape_string($answer);

    $sql = "INSERT INTO practise_question (launch_id, topic_id, question, options, answer, co_id)
            VALUES ('$launch_id', '$topic_id', '$questionEsc', '$optionsJson', '$answerEsc', '$co_id')";
    $conn->query($sql);
    $valid_count++;
}

if ($valid_count > 0)
    echo json_encode(["status" => "success", "message" => "Inserted $valid_count valid questions"]);
else
    echo json_encode(["status" => "error", "message" => "No valid questions to insert"]);
?>
