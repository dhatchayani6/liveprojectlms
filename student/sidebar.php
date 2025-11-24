<!-- Sidebar -->
<?php
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$studentCoursesPages = [
    'courses.php',
    'courses_detail.php'
];

$studentAssignmentPages = [
    'assignments.php',
    'assignment_details.php',
    'assignment_feedback.php',
    'assignment_pending_new.php',
    'assignment_submit.php'
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

            <!-- Dashboard -->
            <li>
                <a href="dashboard.php"
                    class="nav-link d-flex align-items-center px-3 py-2 
                    <?php echo ($currentPage == 'dashboard.php') ? 'active' : ''; ?>">
                    <i class="bi bi-grid-fill me-2"></i>Dashboard
                </a>
            </li>

            <!-- Courses -->
            <li>
                <a href="courses.php"
                    class="nav-link d-flex align-items-center px-3 py-2
                    <?php echo in_array($currentPage, $studentCoursesPages) ? 'active' : ''; ?>">
                    <i class="bi bi-book me-2"></i>Courses
                </a>
            </li>

            <!-- Assignments -->
            <li>
                <a href="assignments.php"
                    class="nav-link d-flex align-items-center px-3 py-2
                    <?php echo in_array($currentPage, $studentAssignmentPages) ? 'active' : ''; ?>">
                    <i class="bi bi-file-earmark-text me-2"></i>Assignments
                </a>
            </li>

        </ul>
    </nav>
</aside>
