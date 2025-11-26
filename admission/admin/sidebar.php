<!-- Mobile Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Navigation</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li><a class="nav-link text-white" href="index.php"><i class="bi bi-grid-fill me-2"></i> Dashboard</a>
            </li>
            <li><a class="nav-link text-white" href="programs.php"><i class="bi bi-book-half me-2"></i> Programs</a>
            </li>
            <li><a class="nav-link text-white" href="exam_schedule.php"><i class="bi bi-calendar-event me-2"></i> Exam
                    Schedule</a></li>
            <li><a class="nav-link text-white" href="exam_results.php"><i class="bi bi-clipboard2-check me-2"></i> Exam
                    Results</a></li>
            <li><a class="nav-link text-white" href="interviews.php"><i class="bi bi-camera-video me-2"></i>
                    Interviews</a></li>
            <li><a class="nav-link text-white" href="documents-verification.php"><i class="bi bi-folder-check me-2"></i>
                    Documents</a></li>
            <li><a class="nav-link text-white" href="reports.php"><i class="bi bi-bar-chart-line me-2"></i> Reports</a>
            </li>
            <!-- <li><a class="nav-link text-white" href="settings.php"><i class="bi bi-gear-fill me-2"></i> Settings</a>
            </li> -->
        </ul>
    </div>
</div>

<!-- Desktop Sidebar -->
<div id="sidebar" class="d-none d-lg-block">

    <div class="text-white fw-bold px-3 mb-3 d-flex justify-content-between align-items-center">
        <span class="nav-title">Navigation</span>
        <i id="toggle" class="bi bi-chevron-double-right toggle-btn"></i>
    </div>

    <ul class="nav flex-column px-2">
        <li><a class="nav-link" href="index.php"><i class="bi bi-grid-fill me-2"></i>
                <span>Dashboard</span></a></li>
        <li><a class="nav-link" href="programs.php"><i class="bi bi-book-half me-2"></i> <span>Programs</span></a></li>
        <li><a class="nav-link" href="exam_schedule.php"><i class="bi bi-calendar-event me-2"></i> <span>Exam
                    Schedule</span></a></li>
        <li><a class="nav-link" href="exam_results.php"><i class="bi bi-clipboard2-check me-2"></i> <span>Exam
                    Results</span></a></li>
        <li><a class="nav-link" href="interviews.php"><i class="bi bi-camera-video me-2"></i>
                <span>Interviews</span></a></li>
        <li><a class="nav-link" href="documents-verification.php"><i class="bi bi-folder-check me-2"></i> <span>Documents</span></a>
        </li>
        <li><a class="nav-link" href="reports.php"><i class="bi bi-bar-chart-line me-2"></i> <span>Reports</span></a>
        </li>
    </ul>

    <!-- <div class="mt-auto p-3">
        <a class="nav-link" href="settings.php"><i class="bi bi-gear-fill me-2"></i> <span>Settings</span></a>
    </div> -->
</div>


<script>
    const toggleBtn = document.getElementById("toggle");
    const sidebar = document.getElementById("sidebar");

    // Desktop collapse toggle
    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
        toggleBtn.classList.toggle("bi-chevron-double-left");
        toggleBtn.classList.toggle("bi-chevron-double-right");
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const currentPage = window.location.pathname.split("/").pop();

        document.querySelectorAll('.nav-link').forEach(link => {
            const linkPage = link.getAttribute('href');

            if (linkPage === currentPage) {
                link.classList.add("active");
            }
        });
    });
</script>
