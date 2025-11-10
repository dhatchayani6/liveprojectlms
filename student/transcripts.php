<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_student.php"; ?>
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
        .btn-back {
            background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
            color: rgb(0, 0, 0);
            padding: 3px 12px;
            border-radius: 6px;
            border: 1px solid rgba(139, 92, 246, 0.5);
            box-shadow: rgba(139, 92, 246, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
        }

        .content-scroll {
            max-height: 648px !important;
        }

        .btn-download {
            background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(139, 92, 246, 0.5);
            box-shadow: rgba(139, 92, 246, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            padding: 3px 12px;
            border-radius: 6px;
        }

        .summary-card {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .content-overflow-scroll {
            overflow-y: scroll;
            height: 100%;
            max-height: 370px;
        }

        .text-purple {
            color: #7E22CE;
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
                    <div class="d-flex gap-2">
                        <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Viana Study

                    </div>
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
                    <a href="dashboard.php"><button class="btn-back mb-3">
                            <i class="bi bi-arrow-left"></i> Back to Dashboard
                        </button></a>

                    <div class="d-flex justify-content-between p-3">
                        <small class="fw-normal mb-0">Academic Transcripts</small>
                        <button class="btn btn-download btn-sm"> <small>Download Official Transcript</small>
                        </button>
                    </div>


                    <!-- Academic Summary -->
                    <div class="rounded border p-3" style="background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">

                        <small class="fw-normal d-block mb-3 text-muted" style="font-size: 0.8rem;">
                            ACADEMIC SUMMARY
                        </small>

                        <div class="academic-summary row g-4 p-3">
                            <div class="col-12 col-md-4">
                                <div class="summary-card p-3 border rounded shadow-sm h-100">
                                    <h6 class="text-muted">Cumulative GPA</h6>
                                    <h4 class="fw-bold text-purple">3.75</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="summary-card p-3 border rounded shadow-sm h-100">
                                    <h6 class="text-muted">Total Credits</h6>
                                    <h4 class="fw-bold text-purple">27</h4>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="summary-card p-3 border rounded shadow-sm h-100">
                                    <h6 class="text-muted">Academic Standing</h6>
                                    <h4 class="fw-bold text-purple">Good</h4>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="content-overflow-scroll mt-3">
                        <!-- Fall 2023 -->
                        <div class="rounded border" style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="semester-card p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="fw-normal mb-0">Fall 2023</small>
                                    <span style="background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
    color: rgb(0, 0, 0);
    border: 1px solid rgba(139, 92, 246, 0.5);
    box-shadow: rgba(139, 92, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
    text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px; padding: 2px 8px;
            border-radius: 6px;"><small>Current</small></span>
                                </div>

                                <div class="rounded-5 ">
                                    <table class="table table-responisve table-bottom-border align-middle mb-0">
                                        <thead>
                                            <tr class="text-muted small">
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>COURSE</small>
                                                </th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>TITLE</small></th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>CREDITS</small>
                                                </th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>GRADE</small></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 0.8rem;">
                                            <tr>
                                                <td>CS1234</td>
                                                <td>Introduction to Data Science</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>CS2345</td>
                                                <td>Database Systems</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>CS3456</td>
                                                <td>Algorithms</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                        </tbody>

                                    </table>


                                </div>
                            </div>
                        </div>

                        <!-- Spring 2023 -->
                        <div class="rounded border mt-3" style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="semester-card p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="fw-normal mb-0">Spring 2023</small>
                                    <span style="background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
    color: rgb(0, 0, 0);
    border: 1px solid rgba(16, 185, 129, 0.5);
    box-shadow: rgba(16, 185, 129, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
    text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px; padding: 2px 8px;
            border-radius: 6px;"><small>Completed</small></span>
                                </div>

                                <table class="table table-bottom-border align-middle mb-0">
                                    <thead>
                                        <tr class="text-muted small">
                                            <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>COURSE</small>
                                            </th>
                                            <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>TITLE</small></th>
                                            <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>CREDITS</small>
                                            </th>
                                            <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>GRADE</small></th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 0.8rem;">
                                        <tr>
                                            <td>CS1111</td>
                                            <td>Programming Fundamentals</td>
                                            <td>4</td>
                                            <td><span class="text-success fw-bold">A</span></td>
                                        </tr>
                                        <tr>
                                            <td>CS2222</td>
                                            <td>Data Structures</td>
                                            <td>4</td>
                                            <td><span class="text-success fw-bold">A-</span></td>
                                        </tr>
                                        <tr>
                                            <td>CS3333</td>
                                            <td>Computer Architecture</td>
                                            <td>3</td>
                                            <td><span class="text-success fw-bold">B+</span></td>
                                        </tr>
                                    </tbody>

                                </table>

                                <div class="d-flex justify-content-end p-3">
                                    <button class="btn-download fw-medium"> <small>Semester GPA: 3.80
                                        </small></button>
                                </div>
                            </div>
                        </div>
                        <!-- fall 2022 -->
                        <div class="rounded border mt-3" style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    border: 1px solid rgba(0, 0, 0, 0.15);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="semester-card p-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="fw-normal mb-0">Fall 2022</small>
                                    <span style="background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
    color: rgb(0, 0, 0);
    border: 1px solid rgba(16, 185, 129, 0.5);
    box-shadow: rgba(16, 185, 129, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
    text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px; padding: 2px 8px;
            border-radius: 6px;"><small>Completed</small></span>
                                </div>

                                <div class="rounded-5 ">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                            <tr class="text-muted small">
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>COURSE</small>
                                                </th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>TITLE</small></th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>CREDITS</small>
                                                </th>
                                                <th style="    --tw-text-opacity: 1;
                                        color: rgb(107 114 128 / var(--tw-text-opacity, 1));"><small>GRADE</small></th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 0.8rem;">
                                            <tr>
                                                <td>CS1234</td>
                                                <td>Introduction to Data Science</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>CS2345</td>
                                                <td>Database Systems</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                            <tr>
                                                <td>CS3456</td>
                                                <td>Algorithms</td>
                                                <td>4</td>
                                                <td><span class="text-primary">In Progress</span></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <div class="d-flex justify-content-end p-3">
                                        <button class="btn-download fw-medium"> <small>Semester GPA: 3.70
                                            </small></button>
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