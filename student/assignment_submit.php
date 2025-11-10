<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_student.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link rel="stylesheet" href="stylesheet/courses.css">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .bi-book::before {
            color: #0d6efd !important;

        }

        .bi-book {
            background: rgba(59, 130, 246, 0.15);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }



        .bi-check2-circle {
            background: rgba(139, 92, 246, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-calendar3 {
            background: rgba(249, 115, 22, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <div class="d-flex gap-2">
                        <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Introduction
                        to Data Science
                    </div>
                </h5>
                <a href="../index.php">
                    <button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </div>

            <div class="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="assignments.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Assignments</a>
                    </h6>

                </div>

                <div class="p-3">
                    <!-- Notifications -->


                    <div class="card rounded border mb-4">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center bg-secondary p-3">
                            <i class="bi bi-book fs-5 me-2" style="background-color: #DBEAFF; 
                  border: 1px solid rgba(59, 130, 246, 0.5); 
                  color: #2563EB; 
                  border-radius: 50%; 
                  padding: 5px;">
                            </i>
                            <h6 class="mb-0 fw-semibold">Data Science Project Due</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body rounded border bg-white">
                            <small class="fw-semibold ">Details:</small>
                            <h6 class="mb-3 text-gray fw-normal pt-2">
                                This assignment requires your attention for the course
                                <strong>"Introduction to Data Science"</strong>.
                            </h6>

                            <small class="fw-semibold mb-2">Questions:</small>
                            <div class="p-4 bg-light rounded mb-3 mt-3" style="border: 1px solid #e3e8ef;">

                            </div>

                            <div class="d-flex flex-column align-items-start">
                                <small class="fw-semibold mb-1">Due Date:</small>
                                <span class="badge rounded fs-6" style="    background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
                            color: white;
                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                            border: 1px solid rgba(0, 0, 0, 0.2);">
                                    2023-11-15
                                </span>
                            </div>

                            <div class="d-flex flex-column align-items-start pt-3">
                                <small class="fw-semibold mb-1">Status</small>
                                <span class="badge rounded fs-6 btn-gradient-glossy">
                                    <small>submitted</small>
                                </span>
                            </div>
                        </div>


                    </div>
                    <div class="rounded mt-3" style="border: 1px solid #dee2e6;">
                        <!-- Card Header -->
                        <div class="p-3" style="background-color: #e9ecef;">
                            <h6 class="mb-0 fw-semibold">Your Submission</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="p-3">
                            <!-- Submitted On -->
                            <div class="mb-3">
                                <strong>Submitted On:</strong>
                                <div>2023-11-16</div>
                            </div>

                            <!-- Your Answer -->
                            <div class="mb-3">
                                <strong>Your Answer:</strong>
                                <div class="border rounded p-3" style="background-color: #f8f9fa;">
                                    I have designed a normalized database schema with 5 tables that efficiently handles
                                    the
                                    relationships between entities while minimizing redundancy. The implementation
                                    includes
                                    proper primary and foreign keys, with appropriate indexing for performance
                                    optimization.
                                </div>
                            </div>

                            <!-- Uploaded Files -->
                            <div class="mb-3">
                                <strong>Uploaded Files:</strong>
                                <ul class="list-unstyled mt-2">
                                    <li class="border rounded p-2 mb-1 d-flex align-items-center"
                                        style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(240, 240, 240) 100%);">
                                        <i class="bi bi-file-earmark-text me-2 text-primary"></i> DB_Schema.pdf
                                    </li>
                                    <li class="border rounded p-2 d-flex align-items-center"
                                        style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(240, 240, 240) 100%);">
                                        <i class="bi bi-file-earmark-text me-2 text-primary"></i> ERD_Diagram.png
                                    </li>
                                </ul>
                            </div>

                            <!-- Note -->
                            <div class="alert alert-primary text-primary mt-3 mb-0 p-3">
                                <small>
                                    <strong>Note:</strong> Your assignment has been submitted and is pending review. You
                                    will receive
                                    a notification once it has been graded.
                                </small>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const ass_id = urlParams.get('ass_id');

            if (!ass_id) {
                alert("Assignment ID missing");
                return;
            }

            // Fetch submission details
            $.getJSON(`api/student_submission_detail.php?ass_id=${ass_id}`, function(res) {
                if (res.status !== 200) {
                    alert("Unable to load submission details");
                    return;
                }

                const a = res.data;

                // Header Title
                $(".assignment-titles").html(`
            <div class="d-flex gap-2">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>${a.course_name}
            </div>
        `);

                // Assignment Title
                $(".card-header h6").text(a.title || "Assignment");

                // Course Detail
                $(".card-body h6 strong").text(`"${a.course_name}"`);

                // Assignment Instructions
                const questionBox = $(".card-body .p-4");
                questionBox.html("");

                if (a.instruction && a.instruction.trim() !== "") {
                    const questions = a.instruction.split("\n").filter(q => q.trim() !== "");
                    questions.forEach(q => {
                        questionBox.append(`<div class="mb-2">${q}</div>`);
                    });
                } else {
                    questionBox.append(`<div>No instructions provided.</div>`);
                }

                // Due Date
                $(".card-body .badge").first().text(a.due_date ? a.due_date.split(" ")[0] : "N/A");

                // Status
                const statusColor = a.status === "feedback" ?
                    "linear-gradient(rgb(129,199,132), rgb(76,175,80))" :
                    "linear-gradient(rgb(249,217,118), rgb(243,159,89))";

                $(".card-body .btn-gradient-glossy")
                    .css("background", statusColor)
                    .find("small")
                    .text(a.status.charAt(0).toUpperCase() + a.status.slice(1));

                // Submission date
                const submitDate = a.submission_date ? new Date(a.submission_date).toLocaleDateString() : "N/A";
                $(".p-3 strong:contains('Submitted On:')").next().text(submitDate);

                // Student Answer
                const answerBox = $(".p-3 strong:contains('Your Answer:')").next();
                answerBox.text(a.student_answer ? a.student_answer : "No answer submitted.");

                // Uploaded Files
                const fileList = $(".p-3 ul.list-unstyled");
                fileList.html("");

                if (a.file_list && a.file_list.length > 0) {
                    a.file_list.forEach(file => {
                        const fileName = file.split('/').pop();
                        const ext = fileName.split('.').pop().toLowerCase();
                        const icon = ext === "pdf" ? "bi-file-earmark-pdf text-danger" : "bi-file-earmark-image text-primary";
                        fileList.append(`
                    <li class="border rounded p-2 mb-1 d-flex align-items-center"
                        style="background:linear-gradient(#f9f9f9, #f0f0f0);">
                        <i class="bi ${icon} me-2"></i> 
                        <a href="../uploads/assignments/${file}" target="_blank" class="text-decoration-none">${fileName}</a>
                    </li>
                `);
                    });
                } else {
                    fileList.append(`<li class="text-muted">No files uploaded.</li>`);
                }

                // Add Faculty Feedback if exists
                if (a.status === "feedback" && a.comments) {
                    $(".content-scroll .p-3").append(`
                <div class="card mt-4 border-success">
                    <div class="card-header bg-success text-white fw-semibold">Faculty Feedback</div>
                    <div class="card-body">
                        <p><strong>Marks:</strong> ${a.marks_obtained ?? "N/A"}</p>
                        <p><strong>Comments:</strong> ${a.comments}</p>
                    </div>
                </div>
            `);
                }
            });
        });
    </script>



</body>

</html>