<?php
/**
 * Create full course (course + components + passing criteria)
 * Expects JSON:
 * {
 *   "course_name": "Data Structures",
 *   "course_code": "CSA03",
 *   "category": "University Elective",
 *   "regulation": "Regulation 2019",
 *   "rubric": "Mid-term Exam",
 *   "components": [
 *     {"name":"Theory","maxMarks":100,"passingMarks":40},
 *     {"name":"Assignment","max_marks":50,"passing_marks":20}
 *   ],
 *   "passing_criteria":[
 *     {
 *       "components":[
 *         {"component":"Theory","maxMarks":100},
 *         {"component":"Assignment","max_marks":50}
 *       ],
 *       "required_marks": 50,
 *       "maximum_marks": 150
 *     }
 *   ]
 * }
 */

header("Content-Type: application/json; charset=UTF-8");
// (Optional) CORS — enable if your admin runs on a different origin
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Content-Type, Authorization");
// header("Access-Control-Allow-Methods: POST, OPTIONS");

include "../../includes/config.php"; // $conn = new mysqli(...)

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $raw = file_get_contents("php://input");
    $data = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
} catch (Throwable $e) {
    http_response_code(400);
    echo json_encode(["status"=>false, "message"=>"Invalid JSON: ".$e->getMessage()]);
    exit;
}

// --------- Input extraction ---------
$course_name = trim($data['course_name'] ?? '');
$course_code = trim($data['course_code'] ?? '');
$category    = trim($data['category'] ?? '');
$regulation  = trim($data['regulation'] ?? '');
$rubric      = trim($data['rubric'] ?? '');
$components  = $data['components'] ?? [];
$criteria    = $data['passing_criteria'] ?? [];

// --------- Basic validation ---------
if ($course_name === '' || $course_code === '' || $category === '' || $regulation === '' || $rubric === '') {
    echo json_encode(["status"=>false, "message"=>"Missing required fields"]);
    exit;
}

try {
    $conn->begin_transaction();

    // ========== 1) Insert into courses ==========
    $sqlCourse = "
        INSERT INTO courses(
            course_code, course_name, department, course_description,
            credit_hours, Schedule, Location, Prerequisites, status,
            course_category, regulation, rubric
        )
        VALUES (?, ?, '-', '-', '-', '-', '-', '-', 'draft', ?, ?, ?)
    ";
    $stmtCourse = $conn->prepare($sqlCourse);
    // 5 variables: code, name, category, regulation, rubric
    $stmtCourse->bind_param("sssss", $course_code, $course_name, $category, $regulation, $rubric);
    $stmtCourse->execute();
    $course_id = $conn->insert_id;

    // ========== 2) Insert components (course_components) ==========
    if (!empty($components)) {
        $sqlComp = "
            INSERT INTO course_components(course_id, component_name, max_marks, passing_marks)
            VALUES (?, ?, ?, ?)
        ";
        $stmtComp = $conn->prepare($sqlComp);

        foreach ($components as $c) {
            // Accept both camelCase and snake_case from frontend
            $name = trim($c['name'] ?? '');
            $max  = intval($c['maxMarks'] ?? $c['max_marks'] ?? 0);
            $pass = intval($c['passingMarks'] ?? $c['passing_marks'] ?? 0);

            if ($name === '') { continue; } // skip invalid rows

            $stmtComp->bind_param("isii", $course_id, $name, $max, $pass);
            $stmtComp->execute();
        }
    }

    // ========== 3) Insert passing criteria (course_passing_criteria) ==========
    if (!empty($criteria)) {
        $sqlCrit = "
            INSERT INTO course_passing_criteria(course_id, component_list, required_marks, total_marks)
            VALUES (?, ?, ?, ?)
        ";
        $stmtCrit = $conn->prepare($sqlCrit);

        foreach ($criteria as $cr) {
            // Build {"ComponentName": maxMarks, ...}
            $compJson = [];
            $items = $cr['components'] ?? [];
            foreach ($items as $row) {
                $compName = trim($row['component'] ?? '');
                // fallback to optional keys — if a component block carries max
                $maxForThis = intval($row['maxMarks'] ?? $row['max_marks'] ?? 0);
                if ($compName !== '') {
                    $compJson[$compName] = $maxForThis;
                }
            }

            // If UI didn't send per-component max here, we can fallback by
            // cross-referencing components array (optional; uncomment if needed):
            // if (empty($compJson) && !empty($components)) {
            //     foreach ($components as $c) {
            //         $n = trim($c['name'] ?? '');
            //         $m = intval($c['maxMarks'] ?? $c['max_marks'] ?? 0);
            //         if ($n !== '') $compJson[$n] = $m;
            //     }
            // }

            $jsonList = json_encode($compJson, JSON_UNESCAPED_UNICODE);

            // Accept both snake_case and camelCase totals
            $req = intval($cr['required_marks'] ?? $cr['requiredMarks'] ?? 0);
            $tot = intval($cr['maximum_marks'] ?? $cr['maximumMarks'] ?? 0);

            // Insert only if we have at least one component in the JSON
            if (!empty($compJson)) {
                $stmtCrit->bind_param("isii", $course_id, $jsonList, $req, $tot);
                $stmtCrit->execute();
            }
        }
    }

    $conn->commit();

    echo json_encode([
        "status"    => true,
        "message"   => "Course created successfully",
        "course_id" => $course_id
    ]);
} catch (mysqli_sql_exception $e) {
    $conn->rollback();

    // Duplicate course_code friendly message
    if ($e->getCode() == 1062) {
        echo json_encode([
            "status"=>false,
            "message"=>"Duplicate entry: course_code already exists"
        ]);
        exit;
    }

    echo json_encode(["status"=>false, "message"=>"DB Error: ".$e->getMessage()]);
} catch (Throwable $e) {
    $conn->rollback();
    echo json_encode(["status"=>false, "message"=>"Server Error: ".$e->getMessage()]);
}
