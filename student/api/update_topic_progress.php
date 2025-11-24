<?php  
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$student_id = $_SESSION['user_id'] ?? 0;
$launch_id  = $_POST['launch_id'] ?? 0;
$topic_id   = $_POST['topic_id'] ?? 0;
$app_id     = 1;

if (!$student_id || !$launch_id || !$topic_id) {
    echo json_encode(["status"=>400,"message"=>"Missing data"]);
    exit;
}

try {

    /*
     * 1️⃣ Count all PDF + VIDEO modules
     */
    $sqlMods = "
        SELECT COUNT(*) AS cnt 
        FROM modules 
        WHERE launch_id = ? AND topic_id = ? 
        AND learning_type IN ('pdf','video')
    ";
    $stmt = $conn->prepare($sqlMods);
    $stmt->bind_param("ii", $launch_id, $topic_id);
    $stmt->execute();
    $modsCnt = (int)$stmt->get_result()->fetch_assoc()['cnt'];
    $stmt->close();

    /*
     * 2️⃣ Count total practice sets (distinct CO means 1 practice)
     */
    $sqlPractice = "
        SELECT COUNT(DISTINCT co_id) AS cnt 
        FROM practise_question
        WHERE launch_id = ? AND topic_id = ?
    ";
    $stmt = $conn->prepare($sqlPractice);
    $stmt->bind_param("ii", $launch_id, $topic_id);
    $stmt->execute();
    $practiceCnt = (int)$stmt->get_result()->fetch_assoc()['cnt'];
    $stmt->close();

    /*
     * 3️⃣ Count total assignments for this topic
     */
    $sqlAssign = "
        SELECT COUNT(*) AS cnt
        FROM assignments
        WHERE launch_id = ? AND topic_id = ?
    ";
    $stmt = $conn->prepare($sqlAssign);
    $stmt->bind_param("ii", $launch_id, $topic_id);
    $stmt->execute();
    $assignCnt = (int)$stmt->get_result()->fetch_assoc()['cnt'];
    $stmt->close();

    /*
     * TOTAL MATERIAL COUNT = pdf + video + practice + assignment
     */
    $required = $modsCnt + $practiceCnt + $assignCnt;

    /*
     * 4️⃣ Completed materials (student_material_complete table)
     */
    $sqlDone = "
        SELECT COUNT(*) AS cnt 
        FROM student_material_complete
        WHERE student_id = ? 
          AND launch_id = ? 
          AND topic_id = ?
          AND type IN ('pdf','video','practice','assignment')
    ";
    $stmt = $conn->prepare($sqlDone);
    $stmt->bind_param("iii", $student_id, $launch_id, $topic_id);
    $stmt->execute();
    $done = (int)$stmt->get_result()->fetch_assoc()['cnt'];
    $stmt->close();

    /*
     * Progress = percentage
     */
    $progress = ($required > 0) ? round(($done / $required) * 100) : 0;

    /*
     * 5️⃣ UPSERT topic progress
     */
    $sqlUpsert = "
        INSERT INTO student_chapter_progress 
        (student_id, launch_id, module_id, chapter_percent, app_id)
        VALUES (?, ?, ?, ?, ?)
        ON DUPLICATE KEY UPDATE 
            chapter_percent = VALUES(chapter_percent),
            updated_at = NOW()
    ";

    $stmt = $conn->prepare($sqlUpsert);
    $stmt->bind_param("iiiii", $student_id, $launch_id, $topic_id, $progress, $app_id);
    $stmt->execute();
    $stmt->close();

    echo json_encode([
        "status" => 200,
        "topic_id" => $topic_id,
        "progress" => $progress
    ]);

} catch (Exception $e) {
    echo json_encode(["status"=>500,"message"=>$e->getMessage()]);
}
