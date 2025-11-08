<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


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

        .pending-badge {
            background: linear-gradient(rgb(247, 107, 28) 0%, rgb(231, 76, 60) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            padding: 4px 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
            font-size: 0.8rem;
            width: 50%;
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

        .assignment-titles {
            font-size: medium;
            font-weight: 600;
        }

        .logout-btn {
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%);
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
            height: 1.5rem;
            font-size: smaller;
            font-weight: 700;
        }

        .bg-secondary {
            background: linear-gradient(rgb(226, 226, 226) 0%, rgb(187, 187, 187) 100%);
            border-bottom: 1px solid rgb(153, 153, 153);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px;
        }

        a .bi-chevron-left {
            /* background: white; */
            border-radius: 50%;
            padding: 2px;
            /* color: #000; */
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%) !important;
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
        }

        .bi-chevron-left::before {
            font-weight: 600 !important;
            font-size: 15px;

        }

        .pending a {
            font-size: 0.875rem;
        }

        .text-muted {
            font-size: 12px;
        }

        .profile-pic {
            margin-right: 0px !important;
        }

        .badge {
            padding: 6px 10px;
        }

        .bg-warning {
            --tw-bg-opacity: 1;
            background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1)) !important;
            --tw-text-opacity: 1;
            color: rgb(133 77 14 / var(--tw-text-opacity, 1));
        }

        .bg-success {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1));
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1)) !important;
        }
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container bg-light p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Assignment Approval
            </h5>

            <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
            <a href="../index.php"><button class="btn d-flex align-items-center logout-btn gap-2">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span> </button></a>
        </div>



        <div class="d-flex justify-content-between align-items-center p-3">
            <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to Dashboard</a>
            </h6>
        </div>

        <!-- Pending Assignments -->
        <div class="d-flex justify-content-between align-items-center p-3">
            <h6 class="mb-0 pending">Pending Assignments</h6>
        </div>

        <!-- Assignment Cards -->
        <div class="assignment-cards p-2">

            <!-- Card 1 -->
            <a href="assignment_details.php">
                <div class="assignment-card card p-3 shadow-sm mb-3">
                    <div class="row align-items-center">
                        <!-- Left section: Image + Details -->
                        <div class="col-12 d-flex flex-sm-row  align-items-start gap-3">

                            <!-- Profile Pic -->
                            <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic"
                                style="width:40px; height:40px; border-radius:50%; object-fit:cover;">

                            <!-- Text Section -->
                            <div class="flex-grow-1 w-100">
                                <!-- Title + Badge -->
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <strong class="title text-truncate">Database Normalization</strong>
                                    <span class="badge bg-success">On Time</span>
                                </div>

                                <!-- Course -->
                                <p class="text-muted mb-1">Course: Database Systems</p>

                                <!-- By + Submitted -->
                                <div class="d-flex flex-row justify-content-between text-muted small">
                                    <span>By: Alex Johnson (SID2023001)</span>
                                    <span>Submitted: 2023-11-16</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card 2 -->
            <div class="assignment-card card p-3 shadow-sm mb-3">
                <div class="row align-items-center">
                    <!-- Left section: Image + Details -->
                    <div class="col-12 d-flex flex-sm-row  align-items-start gap-3">

                        <!-- Profile Pic -->
                        <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic"
                            style="width:40px; height:40px; border-radius:50%; object-fit:cover;">

                        <!-- Text Section -->
                        <div class="flex-grow-1 w-100">
                            <!-- Title + Badge -->
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <strong class="title text-truncate">Database Normalization</strong>
                                <span class="badge bg-warning">Late</span>
                            </div>

                            <!-- Course -->
                            <p class="text-muted mb-1">Course: Database Systems</p>

                            <!-- By + Submitted -->
                            <div class="d-flex flex-row justify-content-between text-muted small">
                                <span>By: Aakash (1234567890)</span>
                                <span>Submitted: 2023-11-16</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>