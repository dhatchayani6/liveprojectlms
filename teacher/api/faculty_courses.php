<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


include "../../includes/config.php"; // your MySQL connection file

// ✅ Check if faculty is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Unauthorized access. Please log in as faculty."
    ]);
    exit;
}

$faculty_id = $_SESSION['user_id'];

// ✅ Fetch courses assigned to the faculty
$sql = "
    SELECT 
        lc.launch_id,
        lc.code AS course_code,
        c.course_name,
        c.Schedule,
        lc.slot,
        lc.seat_allotment,
        COUNT(sca.student_id) AS student_count
    FROM launch_courses lc
    INNER JOIN courses c ON lc.course_id = c.course_id
    LEFT JOIN student_course_approval sca 
        ON sca.launch_id = lc.launch_id AND sca.status = 'approved'
    WHERE lc.faculty_id = '$faculty_id'
    GROUP BY lc.launch_id, lc.code, c.course_name, lc.slot, lc.seat_allotment
    ORDER BY lc.created_at DESC
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "status" => "error",
        "message" => "Database query failed: " . mysqli_error($conn)
    ]);
    exit;
}

if (mysqli_num_rows($result) === 0) {
    http_response_code(404);
    echo json_encode([
        "status" => "error",
        "message" => "No active courses found for this faculty."
    ]);
    exit;
}

// ✅ Build JSON response
$courses = [];
while ($row = mysqli_fetch_assoc($result)) {
    $courses[] = [
        "launch_id"      => $row['launch_id'],
        "course_code"    => $row['course_code'],
        "course_name"    => $row['course_name'],
        "slot"           => $row['slot'],
        "seat_allotment" => $row['seat_allotment'],
        "student_count"  => $row['student_count'],
        "schedule" =>$row['Schedule'],
    ];
}

http_response_code(200);
echo json_encode([
    "status" => "success",
    "message" => "Courses fetched successfully",
    "data" => $courses
]);

mysqli_close($conn);
?>
