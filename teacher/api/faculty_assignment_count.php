<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$faculty_id = $_SESSION['user_id'] ?? null;

if (!$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Unauthorized access"]);
    exit;
}

/*
 🔹 Logic:
  Count all records in `assignment_submissions`
  for assignments that belong to `launch_courses` where this faculty is assigned,
  and where marks_obtained IS NULL (not yet graded).
*/

$sql = "
SELECT COUNT(s.sub_id) AS pending_reviews
FROM assignment_submissions s
JOIN assignments a ON s.ass_id = a.ass_id
JOIN launch_courses lc ON a.launch_id = lc.launch_id
WHERE lc.faculty_id = ? 
AND (s.marks_obtained IS NULL OR s.marks_obtained = '')
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $faculty_id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();

$pending_count = intval($result['pending_reviews'] ?? 0);

echo json_encode([
    "status" => 200,
    "data" => [
        "pending_assignments" => $pending_count
    ]
]);
