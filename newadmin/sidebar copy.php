<?php
    $currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    $institutionsPages = ['institution.php'];
    $programPages      = ['program.php'];
    $coursePages       = ['courses.php', 'courses-detail.php'];
    $launcherPages     = ['launcher.php'];
    $coordinatorPages  = ['coordinators.php'];
?>

<aside class="sidebar d-none d-md-flex flex-column">
    <div class="text-center border-bottom p-3">
        <h5 class="mb-1 fw-semibold text-dark">Viana Study</h5>
    </div>

    <nav class="flex-grow-1 pt-3 px-3">
        <ul class="nav flex-column gap-3">

            <!-- Institutions -->
            <li>
                <a href="institution.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $institutionsPages) ? 'active' : ''; ?>">
                    <i class="bi bi-building me-2"></i> Institutions
                </a>
            </li>

            <!-- Programs -->
            <li>
                <a href="program.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $programPages) ? 'active' : ''; ?>">
                    <i class="bi bi-house-door me-2"></i> Programs
                </a>
            </li>

            <!-- Courses -->
            <li>
                <a href="courses.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $coursePages) ? 'active' : ''; ?>">
                    <i class="bi bi-book me-2"></i> Courses
                </a>
            </li>

            <!-- Launcher -->
            <li>
                <a href="launcher.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $launcherPages) ? 'active' : ''; ?>">
                    <i class="bi bi-rocket-takeoff me-2"></i> Launcher
                </a>
            </li>

            <!-- Coordinators -->
            <li>
                <a href="coordinators.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $coordinatorPages) ? 'active' : ''; ?>">
                    <i class="bi bi-person-check-fill me-2"></i> Coordinators
                </a>
            </li>

            <li>
                <a href="../index.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $coordinatorPages) ? 'active' : ''; ?>">
                      <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
            </li>

        </ul>
    </nav>
</aside>