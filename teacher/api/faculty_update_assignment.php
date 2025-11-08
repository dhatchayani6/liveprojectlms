<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";


$faculty_id = $_SESSION['user_id'] ?? null;

if (!$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Unauthorized access"]);
    exit;
}

$sub_id = intval($_POST['sub_id'] ?? 0);
$marks = trim($_POST['marks'] ?? '');
$feedback = trim($_POST['feedback'] ?? '');
$status = $_POST['status'] ?? '';

if (!$sub_id) {
    echo json_encode(["status" => 400, "message" => "Invalid submission ID"]);
    exit;
}

// ✅ Only save when Approve
if ($status === "approved") {
    if ($marks === '') {
        echo json_encode(["status" => 400, "message" => "Marks are required for approval"]);
        exit;
    }

    $sql = "UPDATE assignment_submissions 
            SET marks_obtained=?, comments=?, submission_date=submission_date 
            WHERE sub_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $marks, $feedback, $sub_id);
} 
// ❌ For reject, just reset marks and add note
elseif ($status === "rejected") {
    $sql = "UPDATE assignment_submissions 
            SET marks_obtained=NULL, comments=? 
            WHERE sub_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $feedback, $sub_id);
} 
else {
    echo json_encode(["status" => 400, "message" => "Invalid status"]);
    exit;
}

if ($stmt->execute()) {
    echo json_encode(["status" => 200, "message" => "Assignment successfully " . $status]);
} else {
    echo json_encode(["status" => 500, "message" => "Error updating record"]);
}
?>
