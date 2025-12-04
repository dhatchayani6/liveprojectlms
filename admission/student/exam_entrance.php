<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entrance Examination</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #c5ccd3;
        }

        .gradient-header {
            border-radius: 13px 15px 0px 0px;
            background: linear-gradient(to bottom, #2563eb, #1e40af);
        }


        .gradient-button {
            background: linear-gradient(to bottom, #4ade80, #16a34a);
            border: 1px solid #0f662c;
        }

        .card-custom {
            background: linear-gradient(to bottom, #f3f4f6, #e5e7eb);
            border-radius: 15px;
        }

        ul li {
            font-size: 10px;
            padding-bottom: 10px;
        }

        ul {
            margin-bottom: 0px !important;
        }

        .p-4 {
            padding: 24px !important;
        }

        p {
            margin-bottom: 0px !important;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 p-3">

    <div class="container" style="max-width: 530px;">
        <div class="card shadow-lg border card-custom">

            <!-- Header -->
            <div class="text-center p-3 gradient-header text-white ">
                <h6 class="fw-bold fs-4 mb-1">ENTRANCE EXAMINATION</h6>
                <h2 class="fw-semibold fs-5 text-light">Online Mode</h2>
            </div>

            <div class="p-4">

                <!-- Exam Instructions -->
                <div class="p-4 mb-3 border border-primary rounded" style="background:#eff6ff;">
                    <h4 class="fw-bold text-dark  mb-3" style="font-size:13px !important">Exam Instructions</h4>

                    <ul class="small text-dark ps-3">
                        <li>The exam will be conducted in fullscreen mode. Do not exit fullscreen during the exam.
                        </li>
                        <li>Total Questions: 10 | Duration: 120 minutes
                        </li>
                        <li>Do not switch tabs or minimize the window. This will be considered malpractice.
                        </li>
                        <li>You can mark questions for review and come back to them later.
                        </li>
                        <li>The exam will auto-submit when time runs out.
                        </li>
                        <li>Make sure you have a stable internet connection.
                        </li>
                    </ul>
                </div>

                <!-- Malpractice Warning -->
                <div class="p-4 mb-4 border border-danger rounded" style="background:#fff5f5;">
                    <div class="d-flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-exclamation-triangle text-danger mt-1" viewBox="0 0 16 16">
                            <path
                                d="M7.938 2.016a.13.13 0 0 1 .125 0l6.857 11.856c.03.052.48.11.048.168a.3.3 0 0 1-.3.3H1.332a.3.3 0 0 1-.3-.3.3-.3 0 .048-.168L7.938 2.016zM8 5c-.535 0-.954.462-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>

                        <div style="font-size: 10px !important;">
                            <h5 class="fw-bold text-danger fs-6 mb-1" style="font-size: 10px !important;">Malpractice
                                Warning</h5>
                            <p class=" text-danger">
                                Any attempt to cheat (switching tabs, exiting fullscreen, etc.) will be detected and
                                recorded.
                                Multiple violations may result in exam termination.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Start Button -->
                <a href="exam.php"><button
                        class="btn w-100 text-white fw-semibold py-2 gradient-button d-flex justify-content-center align-items-center gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M10.97 5.97a.75.75 0 0 0-1.08-1.04L7.477 7.417 6.384 6.323a.75.75 0 1 0-1.06 1.06L6.97 9.03a.75.75 0 0 0 1.08 0l2.92-2.92z" />
                        </svg>

                        I Understand — Start Exam
                    </button></a>


            </div>
        </div>
    </div>



</body>

</html>