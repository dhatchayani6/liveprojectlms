<?php include "../includes/auth_faculty.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
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

        .btn-gradient-glossy {
            position: relative;
            background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow:
                rgba(255, 255, 255, 0.4) 0px 1px 0px inset,
                rgba(0, 0, 0, 0.3) 0px 1px 3px;
            text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
            overflow: hidden;
            border-radius: 8px;
            padding: 6px 25px;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        .btn-success {
            background-color: #8BC34A !important;
            border: none;
            border-radius: 8px;

        }

        .bg-success {
            background-color: #8BC34A !important;
            border: none;
            border-radius: 8px;
        }

        .form-check-input {
            border: 1px solid #0000ffa1;
        }
    </style>

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

                            <a href="../index.php">
                                <li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="container mt-4 mb-5">
                    <h6 class="fw-bold mb-3">Today's Class Schedule</h6>

                    <!-- Slot Card -->
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                                <div>
                                    <h6 class="fw-semibold mb-1">Slot A</h6>
                                    <p class="mb-1 text-muted small">8:00 - 9:30 AM</p>
                                    <p class="text-primary fw-semibold small mb-0">CS1234: Introduction to Data Science
                                    </p>
                                </div>
                                <span class="text-light bg-success px-3 py-2 mt-2 mt-md-0">90 min left</span>
                            </div>

                            <p class="small text-secondary mb-2">Present: <span class="fw-semibold">0/4</span></p>

                            <div class="d-flex gap-2 mb-3 flex-wrap">
                                <button class="btn btn-sm btn-gradient-glossy flex-fill fw-semibold">Mark All
                                    Present</button>
                                <button class="btn btn-sm btn-success flex-fill fw-semibold">Save Attendance</button>
                            </div>

                            <!-- Students in Nearby Zone -->
                            <div>
                                <h6 class="fw-semibold mb-2">Students in Nearby Zone</h6>

                                <div class="list-group border-0">
                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="../images/image.png" alt="John Smith" class="rounded-circle me-3"
                                                width="40" height="40">
                                            <div>
                                                <p class="mb-0 fw-semibold">John Smith</p>
                                                <small class="text-muted">CS2023001</small>
                                            </div>
                                        </div>
                                        <input class="form-check-input" type="checkbox">
                                    </div>

                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="../images/image.png" alt="Emily Chen" class="rounded-circle me-3"
                                                width="40" height="40">
                                            <div>
                                                <p class="mb-0 fw-semibold">Emily Chen</p>
                                                <small class="text-muted">CS2023002</small>
                                            </div>
                                        </div>
                                        <input class="form-check-input" type="checkbox">
                                    </div>

                                    <div class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="../images/image.png" alt="Michael Brown"
                                                class="rounded-circle me-3" width="40" height="40">
                                            <div>
                                                <p class="mb-0 fw-semibold">Michael Brown</p>
                                                <small class="text-muted">CS2023003</small>
                                            </div>
                                        </div>
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>

                            <!-- Not in Nearby Zone -->
                            <div class="mt-3">
                                <h6 class="fw-semibold mb-2">Not in Nearby Zone</h6>
                                <div
                                    class="list-group-item d-flex align-items-center justify-content-between bg-light rounded">
                                    <div class="d-flex align-items-center">
                                        <img src="../images/image.png" alt="Sarah Johnson" class="rounded-circle me-3"
                                            width="40" height="40">
                                        <div>
                                            <p class="mb-0 fw-semibold text-secondary">Sarah Johnson</p>
                                            <small class="text-muted">CS2023004</small>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <input class="form-check-input" type="checkbox">
                                        <p class="text-danger mb-0 small">Not Nearby</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button class="btn btn-gradient-glossy w-100 fw-semibold">Submit & Archive
                                    Attendance</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>