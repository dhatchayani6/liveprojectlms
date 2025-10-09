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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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



                <!-- Courses Section -->
                <div class="courses-section p-3">
                    <div class="courses-header d-flex justify-content-between align-items-center mb-1">
                        <h6>Your Courses</h6>
                        <a href="add-courses.php"><button class="btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                                   "><i class="bi bi-plus"></i>
                                Add Course</button></a>
                    </div>

                    <div class="course-list">
                        <!-- Course 1 -->
                        <a href="courses-detail.php" class="text-decoration-none text-dark">
                            <div
                                class="course-item d-flex justify-content-between align-items-center p-3 rounded shadow-sm mb-1 bg-light">
                                <div>
                                    <h6 class="mb-1">CS1234: Introduction to Data Science</h6>
                                    <small class="text-muted">35 Students</small>
                                </div>
                                <div class="text-end">
                                    <small class="text-secondary d-block mb-2">Mon, Wed 10:00 - 11:30 AM</small>
                                    <a href="courses-detail.php" class="btn btn-outline-secondary btn-sm">Manage</a>
                                </div>
                            </div>
                        </a>

                        <!-- Course 2 -->
                        <a href="courses-detail.php" class="text-decoration-none text-dark">
                            <div
                                class="course-item d-flex justify-content-between align-items-center p-3 rounded shadow-sm mb-1 bg-light">
                                <div>
                                    <h6 class="mb-1">CS2345: Database Systems</h6>
                                    <small class="text-muted">28 Students</small>
                                </div>
                                <div class="text-end">
                                    <small class="text-secondary d-block mb-2">Tue, Thu 1:00 - 2:30 PM</small>
                                    <a href="courses-detail.php" class="btn btn-outline-secondary btn-sm">Manage</a>
                                </div>
                            </div>
                        </a>

                        <!-- Course 3 -->
                        <a href="courses-detail.php" class="text-decoration-none text-dark">
                            <div
                                class="course-item d-flex justify-content-between align-items-center p-3 rounded shadow-sm mb-1 bg-light">
                                <div>
                                    <h6 class="mb-1">CS3456: Algorithms</h6>
                                    <small class="text-muted">32 Students</small>
                                </div>
                                <div class="text-end">
                                    <small class="text-secondary d-block mb-2">Wed, Fri 3:00 - 4:30 PM</small>
                                    <a href="courses-detail.php" class="btn btn-outline-secondary btn-sm">Manage</a>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>



            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>