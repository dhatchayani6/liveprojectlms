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
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

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
                        <span class="id">Faculty ID: FAC21032305</span> &bull;
                        <span class="dept">Computer Science</span>
                    </div>
                </div>
            </div>
            <div class="content-scroll">


                <div class="p-4">
                    <!-- Notifications -->
                    <!-- Back Button -->
                    <a href="dashboard.php" class="btn mb-3" style="background: linear-gradient(rgb(255, 158, 97) 0%, rgb(248, 125, 48) 50%, rgb(230, 109, 32) 51%, rgb(212, 94, 16) 100%);
                        color: white;
                        padding: 6px 12px;
                        border-radius: 6px;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 3px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                        text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;">
                        <i class="bi bi-arrow-left"></i> Back to Dashboard
                    </a>
                    <!-- Class Schedule Header -->
                    <h5 class="mb-3">Class Schedule</h5>

                    <!-- View Toggle Buttons -->
                    <div class="mb-3">
                        <button class="btn me-2" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                    color: white;
                    padding: 6px 12px;
                    border-radius: 6px;
                    border: 1px solid rgba(0, 0, 0, 0.2);
                    box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 3px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                    text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;">Weekly View</button>
                        <button class="btn" style="background: linear-gradient(rgb(245, 245, 245) 0%, rgb(224, 224, 224) 100%);
                    color: rgb(51, 51, 51);
                    padding: 6px 12px;
                    border-radius: 6px;
                    border: 1px solid rgba(0, 0, 0, 0.2);
                    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
                    text-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px;">Calendar View</button>
                    </div>


                    <!-- Class Schedule Cards -->
                    <div class="row">

                        <div class="col-lg-8 ">
                            <div class="rounded border">
                                <!-- Week Range -->
                                <div class="bg-opacity-25 rounded p-3 mb-3 fw-semibold" style=" background: linear-gradient(rgb(255 98 0 / 37%) 0%, rgb(229 91 0 / 32%) 100%);
    height: 50%;">
                                    November 13 - 19, 2023
                                </div>

                                <div class="p-4">
                                    <div class="bg-light shadow p-3 mb-3 rounded">
                                        <!-- Monday -->
                                        <div class="mb-4">
                                            <h6 class="fw-bold">Monday</h6>
                                            <div class=" rounded shadow-sm p-3 mb-2" style="    background: linear-gradient(rgb(232, 244, 255) 0%, rgb(213, 232, 251) 100%);
    border: 1px solid rgba(59, 130, 246, 0.3);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>CS1234:</strong> Introduction to Data Science <br>
                                                        <small class="text-muted">CS-101 • Lecture</small>
                                                    </div>
                                                    <span class="badge p-2" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                                                color: white;
                                                border: 1px solid rgba(0, 0, 0, 0.2);
                                                box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                                                text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
                                                position: relative;
                                                overflow: hidden;">10:00 - 11:30 AM</span>
                                                </div>
                                            </div>
                                            <div class="rounded shadow-sm p-3" style="    background: linear-gradient(rgb(232, 244, 255) 0%, rgb(213, 232, 251) 100%);
                                            border: 1px solid rgba(59, 130, 246, 0.3);
                                            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>CS3456:</strong> Algorithms <br>
                                                        <small class="text-muted">CS-203 • Lecture</small>
                                                    </div>
                                                    <span class="badge p-2" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                                                    color: white;
                                                    border: 1px solid rgba(0, 0, 0, 0.2);
                                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                                                    text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
                                                    position: relative;
                                                    overflow: hidden;">2:00 - 3:30 PM</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Tuesday -->
                                    <div class="mb-4">
                                        <div class="p-3 shadow bg-light rounded">
                                            <h6 class="fw-bold">Tuesday</h6>
                                            <div class=" rounded shadow-sm p-3" style="    background: linear-gradient(rgb(232, 244, 255) 0%, rgb(213, 232, 251) 100%);
    border: 1px solid rgba(59, 130, 246, 0.3);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>CS2345:</strong> Database Systems <br>
                                                        <small class="text-muted">CS-105 • Lecture</small>
                                                    </div>
                                                    <span class="badge p-2" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                                                    color: white;
                                                    border: 1px solid rgba(0, 0, 0, 0.2);
                                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                                                    text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
                                                    position: relative;
                                                    overflow: hidden;">1:00 - 2:30 PM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Wednesday -->
                                    <div class="mb-4">
                                        <div class="bg-light shadow p-3 rounded ">
                                            <h6 class="fw-bold">Wednesday</h6>
                                            <div class=" rounded shadow-sm p-3" style="    background: linear-gradient(rgb(232, 244, 255) 0%, rgb(213, 232, 251) 100%);
    border: 1px solid rgba(59, 130, 246, 0.3);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>CS1234:</strong> Introduction to Data Science <br>
                                                        <small class="text-muted">CS-101 • Lecture</small>
                                                    </div>
                                                    <span class="badge p-2" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                                                color: white;
                                                border: 1px solid rgba(0, 0, 0, 0.2);
                                                box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 1px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                                                text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
                                                position: relative;
                                                overflow: hidden;">10:00 - 11:30 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Upcoming Events -->
                        <div class="col-lg-4">
                            <div class="bg-white shadow rounded">
                                <div class="text-white p-2 rounded-top" style="    background: linear-gradient(rgb(97, 176, 255) 0%, rgb(43, 127, 216) 50%, rgb(0, 99, 220) 51%, rgb(2, 82, 188) 100%);
                                    color: white;
                                    padding: 6px 12px;
                                    border-radius: 6px;
                                    border: 1px solid rgba(0, 0, 0, 0.2);
                                    box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 3px, rgba(255, 255, 255, 0.3) 0px 1px 0px inset;
                                    text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;">
                                    <strong>Upcoming Events</strong>
                                </div>
                                <div class="p-4" style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
                            border: 1px solid rgba(0, 0, 0, 0.15);
                            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 2px 3px;">
                                    <div class="bg-light shadow p-3 rounded">
                                        <div class="mb-3">
                                            <strong>Data Science Midterm</strong><br>
                                            <small><i class="bi bi-calendar"></i> Nov 15, 2023</small><br>
                                            <small><i class="bi bi-clock"></i> 10:00 AM</small><br>
                                            <small><i class="bi bi-geo-alt"></i> Main Hall</small>
                                        </div>
                                    </div>
                                    <div class="bg-light shadow p-3 mt-3 rounded">
                                        <div class="mb-3">
                                            <strong>Data Science Midterm</strong><br>
                                            <small><i class="bi bi-calendar"></i> Nov 15, 2023</small><br>
                                            <small><i class="bi bi-clock"></i> 10:00 AM</small><br>
                                            <small><i class="bi bi-geo-alt"></i> Main Hall</small>
                                        </div>
                                    </div>
                                    <div class="bg-light shadow p-3 mt-3 rounded">
                                        <div class="mb-3">
                                            <strong>Data Science Midterm</strong><br>
                                            <small><i class="bi bi-calendar"></i> Nov 15, 2023</small><br>
                                            <small><i class="bi bi-clock"></i> 10:00 AM</small><br>
                                            <small><i class="bi bi-geo-alt"></i> Main Hall</small>
                                        </div>
                                    </div>

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