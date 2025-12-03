<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Entrance Exam</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: "Inter", sans-serif;
            background: linear-gradient(to bottom right, #eef4ff, #ffffff, #faf5ff);
            min-height: 100vh;
            font-size: 0.9rem;
        }

        h3 {
            font-size: 15px;
        }

        ul li {
            color: #3f40b7;
        }

        .header-card {
            background: linear-gradient(90deg, #2563eb, #9333ea);
            border-radius: 11px;
            padding: 1.5rem;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
        }

        .wallet-box {
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 10px;
            border-radius: 7px;
            font-size: 12px;
            backdrop-filter: blur(4px);
        }

        .guideline-box {
            background: #eef4ff;
            border-left: 4px solid #2563eb;
            border-radius: 10px;
            padding: 25px;
        }

        .main-box {
            background: white;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
            margin-top: 22px;
        }

        .slot-card {
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 15px;
            transition: 0.2s;
        }

        .slot-card:hover {
            border-color: #60a5fa;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        .slot-btn {
            background: linear-gradient(90deg, #2563eb, #9333ea);
            padding: 8px 22px;
            font-weight: 600;
            border-radius: 10px;
            color: white;
            border-color: transparent;
        }

        .slot-label {
            font-size: 10px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .slot-value {
            font-size: 10px;
            font-weight: 700;
            color: #1f2937;
        }

        .container-custom {
            max-width: 900px;
        }

        ul {
            padding: 0px 13px !important;
        }

        small {
            font-size: 10px !important;
        }

        .modal .small {
            font-size: x-small;
        }

        #modal_date,
        #modal_time,
        #modal_venue,
        #modal_fee {
            font-size: 10px;
        }
    </style>
</head>

<body>

    <div class="container container-custom py-2">

        <!-- HEADER CARD -->
        <div class="header-card mb-4 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light bg-transparent border-0 text-white">
                    <i data-lucide="arrow-left"></i>
                </button>
                <div>
                    <h6 class="text-white fw-bold m-0 fs-6">Schedule Entrance Exam</h6>
                    <small class="text-white">Select your preferred exam slot</small>
                </div>
            </div>

            <div class="wallet-box text-white d-flex align-items-center gap-2">
                <i data-lucide="wallet"></i>
                <div>
                    <div class="opacity-75 small">Wallet Balance</div>
                    <div class="fw-bold">₹0.00</div>
                </div>
            </div>
        </div>

        <!-- GUIDELINES -->
        <div class="guideline-box mb-4">
            <div class="d-flex gap-3">
                <i data-lucide="triangle-alert" class="text-primary"></i>
                <div>
                    <h6 class="fw-bold mb-2" style="color:#1e3a8a">Exam Guidelines</h6>
                    <ul class="m-0 text-secondary small">
                        <li>Exam duration: 2 hours</li>
                        <li>Exam fee will be deducted from your wallet</li>
                        <li>For online exams, take the exam from dashboard on scheduled date</li>
                        <li>Please arrive 15 minutes early for offline exams</li>
                        <li>Bring valid ID proof & hall ticket</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- MAIN BOX -->
        <div class="main-box">

            <h5 class="fw-bold mb-4">Available Exam Slots</h5>

            <!-- SLOT 1 -->
            <div class="slot-card mb-3">
                <div class="row w-100 g-3 align-items-center">

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="calendar" class="text-primary" style="width:13px;"></i>
                            <div class="slot-label">Date</div>
                        </div>
                        <div class="slot-value mt-1">Tue, Dec 2, 2025</div>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="clock" class="text-purple" style="width:13px;"></i>
                            <div class="slot-label">Time</div>
                        </div>
                        <div class="slot-value mt-1">13:00 PM - 14:00 PM</div>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="map-pin" class="text-warning" style="width:13px;"></i>
                            <div class="slot-label">Venue</div>
                        </div>
                        <div class="slot-value mt-1">Main Campus - Hall A</div>
                        <small class="text-muted">Online Exam</small>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="wallet" class="text-success" style="width:13px;"></i>
                            <div class="slot-label">Fee</div>
                        </div>
                        <div class="slot-value mt-1">₹1500</div>
                        <small class="text-muted">49 seats left</small>
                    </div>

                    <!-- BUTTON -->
                    <div class="col d-flex justify-content-center">
                        <button class="slot-btn"
                            onclick="openExamModal('Tue, Dec 2, 2025','13:00 PM - 14:00 PM','Main Campus - Hall A','Online Exam','₹1500')">
                            Select
                        </button>
                    </div>

                </div>
            </div>

            <!-- SLOT 2 -->
            <div class="slot-card">
                <div class="row w-100 g-3 align-items-center">

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="calendar" class="text-primary" style="width:13px;"></i>
                            <div class="slot-label">Date</div>
                        </div>
                        <div class="slot-value mt-1">Wed, Dec 3, 2025</div>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="clock" class="text-purple" style="width:13px;"></i>
                            <div class="slot-label">Time</div>
                        </div>
                        <div class="slot-value mt-1">10:00 AM - 12:00 PM</div>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="map-pin" class="text-warning" style="width:13px;"></i>
                            <div class="slot-label">Venue</div>
                        </div>
                        <div class="slot-value mt-1">Main Campus - Hall A</div>
                        <small class="text-muted">Online Exam</small>
                    </div>

                    <div class="col d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <i data-lucide="wallet" class="text-success" style="width:13px;"></i>
                            <div class="slot-label">Fee</div>
                        </div>
                        <div class="slot-value mt-1">₹1500</div>
                        <small class="text-muted">50 seats left</small>
                    </div>

                    <div class="col d-flex justify-content-center">
                        <button class="slot-btn"
                            onclick="openExamModal('Wed, Dec 3, 2025','10:00 AM - 12:00 PM','Main Campus - Hall A','Online Exam','₹1500')">
                            Select
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- EXAM CONFIRMATION MODAL -->
    <div class="modal fade" id="examModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4 shadow">

                <div class="p-0 bg-white rounded-4">

                    <div class="p-4 text-white"
                        style="background: linear-gradient(to right, #2563eb, #9333ea);border-radius: 12px 12px 0px 0px;">
                        <h5 class="m-0 fw-bold">Confirm Exam Booking</h5>
                    </div>

                    <div class="p-4">

                        <div class="d-flex gap-3 mb-3">
                            <i data-lucide="calendar" class="text-primary" style="width:20px;"></i>
                            <div>
                                <div class="small text-secondary fw-semibold">Date</div>
                                <div id="modal_date" class="fw-bold text-dark"></div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i data-lucide="clock" class="text-primary" style="width:20px;"></i>
                            <div>
                                <div class="small text-secondary fw-semibold">Time</div>
                                <div id="modal_time" class="fw-bold text-dark"></div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i data-lucide="map-pin" class="text-warning" style="width:20px;"></i>
                            <div>
                                <div class="small text-secondary fw-semibold">Venue</div>
                                <div id="modal_venue" class="fw-bold text-dark"></div>
                                <div id="modal_online" class="text-muted small"></div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <i data-lucide="wallet" class="text-success" style="width:20px;"></i>
                            <div>
                                <div class="small text-secondary fw-semibold">Exam Fee</div>
                                <div id="modal_fee" class="fw-bold text-dark"></div>
                                <div class="text-secondary small">New balance: ₹-1500.00</div>
                            </div>
                        </div>

                        <div class="alert alert-danger small">
                            Insufficient wallet balance! Please add ₹1500.00 to proceed.
                        </div>

                        <div class="d-flex gap-2 mt-3">
                            <button class="btn btn-light flex-fill fw-bold" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn  text-light flex-fill fw-bold" onclick="confirmBooking()" style="background: linear-gradient(to right, #2563EB, #9333EA);
">Confirm Booking</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/lucide@0.457.0/dist/umd/lucide.min.js"></script>
    <script>
        lucide.createIcons();
    </script>

    <script>
        function openExamModal(date, time, venue, online, fee) {
            document.getElementById("modal_date").innerText = date;
            document.getElementById("modal_time").innerText = time;
            document.getElementById("modal_venue").innerText = venue;
            document.getElementById("modal_online").innerText = online;
            document.getElementById("modal_fee").innerText = fee;

            var modal = new bootstrap.Modal(document.getElementById('examModal'));
            modal.show();

            lucide.createIcons();
        }
    </script>
    <script>
        function confirmBooking() {

            // Get values from modal
            let date = document.getElementById("modal_date").innerText;
            let time = document.getElementById("modal_time").innerText;
            let venue = document.getElementById("modal_venue").innerText;
            let fee = document.getElementById("modal_fee").innerText;

            // Wallet example update
            let newBalance = "₹8500.00";

            // Show alert
            alert(
                `Exam scheduled successfully!

Date: ${date}
Time: ${time}
Venue: ${venue}
Fee: ${fee}

New wallet balance: ${newBalance}`
            );

            // Redirect to dashboard
            window.location.href = "student_dashboard.php";
        }
    </script>

</body>

</html>