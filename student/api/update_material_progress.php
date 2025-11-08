<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? 0;
$data = json_decode(file_get_contents("php://input"), true);

$launch_id   = intval($data['launch_id']);
$topic_id    = intval($data['topic_id']);
$material_id = intval($data['material_id']);
$type        = $data['type']; // pdf, video, practice
$app_id      = 1;

if (!$student_id || !$launch_id || !$topic_id || !$material_id) {
    echo json_encode(["status" => 400, "message" => "Missing data"]);
    exit;
}

$sql = "INSERT INTO student_material_complete (student_id, launch_id, topic_id, material_id, type, completed_at, app_id)
        VALUES (?, ?, ?, ?, ?, NOW(), ?)
        ON DUPLICATE KEY UPDATE completed_at = NOW()";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iiiisi", $student_id, $launch_id, $topic_id, $material_id, $type, $app_id);

if ($stmt->execute()) {
    echo json_encode(["status"=>200, "message"=>"Progress updated"]);
} else {
    echo json_encode(["status"=>500, "message"=>"DB error"]);
}
?>
