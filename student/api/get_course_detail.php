<?php
include "../../includes/config.php";

$launch_id = intval($_GET['launch_id'] ?? 0);
if (!$launch_id) {
    echo json_encode(["status"=>400, "message"=>"Missing launch_id"]);
    exit;
}

$sql = "SELECT lc.*, c.course_code, c.course_name, c.course_description, c.credit_hours, c.Location FROM launch_courses lc JOIN courses c ON c.course_id = lc.course_id WHERE lc.launch_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $launch_id);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();
echo json_encode(["status"=>200, "data"=>$res]);
?>