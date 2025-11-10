<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$sql = "SELECT course_id, course_code, course_name FROM courses ORDER BY course_name ASC";
$result = $conn->query($sql);

$data = [];
while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode([
    "status" => true,
    "courses" => $data
]);
?>
