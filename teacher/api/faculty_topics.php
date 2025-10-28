<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Authorization");


include "../../includes/config.php"; // contains $conn

// ✅ Validate login
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'faculty') {
    http_response_code(401);
    echo json_encode([
        "status" => "error",
        "message" => "Unauthorized access. Please log in as faculty."
    ]);
    exit;
}

$faculty_id = intval($_SESSION['user_id']);
$launch_id = intval($_GET['launch_id'] ?? 0);

if ($launch_id <= 0) {
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Missing or invalid launch_id."
    ]);
    exit;
}

// ✅ Ensure faculty owns this launch
$chk = $conn->prepare("SELECT launch_id FROM launch_courses WHERE launch_id = ? AND faculty_id = ? LIMIT 1");
$chk->bind_param("ii", $launch_id, $faculty_id);
$chk->execute();
$res_chk = $chk->get_result();
if ($res_chk->num_rows === 0) {
    http_response_code(403);
    echo json_encode([
        "status" => "error",
        "message" => "You are not authorized to access this course."
    ]);
    exit;
}
$chk->close();

// ✅ Main Query: Fetch topics with outcomes + course info
$sql = "
    SELECT 
        c.course_code,
        c.course_name,
        c.course_category,
        c.regulation,
        c.course_description,
        c.Schedule,
        c.Location,
        c.Prerequisites,
        c.department,
        c.credit_hours,
        u.name,
        u.email,
        u.phone,
        lc.launch_id,
        lc.code AS launch_code,
        lc.slot,
        lc.seat_allotment,
        t.c_topic_id AS topic_id,
        t.topic_title,
        t.topic_description,
        COUNT(co.co_id) AS outcome_count
    FROM launch_courses lc
    INNER JOIN courses c ON lc.course_id = c.course_id
    LEFT JOIN course_topic t ON lc.launch_id = t.launch_id
    LEFT JOIN course_outcome co ON t.c_topic_id = co.topic_id
    LEFT JOIN users u ON lc.faculty_id = u.user_id
    WHERE lc.launch_id = ?
    GROUP BY t.c_topic_id, t.topic_title, t.topic_description, c.course_code, c.course_name, c.course_category, c.regulation, lc.launch_id, lc.code, lc.slot
    ORDER BY t.c_topic_id ASC
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $launch_id);
$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "course_code"        => $row["course_code"],
        "course_name"        => $row["course_name"],
        "course_category"    => $row["course_category"],
        "course_description" => $row["course_description"],
        "Schedule"           => $row["Schedule"],
        "location"           => $row["Location"],
        "Prerequisites"      => $row["Prerequisites"],
        "regulation"         => $row["regulation"],
        "launch_id"          => $row["launch_id"],
        "launch_code"        => $row["launch_code"],
        "seat_allotment"     => $row["seat_allotment"],
        "slot"               => $row["slot"],
        "topic_id"           => $row["topic_id"],
        "topic_title"        => $row["topic_title"],
        "topic_description"  => $row["topic_description"],
        "department"         => $row["department"],
        "credit_hours"       => $row["credit_hours"],
        "user_name" => $row["name"],
        "email" => $row["email"],
        "phone" => $row["phone"],
        "outcome_count"      => strval($row["outcome_count"])
    ];
}

if (empty($data)) {
    echo json_encode([
        "status" => "error",
        "message" => "No topics found for this launch course.",
        "data" => []
    ]);
} else {
    echo json_encode([
        "status" => "success",
        "message" => "Topics fetched successfully",
        "data" => $data
    ]);
}

$stmt->close();
$conn->close();
?>
