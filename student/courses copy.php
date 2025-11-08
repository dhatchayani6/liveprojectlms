<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
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

        .content-scroll {
            max-height: 648px !important;
        }

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
            overflow-y: scroll;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">
        <div class="content-container bg-light">

          
            <?php include ("header.php"); ?>            

            <div class="content-scroll">
                <div class="p-4">
                    <!-- Back Button -->
                    <a href="dashboard.php" class="btn mb-3 btn-blue-courses">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>

                    <h5 class="fw-semibold mb-3">Current Courses</h5>

                    <div class=" p-3 mb-4 courses-scroll">

                        <div class="fw-semibold text-dark mb-2">Slot A</div>
                        <a href="courses_detail.php" class="text-dark">
                            <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm">
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="fw-medium">CS2345: Database Systems</small>
                                    <button class="btn btn-blue-courses btn-sm">View Details</button>
                                </div>
                                <div class="progress-container mt-2">
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 42%;" role="progressbar"
                                            aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="percentage-label">42%</span>
                                </div>
                            </div>
                        </a>

                        <div class="fw-semibold text-dark mb-2">Slot B</div>
                        <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="fw-medium">CS3456: Algorithms</small>
                                <button class="btn btn-blue-courses btn-sm">View Details</button>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 78%;" role="progressbar" aria-valuenow="78"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">78%</span>
                            </div>
                        </div>

                        <div class="fw-semibold text-dark mb-2">Slot C</div>
                        <div class="slot-card text-center p-3 border rounded shadow-sm mb-2" style="background:#f8f9fa; max-width:100%; margin:auto;">
                            <button class="btn btn-blue-courses btn-sm w-10 fw-semibold" data-bs-toggle="modal" data-bs-target="#enrollSlotModal">Enroll in Slot C</button>
                        </div>



                        <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="fw-medium">CS5678: Web Development</small>
                                <button class="btn btn-blue-courses btn-sm">View Details</button>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 55%;" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">55%</span>
                            </div>
                        </div>

                        <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="fw-medium">CS6789: Mobile App Development</small>
                                <button class="btn btn-blue-courses btn-sm">View Details</button>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 22%;" role="progressbar" aria-valuenow="22"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">22%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="enrollSlotModal" tabindex="-1" aria-labelledby="enrollSlotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-semibold" id="enrollSlotModalLabel">Enroll in Slot E</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <!-- Search Bar -->
                    <div class="mb-3">
                        <input type="text" class="form-control rounded-pill shadow-sm" id="searchCourse" placeholder="Search course by name or code...">
                    </div>

                    <!-- Course List -->
                    <div id="courseList" class="d-flex flex-column gap-2">
                        <!-- Example Course Item -->
                        <div class="course-item p-3 rounded border d-flex justify-content-between align-items-start shadow-sm" data-course="CS101">
                            <div>
                                <div class="fw-semibold text-dark">CS101</div>
                                <div class="text-muted small">Intro to Programming</div>
                                <div class="text-muted small">Dr. Sai Amrish</div>
                            </div>
                            <button class="btn btn-outline-primary btn-sm select-btn">Select</button>
                        </div>

                        <div class="course-item p-3 rounded border d-flex justify-content-between align-items-start shadow-sm" data-course="CS102">
                            <div>
                                <div class="fw-semibold text-dark">CS102</div>
                                <div class="text-muted small">Data Structures</div>
                                <div class="text-muted small">Dr. Aakash</div>
                            </div>
                            <button class="btn btn-outline-primary btn-sm select-btn">Select</button>
                        </div>

                        <div class="course-item p-3 rounded border d-flex justify-content-between align-items-start shadow-sm" data-course="CS103">
                            <div>
                                <div class="fw-semibold text-dark">CS103</div>
                                <div class="text-muted small">Computer Architecture</div>
                                <div class="text-muted small">Dr. Manohar</div>
                            </div>
                            <button class="btn btn-outline-primary btn-sm select-btn">Select</button>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 pt-0">
                    <button id="requestJoinBtn" class="btn btn-primary w-100 fw-semibold rounded-pill py-2">
                        Request to Join (0)
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional JS for Search + Selection -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const searchInput = document.getElementById("searchCourse");
            const courseItems = document.querySelectorAll(".course-item");
            const requestBtn = document.getElementById("requestJoinBtn");
            let selectedCount = 0;

            // ✅ Search Function
            searchInput.addEventListener("input", () => {
                const query = searchInput.value.toLowerCase();
                courseItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    item.style.display = text.includes(query) ? "flex" : "none";
                });
            });

            // ✅ Selection Toggle
            courseItems.forEach(item => {
                const button = item.querySelector(".select-btn");
                button.addEventListener("click", () => {
                    const isSelected = button.classList.contains("btn-primary");

                    if (isSelected) {
                        // Unselect
                        button.classList.remove("btn-primary");
                        button.classList.add("btn-outline-primary");
                        button.textContent = "Select";
                        item.classList.remove("bg-light");
                        selectedCount--;
                    } else {
                        // Select
                        button.classList.add("btn-primary");
                        button.classList.remove("btn-outline-primary");
                        button.textContent = "Selected";
                        item.classList.add("bg-light");
                        selectedCount++;
                    }

                    requestBtn.textContent = `Request to Join (${selectedCount})`;
                });
            });
        });
    </script>
</body>

</html>