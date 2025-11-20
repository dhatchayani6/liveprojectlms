<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment Feedback - Student Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }

        .sidebar .nav-link {
            color: #495057;
            border-radius: 0.5rem;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f3f5;
        }

        .avatar {
            height: 80px;
            width: 80px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex: 1;
            min-width: 0;
            overflow-x: hidden;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            min-width: 100px;
            text-align: center;
        }

        .student-answer-block {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: pre-wrap;
            background-color: #f8f9fa;
        }

        .pdf-viewer {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
        }

        .pdf-viewer iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

        #content-scroll {
            height: 100%;
            max-height: 721px;
            overflow-y: scroll;
        }

        /* Responsive file list styling */
        .uploaded-file-item {
            transition: background 0.2s ease, transform 0.1s ease;
            word-break: break-word;
            flex-wrap: wrap;
        }

        .uploaded-file-item:hover {
            background: #f1f3f5;
            transform: scale(1.01);
        }

        .uploaded-file-item a {
            display: block;
            overflow-wrap: break-word;
            white-space: normal;
        }

        @media (max-width: 991.98px) {

            /* For small and medium screens */
            .uploaded-file-item {
                flex-direction: column;
                align-items: flex-start !important;
                text-align: left;
            }

            .uploaded-file-item i {
                margin-bottom: 6px;
            }

            .uploaded-file-item a {
                width: 100%;
            }
        }
    </style>
    <style>
        /* .bi-book::before {
            color: #0d6efd !important;

        }

        .bi-book {
            background: rgba(59, 130, 246, 0.15);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-file-earmark-text {
            background: rgba(16, 185, 129, 0.15);
            color: rgb(0, 0, 0);
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
        } */

        .card-header {
            background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <header class="bg-white border-bottom shadow-sm">
                <div class="d-flex justify-content-between align-items-center px-4 py-3">

                    <div class="d-flex align-items-center">
                        <!-- 🔹 Offcanvas Toggle (Visible on Mobile Only) -->
                        <button class="btn btn-light btn-sm me-2 d-md-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-list"></i>
                        </button>

                        <!-- 🔹 Back Button (Visible on Desktop) -->
                        <button onclick="window.history.back()"
                            class="btn btn-light btn-sm me-2 d-none d-md-inline-flex">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <h5 class="fw-semibold mb-0">Viana Study</h5>
                    </div>

                    <a href="../index.php" class="btn btn-light d-flex align-items-center">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </div>
            </header>
            <!-- Offcanvas Sidebar -->
            <div class="offcanvas offcanvas-start offcanvas-full" tabindex="-1" id="offcanvasSidebar"
                aria-labelledby="offcanvasSidebarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-semibold" id="offcanvasSidebarLabel">Student Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <aside class="sidebar flex-column h-100 w-100">
                        <div class="text-center border-bottom p-4">
                            <div class="avatar mx-auto mb-3">
                                <i class="bi bi-person-fill fs-1 text-primary"></i>
                            </div>
                            <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
                            <p class="text-muted small">Student ID: <?php echo $_SESSION['regno']; ?></p>
                        </div>

                        <nav class="flex-grow-1 pt-3 px-4">
                            <ul class="nav flex-column gap-3">
                                <li><a href="dashboard.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                                <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-book me-2"></i>Courses</a></li>
                                <li><a href="assignments.php"
                                        class="nav-link active d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-file-earmark-text me-2"></i>Assignments</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>



            <!-- Dashboard Content -->
            <main class="p-4" id="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="assignments.php" class="btn btn-outline-primary btn-sm"><i
                                class="bi bi-arrow-left me-2"></i>Back to
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
            </main>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function () {
            const urlParams = new URLSearchParams(window.location.search);
            const ass_id = urlParams.get('ass_id');

            if (!ass_id) {
                alert("Assignment ID missing");
                return;
            }

            // Fetch submission details
            $.getJSON(`api/student_submission_detail.php?ass_id=${ass_id}`, function (res) {
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