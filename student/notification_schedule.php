<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
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
        .bi-bell::before {
            color: orange;
        }

        .content-scroll {
            height: 100%;
            max-height: 750px !important;
            overflow: hidden;

        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <div class="d-flex gap-2"><a href="dashboard.php"><i
                                class="bi bi-chevron-left rounded-circle"></i></a>Introduction
                        to Data Science</div>
                </h5>
                <a href="../index.php">
                    <button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </div>

            <div class="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>

                </div>

                <div class="p-3 min-vh-100">
                    <!-- Notifications -->


                    <div class="rounded border">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center bg-secondary p-3">
                            <i class="bi bi-bell fs-5 me-2" style="
                                --tw-bg-opacity: 1;
                                background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1));
                                border: 2px solid #facc15; /* yellow border */
                                border-radius: 50%;
                                padding: 5px;
                                display: inline-flex;
                                align-items: center;
                                justify-content: center;
                                ">
                            </i>
                            <h6 class="mb-0 fw-semibold">Midterm Exam Schedule</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="border">
                            <div class="p-3">
                                <div class="mb-2">
                                    <small class="fw-normal">Details:</small>

                                </div>
                                <div class="mb-2">
                                    <small class="text-muted pt-2 fw-medium">This announcement requires your attention
                                        for the
                                        course
                                        "Database
                                        Systems".</small>
                                </div>

                                <div class="mb-2">
                                    <small class="fw-medium">Announcement Details:</small>

                                </div>

                                <div>
                                    <div class="border rounded p-4 mt-1" style="    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1));">
                                        <p class="mb-0" style="    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity, 1));">
                                            Important information regarding upcoming exams and schedule changes. Please
                                            review the attached documents and make note of the new dates.
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <small class="text-muted">Posted: 2023-11-10</small>
                                </div>
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