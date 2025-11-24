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

                <!-- Program Card -->
                <div class="col-12">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow" style="transition: 0.3s;">
                        <div class="d-flex justify-content-between">

                            <!-- Left Section -->
                            <div class="flex-grow-1">

                                <!-- Title + Badge -->
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <h4 class="fw-bold mb-0">Computer Science Engineering</h4>
                                    <span class="badge bg-success bg-opacity-25 text-success fw-bold px-3 py-2">
                                        Available
                                    </span>
                                </div>

                                <!-- Stats Grid -->
                                <div class="row g-4 mt-2">
                                    <div class="col-6 col-md-3">
                                        <p class="text-uppercase text-muted small fw-semibold mb-1">Duration</p>
                                        <p class="fw-bold text-dark mb-0">4 Years</p>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <p class="text-uppercase text-muted small fw-semibold mb-1">Capacity</p>
                                        <p class="fw-bold text-dark mb-0">120 students</p>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <p class="text-uppercase text-muted small fw-semibold mb-1">Enrolled</p>
                                        <p class="fw-bold text-dark mb-0">0 students</p>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <p class="text-uppercase text-muted small fw-semibold mb-1">Available Seats</p>
                                        <p class="fw-bold text-success mb-0">120 seats</p>
                                    </div>
                                </div>

                                <!-- Description -->
                                <p class="text-muted mt-3 mb-2">
                                    Bachelor of Technology in Computer Science
                                </p>

                                <!-- Progress Bar -->
                                <div class="mt-3">
                                    <div class="d-flex justify-content-between small mb-1">
                                        <span class="fw-semibold text-muted">Capacity Utilization</span>
                                        <span class="fw-bold text-dark">0.0%</span>
                                    </div>

                                    <div class="progress" style="height: 12px;">
                                        <div class="progress-bar bg-success" style="width: 0%;"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Buttons -->
                            <div class="d-flex flex-column align-items-center gap-2 ms-3">
                                <button class="btn btn-light text-primary p-2 rounded">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </button>

                                <button class="btn btn-light text-danger p-2 rounded">
                                    <i class="bi bi-toggle-off fs-4"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


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

</body>

</html>