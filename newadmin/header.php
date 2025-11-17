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
            <!-- <button onclick="window.history.back()"
                            class="btn btn-light btn-sm me-2 d-none d-md-inline-flex">
                            <i class="bi bi-chevron-left"></i>
                        </button> -->

            <!--<h5 class="fw-semibold mb-0">Viana Study</h5> -->
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
        <h5 class="offcanvas-title fw-semibold" id="offcanvasSidebarLabel">Viana Study</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0">
        <aside class="sidebar flex-column h-100 w-100">
            <div class="text-center border-bottom p-4">

                <!-- <h5 class="mb-1 fw-semibold text-dark"></h5> -->

            </div>

            <?php
            $currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

            // Active page groups
            $dashboardPages     = ['dashboard.php'];
            $institutionsPages  = ['institution.php'];
            $programPages       = ['program.php'];
            $coursePages        = ['courses.php', 'courses-detail.php'];
            $launcherPages      = ['launcher.php'];
            $coordinatorPages   = ['coordinators.php'];
            $assignmentPages    = ['assignments.php', 'overall_assignments.php', 'assignment_details.php'];
            ?>

            <nav class="flex-grow-1 pt-3 px-4">
                <ul class="nav flex-column gap-3">

                    <!-- Dashboard -->
                    <li>
                        <a href="dashboard.php"
                            class="nav-link d-flex align-items-center px-3 py-2 
               <?php echo in_array($currentPage, $dashboardPages) ? 'active' : ''; ?>">
                            <i class="bi bi-grid-fill me-2"></i>Dashboard
                        </a>
                    </li>

                    <!-- Institutions -->
                    <li>
                        <a href="institution.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $institutionsPages) ? 'active' : ''; ?>">
                            <i class="bi bi-building me-2"></i>Institutions
                        </a>
                    </li>

                    <!-- Programs -->
                    <li>
                        <a href="program.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $programPages) ? 'active' : ''; ?>">
                            <i class="bi bi-house-door me-2"></i>Programs
                        </a>
                    </li>

                    <!-- Courses -->
                    <li>
                        <a href="courses.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $coursePages) ? 'active' : ''; ?>">
                            <i class="bi bi-book me-2"></i>Courses
                        </a>
                    </li>

                    <!-- Launcher -->
                    <li>
                        <a href="launcher.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $launcherPages) ? 'active' : ''; ?>">
                            <i class="bi bi-rocket-takeoff me-2"></i>Launcher
                        </a>
                    </li>

                    <!-- Coordinators -->
                    <li>
                        <a href="coordinators.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $coordinatorPages) ? 'active' : ''; ?>">
                            <i class="bi bi-person-check-fill me-2"></i>Coordinators
                        </a>
                    </li>

                    <!-- Assignments -->
                    <li>
                        <a href="assignments.php"
                            class="nav-link d-flex align-items-center px-3 py-2
               <?php echo in_array($currentPage, $assignmentPages) ? 'active' : ''; ?>">
                            <i class="bi bi-file-earmark-text me-2"></i>Assignments
                        </a>
                    </li>

                </ul>
            </nav>

        </aside>
    </div>
</div>