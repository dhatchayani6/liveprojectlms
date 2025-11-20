<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment Feedback - Student Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }

        .sidebar .nav-link {
            color: #495057;
            border-radius: 0.5rem;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f3f5;
        }

        .avatar {
            height: 80px;
            width: 80px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex: 1;
            min-width: 0;
            overflow-x: hidden;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            min-width: 100px;
            text-align: center;
        }

        .student-answer-block {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: pre-wrap;
            background-color: #f8f9fa;
        }

        .pdf-viewer {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
        }

        .pdf-viewer iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

        /* #content-scroll {
            height: 100%;
            max-height: 721px;
            overflow-y: scroll;
        } */

        #content-scroll {
            height: calc(100vh - 80px);
            /* adjust header height */
            overflow-y: auto;
        }


        /* Responsive file list styling */
        .uploaded-file-item {
            transition: background 0.2s ease, transform 0.1s ease;
            word-break: break-word;
            flex-wrap: wrap;
        }

        .uploaded-file-item:hover {
            background: #f1f3f5;
            transform: scale(1.01);
        }

        .uploaded-file-item a {
            display: block;
            overflow-wrap: break-word;
            white-space: normal;
        }

        @media (max-width: 991.98px) {

            /* For small and medium screens */
            .uploaded-file-item {
                flex-direction: column;
                align-items: flex-start !important;
                text-align: left;
            }

            .uploaded-file-item i {
                margin-bottom: 6px;
            }

            .uploaded-file-item a {
                width: 100%;
            }
        }

        label {
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <header
                class="d-flex justify-content-between align-items-center px-4 py-3 border-bottom bg-white shadow-sm">
                <h6 class="fw-semibold m-0">Admission Portal</h6>

                <div>
                    <a href="logout.php" class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </header>

            <!-- Offcanvas Sidebar -->
            <div class="offcanvas offcanvas-start offcanvas-full" tabindex="-1" id="offcanvasSidebar"
                aria-labelledby="offcanvasSidebarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-semibold" id="offcanvasSidebarLabel">Student Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <aside class="sidebar flex-column h-100 w-100">
                        <div class="text-center border-bottom p-4">
                            <div class="avatar mx-auto mb-3">
                                <i class="bi bi-person-fill fs-1 text-primary"></i>
                            </div>
                            <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
                            <p class="text-muted small">Student ID: <?php echo $_SESSION['regno']; ?></p>
                        </div>

                        <nav class="flex-grow-1 pt-3 px-4">
                            <ul class="nav flex-column gap-3">

                                <!-- Institutions -->
                                <li>
                                    <a href="institutions.php" class="nav-link d-flex align-items-center px-3 py-2
                            <?php echo ($currentPage == 'institutions.php') ? 'active' : ''; ?>">
                                        <i class="bi bi-building me-2"></i> Institutions
                                    </a>
                                </li>

                                <!-- Programs -->
                                <li>
                                    <a href="programs.php" class="nav-link d-flex align-items-center px-3 py-2
                            <?php echo ($currentPage == 'programs.php') ? 'active' : ''; ?>">
                                        <i class="bi bi-collection me-2"></i> Programs
                                    </a>
                                </li>

                                <!-- Courses -->
                                <li>
                                    <a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2
                            <?php echo ($currentPage == 'courses.php') ? 'active' : ''; ?>">
                                        <i class="bi bi-book me-2"></i> Courses
                                    </a>
                                </li>

                                <!-- Launcher -->
                                <li>
                                    <a href="launcher.php" class="nav-link d-flex align-items-center px-3 py-2
                            <?php echo ($currentPage == 'launcher.php') ? 'active' : ''; ?>">
                                        <i class="bi bi-rocket-takeoff me-2"></i> Launcher
                                    </a>
                                </li>

                                <!-- Coordinates -->
                                <li>
                                    <a href="coordinates.php" class="nav-link d-flex align-items-center px-3 py-2
                            <?php echo ($currentPage == 'coordinates.php') ? 'active' : ''; ?>">
                                        <i class="bi bi-geo-alt-fill me-2"></i> Coordinates
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>




            <!-- Dashboard Content -->
            <main class="p-4" id="content-scroll">
                <!-- Institution Master Form -->
                <div class="bg-white rounded-3 shadow-sm p-4 border mb-4">

                    <h1 class="h5 fw-bold text-dark mb-4">Institution Master</h1>

                    <!-- Form Inputs -->
                    <div class="row g-4 mb-3">

                        <!-- Institution Name -->
                        <div class="col-md-6">
                            <label class="form-label  text-dark">Institution Name</label>
                            <input type="text" class="form-control" placeholder="Enter institution name"
                                id="institution_name">
                        </div>

                        <!-- Institution Code -->
                        <div class="col-md-6">
                            <label class="form-label  text-dark">Institution Code</label>
                            <input type="text" class="form-control" placeholder="Enter institution code"
                                id="institution_code">
                        </div>

                    </div>

                    <!-- Add Button -->
                    <div class="text-center mb-4">
                        <button
                            style="background: linear-gradient(to bottom, #4ade80, #059669);border-color:transparent"
                            class="text-white px-4 py-2 rounded">
                            <i class="bi bi-plus-circle"></i> Add Institution </button>

                    </div>

                    <!-- Existing Institutions -->
                    <h2 class="h6  text-dark mb-3">Existing Institutions</h2>

                    <div id="institutionList" class="d-flex flex-column gap-3">

                        <!-- Sample Institution Card (Engineering) -->
                        <div
                            class="d-flex justify-content-between align-items-center p-3 bg-white border rounded shadow-sm">
                            <div>
                                <div class="fw-semibold text-dark">Engineering</div>
                                <div class="text-muted small">Code: ENG</div>
                            </div>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                        <!-- Sample Institution Card (Medicine) -->
                        <div
                            class="d-flex justify-content-between align-items-center p-3 bg-white border rounded shadow-sm">
                            <div>
                                <div class="fw-semibold text-dark">Medicine</div>
                                <div class="text-muted small">Code: MED</div>
                            </div>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                    </div>

                </div>

            </main>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>

</html>