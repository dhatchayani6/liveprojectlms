<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$launch_id = isset($_GET['launch_id']) ? intval($_GET['launch_id']) : 0;
$topic_id  = isset($_GET['topic_id']) ? intval($_GET['topic_id']) : 0;
$type      = isset($_GET['type']) ? $_GET['type'] : ''; 

if (!$launch_id || !$topic_id || !$type) {
    echo json_encode(["status" => 400, "message" => "Missing required parameters"]);
    exit;
}

// ✅ Only students
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    echo json_encode(["status" => 401, "message" => "Unauthorized"]);
    exit;
}

$student_id = intval($_SESSION['user_id']);

try {
    $materials = [];

    // ✅ READING (PDF)
    if ($type === 'reading') {

        $sql = "
            SELECT 
                co.co_id, 
                co.co_level, 
                co.course_description, 
                m.module_id,
                m.url AS material_url,
                CASE 
                    WHEN smc.smc_id IS NOT NULL THEN 1 
                    ELSE 0 
                END AS completed
            FROM course_outcome co
            JOIN modules m ON co.co_id = m.co_id
            LEFT JOIN student_material_complete smc 
                ON smc.student_id = ?
               AND smc.launch_id = m.launch_id
               AND smc.topic_id = m.topic_id
               AND (smc.material_id = m.module_id OR smc.material_id = co.co_id)
               AND smc.type = 'pdf'
            WHERE m.launch_id = ? 
              AND m.topic_id = ? 
              AND m.learning_type = 'pdf'
        ";

    } 
    // ✅ VIDEO
    elseif ($type === 'video') {

        $sql = "
            SELECT 
                co.co_id, 
                co.co_level, 
                co.course_description, 
                m.module_id,
                m.url AS material_url,
                CASE 
                    WHEN smc.smc_id IS NOT NULL THEN 1 
                    ELSE 0 
                END AS completed
            FROM course_outcome co
            JOIN modules m ON co.co_id = m.co_id
            LEFT JOIN student_material_complete smc 
                ON smc.student_id = ?
               AND smc.launch_id = m.launch_id
               AND smc.topic_id = m.topic_id
               AND (smc.material_id = m.module_id OR smc.material_id = co.co_id)
               AND smc.type = 'video'
            WHERE m.launch_id = ? 
              AND m.topic_id = ? 
              AND m.learning_type = 'video'
        ";

    }
    // ✅ PRACTICE (NO CHANGE)
    elseif ($type === 'practice') {

        $sql = "
            SELECT DISTINCT 
                co.co_id, co.co_level, co.course_description
            FROM course_outcome co
            JOIN practise_question pq ON co.co_id = pq.co_id
            WHERE pq.launch_id = ? AND pq.topic_id = ?
        ";

    }
    // ✅ ASSIGNMENT (NO CHANGE)
    elseif ($type === 'assignment') {

        $sql = "
            SELECT DISTINCT 
                co.co_id, co.co_level, co.course_description, 
                a.title AS material_title, a.notes AS file_url
            FROM course_outcome co
            JOIN assignments a ON co.co_id = a.co_id
            WHERE a.launch_id = ? AND a.topic_id = ?
        ";

    } else {
        echo json_encode(["status" => 400, "message" => "Invalid material type"]);
        exit;
    }

    $stmt = $conn->prepare($sql);

    // ✅ Bind params differently based on query
    if ($type === 'reading' || $type === 'video') {
        $stmt->bind_param("iii", $student_id, $launch_id, $topic_id);
    } else {
        $stmt->bind_param("ii", $launch_id, $topic_id);
    }

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
