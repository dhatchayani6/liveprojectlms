<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link rel="stylesheet" href="stylesheet/courses.css">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .bi-book::before {
            color: #0d6efd !important;

        }

        .bi-book {
            background: rgba(59, 130, 246, 0.15);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }



        .bi-check2-circle {
            background: rgba(139, 92, 246, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-calendar3 {
            background: rgba(249, 115, 22, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <div class="d-flex gap-2">
                        <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Introduction
                        to Data Science
                    </div>
                </h5>
                <a href="../index.php">
                    <button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </div>

            <div class="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>

                </div>

                <div class="p-3">
                    <!-- Notifications -->


                    <div class="card rounded border mb-4">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center bg-secondary p-3">
                            <i class="bi bi-book fs-5 me-2" style="background-color: #DBEAFF; 
                  border: 1px solid rgba(59, 130, 246, 0.5); 
                  color: #2563EB; 
                  border-radius: 50%; 
                  padding: 5px;">
                            </i>
                            <h6 class="mb-0 fw-semibold">Data Science Project Due</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body rounded border bg-white">
                            <small class="fw-semibold ">Details:</small>
                            <h6 class="mb-3 text-gray fw-normal pt-2">
                                This assignment requires your attention for the course
                                <strong>"Introduction to Data Science"</strong>.
                            </h6>

                            <small class="fw-semibold mb-2">Questions:</small>
                            <div class="p-4 bg-light rounded mb-3 mt-3" style="border: 1px solid #e3e8ef;">

                            </div>

                            <div class="d-flex flex-column align-items-start">
                                <small class="fw-semibold mb-1">Due Date:</small>
                                <span class="badge rounded fs-6" style="    background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
                            color: white;
                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                            border: 1px solid rgba(0, 0, 0, 0.2);">
                                    2023-11-15
                                </span>
                            </div>

                            <div class="d-flex flex-column align-items-start pt-3">
                                <small class="fw-semibold mb-1">Status</small>
                                <span class="badge rounded fs-6 btn-gradient-glossy">
                                    <small>submitted</small>
                                </span>
                            </div>
                        </div>


                    </div>
                    <div class="rounded mt-3" style="border: 1px solid #dee2e6;">
                        <!-- Card Header -->
                        <div class="p-3" style="background-color: #e9ecef;">
                            <h6 class="mb-0 fw-semibold">Your Submission</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="p-3">
                            <!-- Submitted On -->
                            <div class="mb-3">
                                <strong>Submitted On:</strong>
                                <div>2023-11-16</div>
                            </div>

                            <!-- Your Answer -->
                            <div class="mb-3">
                                <strong>Your Answer:</strong>
                                <div class="border rounded p-3" style="background-color: #f8f9fa;">
                                    I have designed a normalized database schema with 5 tables that efficiently handles
                                    the
                                    relationships between entities while minimizing redundancy. The implementation
                                    includes
                                    proper primary and foreign keys, with appropriate indexing for performance
                                    optimization.
                                </div>
                            </div>

                            <!-- Uploaded Files -->
                            <div class="mb-3">
                                <strong>Uploaded Files:</strong>
                                <ul class="list-unstyled mt-2">
                                    <li class="border rounded p-2 mb-1 d-flex align-items-center"
                                        style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(240, 240, 240) 100%);">
                                        <i class="bi bi-file-earmark-text me-2 text-primary"></i> DB_Schema.pdf
                                    </li>
                                    <li class="border rounded p-2 d-flex align-items-center"
                                        style="    background: linear-gradient(rgb(249, 249, 249) 0%, rgb(240, 240, 240) 100%);">
                                        <i class="bi bi-file-earmark-text me-2 text-primary"></i> ERD_Diagram.png
                                    </li>
                                </ul>
                            </div>

                            <!-- Note -->
                            <div class="alert alert-primary text-primary mt-3 mb-0 p-3">
                                <small>
                                    <strong>Note:</strong> Your assignment has been submitted and is pending review. You
                                    will receive
                                    a notification once it has been graded.
                                </small>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>