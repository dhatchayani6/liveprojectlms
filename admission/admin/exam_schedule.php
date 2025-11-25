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
                                <h4 class="fw-bold mb-0 fs-5">Exam Schedule Management </h4>
                                <span> 1 exam slots configured</span>
                            </div>

                            <button class="nice-btn" data-bs-toggle="modal" data-bs-target="#addProgramModal">
                                + Add Exam Slot
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
                        <div id="viewMode" class="d-flex justify-content-between align-items-start flex-wrap">

                            <!-- Left Grid -->
                            <div class="flex-grow-1">
                                <div class="row g-4">

                                    <!-- Date -->
                                    <div class="col-12 col-md-4 col-lg-2">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <i class="bi bi-calendar-week text-primary"></i>
                                            <p class="text-uppercase small fw-semibold text-muted mb-0">Date</p>
                                        </div>
                                        <p id="examDateView" class="fw-bold text-dark mb-0">
                                            Tue, Nov 25, 2025
                                        </p>
                                    </div>

                                    <!-- Time -->
                                    <div class="col-12 col-md-4 col-lg-2">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <i class="bi bi-clock text-purple"></i>
                                            <p class="text-uppercase small fw-semibold text-muted mb-0">Time</p>
                                        </div>
                                        <p id="examTimeView" class="fw-bold text-dark mb-0">
                                            10:00 AM – 12:00 PM
                                        </p>
                                    </div>

                                    <!-- Venue -->
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <i class="bi bi-geo-alt text-warning"></i>
                                            <p class="text-uppercase small fw-semibold text-muted mb-0">Venue</p>
                                        </div>
                                        <p id="examVenueView" class="fw-bold text-dark mb-0">
                                            Main Campus – Hall A
                                        </p>
                                        <p id="examModeView" class="text-muted small mb-0">Online</p>
                                    </div>

                                    <!-- Capacity -->
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <i class="bi bi-people text-success"></i>
                                            <p class="text-uppercase small fw-semibold text-muted mb-0">Capacity</p>
                                        </div>

                                        <p id="examCapacityView" class="fw-bold text-dark mb-1">
                                            0 / 50
                                        </p>

                                        <div class="progress" style="height: 8px;">
                                            <div id="examCapacityBar" class="progress-bar bg-success"
                                                style="width: 0%;"></div>
                                        </div>
                                    </div>

                                    <!-- Fee -->
                                    <div class="col-12 col-md-6 col-lg-2">
                                        <p class="text-uppercase small fw-semibold text-muted mb-1">Fee</p>
                                        <p id="examFeeView" class="fw-bold text-dark mb-0">₹1500</p>
                                    </div>

                                </div>
                            </div>

                            <!-- Right Action Buttons -->
                            <div class="d-flex flex-row gap-2">

                                <button class="btn p-2 text-primary bg-light rounded-3" title="Edit Slot"
                                    onclick="enterEditExamMode()">
                                    <i class="bi bi-pencil-square fs-5"></i>
                                </button>

                                <button class="btn p-2 text-danger bg-light rounded-3" title="Delete Slot"
                                    onclick="deleteExamSlot()">
                                    <i class="bi bi-trash fs-5"></i>
                                </button>

                            </div>

                        </div>

                        <!-- EDIT MODE -->
                        <!-- EDIT MODE -->
                        <div id="editExamMode" class="d-none">

                            <div class="row g-4 mt-2">

                                <!-- Edit Date -->
                                <div class="col-12 col-md-4 col-lg-6">
                                    <label class="form-label fw-semibold">Date</label>
                                    <input type="date" id="examDateInput" class="form-control form-control-lg"
                                        value="2025-11-25">
                                </div>

                                <!-- Edit Time -->
                                <div class="col-12 col-md-4 col-lg-6">
                                    <label class="form-label fw-semibold">Time</label>
                                    <input type="text" id="examTimeInput" class="form-control form-control-lg"
                                        value="10:00 AM - 12:00 PM">
                                </div>

                                <!-- Edit Venue -->
                                <div class="col-12 col-md-4 col-lg-6">
                                    <label class="form-label fw-semibold">Venue</label>
                                    <input type="text" id="examVenueInput" class="form-control form-control-lg"
                                        value="Main Campus – Hall A">
                                </div>

                                <!-- Edit Mode -->
                                <div class="col-12 col-md-6 col-lg-6">
                                    <label class="form-label fw-semibold">Mode</label>
                                    <select id="examModeInput" class="form-select form-select-lg">
                                        <option value="Online" selected>Online</option>
                                        <option value="Offline">Offline</option>
                                    </select>
                                </div>

                                <!-- Edit Capacity -->
                                <div class="col-12 col-md-6 col-lg-6">
                                    <label class="form-label fw-semibold">Capacity</label>
                                    <input type="number" id="examCapacityInput" class="form-control form-control-lg"
                                        value="50">
                                </div>

                                <!-- Edit Fee -->
                                <div class="col-12 col-md-6 col-lg-6">
                                    <label class="form-label fw-semibold">Fee (₹)</label>
                                    <input type="number" id="examFeeInput" class="form-control form-control-lg"
                                        value="1500">
                                </div>

                            </div>

                            <div class="mt-4 d-flex gap-3">

                                <!-- SAVE BUTTON -->
                                <button class="btn btn-lg d-flex align-items-center gap-2 text-white"
                                    onclick="saveExamSlot()" style="background:#16a34a;">
                                    <i class="bi bi-check-circle-fill"></i> Save Changes
                                </button>

                                <!-- CANCEL BUTTON -->
                                <button class="btn btn-lg d-flex align-items-center gap-2" onclick="exitEditExamMode()"
                                    style="background:#e5e7eb; color:#374151;">
                                    <i class="bi bi-x-circle-fill"></i> Cancel
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

                <!-- Header -->
                <div class="p-4" style="background: linear-gradient(90deg, #2563eb, #3b82f6);">
                    <h6 class="text-white fw-bold mb-0">Add New Exam Slot
                    </h6>
                </div>

                <div class="modal-body p-4">

                    <div class="row g-4">


                        <!-- Exam Date -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Exam Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control form-control-lg rounded-4">
                        </div>

                        <!-- Exam Time -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Exam Time <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg rounded-4"
                                placeholder="10:00 AM - 12:00 PM">
                        </div>

                        <!-- Venue -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Venue <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg rounded-4"
                                placeholder="e.g., Main Campus Hall 1">
                        </div>

                        <!-- Capacity -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Exam Capacity <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg rounded-4" placeholder="e.g., 100">
                        </div>

                        <!-- Fee -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Exam Fee (₹)</label>
                            <input type="number" class="form-control form-control-lg rounded-4" placeholder="e.g., 500">
                        </div>

                        <!-- Mode -->
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Mode <span class="text-danger">*</span></label>
                            <select class="form-select form-select-lg rounded-4">
                                <option value="">Select Mode</option>
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                            </select>
                        </div>

                    </div>

                </div>

                <!-- Footer -->
                <div class="modal-footer border-0 px-4 pb-4 d-flex gap-3">
                    <button class="btn flex-fill rounded-4 fw-semibold fs-6" data-bs-dismiss="modal"
                        style="background:#f3f4f6;">Cancel</button>

                    <button class="btn flex-fill rounded-4 fw-semibold fs-6 text-white" style="background:#2563eb;">Add
                        Exam Slot</button>
                </div>

            </div>
        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // ENTER EDIT MODE
        function enterEditExamMode() {
            document.getElementById("viewMode").classList.add("d-none");
            document.getElementById("editExamMode").classList.remove("d-none");
        }

        // EXIT EDIT MODE
        function exitEditExamMode() {
            document.getElementById("editExamMode").classList.add("d-none");
            document.getElementById("viewMode").classList.remove("d-none");
        }

        // SAVE CHANGES
        function saveExamSlot() {

            // 1. Update Date
            const dateValue = document.getElementById("examDateInput").value;
            if (dateValue) {
                const formattedDate = new Date(dateValue)
                    .toLocaleDateString("en-IN", {
                        weekday: "short",
                        month: "short",
                        day: "numeric",
                        year: "numeric"
                    });
                document.getElementById("examDateView").innerText = formattedDate;
            }

            // 2. Update Time
            document.getElementById("examTimeView").innerText =
                document.getElementById("examTimeInput").value;

            // 3. Update Venue
            document.getElementById("examVenueView").innerText =
                document.getElementById("examVenueInput").value;

            // 4. Update Mode
            document.getElementById("examModeView").innerText =
                document.getElementById("examModeInput").value;

            // 5. Update Capacity
            let cap = document.getElementById("examCapacityInput").value;
            document.getElementById("examCapacityView").innerText = `0 / ${cap}`;
            document.getElementById("examCapacityBar").style.width = "0%";

            // 6. Update Fee
            let fee = document.getElementById("examFeeInput").value;
            document.getElementById("examFeeView").innerText = "₹" + fee;

            // Back to view mode
            exitEditExamMode();
        }

        // DELETE SLOT
        function deleteExamSlot() {
            if (confirm("Are you sure you want to delete this exam slot?")) {
                document.getElementById("programCard").remove();
                alert("Exam slot deleted.");
            }
        }
    </script>


</body>

</html>