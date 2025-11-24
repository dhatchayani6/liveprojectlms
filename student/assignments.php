<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
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
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-btn {
            width: 100%;
            text-align: left;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247));
            border: 1px solid rgba(59, 130, 246, 0.5);
        }

        .btn-green {
            background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166));
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .btn-purple {
            background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242));
            border: 1px solid rgba(139, 92, 246, 0.5);
        }

        .btn-orange {
            background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139));
            border: 1px solid rgba(249, 115, 22, 0.5);
        }

        .menu-icon {
            border-radius: 50%;
            padding: 6px;
            margin-right: 8px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

        /* Assignment button styles */
        .btn-back-assi {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 160px;
            justify-content: center;
        }

        .content-scroll {
            max-height: 648px !important;
        }

        .summary-card {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .content-overflow-scroll {
            overflow-y: scroll;
            height: 100%;
            max-height: 370px;
        }

        .btn-pending {
            background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;
        }

        .btn-submit {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-submitted {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;
        }

        .btn-review {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;
        }

        .btn-viewfeed {
            background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(139, 92, 246, 0.5);
            box-shadow: rgba(139, 92, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        small {
            font-size: 0.8rem;
        }

        /* === FIXES for long titles & flex overflow === */
        /* Make assignment link behave like a block-level card (fill width) */
        .assignment-link {
            display: block;
            color: inherit;
        }

        /* Ensure the card itself can shrink inside flex containers */
        .card {
            min-width: 0;
        }

        .assignment-title {
            font-size: 15px;
            width: 100%;
            max-width: clamp(300px, 70vw, 1050px);
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
            word-break: break-word;
            flex: 1;
            min-width: 0;
        }



        /* If the title sits inside a flex row, ensure that row allows children to shrink */
        .d-flex .assignment-title {
            flex-shrink: 1;
            min-width: 0;
        }

        /* Small responsive tweak: keep sidebar visible on smaller screens (optional) */
        @media (max-width: 767px) {
            .sidebar {
                width: 100%;
            }
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
            <main class="p-4">
                <!-- Back Button -->
                <a href="dashboard.php"><button class="btn-back-assi p-2 runded-border mb-3">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </button></a>

                <h5 class="mb-3">Your Assignments</h5>

                <div id="assignmentsContainer"></div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            loadAssignments();

            function loadAssignments() {
                $("#assignmentsContainer").html('<div class="text-center text-muted p-4">Loading...</div>');

                $.getJSON("api/student_assignments.php", function (res) {
                    if (res.status !== 200) {
                        $("#assignmentsContainer").html('<div class="text-danger p-4 text-center">Unable to load assignments.</div>');
                        return;
                    }

                    if (res.data.length === 0) {
                        $("#assignmentsContainer").html('<div class="text-center text-muted p-4">No assignments available.</div>');
                        return;
                    }

                    let html = "";

                    res.data.forEach(item => {
                        const dueDate = item.due_date ? new Date(item.due_date).toISOString().slice(0, 10) : "N/A";
                        const status = item.status || "pending";
                        const marks = item.marks_obtained || 0;

                        let statusBadge = "";
                        let btnLabel = "";
                        let link = "#";

                        // UI logic
                        if (status === "pending") {
                            statusBadge = `<button class="btn btn-pending btn-sm rounded-2" style="width:125px;"><small>Pending</small></button>`;
                            btnLabel = "Submit Now";
                            link = `assignment_pending_new.php?ass_id=${item.ass_id}`;
                        } else if (status === "submitted" && !marks) {
                            statusBadge = `<button class="btn btn-warning btn-sm rounded-2" style="width:125px;"><small>Submitted</small></button>`;
                            btnLabel = "Review Submission";
                            link = `assignment_submit.php?ass_id=${item.ass_id}`;
                        } else if (status === "feedback" && marks) {
                            statusBadge = `<button class="btn btn-success btn-sm rounded-2" style="width:125px;"><small>Grade - ${marks}</small></button>`;
                            btnLabel = "View Feedback";
                            link = `assignment_feedback.php?ass_id=${item.ass_id}`;
                        }

                        html += `
                    <a href="${link}" class="text-decoration-none assignment-link">
                        <div class="card mb-3" style="border-radius:10px;border:none;
                            background:linear-gradient(#f9f9f9 0%, #e8e8e8 100%);
                            box-shadow:rgba(255,255,255,0.8)0px 1px 0px inset,rgba(0,0,0,0.1)0px 1px 2px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-1 fw-bold assignment-title">${item.title}</h6>
                                    ${statusBadge}
                                </div>
                                <div>
                                    <p class="mb-1 text-muted">${item.course_name}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Due: ${dueDate}</small>
                                    <button class="btn btn-submit btn-sm rounded-2" style="width:125px;">
                                        <small>${btnLabel}</small>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>`;
                    });

                    $("#assignmentsContainer").html(html);
                }).fail(function () {
                    $("#assignmentsContainer").html('<div class="text-danger p-4 text-center">Unable to load assignments (network error).</div>');
                });
            }
        });
    </script>
</body>

</html>