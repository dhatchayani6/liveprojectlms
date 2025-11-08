<?php

include "../../includes/config.php";

$sql = "
  SELECT lc.slot,
         COUNT(DISTINCT lc.launch_id) AS total_courses,
         SUM(sca.status = 'approved') AS approved_count,
         SUM(sca.status = 'pending') AS pending_count,
         SUM(sca.status = 'rejected') AS rejected_count
  FROM launch_courses lc
  LEFT JOIN student_course_approval sca
    ON sca.launch_id = lc.launch_id
  GROUP BY lc.slot
  ORDER BY lc.slot ASC
";

$res = $conn->query($sql);
$out = [];
if ($res) {
    while ($row = $res->fetch_assoc()) $out[] = $row;
}
echo json_encode(["status" => 200, "data" => $out]);
