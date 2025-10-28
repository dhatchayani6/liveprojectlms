<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = $_GET['launch_id'] ?? '';
$topic_id = $_GET['topic_id'] ?? '';
$co_id = $_GET['co_id'] ?? '';

$sql = "SELECT pq_id, question, options, answer 
        FROM practise_question 
        WHERE launch_id='$launch_id' AND topic_id='$topic_id' AND co_id='$co_id'";

$result = $conn->query($sql);
$data = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) $data[] = $row;
}

echo json_encode(["status" => "success", "data" => $data]);
?>
