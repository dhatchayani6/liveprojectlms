<?php
// api/get_student_approved_courses.php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

// 👇 use session or test student_id manually if needed
$student_id = $_SESSION['user_id'] ?? null;
// $student_id = 1; // Uncomment this temporarily for testing

if (!$student_id) {
    echo json_encode(["status" => "error", "message" => "Login required"]);
    exit;
}

/*
We’ll get all distinct slots from launch_courses first,
then check for any approved course by the student in each slot.
*/
$sql_slots = "SELECT DISTINCT slot FROM launch_courses ORDER BY slot ASC";
$slot_result = $conn->query($sql_slots);

$slots_data = [];

if ($slot_result && $slot_result->num_rows > 0) {
    while ($slot_row = $slot_result->fetch_assoc()) {
        $slot = $slot_row['slot'];

        // check if student has approved course in this slot
        $approved_sql = "
            SELECT c.course_code, c.course_name, c.course_id, lc.launch_id
            FROM student_course_approval sca
            JOIN launch_courses lc ON sca.launch_id = lc.launch_id
            JOIN courses c ON lc.course_id = c.course_id
            WHERE sca.student_id = ? AND sca.status = 'approved' AND lc.slot = ?
            LIMIT 1
        ";

        $stmt = $conn->prepare($approved_sql);
        $stmt->bind_param("is", $student_id, $slot);
        $stmt->execute();
        $approved_result = $stmt->get_result();

        if ($approved_result->num_rows > 0) {
            // found approved course
            $course = $approved_result->fetch_assoc();
            $slots_data[] = [
                "slot" => $slot,
                "has_approved" => true,
                "course_code" => $course['course_code'],
                "course_name" => $course['course_name'],
                "launch_id" => $course['launch_id'],
               
            ];
        } else {
            // no approved course
            $slots_data[] = [
                "slot" => $slot,
                "has_approved" => false
            ];
        }
    }
}

echo json_encode(["status" => "success", "data" => $slots_data]);
