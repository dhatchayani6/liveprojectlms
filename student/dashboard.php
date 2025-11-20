<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Dashboard</title>
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
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-btn {
            width: 100%;
            text-align: left;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247));
            border: 1px solid rgba(59, 130, 246, 0.5);
        }

        .btn-green {
            background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166));
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .btn-purple {
            background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242));
            border: 1px solid rgba(139, 92, 246, 0.5);
        }

        .btn-orange {
            background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139));
            border: 1px solid rgba(249, 115, 22, 0.5);
        }

        .menu-icon {
            border-radius: 50%;
            padding: 6px;
            margin-right: 8px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <header class="bg-white border-bottom shadow-sm">
                <div class="d-flex justify-content-between align-items-center px-4 py-3">

                    <div class="d-flex align-items-center">
                        <!-- 🔹 Offcanvas Toggle (Visible on Mobile Only) -->
                        <button class="btn btn-light btn-sm me-2 d-md-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-list"></i>
                        </button>

                        <!-- 🔹 Back Button (Visible on Desktop) -->
                        <button onclick="window.history.back()"
                            class="btn btn-light btn-sm me-2 d-none d-md-inline-flex">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <h5 class="fw-semibold mb-0">Viana Study</h5>
                    </div>

                    <a href="../index.php" class="btn btn-light d-flex align-items-center">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
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
                                <li><a href="dashboard.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                                <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-book me-2"></i>Courses</a></li>
                                <li><a href="assignments.php"
                                        class="nav-link active d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-file-earmark-text me-2"></i>Assignments</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>

            <!-- Dashboard Content -->
            <main class="p-4">
                <h4 class="fw-bold mb-4 text-dark">Quick Access</h4>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <a href="courses.php" class="text-decoration-none">
                            <button class="menu-btn btn-blue text-dark">
                                <i class="bi bi-book menu-icon"></i> Courses
                            </button>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="assignments.php" class="text-decoration-none">
                            <button class="menu-btn btn-green text-dark">
                                <i class="bi bi-file-earmark-text menu-icon"></i> Assignments
                            </button>
                        </a>
                    </div>
                    <!-- <div class="col-md-6 col-lg-4">
            <a href="transcripts.php" class="text-decoration-none">
              <button class="menu-btn btn-purple text-dark">
                <i class="bi bi-check2-circle menu-icon"></i> Transcripts
              </button>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="schedule.php" class="text-decoration-none">
              <button class="menu-btn btn-orange text-dark">
                <i class="bi bi-calendar3 menu-icon"></i> Schedule
              </button>
            </a>
          </div> -->
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>