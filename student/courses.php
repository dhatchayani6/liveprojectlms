<!DOCTYPE html>
<html lang="en">

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

            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Viana Study
                </h5>
                <a href="../index.php">
                    <button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </div>

            <!-- User Profile -->
            <div class="user-profile"
                style="background: linear-gradient(rgb(240, 246, 255), rgb(216, 232, 255)); border-bottom: 1px solid rgb(184, 208, 240); box-shadow: rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
                <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic">
                <div class="user-details ps-2">
                    <div class="name">Dr. Emily Rodriguez</div>
                    <div class="info">
                        <span class="id">Student ID: FAC21032305</span> &bull;
                        <span class="dept">Computer Science</span>
                    </div>
                </div>
            </div>

            <div class="content-scroll">
                <div class="p-4">
                    <!-- Back Button -->
                    <a href="dashboard.php" class="btn mb-3 btn-blue-courses">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>

                    <h5 class="fw-semibold mb-3">Current Courses</h5>

                    <div class=" p-3 mb-4 courses-scroll">

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

                        <div class="mb-3 p-3 bg-courses-grey rounded shadow-sm">
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="fw-medium">CS4567: Computer Networks</small>
                                <button class="btn btn-blue-courses btn-sm">View Details</button>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar" style="width: 30%;" role="progressbar" aria-valuenow="30"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">30%</span>
                            </div>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>