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

</head>

<body>
    <main class="dashboard-main">

        <div class="content-container">
            <div class="profile-area">
                <div
                    class="header d-flex justify-content-between p-4 align-items-center position-relative bg-primary text-white">
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

                            <li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li>
                        </ul>
                    </div>
                </div>
                <div class="user-profile">
                    <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic">
                    <div class="user-details">
                        <div class="name">Dr. Emily Rodriguez</div>
                        <div class="info">
                            <span class="id">Faculty ID: FAC21032305</span>
                            &bull;
                            <span class="dept">Computer Science</span>
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

                <div class="courses-section">
                    <div class="courses-header">
                        <h2>Active Courses</h2>
                        <button class="view-all-btn">View All</button>
                    </div>

                    <div class="course-list">
                        <a href="courses.php">
                            <div class="course-item">
                                <div class="course-details">
                                    <div class="course-name">CS1234: Introduction to Data Science</div>
                                    <div class="student-count">35 Students</div>
                                </div>
                                <div class="course-time">Mon, Wed &bull; 10:00 - 11:30 AM</div>
                            </div>
                        </a>

                        <div class="course-item">
                            <div class="course-details">
                                <div class="course-name">CS2345: Database Systems</div>
                                <div class="student-count">28 Students</div>
                            </div>
                            <div class="course-time">Tue, Thu &bull; 1:00 - 2:30 PM</div>
                        </div>

                        <div class="course-item">
                            <div class="course-details">
                                <div class="course-name">CS3456: Algorithms</div>
                                <div class="student-count">32 Students</div>
                            </div>
                            <div class="course-time">Wed, Fri &bull; 3:00 - 4:30 PM</div>
                        </div>
                    </div>
                </div>
                <div class="action-footer">
                    <button class="action-btn grade-btn">
                        <span class="material-icons">check_circle_outline</span>
                        Grade Assignments
                    </button>
                    <button class="action-btn add-btn">
                        <span class="material-icons">add</span>
                        Add New Course
                    </button>
                </div>
            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>