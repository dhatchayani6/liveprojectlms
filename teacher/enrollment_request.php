<?php include "../includes/auth_faculty.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        a {
            text-decoration: none !important;
        }

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
            background-color: #cfe2ff;
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

        .slot-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #2196f3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            color: white;
        }
    </style>
    <style>
        .slot-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #2196f3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            color: white;
        }

        .btn-success {
            background-color: #6feb58 !important;
            border: none;
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
                    <li><a href="dashboard.php" class="nav-link active d-flex align-items-center px-3 py-2"><i
                                class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                    <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2"><i
                                class="bi bi-book me-2"></i>Courses</a></li>
                    <li><a href="assignments.php" class="nav-link d-flex align-items-center px-3 py-2"><i
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
                    <h5 class="offcanvas-title fw-semibold" id="offcanvasSidebarLabel">Faculty Menu</h5>
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
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>
                    <!-- Committee Report button (hidden by default) -->
                    <button id="committeeReportBtn" class="d-none">
                        <i class="bi bi-file-bar-graph"></i> Committee Report
                    </button>
                </div>



                <!-- Assignment Cards -->
                <div class="container-fluid py-3">
                    <div class="row gy-3">
                        <div class="container mt-4" id="facultyRequests"></div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            loadPendingApprovals();

            function loadPendingApprovals() {
                $("#facultyRequests").html('<div class="text-center py-3">Loading...</div>');
                $.getJSON("api/faculty_get_pending_students.php", function (res) {
                    if (res.status !== 200) {
                        $("#facultyRequests").html('<div class="text-danger text-center">Error loading approvals</div>');
                        return;
                    }

                    if (res.data.length === 0) {
                        $("#facultyRequests").html('<div class="text-muted text-center">No pending approvals</div>');
                        return;
                    }

                    let html = "";
                    res.data.forEach(item => {
                        const remaining = item.remaining_seats;
                        html += `
          <div class="col-12 mb-3">
            <div class="card p-3 shadow-sm">
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center gap-3 flex-wrap">
                  <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                       style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                  <div>
                    <p class="mb-1 fw-semibold text-dark">${item.student_name}  &bull; Reg No: ${item.reg_no}</p>
                    <p class="text-muted mb-1 small">Slot: ${item.slot}</p>
                    <p class="text-muted mb-1 small">Course Code: ${item.course_code}</p>
                    <p class="text-muted mb-1 small">Course Name: ${item.course_name}</p>
                    <p class="text-muted mb-1 small">Department: ${item.department}</p>
                    <p class="text-muted mb-0 small">Remaining Seats: ${remaining} / ${item.seat_allotment}</p>
                  </div>
                </div>

                <div class="d-flex gap-2 flex-shrink-0">
                  <button class="btn btn-sm btn-success approve-btn px-3" data-id="${item.approval_id}" ${remaining === 0 ? "disabled" : ""}>
                    <i class="bi bi-hand-thumbs-up-fill me-1"></i>Accept
                  </button>
                  <button class="btn btn-sm btn-danger reject-btn px-3" data-id="${item.approval_id}">
                    <i class="bi bi-hand-thumbs-down-fill me-1"></i>Reject
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
                    });

                    $("#facultyRequests").html(html);
                });
            }

            // ✅ Approve
            $(document).on("click", ".approve-btn", function () {
                const id = $(this).data("id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Approving...");
                $.post("api/faculty_update_approval.php", {
                    approval_id: id,
                    action: "approve"
                }, function (res) {
                    if (res.status === 200) {
                        $btn.closest(".card").fadeOut(400, function () {
                            $(this).remove();
                        });
                    } else {
                        alert(res.message);
                        $btn.prop("disabled", false).text("Accept");
                    }
                }, "json");
            });

            // ❌ Reject
            $(document).on("click", ".reject-btn", function () {
                const id = $(this).data("id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Rejecting...");
                $.post("api/faculty_update_approval.php", {
                    approval_id: id,
                    action: "reject"
                }, function (res) {
                    if (res.status === 200) {
                        $btn.closest(".card").fadeOut(400, function () {
                            $(this).remove();
                        });
                    } else {
                        alert(res.message);
                        $btn.prop("disabled", false).text("Reject");
                    }
                }, "json");
            });
        });
    </script>

</body>

</html>