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
                <!-- Program Master -->
                <div class="container-fluid">

                    <!-- Add New Program -->
                    <div class="card shadow-sm border mb-4">
                        <div class="card-body">
                            <h4 class="fw-bold text-dark mb-4">Add New Program</h4>

                            <div class="row mb-4 g-4">

                                <!-- Select Institution -->
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Select Institution</label>
                                    <select class="form-select" id="program_institution">
                                        <option value="">Choose an institution</option>
                                        <option value="engineering">Engineering</option>
                                        <option value="medicine">Medicine</option>
                                        <option value="arts">Arts & Sciences</option>
                                    </select>
                                </div>

                                <!-- Program Name -->
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Program Name</label>
                                    <input type="text" class="form-control" placeholder="Enter program name"
                                        id="program_name">
                                </div>

                                <!-- Program Code -->
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold">Program Code</label>
                                    <input type="text" class="form-control" placeholder="Enter program code"
                                        id="program_code">
                                </div>

                            </div>

                            <!-- Program Outcomes -->
                            <div class="border-top pt-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h5 class="fw-bold mb-0">Program Outcomes</h5>

                                    <button class="btn btn-success btn-sm px-3" id="addOutcomeBtn">
                                        <i class="bi bi-plus-circle"></i> Add Outcome
                                    </button>
                                </div>

                                <p class="text-danger small fw-semibold">* At least one program outcome is required</p>

                                <div id="outcomeList" class="d-flex flex-column gap-2"></div>
                            </div>

                            <!-- Save Button -->
                            <div class="mt-4">
                                <button class="btn btn-primary px-4" id="saveProgramBtn">
                                    Save Program
                                </button>
                            </div>

                        </div>
                    </div>

                    <!-- Existing Programs -->
                    <div class="card shadow-sm border">
                        <div class="card-body">

                            <h4 class="fw-bold text-dark mb-4">Existing Programs</h4>

                            <div class="table-responsive">
                                <table class="table table-hover align-middle table-bordered">

                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Institution</th>
                                            <th>Program Code</th>
                                            <th>Program Name</th>
                                            <th>Outcomes</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>Engineering</td>
                                            <td class="fw-semibold">CS</td>
                                            <td>Computer Science</td>
                                            <td>2 outcomes</td>
                                            <td class="text-center">
                                                <button class="btn btn-primary btn-sm px-3">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Engineering</td>
                                            <td class="fw-semibold">ME</td>
                                            <td>Mechanical Engineering</td>
                                            <td>2 outcomes</td>
                                            <td class="text-center">
                                                <button class="btn btn-primary btn-sm px-3">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </button>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>

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