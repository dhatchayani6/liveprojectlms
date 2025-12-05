<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Profile</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --fs-sm: 12.5px;
            --fs-base: 14px;
            --fs-md: 15px;
            --fs-lg: 17px;
            --fs-xl: 19px;
        }

        body {
            background: #c5ccd3;
            font-family: system-ui, -apple-system, "Segoe UI", sans-serif;
            font-size: var(--fs-base);
        }

        a {
            text-decoration: none;

        }

        .grid-bg {
            position: absolute;
            inset: 0;
            opacity: 0.5;
            background-size: 30px 30px;
        }

        .page-wrap {
            max-width: 900px;
            margin: auto;
        }

        /* Profile Card */
        .profile-card {
            background: #eef1f5;
            border-radius: 16px;
            border: 1px solid #d1d5db;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .profile-header {
            background: #374151;
            color: #fff;
            padding: 10px 14px;
            font-size: var(--fs-md);
        }

        .avatar-circle {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #60a5fa, #2563eb);
            border: 3px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wallet-btn,
        .edit-btn {
            font-size: var(--fs-sm);
            padding: 8px 14px;
            border-radius: 10px;
        }

        .wallet-btn {
            background: linear-gradient(to bottom, #facc15, #ca8a04);
            border: 1px solid #854d0e;
            color: #fff;
            font-weight: 600;
        }

        .edit-btn {
            background: linear-gradient(to bottom, #60a5fa, #2563eb);
            border: 1px solid #1d4ed8;
            color: #fff;
            font-weight: 600;
        }

        /* Status Strip */
        .status-card {
            background: #e8f0ff;
            border-radius: 14px;
            border: 1px solid #bfd6ff;
            padding: 10px 12px;
            font-size: var(--fs-sm);
        }

        .status-card .label {
            font-size: var(--fs-sm);
        }

        .status-card .value {
            font-size: var(--fs-md);
            font-weight: 700;
        }

        /* Action Buttons */
        .action-btn-primary,
        .action-btn-disabled {
            padding: 18px 12px;
            font-size: var(--fs-md);
            border-radius: 14px;
            text-align: left;
        }

        .action-btn-primary {
            background: linear-gradient(to bottom, #22c55e, #15803d);
            color: #fff;
            border: 1px solid #0f5c2a;
        }

        .action-btn-primary p,
        .action-btn-disabled p {
            font-size: var(--fs-sm);
            margin-top: 4px;
            opacity: 0.9;
        }

        .action-btn-disabled {
            background: #d1d5db;
            color: #6b7280;
            border: 1px solid #bfc5ce;
        }

        /* Modal */
        .modal-content {
            border-radius: 16px;
            font-size: var(--fs-base);
        }

        .modal-header {
            padding: 10px 16px;
        }

        .modal-title {
            font-size: var(--fs-md);
            font-weight: 700;
        }

        .modal-body {
            padding: 20px;
        }

        .quick-btn {
            padding: 6px;
            font-size: var(--fs-sm);
            border-radius: 8px;
        }

        .action-btn-primary svg,
        .action-btn-disabled svg {
            width: 27px;
            height: 27px;
            flex-shrink: 0;
        }

        .action-btn-primary h6,
        .action-btn-disabled h6 {
            line-height: 1.2;
        }

        /* Exam Success Banner */
        .exam-success-card {
            background: linear-gradient(to right, #4ade80, #16a34a);
            border-radius: 20px;
            border: 4px solid #166534;
            padding: 18px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }

        .exam-icon-box {
            width: 55px;
            height: 55px;
            background: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.15);
        }

        .exam-icon-box svg {
            width: 23px;
            height: 40px;
            display: block;
            /* Removes extra whitespace */
            margin: 0;
            /* Ensures proper centering */
            padding: 0;
        }

        .exam-title {
            font-size: 20px;
            font-weight: 700;
            color: white;
        }

        .exam-subtitle {
            color: #d1fae5;
            font-size: 13px;
        }

        .exam-mode {
            color: white;
            font-weight: 600;
            font-size: 12px;
            margin-top: 4px;
        }

        /* Buttons */
        .exam-btn-purple {
            background: linear-gradient(to bottom, #c084fc, #7e22ce);
            border: 2px solid #6b21a8;
            color: white;
            font-weight: 700;
            padding: 10px 18px;
            font-size: 13px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .exam-btn-purple:hover {
            transform: scale(1.05);
        }

        .exam-btn-green {
            background: white;
            border: 2px solid #166534;
            color: #166534;
            font-weight: 700;
            padding: 10px 18px;
            font-size: 13px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .exam-btn-green:hover {
            background: #f0fdf4;
        }

        .exam-btn-blue {
            background: linear-gradient(to bottom, #60a5fa, #2563eb);
            border: 2px solid #1e40af;
            color: white;
            font-weight: 700;
            padding: 10px 18px;
            font-size: 13px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .exam-btn-blue:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container py-4 page-wrap">
        <!-- EXAM SUCCESS CARD -->
        <div class="exam-success-card mb-3 d-flex align-items-center justify-content-between">

            <div class="d-flex align-items-center gap-4">

                <div class="exam-icon-box">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#16A34A" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path
                            d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z" />
                        <path d="M13 5v2"></path>
                        <path d="M13 17v2"></path>
                        <path d="M13 11v2"></path>
                    </svg>
                </div>


                <div>
                    <h2 class="exam-title">Your Exam is Scheduled!</h2>
                    <p class="exam-subtitle">Exam Date: Tuesday, December 2, 2025 | 13:00 PM - 14:00 PM</p>
                    <p class="exam-mode">Mode: Online Exam</p>
                </div>

            </div>

            <div class="d-flex gap-2">
                <a href="exam_entrance.php"> <button class="exam-btn-purple">Enter Exam</button>
                </a>
                <a href="hall-ticket.php"><button class="exam-btn-green">View Hall Ticket</button></a>
                <a href="hall-ticket.php"> <button class="exam-btn-blue">Print</button>
                </a>
            </div>

        </div>

        <!-- Profile -->
        <div class="profile-card mb-3">
            <div class="profile-header fw-bold">Student Profile</div>

            <div class="p-3 d-flex align-items-center gap-4">

                <div class="avatar-circle">
                    <svg width="28" height="28" stroke="#fff" fill="none" stroke-width="2">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>

                <div class="flex-grow-1">
                    <h5 class="fw-bold mb-1" style="font-size: var(--fs-lg);">test2</h5>
                    <p class="mb-1 text-secondary" style="font-size: var(--fs-sm);">Phone: 9876543211</p>
                    <p class="mb-1 text-secondary" style="font-size: var(--fs-sm);">Email: t@gmail.com</p>
                    <p class="mb-0 text-secondary" style="font-size: var(--fs-sm);">Age: 2 | Male</p>
                </div>

                <div class="d-flex flex-row gap-2">
                    <button class="wallet-btn" data-bs-toggle="modal" data-bs-target="#walletModal">
                        Wallet • ₹0
                    </button>

                    <button class="edit-btn">Edit Profile</button>
                </div>

            </div>
        </div>

        <!-- Status -->
        <div class="status-card mb-3">
            <div class="d-flex justify-content-between flex-wrap gap-3">

                <div>
                    <div class="label">Application Status</div>
                    <div class="value text-primary">Pending</div>
                </div>

                <div>
                    <div class="label">Programs Selected</div>
                    <div class="value text-warning">0</div>
                </div>

                <div>
                    <div class="label">Documents</div>
                    <div class="value text-success">0/3</div>
                </div>

            </div>
        </div>

        <!-- Actions -->
        <div class="row g-3 mb-4">

            <!-- Select Programs -->
            <div class="col-md-4">
                <a href="select_program.php">
                    <button class="action-btn-primary w-100 h-100 d-flex flex-column justify-content-between py-3">
                        <div>
                            <h6 class="fw-bold m-0">Select Programs</h6>
                            <p class="m-0">Choose your preferred programs and set priorities</p>
                        </div>
                    </button>
                </a>
            </div>

            <!-- Schedule Entrance -->
            <div class="col-md-4">
                <a href="schedule_enterance.php">
                    <button class="action-btn-disabled w-100 h-100 d-flex flex-column justify-content-between py-3">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <svg width="18" height="18" stroke="#6b7280" fill="none" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2"></rect>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                </svg>
                                <h6 class="fw-bold m-0">Schedule Entrance</h6>
                            </div>
                            <p class="m-0 mt-1">Exam already scheduled</p>
                        </div>
                    </button>
                </a>
            </div>

            <!-- Upload Documents -->
            <div class="col-md-4">
                <button class="action-btn-disabled w-100 h-100 d-flex flex-column justify-content-between py-3"
                    disabled>
                    <div>
                        <div class="d-flex align-items-center gap-2">
                            <svg width="18" height="18" stroke="#6b7280" fill="none" stroke-width="2">
                                <path d="M12 16V4"></path>
                                <path d="M6 10l6-6 6 6"></path>
                                <rect x="4" y="16" width="16" height="4" rx="1"></rect>
                            </svg>
                            <h6 class="fw-bold m-0">Upload Documents</h6>
                        </div>
                        <p class="m-0 mt-1">Complete exam and course selection first</p>
                    </div>
                </button>
            </div>

        </div>


    </div>

    <!-- Wallet Modal -->
    <div class="modal fade" id="walletModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-lg">

                <div class="modal-header text-white" style="background: linear-gradient(to bottom,#f59e0b,#b45309);">
                    <h5 class="modal-title">My Wallet</h5>
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light">

                    <div class="p-3 mb-3 rounded-3 text-center border" style="background:#dcfce7;border-color:#86efac;">
                        <p class="mb-1 small text-muted">Current Balance</p>
                        <h3 class="fw-bold text-success m-0">₹0</h3>
                    </div>

                    <label class="small text-muted fw-semibold">Add Money</label>
                    <div class="d-flex gap-2 mb-3">
                        <input type="number" class="form-control p-2" placeholder="Amount">
                        <button class="btn text-white fw-bold px-3" style="background:#16a34a;">Add</button>
                    </div>

                    <label class="small text-muted fw-semibold">Quick Add</label>
                    <div class="row g-2">
                        <div class="col-3"><button class="quick-btn w-100 border">₹500</button></div>
                        <div class="col-3"><button class="quick-btn w-100 border">₹1000</button></div>
                        <div class="col-3"><button class="quick-btn w-100 border">₹2000</button></div>
                        <div class="col-3"><button class="quick-btn w-100 border">₹5000</button></div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>