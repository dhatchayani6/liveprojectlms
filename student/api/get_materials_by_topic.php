<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = isset($_GET['launch_id']) ? intval($_GET['launch_id']) : 0;
$topic_id  = isset($_GET['topic_id']) ? intval($_GET['topic_id']) : 0;
$type      = isset($_GET['type']) ? $_GET['type'] : ''; // reading | video | practice | assignment

if (!$launch_id || !$topic_id || !$type) {
    echo json_encode(["status" => 400, "message" => "Missing required parameters"]);
    exit;
}

try {
    $materials = [];

    if ($type === 'reading') {
        $sql = "
            SELECT co.co_id, co.co_level, co.course_description, m.url AS material_url
            FROM course_outcome co
            JOIN modules m ON co.co_id = m.co_id
            WHERE m.launch_id = ? AND m.topic_id = ? AND m.learning_type = 'pdf'
        ";
    } elseif ($type === 'video') {
        $sql = "
            SELECT co.co_id, co.co_level, co.course_description, m.url AS material_url
            FROM course_outcome co
            JOIN modules m ON co.co_id = m.co_id
            WHERE m.launch_id = ? AND m.topic_id = ? AND m.learning_type = 'video'
        ";
    } elseif ($type === 'practice') {
        $sql = "
            SELECT DISTINCT co.co_id, co.co_level, co.course_description
            FROM course_outcome co
            JOIN practise_question pq ON co.co_id = pq.co_id
            WHERE pq.launch_id = ? AND pq.topic_id = ?
        ";
    } elseif ($type === 'assignment') {
        $sql = "
            SELECT DISTINCT co.co_id, co.co_level, co.course_description, a.title AS material_title, a.notes AS file_url
            FROM course_outcome co
            JOIN assignments a ON co.co_id = a.co_id
            WHERE a.launch_id = ? AND a.topic_id = ?
        ";
    } else {
        echo json_encode(["status" => 400, "message" => "Invalid material type"]);
        exit;
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $launch_id, $topic_id);
    $stmt->execute();
    $res = $stmt->get_result();

    while ($row = $res->fetch_assoc()) {
        $materials[] = $row;
    }

    echo json_encode(["status" => 200, "data" => $materials]);
} catch (Exception $e) {
    echo json_encode(["status" => 500, "message" => $e->getMessage()]);
}
?>
