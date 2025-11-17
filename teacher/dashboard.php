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
        <?php include('sidebar.php')?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <?php include('header.php')?>
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
                <div class="assignments-card">
                    <div class="card-icon">
                        <span class="material-icons">assignment</span>
                    </div>
                    <div class="card-content">
                        <a href="overall_assignments.php" class="text-decoration-none">
                            <div class="card-title">Assignments</div>
                        </a>
                        <div class="card-subtitle">Pending student submissions</div>
                    </div>
                    <div class="card-action">
                        <span class="assignment-count">-</span>
                    </div>
                </div>



                <div class="assignments-card">
                    <div class="card-icon">
                        <span class="material-symbols-outlined">
                            back_hand
                        </span>
                    </div>

                    <div class="card-content">
                        <a href="enrollment_request.php" class="text-decoration-none">
                            <div class="card-title">Enrollment Requests</div>
                        </a>
                        <div class="card-subtitle-enrollment">Pending student requests</div>
                    </div>

                    <div class="card-action">
                        <span class="enrollmentCount">0</span>
                    </div>
                </div>

                <div class="courses-section">
                    <div class="courses-header">
                        <h2>Active Courses</h2>
                        <button class="view-all-btn" style="    background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">View
                            All</button>
                    </div>

                    <div class="course-list">
                        <a href="courses-detail.php">
                            <div class="course-item">
                                <div class="course-details">
                                    <div class="course-name"></div>
                                    <div class="student-count"></div>
                                </div>
                                <div class="course-time"></div>
                            </div>
                        </a>
                    </div>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            fetch('api/faculty_courses.php')
                .then(res => res.json())
                .then(response => {
                    if (response.status === 'success') {
                        const courses = response.data;
                        let html = '';

                        courses.forEach(course => {
                            html += `
                        <a href="courses-detail.php?launch_id=${course.launch_id}">
                            <div class="course-item">
                                <div class="course-details">
                                    <div class="course-name">${course.course_code}: ${course.course_name}</div>
                                    <div class="student-count">${course.student_count} Students</div>
                                </div>
                                <div class="course-time">Slot: ${course.slot}</div>
                            </div>
                        </a>
                    `;
                        });

                        $('.course-list').html(html);
                    } else {
                        $('.course-list').html(`<p>${response.message}</p>`);
                    }
                })
                .catch(err => {
                    console.error(err);
                    $('.course-list').html(`<p>Unable to load courses. Please try again.</p>`);
                });
        });
    </script>
    <script>
        $(document).ready(function() {
            loadPendingRequestCount();

            function loadPendingRequestCount() {
                $.getJSON("api/faculty_pending_count.php", function(res) {
                    if (res.status === 200) {
                        $(".enrollmentCount").text(res.pending_count);
                        $(".card-subtitle-enrollment").text(
                            res.pending_count > 0 ?
                            `${res.pending_count} Pending student requests` :
                            "No pending submissions 🎉"
                        );
                    } else {
                        $(".enrollmentCount").text("0");
                    }
                }).fail(function() {
                    $(".enrollmentCount").text("0");
                });
            }

            // Optional: Auto-refresh count every 30 seconds
            setInterval(loadPendingRequestCount, 30000);
        });
    </script>
    <!-- Assignment Count -->
    <script>
        $(document).ready(function() {
            // Load pending assignment requests
            $.getJSON("api/faculty_assignment_count.php", function(res) {
                if (res.status === 200) {
                    const count = res.data.pending_assignments;
                    $(".assignment-count").text(count);
                    $(".card-subtitle").text(
                        count > 0 ?
                        `${count} pending student submissions` :
                        "No pending submissions 🎉"
                    );
                } else {
                    $(".assignment-count").text("0");
                    $(".card-subtitle").text("Unable to load data");
                }
            }).fail(function() {
                $(".assignment-count").text("0");
                $(".card-subtitle").text("Error fetching count");
            });
        });
    </script>

</body>

</html>