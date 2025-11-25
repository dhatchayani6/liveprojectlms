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

                <div class="col-12">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow" style="transition: 0.3s;">
                        <div class="d-flex justify-content-between">

                            <div>
                                <h4 class="fw-bold mb-0">Program Management</h4>
                                <span>15 programs • 15 active</span>
                            </div>

                            <button class="nice-btn" data-bs-toggle="modal" data-bs-target="#addProgramModal">
                                + Add Program
                            </button>


                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow" style="transition: 0.3s;">

                        <div class="row">
                            <div class="col-8">
                                <label class="form-label fw-semibold">
                                    Program Name <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                    class="form-control shadow-sm form-control-lg rounded-4"
                                    placeholder="e.g., Computer Science Engineering">
                            </div>

                            <div class="col-4">
                                <label class="form-label fw-semibold">
                                    Program Name <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                    class="form-control shadow-sm form-control-lg rounded-4"
                                    placeholder="e.g., Computer Science Engineering">
                            </div>
                            <div class="col-8">
                                <label class="form-label fw-semibold">
                                    Program Name <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                    class="form-control shadow-sm form-control-lg rounded-4"
                                    placeholder="e.g., Computer Science Engineering">
                            </div>

                            <div class="col-4">
                                <label class="form-label fw-semibold">
                                    Program Name <span class="text-danger">*</span>
                                </label>
                                <input type="text"
                                    class="form-control shadow-sm form-control-lg rounded-4"
                                    placeholder="e.g., Computer Science Engineering">
                            </div>
                            <div  class="col-4 mt-4" >

                                <!-- Cancel Button -->
                                <button class="btn flex-fill py-3 rounded-4 fw-semibold fs-6"
                                    style="
                            background: #f3f4f6;
                            color: #374151;
                            border: none;
                            box-shadow: inset 0 0 0 1px #e5e7eb;
                            
                        "
                                    data-bs-dismiss="modal">
                                    Cancel
                                </button>

                                <!-- Add Program Button -->
                                <button class="btn flex-fill py-3 rounded-4 fw-semibold fs-6 text-white"
                                    style="
                            background: rgb(22 163 74 / var(--tw-bg-opacity, 1));
                            border: none;
                            box-shadow: 0 6px 18px rgba(37, 99, 235, 0.3);
                        ">
                                    Save Changes
                                </button>

                            </div>

                        </div>

                    </div>
                </div>


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

    <!-- Add Program Modal -->
    <div class="modal fade" id="addProgramModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content border-0 rounded-5 shadow-lg">

                <!-- Blue Header -->
                <div class="p-4" style="background: linear-gradient(90deg, #2563eb, #3b82f6);">
                    <h2 class="text-white fw-bold mb-0">Add New Program</h2>
                </div>

                <!-- Modal Body -->
                <div class="modal-body p-4">

                    <div class="row g-4">

                        <!-- Program Name -->
                        <div class="col-12">
                            <label class="form-label fw-semibold">
                                Program Name <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                class="form-control shadow-sm form-control-lg rounded-4"
                                placeholder="e.g., Computer Science Engineering">
                        </div>

                        <!-- Duration -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                Duration <span class="text-danger">*</span>
                            </label>
                            <input type="text"
                                class="form-control shadow-sm form-control-lg rounded-4"
                                placeholder="e.g., 4 Years">
                        </div>

                        <!-- Sanctioned Capacity -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">
                                Sanctioned Capacity <span class="text-danger">*</span>
                            </label>
                            <input type="number"
                                class="form-control shadow-sm form-control-lg rounded-4"
                                placeholder="50">
                        </div>

                        <!-- Description -->
                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea class="form-control shadow-sm form-control-lg rounded-4"
                                rows="3"
                                placeholder="Brief description of the program"></textarea>
                        </div>

                        <!-- Active Checkbox -->
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="activeStatus" checked>
                                <label class="form-check-label fw-semibold" for="activeStatus">
                                    Active (accepting admissions)
                                </label>
                            </div>
                        </div>



                    </div>

                </div>

                <!-- Footer Buttons -->
                <div class="modal-footer border-0 px-4 pb-4 d-flex gap-3">

                    <!-- Cancel Button -->
                    <button class="btn flex-fill py-3 rounded-4 fw-semibold fs-6"
                        style="
                            background: #f3f4f6;
                            color: #374151;
                            border: none;
                            box-shadow: inset 0 0 0 1px #e5e7eb;
                        "
                        data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <!-- Add Program Button -->
                    <button class="btn flex-fill py-3 rounded-4 fw-semibold fs-6 text-white"
                        style="
                            background: #2563eb;
                            border: none;
                            box-shadow: 0 6px 18px rgba(37, 99, 235, 0.3);
                        ">
                        Add Program
                    </button>

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