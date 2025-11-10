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

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            min-width: 100px;
            text-align: center;
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
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
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
                                <span class=" rounded fs-6 btn-graded">
                                    <small>Graded : A</small>
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
                                <strong class="mb-2">Submitted On:</strong>
                                <div>Not Available</div>
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
                        </div>
                    </div>

                    <div class="rounded mt-3" style="border: 1px solid #dee2e6;">
                        <!-- Card Header -->
                        <div class="p-3" style="background-color: #e9ecef;">
                            <h6 class="mb-0 fw-semibold">Feedback</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="p-3">
                            <!-- Submitted On -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <strong>Grade:</strong>
                                    <div class=" btn-graded rounded-2" style="min-width:50px !important;">A</div>
                                </div>
                            </div>

                            <!-- graded on -->
                            <div class="mb-3">
                                <strong>Graded On:</strong>
                                <div>2023-11-16</div>
                            </div>

                            <!-- Your Answer -->
                            <div class="mb-3">
                                <strong>Instructor Feedback:
                                </strong>
                                <div class="border rounded p-3 bg-primary" style="background: linear-gradient(rgb(240, 249, 255) 0%, rgb(224, 242, 254) 100%);
                                    border-color: rgba(59, 130, 246, 0.3);
                                    box-shadow: rgba(255, 255, 255, 0.6) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;    --tw-text-opacity: 1;
                                    color: rgb(30 64 175 / var(--tw-text-opacity, 1));">
                                    Excellent work! Your implementation is efficient and well-documented. The time
                                    complexity analysis is accurate and the edge cases are handled properly.
                                </div>
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
    const ass_id = urlParams.get("ass_id");

    if (!ass_id) {
        $(".content-scroll").html('<div class="p-4 text-center text-danger">Invalid assignment ID</div>');
        return;
    }

    loadFeedback();

    function loadFeedback() {
        $.getJSON(`api/student_assignment_feedback.php?ass_id=${ass_id}`, function(res) {
            if (res.status !== 200) {
                $(".content-scroll").html('<div class="p-4 text-center text-muted">No data found.</div>');
                return;
            }

            const a = res.data;
            const grade = a.marks_obtained ? a.marks_obtained : "N/A";
            const hasFeedback = a.faculty_feedback ? true : false;

            // Build HTML
            let html = `
            <div class="p-3">

                <!-- Assignment Details -->
                <div class="card rounded border mb-4">
                    <div class="card-header d-flex align-items-center bg-secondary p-3">
                        <i class="bi bi-book fs-5 me-2" style="background-color:#DBEAFF;border:1px solid rgba(59,130,246,0.5);color:#2563EB;border-radius:50%;padding:5px;"></i>
                        <h6 class="mb-0 fw-semibold">${a.assignment_title}</h6>
                    </div>
                    <div class="card-body bg-white">
                        <small class="fw-semibold">Details:</small>
                        <h6 class="mb-3 text-gray fw-normal pt-2">
                            ${a.instruction || "No additional instructions."}
                            <br><strong>(${a.course_name})</strong>
                        </h6>

                        ${a.notes ? `
                        <div class="mb-3">
                            <a href="../uploads/assignments/${a.notes}" target="_blank" class="text-decoration-none fw-semibold">
                                📄 View Material
                            </a>
                        </div>` : ""}

                        <div class="d-flex flex-column align-items-start">
                            <small class="fw-semibold mb-1">Due Date:</small>
                            <span class="badge rounded fs-6" style="background:linear-gradient(#f9d976,#f39f59);color:white;">${a.due_date}</span>
                        </div>

                        <div class="d-flex flex-column align-items-start pt-3">
                            <small class="fw-semibold mb-1">Status</small>
                            <span class="rounded fs-6 btn-graded">
                                <small>${hasFeedback ? `Graded : ${grade}` : "Submitted (Awaiting Review)"}</small>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Student Submission -->
                <div class="rounded mt-3" style="border:1px solid #dee2e6;">
                    <div class="p-3" style="background-color:#e9ecef;">
                        <h6 class="mb-0 fw-semibold">Your Submission</h6>
                    </div>
                    <div class="p-3">
                        <div class="mb-3">
                            <strong>Submitted On:</strong>
                            <div>${a.submission_date}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Your Answer:</strong>
                            <div class="border rounded p-3 bg-light">${a.student_answer || "No text submission."}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Uploaded Files:</strong>
                            <ul class="list-unstyled mt-2">
                                ${(a.file_urls && a.file_urls.length > 0)
                                    ? a.file_urls.map(f => `
                                        <li class="border rounded p-2 mb-1 d-flex align-items-center bg-light">
                                            <i class="bi bi-file-earmark-text me-2 text-primary"></i>
                                            <a href="../uploads/assignments/${f}" target="_blank" class="text-decoration-none text-dark">${f.split('/').pop()}</a>
                                        </li>`).join('')
                                    : "<li class='text-muted'>No files uploaded.</li>"
                                }
                            </ul>
                        </div>
                    </div>
                </div>`;

            // Feedback section (if graded)
            if (hasFeedback) {
                html += `
                <div class="rounded mt-3" style="border:1px solid #dee2e6;">
                    <div class="p-3" style="background-color:#e9ecef;">
                        <h6 class="mb-0 fw-semibold">Feedback</h6>
                    </div>
                    <div class="p-3">
                        <div class="mb-3 d-flex justify-content-between">
                            <strong>Grade:</strong>
                            <div class="btn-graded rounded-2 px-3">${grade}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Graded On:</strong>
                            <div>${a.submission_date}</div>
                        </div>
                        <div class="mb-3">
                            <strong>Instructor Feedback:</strong>
                            <div class="border rounded p-3" style="background:linear-gradient(#f0f9ff,#e0f2fe);border-color:rgba(59,130,246,0.3);color:#1e40af;">
                                ${a.faculty_feedback}
                            </div>
                        </div>
                    </div>
                </div>`;
            }

            html += `</div>`;
            $(".content-scroll").html(html);
        });
    }
});
</script>


</body>

</html>