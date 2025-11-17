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
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
       <?php include ("sidebar.php"); ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <?php include ("header.php"); ?>

            <!-- Dashboard Content -->
            <main class="p-4">
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

                <nav class="tabs-nav">
                    <a href="dashboard.php" class="tab <?php if ($current_page == 'dashboard.php')
                        echo 'active'; ?>">Dashboard</a>
                    <!-- <a href="assignments.php" class="tab <?php if ($current_page == 'assignments.php')
                        echo 'active'; ?>">
                        Assignments
                        <span class="badge">5</span>
                    </a> -->
                    <a href="courses.php" class="tab <?php if ($current_page == 'courses.php')
                        echo 'active'; ?>">Courses</a>
                </nav>

                <!-- Courses Section -->
                <div class="courses-section p-3">
                    <!-- <div class="courses-header d-flex justify-content-between align-items-center mb-1">
                        <h6>Your Courses</h6>
                        <a href="add-courses.php"><button class="btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                                   "><i class="bi bi-plus"></i>
                                Add Course</button></a>
                    </div> -->

                    <div class="course-list" id="facultyCourseList">
                        <p class="text-muted text-center">Loading courses...</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const courseContainer = document.getElementById("facultyCourseList");

            // Fetch courses for current faculty
            fetch("api/faculty_courses.php")
                .then(res => res.json())
                .then(response => {
                    console.log("API Response:", response);

                    if (response.status === "success" && response.data.length > 0) {
                        let html = "";

                        response.data.forEach(course => {
                            html += `
                        <div class="course-item d-flex justify-content-between align-items-center p-3 rounded shadow-sm mb-2 bg-light"
                             data-launch-id="${course.launch_id}"
                             style="cursor:pointer;">
                            <div>
                                <h6 class="mb-1">${course.course_code}: ${course.course_name}</h6>
                                <small class="text-muted">${course.student_count || 0} Students</small>
                            </div>
                            <div class="text-end">
                                <small class="text-secondary d-block mb-2">${course.schedule || "No Schedule"}</small>
                                <a href="courses-detail.php?launch_id=${course.launch_id}" 
                                   class="btn btn-outline-secondary btn-sm">Manage</a>
                            </div>
                        </div>
                    `;
                        });

                        courseContainer.innerHTML = html;

                        // Optional: Click on full course card
                        courseContainer.querySelectorAll(".course-item").forEach(card => {
                            card.addEventListener("click", function (e) {
                                // Avoid double triggering if Manage button clicked
                                if (e.target.tagName.toLowerCase() === "a") return;
                                const launchId = this.dataset.launchId;
                                window.location.href = `courses-detail.php?launch_id=${launchId}`;
                            });
                        });

                    } else {
                        courseContainer.innerHTML = `
                    <p class="text-muted text-center">No courses found for your account.</p>
                `;
                    }
                })
                .catch(error => {
                    console.error("Error loading courses:", error);
                    courseContainer.innerHTML = `
                <p class="text-danger text-center">Failed to load courses. Please try again later.</p>
            `;
                });
        });
    </script>

</body>

</html>