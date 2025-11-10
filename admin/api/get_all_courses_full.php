<?php
header("Content-Type: application/json");
include "../../includes/config.php";

// Fetch course + components + passing criteria
$sql = "
SELECT 
    c.course_id,
    c.course_name,
    c.course_code,
    c.course_category,

    (
        SELECT JSON_ARRAYAGG(
            JSON_OBJECT(
                'name', cc.component_name,
                'max_marks', cc.max_marks,
                'passing_marks', cc.passing_marks
            )
        )
        FROM course_components cc 
        WHERE cc.course_id = c.course_id
    ) AS components,

    (
        SELECT JSON_ARRAYAGG(
            JSON_OBJECT(
                'component_list', cp.component_list,
                'required_marks', cp.required_marks,
                'total_marks', cp.total_marks
            )
        )
        FROM course_passing_criteria cp
        WHERE cp.course_id = c.course_id
    ) AS passing_criteria

FROM courses c
ORDER BY c.course_id DESC
";

$result = $conn->query($sql);

$data = [];
$sno = 1;

while($row = $result->fetch_assoc()) {

    $row['components'] = json_decode($row['components'], true);
    $row['passing_criteria'] = json_decode($row['passing_criteria'], true);

    $row['sno'] = $sno++;
    $data[] = $row;
}

echo json_encode([
    "status" => true,
    "courses" => $data
]);
?>
