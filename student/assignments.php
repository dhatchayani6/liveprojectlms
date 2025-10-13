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
        .btn-back-assi {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 160px;
            justify-content: center;
        }

        .content-scroll {
            max-height: 648px !important;
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



        .btn-pending {
            background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;

        }

        .btn-submit {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-submitted {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;
        }

        .btn-review {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;

        }

        .btn-viewfeed {
            background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(139, 92, 246, 0.5);
            box-shadow: rgba(139, 92, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        small {
            font-size: 0.8rem;
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
                        <span class="id">Faculty ID: FAC21032305</span> &bull;
                        <span class="dept">Computer Science</span>
                    </div>
                </div>
            </div>

            <div class="content-scroll">
                <div class="p-4 min-vh-100">

                    <!-- Back Button -->
                    <a href="dashboard.php"><button class="btn-back-assi mb-3">
                            <i class="bi bi-arrow-left"></i> Back to Dashboard
                        </button></a>

                    <h5 class="mb-3">Your Assignments</h5>

                    <!-- Assignment Card 1 -->
                    <a href="assignment_pending.php">
                        <div class="card mb-3  " style="border-radius: 10px;border:none !important;    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="card-body ">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1 fw-bold">Data Analysis Project</h6>
                                    <button class=" btn-pending btn-sm rounded-2 "><small>Pending</small></button>

                                </div>
                                <div>
                                    <p class="mb-1 text-muted">Introduction to Data Science</p>

                                </div>
                                <div class=" d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Due: 2023-11-15</small>

                                    <button class=" btn-submit btn-sm rounded-2"><small>Submit Now</small></button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Assignment Card 2 -->
                    <a href="assignment_submit.php">
                        <div class="card mb-3 " style="border-radius: 10px;border:none !important;      background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1 fw-bold">Database Design</h6>
                                    <button class=" btn-submitted btn-sm rounded-2"><small>Submitted</small></button>
                                </div>
                                <div>
                                    <p class="mb-1 text-muted">Database Systems</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Due: 2023-11-18</small>
                                    <button class=" btn-review btn-sm rounded-2 p-1"><small>Review
                                            Submission</small></button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Assignment Card 3 -->
                    <a href="assignment_feedback.php">
                        <div class="card mb-3 " style="border-radius: 10px; border:none !important;     background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-1 fw-bold">Algorithm Implementation</h6>
                                    <button class=" btn-graded btn-sm rounded-2 p-1"><small>Graded: A</small></button>
                                </div>
                                <div>
                                    <p class="mb-1 text-muted">Algorithms</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Due: 2023-11-20</small>
                                    <button class=" btn-viewfeed btn-sm  rounded-2 p-1"
                                        style="background-color: #cda2f2; color: white;border:none !important;"><small>View
                                            Feedback</small></button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>




        </div>

    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>