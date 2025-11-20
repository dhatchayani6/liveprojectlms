<?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$sidebarPages = [
    'institutions.php',
    'programs.php',
    'courses.php',
    'launcher.php',
    'coordinates.php'
];
?>

<aside class="sidebar d-none d-md-flex flex-column">
    <div class="text-center border-bottom p-4">
        <div class="avatar mx-auto mb-3">
            <i class="bi bi-mortarboard fs-1 text-primary"></i>
        </div>
        <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
        <p class="text-muted small">Student ID: <?php echo $_SESSION['regno']; ?></p>
    </div>

    <nav class="flex-grow-1 pt-3 px-3">
        <ul class="nav flex-column gap-3">

            <!-- Institutions -->
            <li>
                <a href="institutions.php" class="nav-link d-flex align-items-center px-3 py-2 
                   <?php echo ($currentPage == 'institutions.php') ? 'active' : ''; ?>">
                    <i class="bi bi-building me-2"></i>Institutions
                </a>
            </li>

            <!-- Programs -->
            <li>
                <a href="programs.php" class="nav-link d-flex align-items-center px-3 py-2 
                   <?php echo ($currentPage == 'programs.php') ? 'active' : ''; ?>">
                    <i class="bi bi-collection me-2"></i>Programs
                </a>
            </li>

            <!-- Courses -->
            <li>
                <a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2 
                   <?php echo ($currentPage == 'courses.php') ? 'active' : ''; ?>">
                    <i class="bi bi-book me-2"></i>Courses
                </a>
            </li>

            <!-- Launcher -->
            <li>
                <a href="launcher.php" class="nav-link d-flex align-items-center px-3 py-2 
                   <?php echo ($currentPage == 'launcher.php') ? 'active' : ''; ?>">
                    <i class="bi bi-rocket-takeoff me-2"></i>Launcher
                </a>
            </li>

            <!-- Coordinates -->
            <li>
                <a href="coordinates.php" class="nav-link d-flex align-items-center px-3 py-2 
                   <?php echo ($currentPage == 'coordinates.php') ? 'active' : ''; ?>">
                    <i class="bi bi-geo-alt-fill me-2"></i>Coordinates
                </a>
            </li>

        </ul>
    </nav>
</aside>