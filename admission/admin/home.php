<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Portal</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background: #f6f9fc;
            font-family: "Inter", sans-serif;
            overflow-x: hidden;
            height: 100vh;
            cursor: pointer;
        }

        /* Subtle grid background */
        .grid-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(0, 0, 0, 0.01) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 0, 0, 0.01) 1px, transparent 1px);
            background-size: 45px 45px;
            pointer-events: none;
        }

        .card-modern {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid #e5e7eb;
            transition: all 0.25s ease;
        }

        .card-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
        }

        .icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .footer-text {
            color: #6b7280;
            font-size: 13px;
        }

        /* Base icon box transition */
        .icon-box {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        /* New Student – green */
        .card-modern.student:hover {
            border-color: #059669;
            background: linear-gradient(135deg,
                    /* bottom-left to top-right */
                    #D1FAE5 0%,
                    #FFFFFF 70%);
        }

        /* Existing Student – blue */
        .card-modern.existing:hover {
            border-color: #2563EB;
            background: linear-gradient(135deg,
                    #DBEAFE 0%,
                    #FFFFFF 70%);
        }

        /* Admin – purple */
        .card-modern.admin:hover {
            border-color: #9333EA;
            background: linear-gradient(135deg,
                    #F3E8FF 0%,
                    #FFFFFF 70%);
        }
    </style>
</head>

<body>

    <div class="grid-bg"></div>

    <!-- Center the content -->
    <div class="d-flex justify-content-center align-items-center min-vh-100 position-relative" style="z-index:2;">

        <div class="container text-center">

            <h2 class="fw-bold mb-2">Admission Portal</h2>
            <p class="text-muted mb-5">Select your login type to continue</p>

            <div class="row justify-content-center g-4">

                <!-- New Student -->
                <div class="col-md-3">
                    <div class="card-modern student  p-4 text-center shadow-sm">
                        <div class="icon-box  bg-opacity-10 d-flex align-items-center justify-content-center"
                            style="border-radius:14px;    background-color: #D1FAE5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user-plus" style="color:#059669;">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <line x1="19" y1="8" x2="19" y2="14"></line>
                                <line x1="22" y1="11" x2="16" y2="11"></line>
                            </svg>
                        </div>

                        <h5 class="fw-semibold">New Student</h5>
                        <p class="text-muted small">
                            Register for admission and start your application journey
                        </p>
                        <a href="#" class="text-success fw-semibold text-decoration-none">
                            Register Now <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Existing Student -->
                <div class="col-md-3">
                    <div class="card-modern existing p-4 text-center shadow-sm">
                        <div class="icon-box d-flex align-items-center justify-content-center"
                            style="width:64px; height:64px; border-radius:18px; background:#DBEAFE;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-user" style="color:#2563EB;">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>

                        <h5 class="fw-semibold">Existing Student</h5>
                        <p class="text-muted small">
                            Access your dashboard and track your application progress
                        </p>
                        <a href="login.php" class="text-primary fw-semibold text-decoration-none">
                            Login <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Admin -->
                <div class="col-md-3">
                    <div class="card-modern admin p-4 text-center shadow-sm">
                        <div class="icon-box d-flex align-items-center justify-content-center"
                            style="width:64px; height:64px; border-radius:18px; background:#F3E8FF;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-shield-check" style="color:#9333EA;">
                                <path
                                    d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                </path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>

                        <h5 class="fw-semibold">Admin</h5>
                        <p class="text-muted small">
                            Manage applications, exams, interviews, and documents
                        </p>
                        <a href="index.php" class="fw-semibold text-decoration-none" style="color:#8b5cf6;">
                            Admin Portal <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>

            <p class="footer-text mt-4">Secure authentication • End-to-end encrypted</p>

        </div>
    </div>

</body>

</html>