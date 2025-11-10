<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_faculty.php"; ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        body {
            background: repeating-linear-gradient(to right, rgba(138, 198, 242, 0.3) 0px, rgba(138, 198, 242, 0.3) 1px, rgba(164, 216, 245, 0.4) 1px, rgba(164, 216, 245, 0.4) 2px, rgba(180, 226, 247, 0.45) 2px, rgba(180, 226, 247, 0.45) 3px, rgba(164, 216, 245, 0.4) 3px, rgba(164, 216, 245, 0.4) 4px) 0% 0% / 8px 100%;
        }

        .header {
            background-color: #1a73e8;
            color: white;
            padding: 15px 20px;
        }

        .container {
            max-width: 64rem !important;
            height: 100vh;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .tab-btn {
            border: none;
            background: none;
            padding: 10px 20px;
            font-weight: 500;
            width: 100%;
        }

        .tab-btn.active {
            border-bottom: 3px solid #1a73e8;
            color: #1a73e8;
        }

        .assignment-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .assignment-cards {
            padding: 0 20px;
        }

        .pending-badge {
            background: linear-gradient(rgb(247, 107, 28) 0%, rgb(231, 76, 60) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            padding: 4px 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
            font-size: 0.8rem;
        }

        .nav-tabs .nav-link {
            font-weight: 500;
            color: #555;
        }

        .nav-tabs .nav-link.active {
            border-color: transparent transparent #1a73e8;
            color: #1a73e8;
            font-weight: 600;
        }

        .department,
        .faculty-id {
            font-size: 14px;
        }

        .dropdown-toggle::after {
            display: none !important;

        }
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container bg-light p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative p-4 bg-primary text-white">
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
                <div class="name">Dr. <?php echo htmlspecialchars($_SESSION['name'] ?? ''); ?></div>

                <div class="info">
                    <span class="id">Faculty ID: <?php echo htmlspecialchars($_SESSION['regno'] ?? ''); ?></span>
                    &bull;
                    <span class="dept">Medical</span>
                </div>
            </div>
        </div>

        <!-- Tabs -->
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

        <!-- Pending Assignments -->
        <div class="d-flex justify-content-between align-items-center p-3">
            <h6 class="mb-0 pending">Pending Assignments (8)</h6>
            <a href="overall_assignments.php">
                <button class="view-all-btn btn btn-outline-secondary" style="    background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
    color: white;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">
                    <span class="material-icons align-middle">assignment</span>
                    <span class="align-middle ms-1">View All</span>
                </button></a>

        </div>

        <!-- Assignment Cards -->
        <!-- Assignment Cards -->
        <div class="assignment-cards">

            <a href="course_wise_assignments.php">
                <!-- Card 1 -->
                <div class="assignment-card card p-3 shadow-sm mb-3">
                    <div class="row align-items-center">
                        <!-- Title -->
                        <div class="col-8 col-sm-8 col-md-9 col-lg-10 text-truncate">
                            <strong>Database Normalization </strong>
                        </div>
                        <!-- Status -->
                        <div class="col-3 col-sm-4 col-md-3 col-lg-2 text-sm-end mt-sm-0">
                            <span class="badge pending-badge text-light">Pending</span>
                        </div>
                    </div>


                    <!-- Info Row: Column on <640px, Row on ≥640px -->
                    <div class="d-flex flex-column flex-sm-row  text-sm-start">
                        <div class="flex-fill mb-sm-0">
                            <small class="text-muted">Course: Database Systems</small>
                        </div>
                        <div class="flex-fill mb-sm-0">
                            <small class="text-muted">Student: John Smith</small>
                        </div>
                        <div class="flex-fill  text-sm-end">
                            <small class="text-muted">Submitted: 2023-11-05</small>
                        </div>
                    </div>
                </div>
            </a>

            <a href="course_wise_assignments.php">
                <!-- Card 2 -->
                <div class="assignment-card card p-3 shadow-sm mb-3">
                    <div class="row align-items-center">
                        <div class="col-8 col-sm-8 col-md-9 col-lg-10 text-truncate">
                            <strong>Machine Learning Project</strong>
                        </div>
                        <div class="col-3 col-sm-4 col-md-3 col-lg-2 text-sm-end mt-sm-0">
                            <span class="badge pending-badge text-light">Pending</span>
                        </div>
                    </div>

                    <!-- Info Row updated to flex layout -->
                    <div class="d-flex flex-column flex-sm-row  text-sm-start">
                        <div class="flex-fill mb-sm-0">
                            <small class="text-muted">Course: Introduction to Data Science</small>
                        </div>
                        <div class="flex-fill mb-sm-0">
                            <small class="text-muted">Student: Emily Chen</small>
                        </div>
                        <div class="flex-fill  text-sm-end">
                            <small class="text-muted">Submitted: 2023-11-05</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>