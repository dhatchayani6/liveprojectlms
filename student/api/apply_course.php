<?php
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? null;


if (!$student_id) {
    echo json_encode(["status" => 401, "message" => "Unauthorized: login required"]);
    exit;
}

$input = json_decode(file_get_contents("php://input"), true);
$launch_ids = $input['launch_ids'] ?? [];

if (empty($launch_ids)) {
    echo json_encode(["status" => 400, "message" => "No courses selected"]);
    exit;
}

$updated = [];

foreach ($launch_ids as $launch_id) {
    $launch_id = intval($launch_id);

    $slotRes = $conn->query("SELECT slot FROM launch_courses WHERE launch_id = $launch_id");
    $slot = $slotRes->fetch_assoc()['slot'] ?? null;

    if (!$slot) continue;

    $check = $conn->prepare("SELECT approval_id, status FROM student_course_approval WHERE student_id=? AND launch_id=?");
    $check->bind_param("ii", $student_id, $launch_id);
    $check->execute();
    $existing = $check->get_result()->fetch_assoc();

    if ($existing) {
        if ($existing['status'] === 'rejected') {
            $conn->query("UPDATE student_course_approval SET status='pending', created_at=CURRENT_TIMESTAMP WHERE approval_id={$existing['approval_id']}");
            $updated[] = ["launch_id" => $launch_id, "status" => "pending"];
        }
        continue;
    }

    $stmt = $conn->prepare("INSERT INTO student_course_approval (student_id, launch_id, status, slot, created_at)
                            VALUES (?, ?, 'pending', ?, CURRENT_TIMESTAMP)");
    $stmt->bind_param("iis", $student_id, $launch_id, $slot);
    if ($stmt->execute()) {
        $updated[] = ["launch_id" => $launch_id, "status" => "pending"];
    }
}

echo json_encode([
    "status" => 200,
    "message" => "Courses sent for approval.",
    "updated" => $updated
]);
