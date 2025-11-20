<?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$assignmentPages = [
    'overall_assignments.php',
    'assignment_details.php',

];

$coursesPages = [
    'courses-detail.php',
    'courses.php',
]
?>


<aside class="sidebar d-none d-md-flex flex-column">
    <div class="text-center border-bottom p-4">
        <div class="avatar mx-auto mb-3">
            <img src="../images/<?php echo $profile; ?>" alt="Profile" width="80" height="80">
        </div>
        <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
        <p class="text-muted small">Faculty ID: <?php echo $_SESSION['regno']; ?></p>
    </div>

    <nav class="flex-grow-1 pt-3 px-3">
        <ul class="nav flex-column gap-3">
            <li>
                <a href="dashboard.php"
                    class="nav-link d-flex align-items-center px-3 py-2 <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
                    <i class="bi bi-grid-fill me-2"></i>Dashboard
                </a>
            </li>

            <li>
                <a href="courses.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                     <?php echo in_array($currentPage, $coursesPages) ? 'active' : ''; ?>">
                    <i class="bi bi-book me-2"></i>Courses
                </a>
            </li>

            <li>
                <a href="overall_assignments.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo in_array($currentPage, $assignmentPages) ? 'active' : ''; ?>">
                    <i class="bi bi-file-earmark-text me-2"></i>Assignments
                </a>
            </li>

        </ul>
    </nav>
</aside>