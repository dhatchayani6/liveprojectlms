<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet/courses.css">

    <style>
        .rounded-circle {
            width: 20px !important;
            height: 20px !important;
            background: linear-gradient(#c4e0f9, #96c6f3);
            border: 1px solid #ddd;
            padding: 11px;
        }

        .rounded-circle i {
            font-size: 11px !important;
        }

        .progress-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .progress {
            flex-grow: 1;
            height: 12px;
        }

        .btn-blue-courses {
            background: linear-gradient(to right, rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            color: white;
        }

        .bg-courses-grey {
            background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px;
        }

        .teacher-courses-titile {
            font-size: 20px;
        }

        .content-scroll {
            max-height: 750px;
            overflow-y: auto;
        }

        .percentage-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #444;
        }
    </style>
</head>

<body>

    <div class="container p-0">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Introduction to Data Science
            </h5>
            <a href="../index.php">
                <button class="btn d-flex align-items-center logout-btn gap-2">
                    <i class="bi bi-box-arrow-right"></i><span>Logout</span>
                </button>
            </a>
        </div>

        <div class="content-scroll bg-light">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h6 class="mb-0 pending">
                    <a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to Dashboard</a>
                </h6>
            </div>

            <div class="assignmnent p-3" id="assignments-slider">
                <div class="assignment-detail">
                    <div class="mb-3">
                        <div class="p-4 rounded border bg-courses-grey">
                            <h4 class="teacher-courses-titile">CS1234: Introduction to Data Science</h4>
                            <small>
                                This course introduces the fundamental concepts of data science, including data
                                collection, analysis, and visualization.
                            </small>
                            <div class="pt-2">
                                <small class="fw-medium">Course Progress</small>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar btn-blue-courses" style="width: 42%;" role="progressbar"
                                        aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">42%</span>
                            </div>
                        </div>
                    </div>

                    <div class="details-ass border rounded">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs justify-content-between"
                            style="background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview"
                                    type="button">Chapter</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#materials"
                                    type="button">Materials</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#students"
                                    type="button">Evaluation</button>
                            </li>
                        </ul>

                        <div class="tab-content mt-3">

                            <!-- Chapters Tab -->
                            <div class="tab-pane fade show active" id="overview">
                                <div class="p-3 bg-white rounded shadow-sm">
                                    <h6 class="fw-semibold mb-3">Chapters Overview</h6>

                                    <!-- Chapter Example -->
                                    <div class="mb-3 p-3 border rounded bg-courses-grey">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fw-semibold mb-1 text-dark">Introduction to Data Science</h6>
                                                <small class="text-muted">Overview of data science concepts and
                                                    applications</small>
                                            </div>
                                            <div class="px-2 py-1 rounded text-white fw-semibold text-center"
                                                style="min-width:60px; background: linear-gradient(rgb(140, 198, 87), rgb(111, 173, 59));">
                                                100%
                                            </div>
                                        </div>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar" style="width: 100%; background: linear-gradient(to right, rgb(140, 198, 87), rgb(111, 173, 59));">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Repeat for other chapters -->
                                    <div class="mb-3 p-3 border rounded bg-courses-grey">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fw-semibold mb-1 text-dark">Data Collection and Cleaning</h6>
                                                <small class="text-muted">Methods for collecting and cleaning data</small>
                                            </div>
                                            <div class="px-2 py-1 rounded text-white fw-semibold text-center"
                                                style="min-width:60px; background: linear-gradient(rgb(75, 147, 213), rgb(21, 103, 186));">
                                                75%
                                            </div>
                                        </div>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar" style="width: 75%; background: linear-gradient(to right, rgb(75, 147, 213), rgb(21, 103, 186));">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Materials Tab -->
                            <div class="tab-pane fade" id="materials">
                                <div class="p-3 bg-white rounded shadow-sm">
                                    <h6 class="fw-semibold mb-2">Course Materials</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="bi bi-file-earmark-text me-2 text-primary"></i>Lecture Notes - Week 1</span>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Download</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="bi bi-play-circle me-2 text-danger"></i>Video Lecture - Data Cleaning</span>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Watch</a>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <span><i class="bi bi-file-earmark-pdf me-2 text-danger"></i>Research Paper on EDA</span>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Open</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Evaluation Tab -->
                            <div class="tab-pane fade" id="students">
                                <div class="p-3 bg-white rounded shadow-sm">
                                    <h6 class="fw-semibold mb-3">Evaluation & Assignments</h6>
                                    <!-- Example Quiz -->
                                    <div class="p-3 mb-2 border rounded bg-courses-grey">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-0 fw-semibold">Data Types Quiz</h6>
                                            <span class="px-2 py-1 rounded text-white fw-semibold text-center"
                                                style="background: linear-gradient(rgb(140, 198, 87), rgb(111, 173, 59));">8/10</span>
                                        </div>
                                        <p class="text-muted small mb-2">10 questions</p>
                                        <button class="btn btn-secondary btn-sm" disabled>Completed</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
