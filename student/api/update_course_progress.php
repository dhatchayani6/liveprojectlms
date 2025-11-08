<?php 
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? 0;
$launch_id  = isset($_POST['launch_id']) ? (int)$_POST['launch_id'] : 0;
$app_id     = 1;

if (!$student_id || !$launch_id) {
    echo json_encode(["status"=>400,"message"=>"Missing student_id or launch_id"]);
    exit;
}

try {
    /*
     * Compute course progress as the average of per-topic progress
     * across ALL topics in this launch. Topics without a row in
     * student_chapter_progress count as 0%.
     */
    $sql = "
        SELECT 
            AVG(COALESCE(scp.chapter_percent, 0)) AS avg_progress
        FROM course_topic ct
        LEFT JOIN student_chapter_progress scp
               ON scp.launch_id = ct.launch_id
              AND scp.student_id = ?
              AND scp.module_id  = ct.c_topic_id   -- module_id stores topic_id
        WHERE ct.launch_id = ?
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $student_id, $launch_id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    // If there are no topics, progress should be 0
    $course_progress = isset($row['avg_progress']) ? (int)round($row['avg_progress']) : 0;

    // Upsert into student_course_progress
    $sqlUpsert = "
        INSERT INTO student_course_progress (student_id, launch_id, course_percent, app_id)
        VALUES (?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE 
            course_percent = VALUES(course_percent),
            updated_at = NOW()
    ";
    $stmt = $conn->prepare($sqlUpsert);
    $stmt->bind_param("iiii", $student_id, $launch_id, $course_progress, $app_id);
    $stmt->execute();
    $stmt->close();

    echo json_encode([
        "status"   => 200,
        "progress" => $course_progress
    ]);
} catch (Throwable $e) {
    echo json_encode(["status"=>500,"message"=>$e->getMessage()]);
}
