<?php
// api/get_modules.php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");


include "../../includes/config.php"; // adjust path if needed

$launch_id = intval($_GET['launch_id'] ?? 0);
$topic_id  = intval($_GET['topic_id'] ?? 0);
$co_id     = intval($_GET['co_id'] ?? 0);

if ($launch_id <= 0 || $topic_id <= 0 || $co_id <= 0) {
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Invalid parameters. launch_id/topic_id/co_id required."]);
    exit;
}

$sql = "SELECT module_id, learning_type, url, created_at 
        FROM modules 
        WHERE launch_id = ? AND topic_id = ? AND co_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $launch_id, $topic_id, $co_id);
$stmt->execute();
$res = $stmt->get_result();

$data = [];
while ($row = $res->fetch_assoc()) {
    // Normalize URL for frontend: convert backslashes to forward slashes and prefix if necessary
    $url = $row['url'] ? str_replace('\\', '/', $row['url']) : null;
    // If your frontend expects ../uploads/materials/ prefix, adjust here
    // e.g. $url = $url ? "../uploads/materials/" . basename($url) : null;
    $data[] = [
        "module_id" => intval($row['module_id']),
        "learning_type" => $row['learning_type'],
        "url" => $url,
        "created_at" => $row['created_at']
    ];
}

$stmt->close();
$conn->close();

echo json_encode(["status" => "success", "data" => $data]);
