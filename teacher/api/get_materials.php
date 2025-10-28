<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
include "../../includes/config.php";

// ✅ Validate parameters
$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id  = intval($_GET['topic_id'] ?? 0);
$co_id     = intval($_GET['co_id'] ?? 0);

if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0) {
    echo json_encode(["status" => "error", "message" => "Invalid parameters."]);
    exit;
}

// ✅ Fetch materials from the module table
$query = "SELECT pdf_path, video_path FROM module 
          WHERE launch_id = ? AND topic_id = ? AND co_id = ? LIMIT 1";

$stmt = $conn->prepare($query);
$stmt->bind_param("iii", $launch_id, $topic_id, $co_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode([
        "status" => "success",
        "data" => [
            "pdf_path"   => $row['pdf_path'] ? "../uploads/materials/" . $row['pdf_path'] : null,
            "video_path" => $row['video_path'] ? "../uploads/materials/" . $row['video_path'] : null
        ]
    ]);
} else {
    echo json_encode(["status" => "success", "data" => null]);
}

$stmt->close();
$conn->close();
?>
