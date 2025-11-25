<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />


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
                                <h4 class="fw-bold mb-0 fs-5">Program Management</h4>
                                <span>15 programs • 15 active</span>
                            </div>

                            <button class="nice-btn" data-bs-toggle="modal" data-bs-target="#addProgramModal">
                                + Add Program
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Program Card -->
                <div class="col-12">

                    <div id="programCard" class="card border-2 rounded-4 p-4 shadow-sm hover-shadow"
                        style="transition:0.3s; position:relative;">

                        <!-- DISABLE OVERLAY -->
                        <div id="cardBlocker" style="position:absolute; top:0; left:0; width:calc(100% - 120px); height:100%;
            background:rgba(255,255,255,0.1); backdrop-filter:blur(0px);
            display:none; z-index:10; border-radius:20px;">
                        </div>


                        <!-- VIEW MODE -->
                        <div id="viewMode">

                            <div class="d-flex justify-content-between">
                                <div class="flex-grow-1">

                                    <!-- Program Name -->
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <h4 id="programNameView" class="fw-bold mb-0 fs-5">
                                            Computer Science Engineering
                                        </h4>

                                        <!-- STATUS BADGES -->
                                        <div id="statusWrapper" class="d-flex gap-2">

                                            <span id="badgeInactive"
                                                class="badge bg-danger text-white fw-bold px-3 py-2 d-none">
                                                Inactive
                                            </span>

                                            <span id="badgeAvailable"
                                                class="badge bg-success bg-opacity-25 text-success fw-bold px-3 py-2">
                                                Available
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Stats Grid -->
                                    <div class="row g-4 mt-2">

                                        <div class="col-6 col-md-3">
                                            <p class="text-uppercase text-muted small fw-semibold mb-1">Duration</p>
                                            <p id="durationView" class="fw-bold text-dark mb-0">4 Years</p>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <p class="text-uppercase text-muted small fw-semibold mb-1">Capacity</p>
                                            <p id="capacityView" class="fw-bold text-dark mb-0">120 students</p>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <p class="text-uppercase text-muted small fw-semibold mb-1">Enrolled</p>
                                            <p class="fw-bold text-dark mb-0">0 students</p>
                                        </div>

                                        <div class="col-6 col-md-3">
                                            <p class="text-uppercase text-muted small fw-semibold mb-1">Available Seats
                                            </p>
                                            <p class="fw-bold text-success mb-0">120 seats</p>
                                        </div>

                                    </div>

                                    <!-- Description -->
                                    <p id="descView" class="text-muted mt-3 mb-2">
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

                                <!-- Right Side Buttons -->
                                <div class="d-flex align-items-center gap-3 flex-column justify-content-center">

                                    <!-- Edit Icon -->
                                    <button id="editBtn" class="btn text-primary p-2 rounded" onclick="enterEditMode()">
                                        <i class="bi bi-pencil-square fs-5"></i>
                                    </button>

                                    <!-- Toggle Switch -->
                                    <div class="form-check form-switch m-0">
                                        <input class="form-check-input" type="checkbox" id="programStatusSwitch"
                                            checked>
                                        <label class="form-check-label" for="programStatusSwitch"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- EDIT MODE -->
                        <div id="editMode" class="d-none fs-5">

                            <div class="row g-4 mt-2">

                                <div class="col-md-6">
                                    <label class="form-label">Program Name</label>
                                    <input type="text" id="programNameInput" class="form-control form-control-lg"
                                        value="Computer Science Engineering">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label ">Duration</label>
                                    <input type="text" id="durationInput" class="form-control form-control-lg"
                                        value="4 Years">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label ">Description</label>
                                    <input type="text" id="descInput" class="form-control form-control-lg"
                                        value="Bachelor of Technology in Computer Science">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Sanctioned Capacity</label>
                                    <input type="number" id="capacityInput" class="form-control form-control-lg"
                                        value="120">
                                </div>
                            </div>

                            <div class="mt-4 d-flex">

                                <!-- SAVE BUTTON -->
                                <button class="btn btn-lg me-2 d-flex align-items-center gap-2" onclick="saveProgram()"
                                    style="padding: 5px; background-color: #16a34a; color: #fff; font-size: medium;">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Save Changes
                                </button>

                                <!-- CANCEL BUTTON -->
                                <button class="btn btn-sm d-flex align-items-center gap-2" onclick="exitEditMode()"
                                    style="padding: 5px; font-size: medium; background-color:#e5e7eb; color:#374151;">
                                    <i class="bi bi-x-circle-fill"></i>
                                    Cancel
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

                <div class="p-4" style="background: linear-gradient(90deg, #2563eb, #3b82f6);">
                    <h6 class="text-white fw-bold mb-0">Add New Program</h6>
                </div>

                <div class="modal-body p-4">

                    <div class="row g-4">

                        <div class="col-12">
                            <label class="form-label fw-semibold">
                                Program Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-lg rounded-4"
                                placeholder="e.g., Computer Science Engineering">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Duration <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg rounded-4"
                                placeholder="e.g., 4 Years">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Sanctioned Capacity</label>
                            <input type="number" class="form-control form-control-lg rounded-4" placeholder="50">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea class="form-control form-control-lg rounded-4" rows="3"
                                placeholder="Brief description"></textarea>
                        </div>

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

                <div class="modal-footer border-0 px-4 pb-4 d-flex gap-3">
                    <button class="btn flex-fill rounded-4 fw-semibold fs-6" data-bs-dismiss="modal"
                        style="background:#f3f4f6;">Cancel</button>

                    <button class="btn flex-fill rounded-4 fw-semibold fs-6 text-white" style="background:#2563eb;">Add
                        Program</button>
                </div>

            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Edit View Toggle -->
    <script>
        function enterEditMode() {
            document.getElementById("viewMode").classList.add("d-none");
            document.getElementById("editMode").classList.remove("d-none");
        }

        function exitEditMode() {
            document.getElementById("editMode").classList.add("d-none");
            document.getElementById("viewMode").classList.remove("d-none");
        }
    </script>

    <!-- SAVE PROGRAM -->
    <script>
        function saveProgram() {
            document.getElementById("programNameView").innerText =
                document.getElementById("programNameInput").value;

            document.getElementById("durationView").innerText =
                document.getElementById("durationInput").value;

            document.getElementById("capacityView").innerText =
                document.getElementById("capacityInput").value + " students";

            document.getElementById("descView").innerText =
                document.getElementById("descInput").value;

            exitEditMode();
        }
    </script>

    <!-- STATUS SWITCH: Badge + Card Disable Logic -->
    <script>
        document.getElementById("programStatusSwitch").addEventListener("change", function () {

            const badgeInactive = document.getElementById("badgeInactive");
            const badgeAvailable = document.getElementById("badgeAvailable");
            const cardBlocker = document.getElementById("cardBlocker");
            const programCard = document.getElementById("programCard");
            const editBtn = document.getElementById("editBtn");

            if (this.checked) {

                // ACTIVE
                badgeInactive.classList.add("d-none");
                badgeAvailable.classList.remove("d-none");

                cardBlocker.style.display = "none";
                programCard.style.opacity = "1";

                editBtn.disabled = false;

            } else {

                // INACTIVE
                badgeInactive.classList.remove("d-none");
                badgeAvailable.classList.remove("d-none");

                cardBlocker.style.display = "block";
                programCard.style.opacity = "0.5";

                editBtn.disabled = true;
            }
        });
    </script>

</body>

</html>