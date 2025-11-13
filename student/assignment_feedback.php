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
            background-color: #cfe2ff;
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
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <aside class="sidebar d-none d-md-flex flex-column">
            <div class="text-center border-bottom p-4">
                <div class="avatar mx-auto mb-3">
                    <i class="bi bi-person-fill fs-1 text-primary"></i>
                </div>
                <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
                <p class="text-muted small">Student ID: <?php echo $_SESSION['regno']; ?></p>
            </div>

            <nav class="flex-grow-1 pt-3 px-3">
                <ul class="nav flex-column gap-3">
                    <li><a href="dashboard.php" class="nav-link d-flex align-items-center px-3 py-2"><i
                                class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                    <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2"><i
                                class="bi bi-book me-2"></i>Courses</a></li>
                    <li><a href="assignments.php" class="nav-link active d-flex align-items-center px-3 py-2"><i
                                class="bi bi-file-earmark-text me-2"></i>Assignments</a></li>
                </ul>
            </nav>
        </aside>

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
                <div id="feedbackContent" class="content-scroll">
                    <div class="text-center py-5 text-muted">Loading feedback...</div>
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
            const ass_id = urlParams.get("ass_id");

            if (!ass_id) {
                $("#feedbackContent").html('<div class="p-4 text-center text-danger">Invalid assignment ID</div>');
                return;
            }

            loadFeedback();

            function loadFeedback() {
                $.getJSON(`api/student_assignment_feedback.php?ass_id=${ass_id}`, function (res) {
                    if (res.status !== 200) {
                        $("#feedbackContent").html('<div class="p-4 text-center text-muted">No data found.</div>');
                        return;
                    }

                    const a = res.data;
                    const grade = a.marks_obtained ? a.marks_obtained : "N/A";
                    const hasFeedback = a.faculty_feedback ? true : false;

                    let html = `
            <div class="card rounded border mb-4">
              <div class="card-header d-flex align-items-center bg-secondary p-3" style="background: linear-gradient(rgb(233,233,233) 0%, rgb(196,196,196) 100%);">
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

            <div class="rounded mt-3 border">
              <div class="p-3 bg-light">
                <h6 class="mb-0 fw-semibold">Your Submission</h6>
              </div>
              <div class="p-3">
                <div class="mb-3">
                  <strong>Submitted On:</strong>
                  <div>${a.submission_date}</div>
                </div>
                <div class="mb-3">
                  <strong>Your Answer:</strong>
                  <div class="border rounded p-3 student-answer-block">${a.student_answer || "No text submission."}</div>
                </div>

                <div class="mb-3">
  <strong>Uploaded Files:</strong>
  <ul class="list-unstyled mt-2">
    ${(a.file_urls && a.file_urls.length > 0)
                            ? a.file_urls.map(f => {
                                const filePath = `../uploads/assignments/${f}`;
                                const fileName = f.split('/').pop();
                                const ext = fileName.split('.').pop().toLowerCase();

                                // Choose icon and color based on file type
                                const iconClass = ext === 'pdf'
                                    ? 'bi bi-file-earmark-pdf text-danger'
                                    : 'bi bi-file-earmark-text text-primary';

                                return `
              <li class="uploaded-file-item border rounded p-2 mb-2 d-flex align-items-center bg-light">
                <i class="${iconClass} me-2 fs-5 flex-shrink-0"></i>
                <a href="${filePath}" target="_blank" 
                   class="fw-medium text-decoration-none text-dark text-break flex-grow-1">
                  ${fileName}
                </a>
              </li>`;
                            }).join('')
                            : "<li class='text-muted'>No files uploaded.</li>"
                        }
  </ul>
</div>
`;

                    if (hasFeedback) {
                        html += `
              <div class="rounded mt-3 border">
                <div class="p-3 bg-light">
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

                    $("#feedbackContent").html(html);
                });
            }
        });
    </script>
</body>

</html>