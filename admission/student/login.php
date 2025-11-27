<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login – Bootstrap Version</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #c5ccd3;
            min-height: 100vh;
            font-family: "Inter", sans-serif;
            position: relative;
            overflow-x: hidden;
        }

        /* Grid pattern background */
        .grid-bg {
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.08'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 30px 30px;
            opacity: 1;
            pointer-events: none;
        }

        .login-card {
            border-radius: 20px;
            border: 1px solid #bfc4cc;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(to bottom, #4b5563, #1f2937);
            color: white;
            padding: 18px 0;
            border-bottom: 1px solid #4b5563;
            text-align: center;
        }

        .gradient-btn {
            background: linear-gradient(to bottom, #60a5fa, #2563eb);
            border: 1px solid #1e40af;
            color: white;
            transition: all 0.2s ease;
            border-radius: 10px;
            border-color: transparent;
        }

        .gradient-btn:active {
            background: linear-gradient(to bottom, #2563eb, #60a5fa);
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <div class="grid-bg"></div>

    <div class="d-flex justify-content-center align-items-center min-vh-100 position-relative">

        <div class="w-100" style="max-width: 420px; z-index: 10;">

            <!-- Back Button -->
            <a href="home.php" class="d-flex align-items-center gap-2 text-dark mb-3 text-decoration-none">
                <i class="bi bi-arrow-left rotate-180"></i>
                <span class="small fw-medium">Back to login options</span>
            </a>

            <!-- Card -->
            <div class="login-card bg-light">

                <!-- Header -->
                <div class="login-header">
                    <h5 class="fw-bold mb-0">Student Login</h5>
                </div>

                <!-- Form -->
                <form class="p-4">

                    <!-- Name -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Name</label>
                        <input type="text" class="form-control p-2 border-2 shadow-sm" placeholder="Enter your name"
                            required>
                    </div>

                    <!-- Phone + Button -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Phone Number</label>

                        <div class="d-flex gap-2">
                            <input type="tel" class="form-control p-2 border-2 shadow-sm"
                                placeholder="Enter phone number" required>

                            <a href="student_dashboard.php">
                                <button type="button" class="gradient-btn px-4 rounded-lg fw-semibold shadow h-100">
                                    Continue
                                </button>
                            </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

</body>

</html>