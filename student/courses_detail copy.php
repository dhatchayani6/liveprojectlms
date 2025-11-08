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

    <!-- Plyr CSS -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

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

        #videoSection .ratio::before {
            padding-top: 0 !important;
        }

        /* Section buttons default */
        button.section-btn {
            border: 1px solid #ccc;
            background: white;
            color: #333;
            border-radius: 8px;
            padding: 6px 25px;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }

        /* Section buttons active */
        button.section-btn.active {
            position: relative;
            background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.3) 0px 1px 3px;
            text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
        }

        .btn-gradient-glossy {
            position: relative;
            background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow:
                rgba(255, 255, 255, 0.4) 0px 1px 0px inset,
                rgba(0, 0, 0, 0.3) 0px 1px 3px;
            text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
            overflow: hidden;
            border-radius: 8px;
            padding: 6px 25px;
            font-weight: 500;
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>

<body>

    <div class="container p-0">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Introduction to Data
                Science
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
                    <a href="courses.php"><i class="bi bi-arrow-left me-2"></i>Back to Courses</a>
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
                        <ul class="nav nav-tabs flex-nowrap overflow-auto"
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
                                            <div class="progress-bar"
                                                style="width: 100%; background: linear-gradient(to right, rgb(140, 198, 87), rgb(111, 173, 59));">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Repeat for other chapters -->
                                    <div class="mb-3 p-3 border rounded bg-courses-grey">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fw-semibold mb-1 text-dark">Data Collection and Cleaning</h6>
                                                <small class="text-muted">Methods for collecting and cleaning
                                                    data</small>
                                            </div>
                                            <div class="px-2 py-1 rounded text-white fw-semibold text-center"
                                                style="min-width:60px; background: linear-gradient(rgb(75, 147, 213), rgb(21, 103, 186));">
                                                75%
                                            </div>
                                        </div>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar"
                                                style="width: 75%; background: linear-gradient(to right, rgb(75, 147, 213), rgb(21, 103, 186));">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Materials Tab -->
                            <div class="tab-pane fade" id="materials">
                                <div class="p-3 bg-white rounded shadow-sm">

                                    <!-- Header -->
                                    <div class="d-flex align-items-center" style="gap: 250px; padding: 1rem;">
                                        <h6 class="mb-0 pending">
                                            <a href="courses_detail.php"><i class="bi bi-arrow-left me-2"></i>Back to
                                                chapters</a>
                                        </h6>
                                        <h6 class="fw-semibold mb-0">Introduction To Data Science</h6>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="p-3 d-flex flex-wrap gap-2">
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="readingBtn">Reading</button>
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="videoBtn">Videos</button>
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="practiceBtn">Practice</button>
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="assignmentBtn">Assignments</button>
                                    </div>



                                    <!-- Default Card List -->
                                    <div class="row g-4 p-3" id="materialsList">
                                        <!-- Card 1 -->
                                        <div class="col-12 col-sm-6">
                                            <div class="card border-0 shadow-sm p-3 bg-courses-grey">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3 flex-shrink-0">
                                                        <div
                                                            class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-book text-primary fs-6"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <h6 class="fw-semibold text-dark mb-1">Introduction to Data
                                                            Analysis</h6>
                                                        <small class="text-muted">Fundamentals of data analysis
                                                            techniques</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reading Section -->
                                    <div class="p-3" id="readingSection" style="display:none;">
                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                            <div class="p-2 border-bottom bg-secondary text-dark">
                                                Reading Material
                                            </div>
                                            <div class="p-3">
                                                <p class="small">Data Collection Methods</p>

                                                <!-- Desktop PDF Viewer (iframe) -->
                                                <div
                                                    class="ratio ratio-16x9 border rounded shadow-sm d-none d-md-block">
                                                    <iframe src="../pdf/LARAVEL BASICS FOM SCRATCH.pdf" width="100%"
                                                        height="600" style="border:none;"
                                                        title="Course PDF Viewer"></iframe>
                                                </div>

                                                <!-- Mobile PDF Viewer (embed full-width) -->
                                                <div class="d-block d-md-none">
                                                    <embed src="../pdf/LARAVEL BASICS FOM SCRATCH.pdf"
                                                        type="application/pdf" width="100%" height="400"
                                                        style="border:none;">
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <!-- Video Section -->
                                    <div class="p-3" id="videoSection" style="display:none;">
                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                            <div class="p-2 border-bottom bg-secondary text-dark">
                                                Video Material
                                            </div>
                                            <div class="p-3">
                                                <p class="small">Data Preprocessing Techniques
                                                </p>
                                                <div class="ratio ratio-16x9 border rounded shadow-sm">
                                                    <video id="player" playsinline controls>
                                                        <source src="../video/someone.mp4" type="video/mp4" />
                                                        Your browser does not support HTML5 video.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Practice Section -->
                                    <div class="p-3" id="practiceSection" style="display:none;">
                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                            <div class="p-2 border-bottom bg-secondary text-dark">
                                                Practice Material
                                            </div>
                                            <div class="p-3">

                                                <!-- Questions Container -->
                                                <div id="questionsContainer">
                                                    <!-- Question 1 -->
                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">1. What is the capital of
                                                            France?</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q1"
                                                                id="q1a" value="A">
                                                            <label class="form-check-label" for="q1a">A. Berlin</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q1"
                                                                id="q1b" value="B">
                                                            <label class="form-check-label" for="q1b">B. Madrid</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q1"
                                                                id="q1c" value="C">
                                                            <label class="form-check-label" for="q1c">C. Paris</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q1"
                                                                id="q1d" value="D">
                                                            <label class="form-check-label" for="q1d">D. Rome</label>
                                                        </div>
                                                    </div>

                                                    <!-- Question 2 -->
                                                    <div class="mb-3">
                                                        <label class="form-label fw-semibold">2. Who wrote
                                                            'Hamlet'?</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q2"
                                                                id="q2a" value="A">
                                                            <label class="form-check-label" for="q2a">A. Charles
                                                                Dickens</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q2"
                                                                id="q2b" value="B">
                                                            <label class="form-check-label" for="q2b">B. William
                                                                Shakespeare</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q2"
                                                                id="q2c" value="C">
                                                            <label class="form-check-label" for="q2c">C. Mark
                                                                Twain</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="q2"
                                                                id="q2d" value="D">
                                                            <label class="form-check-label" for="q2d">D. Leo
                                                                Tolstoy</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="d-flex justify-content-end mt-3" id="submitContainer">
                                                    <button type="submit" class="btn btn-gradient-glossy btn-sm">Submit
                                                        Answer</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                    <!-- Assignment Section -->
                                    <div class="p-3" id="assignmentSection" style="display:none;">
                                        <div class="card shadow-sm border-light">

                                            <!-- Card Header -->
                                            <div
                                                class="card-header bg-secondary text-dark d-flex justify-content-between align-items-center">
                                                <span>Assignment Material</span>
                                                <!-- <div class="d-flex gap-1">
                                                    <span class="rounded-circle bg-danger"
                                                        style="width:8px; height:8px;"></span>
                                                    <span class="rounded-circle bg-warning"
                                                        style="width:8px; height:8px;"></span>
                                                    <span class="rounded-circle bg-success"
                                                        style="width:8px; height:8px;"></span>
                                                </div> -->
                                            </div>

                                            <!-- Card Body -->
                                            <div class="card-body bg-light">
                                                <h6 class="p-3">Data Collection Exercise
                                                </h6>
                                                <!-- Assignment Details Card -->
                                                <div class="card border shadow-sm mb-3">
                                                    <div class="card-header bg-light">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="small fw-medium">Assignment Details</span>
                                                            <!-- <div class="d-flex gap-1">
                                                                <span class="rounded-circle bg-danger"
                                                                    style="width:8px; height:8px;"></span>
                                                                <span class="rounded-circle bg-warning"
                                                                    style="width:8px; height:8px;"></span>
                                                                <span class="rounded-circle bg-success"
                                                                    style="width:8px; height:8px;"></span>
                                                            </div> -->
                                                        </div>
                                                    </div>

                                                    <div class="card-body bg-white">
                                                        <!-- Instructions -->
                                                        <div class="mb-3">
                                                            <h6 class="small fw-medium">Instructions:</h6>
                                                            <p class="small text-secondary">
                                                                For this assignment, you will need to collect data from
                                                                a public dataset of your choice,
                                                                document your data collection process, and prepare a
                                                                brief report on the dataset characteristics.
                                                            </p>
                                                        </div>

                                                        <!-- Due Date -->
                                                        <div class="mb-3">
                                                            <h6 class="small fw-medium">Due Date:</h6>
                                                            <p class="small text-secondary">2023-12-15</p>
                                                        </div>

                                                        <!-- File Upload -->
                                                        <div class="mb-3">
                                                            <h6 class="small fw-medium">Upload Your Solution:</h6>
                                                            <div class="border border-2 border-dashed rounded p-4 text-center"
                                                                style="background: rgba(0,0,0,0.02);">
                                                                <i class="bi bi-upload"
                                                                    style="font-size: 2rem; color: #6c757d;"></i>
                                                                <p class="small text-secondary mb-1">Drag and drop your
                                                                    files here</p>
                                                                <p class="small text-muted mb-2">or</p>
                                                                <div class="mb-3">

                                                                    <div class="d-grid">
                                                                        <label class="text-primary">
                                                                            Browse files
                                                                            <input type="file" accept=".pdf" hidden>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Submit Button -->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="button"
                                                                class="btn btn-gradient-glossy px-4 btn-sm">
                                                                Submit Assignment
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
    <!-- Plyr JS -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>




    <!-- Toggle Sections JS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Plyr video player
            const player = new Plyr('#player');

            // Buttons and Sections mapping
            const buttons = {
                reading: document.getElementById('readingBtn'),
                video: document.getElementById('videoBtn'),
                practice: document.getElementById('practiceBtn'),
                assignment: document.getElementById('assignmentBtn')
            };

            const sections = {
                list: document.getElementById('materialsList'),
                reading: document.getElementById('readingSection'),
                video: document.getElementById('videoSection'),
                practice: document.getElementById('practiceSection'),
                assignment: document.getElementById('assignmentSection')
            };

            function showSection(sectionName) {
                // Show only the selected section
                for (const key in sections) {
                    sections[key].style.display = (key === sectionName) ? 'block' : 'none';
                }

                // Update active button
                for (const key in buttons) {
                    buttons[key].classList.toggle('active', key === sectionName);
                }
            }

            // Button click events
            buttons.reading.addEventListener('click', () => showSection('reading'));
            buttons.video.addEventListener('click', () => showSection('video'));
            buttons.practice.addEventListener('click', () => showSection('practice'));
            buttons.assignment.addEventListener('click', () => showSection('assignment'));

            // Chapter click → switch to Materials tab and show Reading
            const chapterCards = document.querySelectorAll('#overview .p-3.border');
            chapterCards.forEach(card => {
                card.addEventListener('click', () => {
                    // Show the Materials tab
                    const materialsTab = document.querySelector('button[data-bs-target="#materials"]');
                    const tab = new bootstrap.Tab(materialsTab);
                    tab.show();

                    // Show Reading section by default
                    showSection('reading');
                });
            });
        });

    </script>


</body>

</html>