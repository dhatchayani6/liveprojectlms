<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="responsive.css">

    <link rel="stylesheet" href="style.css">


</head>

<body>
    <?php include('topbar.php') ?>
    <div class="d-flex" style="position: relative;">

        <?php include('sidebar.php') ?>

        <!-- Main Content -->
        <div id="content-area" class="p-4 w-100">

            <div class="row g-4">

                <!-- FIRST ROW (MINI CARDS) -->
                <!-- TOTAL APPLICATIONS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stats-card p-4 bg-white rounded-4 border position-relative">
                        <div class="bg-overlay"></div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div
                                class="icon-xl bg-gradient-blue text-white rounded-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-people-fill fs-4"></i>
                            </div>

                            <div class="trend text-success small fw-semibold">
                                <i class="bi bi-graph-up-arrow"></i> +12%
                            </div>
                        </div>

                        <p class="text-muted small fw-medium mb-1">Total Applications</p>
                        <h2 class="fw-bold text-dark">0</h2>
                    </div>
                </div>

                <!-- PENDING INTERVIEWS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stats-card p-4 bg-white rounded-4 border position-relative">
                        <div class="bg-overlay"></div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div
                                class="icon-xl bg-gradient-purple text-white rounded-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-camera-video fs-4"></i>
                            </div>

                            <div class="trend text-success small fw-semibold">
                                <i class="bi bi-graph-up-arrow"></i> 0 waiting
                            </div>
                        </div>

                        <p class="text-muted small fw-medium mb-1">Pending Interviews</p>
                        <h2 class="fw-bold text-dark">0</h2>
                    </div>
                </div>

                <!-- PENDING DOCUMENTS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stats-card p-4 bg-white rounded-4 border position-relative">
                        <div class="bg-overlay"></div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div
                                class="icon-xl bg-gradient-amber text-white rounded-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-clock fs-4"></i>
                            </div>

                            <div class="trend text-warning small fw-semibold">
                                <i class="bi bi-graph-up-arrow"></i> Needs review
                            </div>
                        </div>

                        <p class="text-muted small fw-medium mb-1">Pending Documents</p>
                        <h2 class="fw-bold text-dark">0</h2>
                    </div>
                </div>

                <!-- VERIFIED DOCUMENTS -->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="stats-card p-4 bg-white rounded-4 border position-relative">
                        <div class="bg-overlay"></div>

                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div
                                class="icon-xl bg-gradient-green text-white rounded-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-check2-circle fs-4"></i>
                            </div>

                            <div class="trend text-success small fw-semibold">
                                <i class="bi bi-graph-up-arrow"></i> +8 today
                            </div>
                        </div>

                        <p class="text-muted small fw-medium mb-1">Verified Documents</p>
                        <h2 class="fw-bold text-dark">0</h2>
                    </div>
                </div>


                <!-- PREMIUM CARDS ROW -->
                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <a href="programs.php">
                        <div class="premium-card flex-fill">
                            <div class="gradient-bg"></div>
                            <div class="icon-gradient g-green mb-3">
                                <i class="bi bi-book fs-3 text-white"></i>
                            </div>
                            <h4 class="fw-bold">Programs</h4>
                            <p class="text-muted">Manage programs, capacity, and admissions</p>
                            <a class="text-success fw-semibold card-link">Manage programs →</a>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="premium-card flex-fill">
                        <div class="gradient-bg"></div>
                        <div class="icon-gradient g-blue mb-3">
                            <i class="bi bi-calendar-plus fs-3 text-white"></i>
                        </div>
                        <h4 class="fw-bold">Exam Schedule</h4>
                        <p class="text-muted">Configure exam dates and slots</p>
                        <a class="text-primary fw-semibold card-link">Manage schedule →</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="premium-card flex-fill">
                        <div class="gradient-bg"></div>
                        <div class="icon-gradient g-indigo mb-3">
                            <i class="bi bi-clipboard2-check fs-3 text-white"></i>
                        </div>
                        <h4 class="fw-bold">Exam Results</h4>
                        <p class="text-muted">Upload scores for offline exams</p>
                        <a class="text-indigo fw-semibold card-link">Manage results →</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="premium-card flex-fill">
                        <div class="gradient-bg"></div>
                        <div class="icon-gradient g-purple mb-3">
                            <i class="bi bi-camera-video fs-3 text-white"></i>
                        </div>
                        <h4 class="fw-bold">Interview Management</h4>
                        <p class="text-muted">Interview & counselling sessions</p>
                        <a class="text-purple fw-semibold card-link">Open interviews →</a>
                    </div>
                </div>


                <!-- DOCUMENT VERIFICATION -->
                <div class="col-12 col-md-6">
                    <div class="premium-card border border-2 rounded-4 p-4 position-relative overflow-hidden">
                        <div class="gradient-bg"></div>

                        <div class="d-flex justify-content-between align-items-start mb-4">
                            <div
                                class="icon-gradient g-amber shadow-lg d-flex align-items-center justify-content-center">
                                <i class="bi bi-file-earmark-text fs-2 text-white"></i>
                            </div>
                        </div>

                        <h3 class="fw-bold text-dark mb-2">Document Verification</h3>
                        <p class="text-muted mb-3">Review and verify candidate documents for admission</p>

                        <div class="fw-semibold text-warning small card-link">Review documents →</div>
                    </div>
                </div>

                <!-- ADMISSION REPORTS -->
                <div class="col-12 col-md-6">
                    <div class="premium-card border border-2 rounded-4 p-4 position-relative overflow-hidden">
                        <div class="gradient-bg"></div>

                        <div class="d-flex justify-content-between align-items-start mb-4">

                            <!-- Icon -->
                            <div
                                class="icon-gradient g-blue shadow-lg d-flex align-items-center justify-content-center">
                                <i class="bi bi-bar-chart-line fs-2 text-white"></i>
                            </div>

                            <!-- Badge -->
                            <span
                                class="badge rounded-pill px-3 py-2 fw-bold small bg-primary-subtle text-primary d-flex align-items-center gap-1">
                                <i class="bi bi-activity"></i> 0 students
                            </span>
                        </div>

                        <h3 class="fw-bold text-dark mb-2">Admission Reports</h3>
                        <p class="text-muted mb-3">View stage-wise student tracking and progress reports</p>

                        <div class="fw-semibold text-primary small card-link">View reports →</div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll(".stats-card").forEach(card => {
            card.addEventListener("mousemove", (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;

                card.style.transform = `
            perspective(900px)
            rotateX(${(-y / 30)}deg)
            rotateY(${(x / 30)}deg)
            translateY(-6px)
        `;
            });

            card.addEventListener("mouseleave", () => {
                card.style.transform =
                    "perspective(900px) rotateX(0deg) rotateY(0deg) translateY(0)";
            });
        });
    </script>



</body>

</html>