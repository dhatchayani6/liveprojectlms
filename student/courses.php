<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_student.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viana Study Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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

        .btn-blue-courses {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: #000;
            border-radius: 6px;
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 2px 4px;
        }

        .progress-bar {
            background: linear-gradient(to right, rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
        }

        .bg-courses-grey {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .courses-scroll {
            max-height: 515px;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <aside class="sidebar d-none d-md-flex flex-column">
            <div class="text-center border-bottom p-4">
                <div class="avatar mx-auto mb-3">
                    <i class="bi bi-mortarboard fs-1 text-primary"></i>
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

            <!-- Main -->
            <main class="p-4">
                <div class="mb-4">
                    <a href="dashboard.php" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                    </a>
                </div>

                <h4 class="fw-bold mb-4 text-dark">Current Courses</h4>

                <!-- Dynamic Courses -->
                <div class="courses-scroll" id="slotCoursesContainer">
                    <!-- Courses will be loaded here by JS -->
                </div>
            </main>
        </div>
    </div>

    <!-- Enroll Slot Modal -->
    <div class="modal fade" id="enrollSlotModal" tabindex="-1" aria-labelledby="enrollSlotModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="enrollSlotModalLabel">Enroll in Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- Search Bar -->
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-pill shadow-sm" id="searchCourse"
                            placeholder="Search course by name or code...">
                    </div>

                    <!-- Course List -->
                    <div id="courseList" class="d-flex flex-column gap-2"></div>
                </div>

                <div class="modal-footer border-0 pt-0">
                    <button id="requestJoinBtn" class="btn btn-primary w-100 fw-semibold rounded-pill py-2" disabled>
                        Request to Join (0)
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- 🔹 Existing JS logic from your version (unchanged) -->
    <script>
        $(document).ready(function () {
            loadStudentCourses();

            function loadStudentCourses() {
                $.getJSON("api/get_student_approved_courses.php", function (response) {
                    if (response.status !== "success") {
                        $("#slotCoursesContainer").html('<div class="text-danger text-center">Error loading courses</div>');
                        return;
                    }

                    const data = response.data;
                    let html = "";

                    data.forEach(item => {
                        if (item.has_approved) {
                            html += `
                <div class="fw-semibold text-dark mb-2">Slot ${item.slot}</div>
                <a href="courses_detail.php?launch_id=${item.launch_id}" class="text-dark text-decoration-none">
                  <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm slot-course" data-launch="${item.launch_id}">
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="fw-medium">${item.course_code}: ${item.course_name}</small>
                      <button class="btn btn-outline-primary btn-sm">View Details</button>
                    </div>
                    <div class="mt-2 d-flex align-items-center">
                      <div class="progress flex-grow-1" style="height:8px;">
                        <div class="progress-bar" style="width:0%;"></div>
                      </div>
                      <span class="ms-2 fw-medium small text-muted percentage-label">0%</span>
                    </div>
                  </div>
                </a>
              `;
                        } else {
                            html += `
                <div class="fw-semibold text-dark mb-2">Slot ${item.slot}</div>
                <div class="text-center p-3 border rounded shadow-sm mb-3" style="background:#f8f9fa;">
                  <button class="btn btn-blue-courses btn-sm fw-semibold enroll-btn"
                    data-slot="${item.slot}"
                    data-bs-toggle="modal" data-bs-target="#enrollSlotModal">
                    Enroll in Slot ${item.slot}
                  </button>
                </div>
              `;
                        }
                    });

                    $("#slotCoursesContainer").html(html);

                    $(".slot-course").each(function () {
                        const launchId = $(this).data("launch");
                        const card = $(this);

                        $.ajax({
                            url: "api/progress_utils.php",
                            type: "POST",
                            data: { launch_id: launchId },
                            success: function (resp) {
                                if (resp.status === 200) {
                                    const pct = resp.course_progress ?? 0;
                                    card.find(".progress-bar").css("width", pct + "%");
                                    card.find(".percentage-label").text(pct + "%");
                                }
                            }
                        });
                    });
                });
            }
        });
    </script>

    <!-- 🔹 Enroll modal logic (unchanged) -->
    <script>
        $(document).ready(function () {
            let selectedCourses = [];
            let courseData = [];

            $(document).on("click", ".enroll-btn", function () {
                const slot = $(this).data("slot");
                $("#enrollSlotModalLabel").text(`Enroll in ${slot}`);
                $("#courseList").html('<div class="text-center py-3">Loading...</div>');
                $("#requestJoinBtn").prop("disabled", true).text("Request to Join (0)");
                selectedCourses = [];

                $.getJSON("api/get_slot_courses.php", { slot: slot }, function (res) {
                    if (res.status !== 200) {
                        $("#courseList").html('<div class="text-danger text-center">Error loading</div>');
                        return;
                    }
                    courseData = res.data;
                    renderCourses(courseData);
                });
            });

            function renderCourses(data) {
                let html = "";
                data.forEach(c => {
                    let btnClass = "btn-outline-primary";
                    let btnText = "Select";
                    let disabled = "";

                    switch (c.approval_status) {
                        case "pending":
                            btnClass = "btn-secondary"; btnText = "Pending"; disabled = "disabled"; break;
                        case "approved":
                            btnClass = "btn-success"; btnText = "Approved"; disabled = "disabled"; break;
                        case "rejected":
                            btnClass = "btn-warning reapply-btn"; btnText = "Re-Apply"; break;
                    }

                    html += `
            <div class="course-item p-3 rounded border d-flex justify-content-between align-items-start shadow-sm" data-launch-id="${c.launch_id}">
              <div>
                <div class="fw-semibold text-dark">${c.course_code}</div>
                <div class="text-muted small">${c.course_name}</div>
                <div class="text-muted small">Faculty: ${c.name ?? "TBA"}</div>
              </div>
              <button class="btn ${btnClass} btn-sm select-btn" ${disabled}>${btnText}</button>
            </div>`;
                });
                $("#courseList").html(html);
            }

            $(document).on("input", "#searchCourse", function () {
                const q = $(this).val().toLowerCase();
                $(".course-item").each(function () {
                    $(this).toggle($(this).text().toLowerCase().includes(q));
                });
            });

            $(document).on("click", ".select-btn", function () {
                const $btn = $(this);
                const id = $btn.closest(".course-item").data("launch-id");
                if ($btn.hasClass("btn-primary")) {
                    $btn.removeClass("btn-primary").addClass("btn-outline-primary").text("Select");
                    selectedCourses = selectedCourses.filter(i => i !== id);
                } else {
                    $btn.addClass("btn-primary").removeClass("btn-outline-primary").text("Selected");
                    selectedCourses.push(id);
                }
                $("#requestJoinBtn").text(`Request to Join (${selectedCourses.length})`);
                $("#requestJoinBtn").prop("disabled", selectedCourses.length === 0);
            });

            $("#requestJoinBtn").on("click", function () {
                if (selectedCourses.length === 0) return;
                const btn = $(this);
                btn.prop("disabled", true).text("Sending...");

                $.ajax({
                    url: "api/apply_course.php",
                    type: "POST",
                    data: JSON.stringify({ launch_ids: selectedCourses }),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (res) {
                        if (res.status === 200) {
                            res.updated.forEach(u => {
                                const item = $(`.course-item[data-launch-id='${u.launch_id}']`);
                                item.find(".select-btn").removeClass("btn-outline-primary btn-primary btn-warning")
                                    .addClass("btn-secondary").text("Pending").prop("disabled", true);
                            });
                            selectedCourses = [];
                            btn.text("Request to Join (0)").prop("disabled", true);
                        } else alert(res.message);
                    },
                    error: () => alert("Server error"),
                    complete: () => btn.prop("disabled", false)
                });
            });

            $(document).on("click", ".reapply-btn", function () {
                const id = $(this).closest(".course-item").data("launch-id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Re-Applying...");
                $.ajax({
                    url: "api/apply_course.php",
                    type: "POST",
                    data: JSON.stringify({ launch_ids: [id] }),
                    contentType: "application/json",
                    dataType: "json",
                    success: function (res) {
                        if (res.status === 200) {
                            $btn.removeClass("btn-warning reapply-btn").addClass("btn-secondary")
                                .text("Pending").prop("disabled", true);
                        } else alert(res.message);
                    },
                    error: () => alert("Server error")
                });
            });
        });
    </script>
</body>

</html>