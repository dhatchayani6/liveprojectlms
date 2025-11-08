<?php
include "../../includes/config.php";

$co_id = $_POST['co_id'] ?? 0;
$co_level = $_POST['co_level'] ?? '';
$course_description = $_POST['course_description'] ?? '';

if (!$co_id || !$co_level || !$course_description) {
    echo json_encode(["status"=>400, "message"=>"Missing fields"]); exit;
}

$sql = "UPDATE course_outcome SET co_level=?, course_description=? WHERE co_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $co_level, $course_description, $co_id);

if ($stmt->execute()) {
    echo json_encode(["status"=>200]);
} else {
    echo json_encode(["status"=>500, "message"=>"Database error"]);
}
