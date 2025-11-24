<?php
header("Content-Type: application/json; charset=UTF-8");
include "../../includes/config.php";

$faculty_id = $_SESSION['user_id'] ?? null;

if (!$faculty_id) {
    echo json_encode(["status" => 400, "message" => "Unauthorized access"]);
    exit;
}

$sub_id   = intval($_POST['sub_id'] ?? 0);
$marks    = trim($_POST['marks'] ?? '');
$feedback = trim($_POST['feedback'] ?? '');
$status   = $_POST['status'] ?? '';

if (!$sub_id) {
    echo json_encode(["status" => 400, "message" => "Invalid submission ID"]);
    exit;
}

/* ----------------------------------------------------
    1️⃣ FETCH SUBMISSION + ASSIGNMENT DETAILS
---------------------------------------------------- */
$sql = "
    SELECT 
        s.ass_id, s.student_id, 
        a.launch_id, a.topic_id, a.co_id, a.passing_marks
    FROM assignment_submissions s
    JOIN assignments a ON a.ass_id = s.ass_id
    WHERE s.sub_id = ?
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $sub_id);
$stmt->execute();
$details = $stmt->get_result()->fetch_assoc();

if (!$details) {
    echo json_encode(["status" => 400, "message" => "Invalid submission"]);
    exit;
}

$ass_id     = $details['ass_id'];
$student_id = $details['student_id'];
$launch_id  = $details['launch_id'];
$topic_id   = $details['topic_id'];
$co_id      = $details['co_id'];
$passing    = intval($details['passing_marks'] ?? 50); // default pass mark 50

/* ----------------------------------------------------
    2️⃣ UPDATE ASSIGNMENT STATUS
---------------------------------------------------- */

if ($status === "approved") {

    if ($marks === '') {
        echo json_encode(["status" => 400, "message" => "Marks required for approval"]);
        exit;
    }

    $sql = "
        UPDATE assignment_submissions 
        SET marks_obtained=?, comments=? 
        WHERE sub_id=?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $marks, $feedback, $sub_id);

} elseif ($status === "rejected") {

    $sql = "
        UPDATE assignment_submissions 
        SET marks_obtained=NULL, comments=? 
        WHERE sub_id=?
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $feedback, $sub_id);

} else {
    echo json_encode(["status" => 400, "message" => "Invalid status"]);
    exit;
}

if (!$stmt->execute()) {
    echo json_encode(["status" => 500, "message" => "DB Error updating assignment"]);
    exit;
}

/* ----------------------------------------------------
    3️⃣ ONLY IF APPROVED AND PASSED → UPDATE PROGRESS
---------------------------------------------------- */
if ($status === "approved" && intval($marks) >= $passing) {

    /* --------------------------------------------
        3.1 UPDATE MATERIAL COMPLETION
    -------------------------------------------- */
    $material_id = $co_id; // Assignment belongs to CO_id

    $sqlMat = "
        INSERT INTO student_material_complete 
        (student_id, launch_id, topic_id, material_id, type, completed_at, app_id)
        VALUES (?, ?, ?, ?, 'assignment', NOW(), 1)
        ON DUPLICATE KEY UPDATE completed_at = NOW()
    ";
    $stmtMat = $conn->prepare($sqlMat);
    $stmtMat->bind_param("iiii", $student_id, $launch_id, $topic_id, $material_id);
    $stmtMat->execute();


    /* --------------------------------------------
        3.2 UPDATE TOPIC PROGRESS
    -------------------------------------------- */
    $sqlTopic = "
        SELECT 
            (SELECT COUNT(*) 
             FROM modules 
             WHERE launch_id=? AND topic_id=? AND learning_type IN ('pdf','video')
            ) 
            +
            (SELECT COUNT(DISTINCT co_id)
             FROM practise_question
             WHERE launch_id=? AND topic_id=?
            ) AS required
    ";

    $stmtReq = $conn->prepare($sqlTopic);
    $stmtReq->bind_param("iiii", $launch_id, $topic_id, $launch_id, $topic_id);
    $stmtReq->execute();
    $required = intval($stmtReq->get_result()->fetch_assoc()['required']);

    // student completed items
    $sqlDone = "
        SELECT COUNT(*) AS done 
        FROM student_material_complete
        WHERE student_id=? AND launch_id=? AND topic_id=?
    ";
    $stmtDone = $conn->prepare($sqlDone);
    $stmtDone->bind_param("iii", $student_id, $launch_id, $topic_id);
    $stmtDone->execute();
    $done = intval($stmtDone->get_result()->fetch_assoc()['done']);

    $topic_progress = ($required > 0) ? round(($done / $required) * 100) : 0;

    // upsert topic progress
    $sqlUpTopic = "
        INSERT INTO student_chapter_progress 
        (student_id, launch_id, module_id, chapter_percent, app_id)
        VALUES (?, ?, ?, ?, 1)
        ON DUPLICATE KEY UPDATE chapter_percent = VALUES(chapter_percent), updated_at = NOW()
    ";
    $stmtUpT = $conn->prepare($sqlUpTopic);
    $stmtUpT->bind_param("iiii", $student_id, $launch_id, $topic_id, $topic_progress);
    $stmtUpT->execute();


    /* --------------------------------------------
        3.3 UPDATE COURSE PROGRESS
    -------------------------------------------- */
    $sqlCourse = "
        SELECT 
            AVG(COALESCE(scp.chapter_percent, 0)) AS avg_progress
        FROM course_topic ct
        LEFT JOIN student_chapter_progress scp
               ON scp.launch_id = ct.launch_id
              AND scp.student_id = ?
              AND scp.module_id = ct.c_topic_id
        WHERE ct.launch_id = ?
    ";

    $stmtCourse = $conn->prepare($sqlCourse);
    $stmtCourse->bind_param("ii", $student_id, $launch_id);
    $stmtCourse->execute();
    $course_progress = intval(round($stmtCourse->get_result()->fetch_assoc()['avg_progress']));

    $sqlUpCourse = "
        INSERT INTO student_course_progress 
        (student_id, launch_id, course_percent, app_id)
        VALUES (?, ?, ?, 1)
        ON DUPLICATE KEY UPDATE course_percent = VALUES(course_percent), updated_at = NOW()
    ";
    $stmtUpC = $conn->prepare($sqlUpCourse);
    $stmtUpC->bind_param("iii", $student_id, $launch_id, $course_progress);
    $stmtUpC->execute();
}

/* ----------------------------------------------------
    4️⃣ RESPONSE
---------------------------------------------------- */
echo json_encode([
    "status" => 200,
    "message" => "Assignment " . $status . " successfully",
    "passing_marks" => $passing,
    "marks" => $marks,
    "is_passed" => ($marks >= $passing)
]);
?>
