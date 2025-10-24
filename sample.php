<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEARNING MANAGEMET SYSTEM</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafb;
            margin: 0;
            height: 100vh;
            color: #1c1c1c;
            overflow-x: hidden;
        }

        .container {
            padding: 0;
        }

        li {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }

        /* Sidebar (Desktop) */
        .sidebar {
            background-color: #fff;
            width: 240px;
            min-height: 100vh;
            border-right: 1px solid #e2e8f0;
            padding: 1rem;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .sidebar a.nav-link {
            color: #000;
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            cursor: pointer;
            padding: 10px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .sidebar a.nav-link.active,
        .sidebar a.nav-link:hover {
            background-color: #e2e8f0;
            color: #000;
        }

        .sidebar a .icon {
            margin-right: 0.5rem;
            font-size: 1.125rem;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .sidebar-nav a {
            color: #000;
        }

        .profile-section {
            position: absolute;
            bottom: 1.25rem;
            left: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
        }

        .profile-section img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }

        main.content {
            margin-left: 240px;
            overflow-y: auto;
            height: 100vh;
            box-sizing: border-box;
            background-color: #fefefe;
            transition: margin-left 0.3s ease;
        }

        /* Header */
        /* Header */
        .header-bar {
            height: 75px;
            background-color: #fff;
            border-bottom: 1px solid #e2e8f0;
            padding: 0.75rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }


        .toggle-btn {
            border: none;
            background: none;
            font-size: 1.5rem;
            color: #1c1c1c;
            display: none;
        }

        @media (max-width: 991.98px) {

            /* Hide only the desktop sidebar */
            aside.sidebar {
                display: none;
            }

            /* Keep offcanvas sidebar visible */
            .offcanvas .sidebar {
                display: block;
                width: 100%;
                min-height: auto;
                position: static;
                border: none;
                padding: 1rem;
            }

            .toggle-btn {
                display: inline-block;
            }

            main.content {
                margin-left: 0;
            }

            .scroll-section {
                padding: 1rem;
            }
        }


        /* Card, Chart, Table Styling (unchanged) */
        .summary-cards {
            /* background-color: #edf7fa; */
            display: flex;
            justify-content: space-between;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .summary-card {
            background: white;
            border-radius: 8px;
            padding: 1rem 1.5rem;
            flex: 1 1 16%;
            min-width: 150px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.05);
        }

        .summary-card h6 {
            font-weight: 600;
            color: #4a5568;
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
        }

        .summary-card .value {
            font-size: 1.6rem;
            font-weight: 700;
            color: #1a202c;
        }

        .chart-card,
        .report-table {
            background: white;
            padding: 1.25rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.05);
            flex: 1 1 40%;
            min-width: 320px;
        }

        section.analytics {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }

        .scroll-section {
            height: calc(100vh - 78px);
            /* Adjust based on your header height */
            overflow-y: auto;
            padding: 2rem;
            box-sizing: border-box;
        }

        /* Optional: Nice scroll effect */
        .scroll-section::-webkit-scrollbar {
            width: 6px;
        }

        .scroll-section::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 3px;
        }

        .scroll-section::-webkit-scrollbar-thumb:hover {
            background-color: #94a3b8;
        }
    </style>
    <style>
        .list-group-item {
            transition: all 0.2s ease-in-out;
        }

        .list-group-item:hover {
            transform: translateY(-3px);
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 12px;
        }

        .btn {
            border-radius: 8px;
        }

        .tab.active {
            color: #2563eb !important;
            background: rgba(59, 130, 246, 0.05);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            /* perfectly aligned with bottom */
            left: 0;
            width: 100%;
            height: 1px;
            background-color: rgb(21, 103, 186);
            border-radius: 2px 2px 0 0;
        }
    </style>

</head>

