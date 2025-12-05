<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Ticket</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #e2e8f0;
        }

        .hall-card {
            max-width: 900px;
            margin: 25px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .header-box {
            background: linear-gradient(to right, #2563eb, #1e40af);
            color: white;
            padding: 25px 10px;
            text-align: center;
        }

        /* Candidate photo */
        .photo-box img {
            width: 160px;
            height: 192px;
            border-radius: 10px;
            border: 2px solid #2563eb;
        }

        /* Barcode */
        .barcode-img {
            width: 100%;
            max-width: 310px;
            height: auto;
        }

        /* Instructions */
        .instruction-box {
            border-left: 5px solid red;
            background: #fff5f5;
            padding: 15px 20px;
        }

        .course-detail {
            border: 1px solid #e2e2e2;
            border-radius: 12px;
            padding: 20px 17px;
        }

        .btn-grey {
            background-color: #aeb5bb;
            padding: 11px 20px;
            border-radius: 12px;
        }

        .btn-grey:hover {
            background-color: #aeb5bb;
            padding: 11px 20px;
            border-radius: 12px;
        }

        .btn-success {
            background: linear-gradient(to bottom, #4ade80, #16a34a);
            border-color: transparent;
            padding: 10px 20px;
            border-radius: 12px;
            color: #fff;
        }

        .btn-success:hover {
            background: linear-gradient(to bottom, #4ade80, #16a34a);
            border-color: transparent;
            padding: 10px 20px;
            border-radius: 12px;
            color: #fff;
        }

        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background: white;
            }
        }

        /* RESPONSIVE FIXES */
        @media (max-width: 768px) {
            .header-buttons {
                flex-direction: column;
                gap: 15px !important;
                text-align: center;
            }

            .photo-box {
                margin-bottom: 15px;
            }

            .hall-card {
                margin: 10px;
            }

            .instruction-box {
                padding: 15px;
            }

            .course-detail {
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .header-box h2 {
                font-size: 20px;
            }

            .header-box p {
                font-size: 15px;
            }
        }

        .exam-icon {
            width: 18px !important;
            height: 18px !important;
            flex-shrink: 0 !important;
            display: inline-block !important;
        }
    </style>
</head>

<body>

    <!-- HEADER ACTION BUTTONS -->
    <div class="container mt-3 no-print">
        <div class="d-flex justify-content-around align-items-center gap-5 header-buttons">

            <!-- BACK BUTTON -->
            <a href="student_dashboard.php" class="btn btn-grey text-dark fw-bold d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg>
                Back to Dashboard
            </a>

            <!-- PRINT BUTTON -->
            <button onclick="window.print()" class="btn btn-success d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer">
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                    <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"></path>
                    <rect x="6" y="14" width="12" height="8" rx="1"></rect>
                </svg>
                Print Hall Ticket
            </button>
        </div>
    </div>

    <!-- MAIN HALL TICKET CARD -->
    <div class="hall-card mt-3">

        <!-- Header -->
        <div class="header-box">
            <h2 class="fw-bold">ENTRANCE EXAMINATION</h2>
            <p class="mb-0" style="font-size: 18px;">HALL TICKET</p>
        </div>

        <div class="p-4" style="border: 6px solid #2563eb; border-radius: 0 0 18px 18px;">

            <!-- Candidate Details -->
            <div class="mb-4 course-detail">
                <h5 class="fw-bold mb-3">Candidate Details</h5>

                <div class="row align-items-center">

                    <!-- Candidate Photo -->
                    <div class="col-md-3 col-12 text-center photo-box">
                        <img src="../../images/logo1.png" alt="Candidate Photo">
                        <p class="mt-2 text-muted small">Candidate Photograph</p>
                    </div>

                    <!-- Candidate Info -->
                    <div class="col-md-9 col-12 mt-3 mt-md-0">
                        <div class="row g-3">
                            <div class="col-md-6 col-12">
                                <strong>Name:</strong> <br>d
                            </div>
                            <div class="col-md-6 col-12">
                                <strong>Phone:</strong> <br>9876543210
                            </div>
                            <div class="col-md-6 col-12">
                                <strong>Email:</strong> <br>d@gmail.com
                            </div>
                            <div class="col-md-6 col-12">
                                <strong>Age:</strong> <br>20 years
                            </div>
                            <div class="col-md-6 col-12">
                                <strong>Gender:</strong> <br>Male
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Examination Details -->
            <div class="mb-4 course-detail p-4" style="background-color:#eff6ff">


                <h6 class="fw-bold text-dark mb-3 pb-2 border-bottom border-primary" style="font-size: 20px;">
                    Examination Details
                </h6>

                <!-- Date -->
                <div class="d-flex align-items-start gap-2 mb-2">
                    <svg class="exam-icon text-primary mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M8 2v4"></path>
                        <path d="M16 2v4"></path>
                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                        <path d="M3 10h18"></path>
                    </svg>

                    <div>
                        <p class="text-uppercase text-muted mb-0" style="font-size: 10px; font-weight:600;">Date</p>
                        <p class="fw-bold text-dark mb-0" style="font-size: 15px;">Tuesday, December 2, 2025</p>
                    </div>
                </div>


                <!-- Time -->
                <div class="d-flex align-items-start gap-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="exam-icon text-primary">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>

                    <div>
                        <p class="text-uppercase text-muted mb-0" style="font-size: 10px; font-weight:600;">Time</p>
                        <p class="fw-bold text-dark mb-0" style="font-size: 15px;">13:00 PM – 14:00 PM</p>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="exam-icon text-primary">
                        <path
                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>

                    <div>
                        <p class="text-uppercase text-muted mb-0" style="font-size: 10px; font-weight:600;">Venue
                        </p>
                        <p class="fw-bold text-dark mb-0" style="font-size: 13px;">Main Campus – Hall A</p>
                    </div>
                </div>


            </div>


            <!-- Barcode Section -->
            <div class="text-center mb-4 course-detail">
                <h6 class="fw-bold">ADMISSION BARCODE</h6>

                <img src="https://barcode.tec-it.com/barcode.ashx?data=987651234&code=Code128&dpi=96&hidehrt=true"
                    class="barcode-img">

                <p class="text-muted small">Present this hall ticket at the examination center</p>
            </div>

            <!-- Instructions Section -->
            <div class="border border-2 border-danger rounded-3 p-4 bg-danger bg-opacity-10 mb-4">

                <h6 class="fw-bold text-danger d-flex align-items-center gap-2 mb-3" style="font-size: 14px;">
                    <!-- Alert Circle Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-danger exam-icon">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" x2="12" y1="8" y2="12"></line>
                        <line x1="12" x2="12.01" y1="16" y2="16"></line>
                    </svg>


                    Important Instructions
                </h6>

                <ul class="list-unstyled mb-0" style="font-size: 13px; color: #333;">
                    <li class="d-flex align-items-start gap-2 mb-2">
                        <span class="text-danger fw-bold">•</span>
                        <span>Report to the examination center at least 30 minutes before the scheduled time.</span>
                    </li>

                    <li class="d-flex align-items-start gap-2 mb-2">
                        <span class="text-danger fw-bold">•</span>
                        <span>Carry a valid photo ID proof along with this hall ticket.</span>
                    </li>

                    <li class="d-flex align-items-start gap-2 mb-2">
                        <span class="text-danger fw-bold">•</span>
                        <span>Mobile phones and electronic devices are strictly prohibited.</span>
                    </li>

                    <li class="d-flex align-items-start gap-2 mb-2">
                        <span class="text-danger fw-bold">•</span>
                        <span>Late entry will not be permitted under any circumstances.</span>
                    </li>

                    <li class="d-flex align-items-start gap-2">
                        <span class="text-danger fw-bold">•</span>
                        <span>This hall ticket must be presented at the examination center for verification.</span>
                    </li>
                </ul>
            </div>

            <hr>

            <!-- Footer -->
            <p class="text-center footer-text">
                Issued on December 2, 2025 <br>
                For any queries, please contact the admission office.
            </p>

        </div>
    </div>

</body>

</html>