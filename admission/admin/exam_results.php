<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />


    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">


</head>

<body>
    <?php include('topbar.php') ?>
    <div class="d-flex" style="position: relative;">

        <?php include('sidebar.php') ?>

        <!-- Main Content -->
        <div id="content-area" class="p-4 w-100">

            <div class="row g-4">

                <!-- Header -->
                <div class="col-12">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="fw-bold mb-0 fs-5">Exam Results Management
                                </h4>
                                <span>0 exam bookings

                                </span>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Program Card -->
                <!-- Program Card -->
                <div class="col-12">

                    <div class="bg-white border rounded-4 p-2 text-center shadow-sm mt-3">

                        <div class="row text-center g-4">

                            <!-- Total -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Total</p>
                                <p class="fw-bold text-dark fs-3">0</p>
                            </div>

                            <!-- Online -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Online</p>
                                <p class="fw-bold fs-3" style="color:#2563eb;">0</p>
                            </div>

                            <!-- Offline -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Offline</p>
                                <p class="fw-bold fs-3" style="color:#7c3aed;">0</p>
                            </div>

                            <!-- Pending -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Pending</p>
                                <p class="fw-bold fs-3" style="color:#f59e0b;">0</p>
                            </div>

                            <!-- Completed -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Completed</p>
                                <p class="fw-bold fs-3 text-secondary">0</p>
                            </div>

                            <!-- Passed -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Passed</p>
                                <p class="fw-bold fs-3" style="color:#16a34a;">0</p>
                            </div>

                            <!-- Failed -->
                            <div class="col-6 col-md-3 col-lg">
                                <p class="text-uppercase small fw-semibold text-muted mb-1">Failed</p>
                                <p class="fw-bold fs-3" style="color:#dc2626;">0</p>
                            </div>

                        </div>

                    </div>

                    <!-- search and filter -->
                    <div class="bg-white border rounded-4 p-4 shadow-sm mt-3">

                        <div class="row g-3 align-items-center">

                            <!-- Search Bar -->
                            <div class="col-12 col-md-6 col-lg-5 position-relative">
                                <i
                                    class="bi bi-search position-absolute top-50 translate-middle-y ms-3 text-secondary"></i>
                                <input type="text" class="form-control ps-5 py-2 rounded"
                                    placeholder="Search by name, phone, or email...">
                            </div>

                            <!-- Mode Filters -->
                            <div class="col-12 col-md-6 col-lg-7">
                                <div class="d-flex flex-wrap gap-2">

                                    <button id="btnAll"
                                        class="filter-btn all-filter btn fw-semibold px-4 py-2 active-filter">
                                        All
                                    </button>

                                    <button id="btnOnline" class="filter-btn online-filter btn fw-semibold px-4 py-2">
                                        Online
                                    </button>

                                    <button id="btnOffline" class="filter-btn offline-filter btn fw-semibold px-4 py-2">
                                        Offline
                                    </button>

                                    <button id="btnAllStatus"
                                        class="filter-btn allstatus-filter btn fw-semibold px-4 py-2">
                                        All Status
                                    </button>

                                    <button id="btnPending" class="filter-btn pending-filter btn fw-semibold px-4 py-2">
                                        Pending
                                    </button>

                                    <button id="btnCompleted"
                                        class="filter-btn completed-filter btn fw-semibold px-4 py-2">
                                        Completed
                                    </button>

                                </div>

                            </div>




                        </div>

                    </div>

                    <!-- Candidate Card -->
                    <div class="bg-white border rounded-4 p-4 shadow-sm mb-4 mt-4">

                        <div class="d-flex justify-content-between align-items-start">

                            <!-- Left Section -->
                            <div class="d-flex align-items-start gap-3">

                                <!-- Avatar -->
                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                    style="width:60px; height:60px;">
                                    <i class="bi bi-person fs-2 text-secondary"></i>
                                </div>

                                <!-- Candidate Info -->
                                <div>
                                    <div class="d-flex align-items-center gap-3">

                                        <!-- Name + Contact Info -->
                                        <div>
                                            <h5 class="fw-bold mb-1">Manish Shukla</h5>
                                            <div class="text-muted small">
                                                9533682309 • manish.shukla97@email.com
                                            </div>
                                        </div>

                                        <!-- ONLINE Badge -->
                                        <span
                                            class="badge bg-primary-subtle text-primary fw-semibold px-3 py-2 rounded-pill">
                                            ONLINE
                                        </span>

                                    </div>

                                    <!-- Exam Details -->
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <small class="text-uppercase text-muted fw-semibold">Exam Date</small>
                                            <div class="fw-bold">Tue, Dec 9, 2025</div>
                                        </div>

                                        <div class="col-md-4">
                                            <small class="text-uppercase text-muted fw-semibold">Time</small>
                                            <div class="fw-bold">10:00 AM - 12:00 PM</div>
                                        </div>

                                        <div class="col-md-4">
                                            <small class="text-uppercase text-muted fw-semibold">Venue</small>
                                            <div class="fw-bold">Main Campus - Hall A</div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- Status Badge -->
                            <span class="badge bg-success-subtle text-success fw-semibold px-3 py-2 rounded-pill">
                                <i class="bi bi-check2"></i> Score Uploaded
                            </span>

                        </div>

                        <!-- Score Box -->
                        <div class="border rounded-4 bg-light mt-4 p-3">
                            <div class="d-flex gap-3 align-items-center">
                                <i class="bi bi-check2-circle text-success fs-2"></i>
                                <div>
                                    <strong class="text-dark d-block">Score: 6/10 (60.00%)</strong>
                                    <span class="text-success fw-bold">PASSED</span>
                                </div>
                            </div>
                        </div>

                    </div>



                    <!-- no exam found -->
                    <div class="bg-white border rounded-4 p-5 text-center shadow-sm mt-3">

                        <i class="bi bi-exclamation-circle text-secondary" style="font-size:4rem;"></i>

                        <h4 class="fw-bold text-dark mt-3">No Exam Bookings Found</h4>
                        <p class="text-muted">Try adjusting your filters</p>

                    </div>

                </div>


            </div>

        </div>
    </div>





    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tiny Script (Only toggles .active-filter) -->
    <script>
        document.querySelectorAll(".filter-btn").forEach(btn => {
            btn.addEventListener("click", function () {

                // Remove active state from all buttons
                document.querySelectorAll(".filter-btn").forEach(b => {
                    b.classList.remove("active-filter");
                });

                // Add active to clicked button
                this.classList.add("active-filter");
            });
        });
    </script>


</body>

</html>