<body>
    <!-- sidebar content start -->
    <!-- Offcanvas Sidebar (For Mobile) -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Dashboard Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0">
            <div class="sidebar border-0 position-static">

                <!-- Brand -->
                <a href="superadmin_index.php" class="navbar-brand d-flex align-items-center gap-2 mb-4 px-3">
                    <img src="images/logo1.png" alt="logo" width="30" height="30">
                    <span class="fw-bold text-uppercase text-dark">LMS</span>
                </a>

                <!-- Dashboard Link -->
                <a href="admin_index.php" class="nav-link d-flex align-items-center gap-2 px-3 mb-1">
                    <i class="bi bi-house-door-fill"></i> Dashboard
                </a>

                <!-- Assignments -->
                <a href="assignments.php" class="nav-link d-flex align-items-center gap-2 px-3 mb-1">
                    <i class="bi bi-journal-text"></i> Assignments
                </a>

                <!-- Courses -->
                <a href="courses.php" class="nav-link d-flex align-items-center gap-2 px-3 mb-1">
                    <i class="bi bi-book"></i> Courses
                </a>

                <!-- Logout -->
                <a href="logout.php" class="nav-link d-flex align-items-center gap-2 px-3 mt-1">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>

            </div>
        </div>
    </div>
    <!-- Desktop Sidebar -->
    <aside class="sidebar d-none d-lg-block">
        <!-- Brand -->
        <a href="superadmin_index.php" class="navbar-brand d-flex align-items-center gap-2 mb-4">
            <img src="images/logo1.png" alt="logo" width="30" height="30">
            <span class="fw-bold text-uppercase text-dark">LMS</span>
        </a>

        <!-- Dashboard Link -->
        <a href="admin_index.php" class="nav-link d-flex align-items-center gap-2 mb-1">
            <i class="bi bi-house-door-fill"></i> Dashboard
        </a>

        <!-- Assignments -->
        <a href="assignments.php" class="nav-link d-flex align-items-center gap-2 mb-1">
            <i class="bi bi-journal-text"></i> Assignments
        </a>

        <!-- Courses -->
        <a href="courses.php" class="nav-link d-flex align-items-center gap-2 mb-1">
            <i class="bi bi-book"></i> Courses
        </a>

        <!-- Logout -->
        <a href="logout.php" class="nav-link d-flex align-items-center gap-2 mt-1">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>

        <!-- Profile Section -->
        <div class="profile-section mt-4 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile" class="rounded-circle mb-2"
                width="60" height="60" />
            <!-- <?php
            $bio_id = $_SESSION['bio_id'] ?? 'Unknown';
            $user_type = $_SESSION['usertype'] ?? 'Guest';
            ?>
            <div class="fw-semibold text-dark">
                <?php echo htmlspecialchars(ucfirst($user_type)) . ' (' . htmlspecialchars($bio_id) . ')'; ?>
            </div> -->
        </div>
    </aside>

    <!-- sidebar content end -->

    <main class="content">

        <!-- Header start -->
        <header class="header-bar d-flex align-items-center justify-content-between px-3 py-2 bg-light shadow-sm">
            <!-- Sidebar Toggle (mobile) -->
            <button class="btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
                <i class="bi bi-list"></i>
            </button>

            <!-- Title -->
            <h5 class="mb-0 text-dark flex-grow-1 text-center"></h5>

            <!-- Notifications & Profile -->
            <div class="d-flex align-items-center gap-3">

                <!-- Notification Icon -->
                <button class="btn btn-link text-dark p-0 fs-5" title="Notifications">
                    <i class="bi bi-bell"></i>
                </button>

                <!-- Profile Dropdown -->
                <div class="dropdown">
                    <a href="#" class="d-block" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile"
                            class="rounded-circle" width="40" height="40">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li>
                            <a class="dropdown-item" href="admin_index.php">
                                <i class="bi bi-house-door-fill me-2"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="assignments.php">
                                <i class="bi bi-journal-text me-2"></i> Assignments
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="courses.php">
                                <i class="bi bi-book me-2"></i> Courses
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-danger" href="logout.php">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </header>

        <!-- Header end -->

        <div class="scroll-section">

            <div class="container py-4">
                <!-- Profile Section -->
                <div class="d-flex align-items-center mb-4">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile"
                        class="rounded-circle me-3 border" width="80" height="80">
                    <div>
                        <h5 class="mb-0 fw-bold">Dr. Emily Rodriguez</h5>
                        <small class="text-muted">Faculty ID: FAC21032305 • Computer Science</small>
                    </div>
                </div>

                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs mb-4 d-flex justify-content-between">
                    <li class="nav-item flex-fill text-center position-relative">
                        <a class="nav-link tab active fw-semibold position-relative" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item flex-fill text-center position-relative">
                        <a class="nav-link tab fw-semibold position-relative" href="#">Assignments
                            <span class="badge bg-danger ms-1">5</span>
                        </a>
                    </li>
                    <li class="nav-item flex-fill text-center position-relative">
                        <a class="nav-link tab fw-semibold position-relative" href="#">Courses</a>
                    </li>
                </ul>



                <!-- Assignments Section -->
                <div class="card mb-4 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-semibold mb-1">
                                <i class="bi bi-clipboard-check me-1"></i> Assignments
                            </h6>
                            <small class="text-muted">Pending student submissions</small>
                        </div>
                        <span class="badge bg-danger fs-6 px-3 py-2">5</span>
                    </div>
                </div>

                <!-- Active Courses -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Active Courses</h6>
                    <button class="btn btn-sm btn-primary">View All</button>
                </div>

                <!-- Course List -->
                <div class="list-group mb-4">
                    <a href="#" class="list-group-item list-group-item-action py-3 shadow-sm mb-2 rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-semibold mb-1">CS1234: Introduction to Data Science</h6>
                                <small class="text-muted">35 Students</small>
                            </div>
                            <small class="text-primary fw-semibold">Mon, Wed • 10:00 - 11:30 AM</small>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 shadow-sm mb-2 rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-semibold mb-1">CS2345: Database Systems</h6>
                                <small class="text-muted">28 Students</small>
                            </div>
                            <small class="text-primary fw-semibold">Tue, Thu • 1:00 - 2:30 PM</small>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action py-3 shadow-sm mb-2 rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-semibold mb-1">CS3456: Algorithms</h6>
                                <small class="text-muted">32 Students</small>
                            </div>
                            <small class="text-primary fw-semibold">Wed, Fri • 3:00 - 4:30 PM</small>
                        </div>
                    </a>
                </div>

                <!-- Action Buttons -->
                <div class="text-center d-flex justify-content-center ">
                    <button class="btn btn-primary btn-sm me-2">
                        <i class="bi bi-check-circle me-1"></i> Grade Assignments
                    </button>
                    <button class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-plus-lg me-1"></i> Add New Course
                    </button>
                </div>
            </div>


        </div>
    </main>


</body>

</html>