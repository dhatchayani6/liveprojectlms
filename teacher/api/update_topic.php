<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$topic_id = $_POST['topic_id'] ?? 0;
$title = trim($_POST['topic_title'] ?? '');
$desc  = trim($_POST['topic_desc'] ?? '');

if (!$topic_id || $title=="" || $desc=="") {
    echo json_encode(["status"=>400, "message"=>"Invalid input"]);
    exit;
}

$stmt = $conn->prepare("UPDATE course_topic SET topic_title=?, topic_description=? WHERE c_topic_id=?");
$stmt->bind_param("ssi", $title, $desc, $topic_id);

if ($stmt->execute()) {
    echo json_encode(["status"=>200, "message"=>"Updated"]);
} else {
    echo json_encode(["status"=>500, "message"=>"DB Error"]);
}
