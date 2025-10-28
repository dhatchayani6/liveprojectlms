<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


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
        /* .profile-area {
            height: 100%;
        } */
    </style>

</head>

<body>
    <main class="dashboard-main">

        <div class="content-container">
            <div class="profile-area">
                <div class="header d-flex justify-content-between p-4 align-items-center position-relative bg-primary text-white">
                    <h5 class="mb-0">Viana Study</h5>

                    <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex flex-column justify-content-between " style="height: 18px;">
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><button class="dropdown-item w-100 text-start">Dashboard</button></li>
                            <li><button class="dropdown-item w-100 text-start">Assignments</button></li>
                            <li><button class="dropdown-item w-100 text-start">Courses</button></li>

                            <a href="../index.php">
                                <li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="user-profile">
                    <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic">
                    <div class="user-details">
                        <div class="name">Dr. <?php echo htmlspecialchars($_SESSION['name'] ?? ''); ?></div>

                        <div class="info">
                            <span class="id">Faculty ID: <?php echo htmlspecialchars($_SESSION['regno'] ?? ''); ?></span>
                            &bull;
                            <span class="dept">Medical</span>
                        </div>
                    </div>
                </div>

                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

                <nav class="tabs-nav">
                    <a href="dashboard.php" class="tab <?php if ($current_page == 'dashboard.php')
                                                            echo 'active'; ?>">Dashboard</a>
                    <a href="assignments.php" class="tab <?php if ($current_page == 'assignments.php')
                                                                echo 'active'; ?>">
                        Assignments
                        <span class="badge">5</span>
                    </a>
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
                        <span class="assignment-count">5</span>
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
                        <div class="card-subtitle">Pending student requests</div>
                    </div>
                    <div class="card-action">
                        <span class="assignment-count">12</span>
                    </div>
                </div>


                <div class="assignments-cards  p-3 m-3">
                    <h6>Todays Class Schedule</h6>
                    <div class="card-content">
                        <div class="d-flex align-items-center justify-content-between border rounded-3 p-3 mb-2 shadow-sm" style="background:#e3f2fd;">
                            <div class="d-flex align-items-center">
                                <div class="slot-icon me-3">
                                    <span class="fw-bold text-white">A</span>
                                </div>
                                <div>
                                    <div class="fw-semibold text-dark">Slot A</div>
                                    <small class="text-muted">8:00 - 9:30 AM</small><br>
                                    <small class="fw-semibold text-primary">CS1234: Introduction to Data Science</small>
                                </div>
                            </div>
                            <a href="attendance.php">
                                <button class="btn btn-outline-primary btn-sm rounded-pill fw-semibold">Mark Attendance</button>
                            </a>
                        </div>
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


                <!-- <div class="action-footer">
                    <button class="action-btn grade-btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">
                        <span class="material-icons">check_circle_outline</span>
                        Grade Assignments
                    </button>
                    <button class="action-btn add-btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">
                        <span class="material-icons">add</span>
                        Add New Course
                    </button>
                </div> -->
            </div>
        </div>
    </main>


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
</body>

</html>