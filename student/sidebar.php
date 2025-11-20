<!-- Sidebar -->
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
                    <li><a href="dashboard.php" class="nav-link active d-flex align-items-center px-3 py-2"><i
                                class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                    <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2"><i
                                class="bi bi-book me-2"></i>Courses</a></li>
                    <li><a href="assignments.php" class="nav-link d-flex align-items-center px-3 py-2"><i
                                class="bi bi-file-earmark-text me-2"></i>Assignments</a></li>
                </ul>
            </nav>
        </aside>