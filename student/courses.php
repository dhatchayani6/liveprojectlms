<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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
        }

        small i {
            --tw-text-opacity: 1;
            color: rgb(249 115 22 / var(--tw-text-opacity, 1));
            font-size: 10px;
        }

        /* .content-scroll {
            max-height: 100% !important;
        } */

        .btn-blue-courses {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
        }

        .progress-bar {
            background: linear-gradient(to right, rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            box-shadow: rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
        }

        /* Make the progress container flexible */
        .progress-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .progress {
            flex-grow: 1;
            height: 12px;
        }

        .percentage-label {
            font-size: 13px;
            font-weight: 600;
            color: #555;
            min-width: 35px;
            text-align: right;
        }

        .bg-courses-grey {
            background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;
        }

        .courses-scroll {
            height: 100%;
            max-height: 515px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">
        <div class="content-container bg-light">


            <?php include("header.php"); ?>

            <div class="content-scroll">
                <div class="p-4">
                    <!-- Back Button -->
                    <a href="dashboard.php" class="btn mb-3 btn-blue-courses">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>

                    <h5 class="fw-semibold mb-3">Current Courses</h5>

                    <div class=" p-3 mb-4 courses-scroll">
                        <div id="slotCoursesContainer" class="mt-3"></div>

                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Enroll Slot Modal -->
    <div class="modal fade" id="enrollSlotModal" tabindex="-1" aria-labelledby="enrollSlotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="enrollSlotModalLabel">Enroll in Slot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- Search Bar -->
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-pill shadow-sm" id="searchCourse" placeholder="Search course by name or code...">
                    </div>

                    <!-- Course List (dynamically loaded) -->
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


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // function markMaterialComplete(topicId, materialId) {
        //     const launchId = new URLSearchParams(window.location.search).get("launch_id");

        //     fetch("api/mark_material_complete.php", {
        //         method: "POST",
        //         headers: {
        //             "Content-Type": "application/x-www-form-urlencoded"
        //         },
        //         body: `launch_id=${launchId}&topic_id=${topicId}&material_id=${materialId}`
        //     });
        // }

        // markMaterialComplete(currentTopicId, materialId);
    </script>

    <script>
        $(document).ready(function() {
            loadStudentCourses();

            function loadStudentCourses() {
                $.getJSON("api/get_student_approved_courses.php", function(response) {
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
                            <button class="btn btn-blue-courses btn-sm">View Details</button>
                        </div>
                        <div class="progress-container mt-2">
                            <div class="progress">
                                <div class="progress-bar" 
                                     style="width:0%;" 
                                     role="progressbar"></div>
                            </div>
                            <span class="percentage-label">0%</span>
                        </div>
                    </div>
                </a>
                `;
                        } else {
                            html += `
                <div class="fw-semibold text-dark mb-2">Slot ${item.slot}</div>
                <div class="slot-card text-center p-3 border rounded shadow-sm mb-2"
                    style="background:#f8f9fa; max-width:100%; margin:auto;">
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

                    // ✅ AFTER rendering, fetch progress for each approved course
                    $(".slot-course").each(function() {
                        const launchId = $(this).data("launch");
                        const card = $(this);

                        $.ajax({
                            url: "api/progress_utils.php",
                            type: "POST",
                            data: {
                                launch_id: launchId
                            },
                            success: function(resp) {
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

    <script>
        $(document).ready(function() {
            let selectedCourses = [];
            let courseData = [];

            // 🔹 Load slot courses dynamically
            $(document).on("click", ".enroll-btn", function() {
                const slot = $(this).data("slot");
                $("#enrollSlotModalLabel").text(`Enroll in ${slot}`);
                $("#courseList").html('<div class="text-center py-3">Loading...</div>');
                $("#requestJoinBtn").prop("disabled", true).text("Request to Join (0)");
                selectedCourses = [];

                $.getJSON("api/get_slot_courses.php", {
                    slot: slot
                }, function(res) {
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
                    let bg = "";

                    switch (c.approval_status) {
                        case "pending":
                            btnClass = "btn-secondary";
                            btnText = "Pending";
                            disabled = "disabled";
                            break;
                        case "approved":
                            btnClass = "btn-success";
                            btnText = "Approved";
                            disabled = "disabled";
                            break;
                        case "rejected":
                            btnClass = "btn-warning reapply-btn";
                            btnText = "Re-Apply";
                            break;
                    }

                    html += `
                    <div class="course-item p-3 rounded border d-flex justify-content-between align-items-start shadow-sm ${bg}" data-launch-id="${c.launch_id}">
                    <div>
                        <div class="fw-semibold text-dark">${c.course_code}</div>
                        <div class="text-muted small">${c.course_name}</div>
                        <div class="text-muted small">Faculty Name: ${c.name ?? "TBA"}</div>
                    </div>
                    <button class="btn ${btnClass} btn-sm select-btn" ${disabled}>${btnText}</button>
                    </div>`;
                });
                $("#courseList").html(html);
            }

            // 🔹 Search
            $(document).on("input", "#searchCourse", function() {
                const q = $(this).val().toLowerCase();
                $(".course-item").each(function() {
                    $(this).toggle($(this).text().toLowerCase().includes(q));
                });
            });

            // 🔹 Toggle selection
            $(document).on("click", ".select-btn", function() {
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

            // 🔹 Send all selected for approval
            $("#requestJoinBtn").on("click", function() {
                if (selectedCourses.length === 0) return;
                const btn = $(this);
                btn.prop("disabled", true).text("Sending...");

                $.ajax({
                    url: "api/apply_course.php",
                    type: "POST",
                    data: JSON.stringify({
                        launch_ids: selectedCourses
                    }),
                    contentType: "application/json",
                    dataType: "json",
                    success: function(res) {
                        if (res.status === 200) {
                            res.updated.forEach(u => {
                                const item = $(`.course-item[data-launch-id='${u.launch_id}']`);
                                const button = item.find(".select-btn");
                                button.removeClass("btn-outline-primary btn-primary btn-warning")
                                    .addClass("btn-secondary")
                                    .text("Pending")
                                    .prop("disabled", true);
                            });
                            selectedCourses = [];
                            btn.text("Request to Join (0)").prop("disabled", true);
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function() {
                        alert("Server error");
                    },
                    complete: function() {
                        btn.prop("disabled", false);
                    }
                });
            });

            // 🔹 Reapply logic
            $(document).on("click", ".reapply-btn", function() {
                const id = $(this).closest(".course-item").data("launch-id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Re-Applying...");
                $.ajax({
                    url: "api/apply_course.php",
                    type: "POST",
                    data: JSON.stringify({
                        launch_ids: [id]
                    }),
                    contentType: "application/json",
                    dataType: "json",
                    success: function(res) {
                        if (res.status === 200) {
                            $btn.removeClass("btn-warning reapply-btn")
                                .addClass("btn-secondary")
                                .text("Pending")
                                .prop("disabled", true);
                        } else {
                            alert(res.message);
                        }
                    },
                    error: function() {
                        alert("Server error");
                    }
                });
            });
        });
    </script>



</body>

</html>