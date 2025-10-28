<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id  = intval($_GET['topic_id'] ?? 0);
$co_id     = intval($_GET['co_id'] ?? 0);

if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0) {
    echo json_encode(["status" => "error", "message" => "Missing parameters"]);
    exit;
}

$sql = "SELECT * FROM assignments WHERE launch_id=? AND topic_id=? AND co_id=? LIMIT 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_assoc()) {
    echo json_encode(["status" => "success", "data" => $row]);
} else {
    echo json_encode(["status" => "empty", "data" => null]);
}
$conn->close();
