<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


// ✅ Check for logged-in student
if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

$student_id = intval($_SESSION['user_id']);
$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id = intval($_GET['topic_id'] ?? 0);
$co_id = intval($_GET['co_id'] ?? 0);

if (!$launch_id || !$topic_id || !$co_id) {
    echo json_encode(["status" => 400, "message" => "Missing parameters"]);
    exit;
}

// ✅ Step 1: Total number of questions for this CO
$total_sql = "
    SELECT COUNT(*) AS total 
    FROM practise_question 
    WHERE launch_id = ? AND topic_id = ? AND co_id = ?
";
$stmt = $conn->prepare($total_sql);
$stmt->bind_param("iis", $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
$total_questions = intval($row['total'] ?? 0);

if ($total_questions === 0) {
    echo json_encode(["status" => 404, "message" => "No questions found"]);
    exit;
}

// ✅ Step 2: Total answered questions by this student
$attempt_sql = "
    SELECT COUNT(*) AS attempted 
    FROM practise_answer a
    INNER JOIN practise_question q ON a.pq_id = q.pq_id
    WHERE a.student_id = ? AND q.launch_id = ? AND q.topic_id = ? AND q.co_id = ?
";
$stmt = $conn->prepare($attempt_sql);
$stmt->bind_param("iiis", $student_id, $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
$attempted = intval($row['attempted'] ?? 0) > 0;

if (!$attempted) {
    echo json_encode(["status" => 200, "attempted" => false, "message" => "Not attempted"]);
    exit;
}

// ✅ Step 3: Count correct answers
$correct_sql = "
    SELECT COUNT(*) AS correct_count 
    FROM practise_answer a
    INNER JOIN practise_question q ON a.pq_id = q.pq_id
    WHERE a.student_id = ? AND q.launch_id = ? AND q.topic_id = ? AND q.co_id = ? AND a.is_correct = 1
";
$stmt = $conn->prepare($correct_sql);
$stmt->bind_param("iiis", $student_id, $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
$correct = intval($row['correct_count'] ?? 0);

// ✅ Step 4: Calculate percentage
$score = round(($correct / $total_questions) * 100, 2);

// ✅ Step 5: Return JSON result
echo json_encode([
    "status" => 200,
    "attempted" => true,
    "total_questions" => $total_questions,
    "correct_answers" => $correct,
    "score" => $score
]);
?>
