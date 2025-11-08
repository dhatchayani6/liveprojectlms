<?php
// api/faculty_update_approval.php
header("Content-Type: application/json; charset=UTF-8");

include "../../includes/config.php"; 

$faculty_id = $_SESSION['user_id'] ?? null;
// $faculty_id = 3; // test

if (!$faculty_id) {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

$approval_id = intval($_POST['approval_id'] ?? 0);
$action = $_POST['action'] ?? '';

if (!$approval_id || !in_array($action, ['approve', 'reject'])) {
    echo json_encode(["status" => 400, "message" => "Invalid request"]);
    exit;
}

// Get launch_id & faculty check
$sql = "
SELECT sca.launch_id, lc.faculty_id, lc.seat_allotment
FROM student_course_approval sca
JOIN launch_courses lc ON sca.launch_id = lc.launch_id
WHERE sca.approval_id = ?
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $approval_id);
$stmt->execute();
$res = $stmt->get_result()->fetch_assoc();

if (!$res || $res['faculty_id'] != $faculty_id) {
    echo json_encode(["status" => 403, "message" => "Access denied"]);
    exit;
}

$launch_id = $res['launch_id'];
$seat_allotment = $res['seat_allotment'];

// Count how many approved already
$countQuery = $conn->prepare("SELECT COUNT(*) AS approved_count FROM student_course_approval WHERE launch_id = ? AND status = 'approved'");
$countQuery->bind_param("i", $launch_id);
$countQuery->execute();
$countRes = $countQuery->get_result()->fetch_assoc();
$approved_count = $countRes['approved_count'];

if ($action === 'approve' && $approved_count >= $seat_allotment) {
    echo json_encode([
        "status" => 409,
        "message" => "Seat allotment full — cannot approve more students"
    ]);
    exit;
}

$new_status = $action === 'approve' ? 'approved' : 'rejected';
$update = $conn->prepare("UPDATE student_course_approval SET status = ?, created_at = CURRENT_TIMESTAMP WHERE approval_id = ?");
$update->bind_param("si", $new_status, $approval_id);
$update->execute();

echo json_encode([
    "status" => 200,
    "message" => ucfirst($new_status) . " successfully",
    "new_status" => $new_status
]);
