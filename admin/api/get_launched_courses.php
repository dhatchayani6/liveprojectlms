<?php
header("Content-Type: application/json");
include "../../includes/config.php";

$sql = "
SELECT lc.launch_id, lc.code, lc.seat_allotment, lc.slot, lc.created_at, 
       u.name AS faculty_name
FROM launch_courses lc
LEFT JOIN users u ON lc.faculty_id = u.user_id
ORDER BY lc.launch_id DESC
";
$res = $conn->query($sql);

$data = [];
$sno = 1;

while($row = $res->fetch_assoc()){
    $row['sno'] = $sno++;
    $data[] = $row;
}

echo json_encode([
    "status"=>true,
    "courses"=>$data
]);
?>
