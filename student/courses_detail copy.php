<?php
$launch_id = $_GET['launch_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
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
        /* #ytClickLayer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 9;
            background: transparent;
        } */

        #youtubeContainer iframe {
            width: 50%;
            height: 50%;
            min-height: 700px;
            display: block;
            background: #000;
        }

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

    <div class="container-fluid p-0">
        <!-- Header -->
        <div class="header d-flex justify-content-between align-items-center px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>
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
                            <h4 class="teacher-courses-titile">
                                <!-- course code and course name -->
                            </h4>
                            <small>
                                <!-- course description -->
                            </small>
                            <div class="pt-2">
                                <small class="fw-medium">Course Progress</small>
                            </div>
                            <div class="progress-container mt-2">
                                <div class="progress">
                                    <div class="progress-bar btn-blue-courses" style="width: 0%;" role="progressbar"
                                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="percentage-label">
                                    0%
                                </span>
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
                            <!-- <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#students"
                                    type="button">Evaluation</button>
                            </li> -->
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
                                                <h6 class="fw-semibold mb-1 text-dark">Loading....</h6>
                                                <small class="text-muted"></small>
                                            </div>
                                            <div class="px-2 py-1 rounded text-white fw-semibold text-center"
                                                style="min-width:0px; background: linear-gradient(rgb(140, 198, 87), rgb(111, 173, 59));">
                                                0%
                                            </div>
                                        </div>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar"
                                                style="width: 0%; background: linear-gradient(to right, rgb(140, 198, 87), rgb(111, 173, 59));">
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
                                            <a href="courses_detail.php?launch_id=<?php echo $launch_id; ?>"><i class="bi bi-arrow-left me-2"></i>Back to
                                                chapters</a>
                                        </h6>
                                        <h6 class="fw-semibold mb-0"></h6>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="p-3 d-flex flex-wrap gap-2">
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="readingBtn">Reading</button>
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="videoBtn">Videos</button>
                                        <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="practiceBtn">Practice</button>
                                        <!-- <button class="section-btn flex-grow-1 flex-md-grow-0"
                                            id="assignmentBtn">Assignments</button> -->
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
                                            <div class="p-2 border-bottom bg-secondary text-dark">Video Material</div>
                                            <div class="p-3" style="height:700px;">
                                                <!-- <p class="small">Data Preprocessing Techniques</p> -->

                                                <!-- Local Video -->
                                                <div id="localVideoContainer" class="ratio ratio-16x9 border rounded shadow-sm" style="display:none">
                                                    <video id="player" playsinline controls style="width:100%;height:100%;">
                                                        <source src="" type="video/mp4">
                                                    </video>
                                                </div>

                                                <!-- YouTube Player -->
                                                <div id="youtubeContainer" class="border rounded shadow-sm" style="height:500px; display:none; background:#000;">
                                                    <div class="ratio ratio-16x9" style="width:100%;height:100%;">
                                                        <!-- IMPORTANT: Must be div, NOT iframe -->
                                                        <div id="youtubeIframe" style="width:100%;height:100%;border-radius:10px;"></div>
                                                    </div>
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

    <!-- YouTube Iframe API -->
    <script src="https://www.youtube.com/iframe_api"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Plyr JS -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Toggle Sections JS -->
    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Initialize Plyr for video playback
            const player = new Plyr("#player");

            // Tabs
            const chapterTabBtn = document.querySelector('button[data-bs-target="#overview"]');
            const materialsTabBtn = document.querySelector('button[data-bs-target="#materials"]');
            const evaluationTabBtn = document.querySelector('button[data-bs-target="#students"]');

            // Disable non-active tabs initially
            [materialsTabBtn, evaluationTabBtn].forEach(btn => {
                btn.classList.add("disabled");
                btn.style.pointerEvents = "none";
                btn.style.opacity = "0.6";
            });

            // Section Buttons
            const buttons = {
                reading: document.getElementById("readingBtn"),
                video: document.getElementById("videoBtn"),
                practice: document.getElementById("practiceBtn"),
                assignment: document.getElementById("assignmentBtn"),
            };

            // Material sections
            const sections = {
                list: document.getElementById("materialsList"),
                reading: document.getElementById("readingSection"),
                video: document.getElementById("videoSection"),
                practice: document.getElementById("practiceSection"),
                assignment: document.getElementById("assignmentSection"),
            };

            // Hide all sections
            function hideAllSections() {
                Object.values(sections).forEach(sec => sec.style.display = "none");
            }

            // Show CO list only
            function showCourseOutcomeList() {
                hideAllSections();
                sections.list.style.display = "block";
            }

            // Show a specific material section
            function showMaterialSection(sectionName) {
                hideAllSections();
                sections[sectionName].style.display = "block";
            }

            // Track active material type
            let currentMaterialType = "reading"; // ✅ default is reading

            // Activate reading button on load
            buttons.reading.classList.add("active");

            // Handle Section Button Clicks
            Object.keys(buttons).forEach(type => {
                buttons[type].addEventListener("click", () => {
                    // Highlight active button
                    Object.keys(buttons).forEach(k => buttons[k].classList.toggle("active", k === type));

                    // Remember current section
                    currentMaterialType = type;

                    // Always show CO cards first
                    showCourseOutcomeList();
                });
            });

            // Handle Chapter Click
            document.querySelectorAll("#overview .p-3.border").forEach(card => {
                card.addEventListener("click", () => {
                    // Enable materials tab
                    materialsTabBtn.classList.remove("disabled");
                    materialsTabBtn.style.pointerEvents = "auto";
                    materialsTabBtn.style.opacity = "1";

                    // Switch to materials tab
                    const tab = new bootstrap.Tab(materialsTabBtn);
                    tab.show();

                    // Show CO list by default
                    showCourseOutcomeList();

                    // Activate Reading tab by default when entering materials
                    currentMaterialType = "reading";
                    Object.keys(buttons).forEach(k => buttons[k].classList.toggle("active", k === "reading"));
                });
            });

            // Handle CO Card Click
            document.querySelectorAll("#materialsList .card").forEach(card => {
                card.addEventListener("click", () => {
                    // No alert needed now, reading is default active
                    showMaterialSection(currentMaterialType);
                });
            });
        });
    </script> -->


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const player = new Plyr("#player");

            // Tabs
            const chapterTabBtn = document.querySelector('button[data-bs-target="#overview"]');
            const materialsTabBtn = document.querySelector('button[data-bs-target="#materials"]');
            // const evaluationTabBtn = document.querySelector('button[data-bs-target="#students"]');

            // Disable initially
            [materialsTabBtn].forEach(btn => {
                btn.classList.add("disabled");
                btn.style.pointerEvents = "none";
                btn.style.opacity = "0.6";
            });

            // Material buttons
            const buttons = {
                reading: document.getElementById("readingBtn"),
                video: document.getElementById("videoBtn"),
                practice: document.getElementById("practiceBtn"),
                //assignment: document.getElementById("assignmentBtn"),
            };

            // Material sections
            const sections = {
                reading: document.getElementById("readingSection"),
                video: document.getElementById("videoSection"),
                practice: document.getElementById("practiceSection"),
                assignment: document.getElementById("assignmentSection"),
            };

            const materialsTab = document.getElementById("materials");
            let coListContainer = document.createElement("div");
            coListContainer.className = "row g-4 p-3";
            materialsTab.appendChild(coListContainer);

            let currentMaterialType = "reading";
            let currentTopicId = null;

            buttons.reading.classList.add("active");

            function hideAllSections() {
                Object.values(sections).forEach(sec => sec.style.display = "none");
            }

            function showCourseOutcomeList() {
                hideAllSections();
                coListContainer.style.display = "flex";
            }

            function showMaterialSection(sectionName) {
                hideAllSections();
                coListContainer.style.display = "none";
                if (sections[sectionName]) sections[sectionName].style.display = "block";
            }

            // --- Button click (Reading / Video / Practice / Assignment) ---
            Object.keys(buttons).forEach(type => {
                buttons[type].addEventListener("click", () => {
                    Object.keys(buttons).forEach(k => buttons[k].classList.toggle("active", k === type));
                    currentMaterialType = type;
                    showCourseOutcomeList();

                    if (currentTopicId) loadMaterialsForTopic(currentTopicId);
                });
            });

            // --- Fetch Topics ---
            const launchId = new URLSearchParams(window.location.search).get("launch_id");
            const overviewContainer = document.querySelector("#overview .p-3.bg-white");

            if (!launchId) {
                console.error("Missing launch_id");
                return;
            }

            fetch(`api/get_topics_with_progress.php?launch_id=${launchId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status !== 200) {
                        overviewContainer.innerHTML = `<p class='text-danger small'>${data.message}</p>`;
                        return;
                    }

                    // ✅ Display Course Info
                    document.querySelector(".teacher-courses-titile").innerHTML =
                        `${data.course.course_code}: ${data.course.course_name}`;
                    document.querySelector(".teacher-courses-titile + small").innerText =
                        data.course.course_description;

                    // ✅ Display Topic Cards (no progress yet)
                    let html = `<h6 class="fw-semibold mb-3">Chapters Overview</h6>`;
                    data.data.forEach(topic => {
                        html += `
                        <div class="mb-3 p-3 border rounded bg-courses-grey topic-card" 
                            data-topic-id="${topic.topic_id}">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-semibold mb-1 text-dark">${topic.title}</h6>
                                    <small class="text-muted">${topic.description}</small>
                                </div>
                                <div class="topic-progress-badge px-2 py-1 rounded text-white fw-semibold text-center"
                                    data-tid="${topic.topic_id}"
                                    style="min-width:60px; background:gray;">0%</div>
                            </div>
                            <div class="progress mt-2" style="height:6px;">
                                <div class="progress-bar topic-progress-bar" 
                                    data-tid="${topic.topic_id}"
                                    style="width:0%; background:gray;"></div>
                            </div>
                        </div>`;
                    });

                    overviewContainer.innerHTML = html;

                    // ✅ Now fetch topic progress
                    fetch("api/progress_utils.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/x-www-form-urlencoded"
                            },
                            body: `launch_id=${launchId}`
                        })
                        .then(r => r.json())
                        .then(progress => {

                            if (progress.status === 200) {
                                // ✅ Update course progress bar
                                document.querySelector(".progress-bar.btn-blue-courses").style.width =
                                    progress.course_progress + "%";
                                document.querySelector(".percentage-label").textContent =
                                    progress.course_progress + "%";

                                // ✅ UPDATE EACH TOPIC BAR
                                progress.topics.forEach(t => {
                                    let pct = t.progress ?? 0;

                                    let badge = document.querySelector(`.topic-progress-badge[data-tid='${t.topic_id}']`);
                                    let bar = document.querySelector(`.topic-progress-bar[data-tid='${t.topic_id}']`);

                                    if (badge && bar) {
                                        badge.textContent = pct + "%";
                                        bar.style.width = pct + "%";

                                        // 🎨 Color coding
                                        let color = pct === 100 ?
                                            "linear-gradient(rgb(140,198,87),rgb(111,173,59))" :
                                            "linear-gradient(rgb(75,147,213),rgb(21,103,186))";

                                        badge.style.background = color;
                                        bar.style.background = color;
                                    }
                                });
                            }
                        });

                    // ✅ Topic click
                    document.querySelectorAll(".topic-card").forEach(card => {
                        card.addEventListener("click", () => {
                            currentTopicId = card.dataset.topicId;

                            materialsTabBtn.classList.remove("disabled");
                            materialsTabBtn.style.pointerEvents = "auto";
                            materialsTabBtn.style.opacity = "1";

                            const tab = new bootstrap.Tab(materialsTabBtn);
                            tab.show();

                            showCourseOutcomeList();
                            Object.keys(buttons).forEach(k => buttons[k].classList.toggle("active", k === "reading"));
                            currentMaterialType = "reading";

                            loadMaterialsForTopic(currentTopicId);
                        });
                    });

                })
                .catch(err => {
                    console.error(err);
                    overviewContainer.innerHTML = `<p class='text-danger small'>Failed to load topics.</p>`;
                });





            // --- Fetch Materials for selected Topic ---
            function limitWords(text, maxWords = 50) {
                const words = text.trim().split(/\s+/);
                if (words.length <= maxWords) return text;
                return words.slice(0, maxWords).join(" ") + "...";
            }


            function loadMaterialsForTopic(topicId) {
                const currentType = currentMaterialType || "reading";
                coListContainer.innerHTML = `<p class='text-center text-muted py-3'>Loading ${currentType} materials...</p>`;

                fetch(`api/get_materials_by_topic.php?launch_id=${launchId}&topic_id=${topicId}&type=${currentType}`)
                    .then(res => res.json())
                    .then(async data => {
                        if (data.status !== 200 || !data.data.length) {
                            coListContainer.innerHTML = `<p class='text-center text-danger py-3'>No ${currentType} materials found.</p>`;
                            return;
                        }

                        let html = "";

                        // ✅ Practice Type — allow unlimited attempts
                        if (currentType === "practice") {
                            for (const item of data.data) {
                                // Fetch previous score (if any)
                                const scoreRes = await fetch(
                                    `api/get_practice_score.php?launch_id=${launchId}&topic_id=${topicId}&co_id=${item.co_id}`
                                );
                                const scoreData = await scoreRes.json();

                                let badge = `<span class="badge bg-secondary score-badge" data-co="${item.co_id}">Not Attempted</span>`;

                                if (scoreData.status === 200 && scoreData.attempted) {
                                    const score = scoreData.score ?? 0;
                                    let color = "bg-danger";
                                    if (score >= 80) color = "bg-success";
                                    else if (score >= 50) color = "bg-warning";
                                    badge = `<span class="badge ${color} score-badge" data-co="${item.co_id}">Score: ${score}%</span>`;
                                }

                                // ✅ Remove disabling logic — user can click anytime
                                html += `
                                    <div class="col-6 col-sm-6">
                                        <div class="card border-0 shadow-sm p-3 bg-courses-grey co-card"
                                            data-co-id="${item.co_id}" data-url="${item.material_url}">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3 flex-shrink-0">
                                                        <div class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                            <i class="bi bi-book text-primary fs-6"></i>
                                                        </div>
                                                    </div>
                                                    <div class="text-truncate">
                                                        <h6 class="fw-semibold text-dark mb-1">${limitWords(item.co_level, 2)}</h6>
                                                        <small class="text-muted">${limitWords(item.course_description, 2)}</small>

                                                    </div>
                                                </div>
                                                ${badge}
                                            </div>
                                        </div>
                                    </div>`;
                            }
                        } else {
                            // ✅ Reading / Video / Assignment
                            data.data.forEach(item => {
                                html += `
                                    <div class="col-6 col-sm-6">
                                        <div class="card border-0 shadow-sm p-3 bg-courses-grey co-card"
                                            data-co-id="${item.co_id}" data-url="${item.material_url}">
                                            <div class="d-flex align-items-center">
                                                <div class="me-3 flex-shrink-0">
                                                    <div class="p-3 rounded-circle d-flex justify-content-center align-items-center">
                                                        <i class="bi bi-book text-primary fs-6"></i>
                                                    </div>
                                                </div>
                                                <div class="text-truncate">
                                                    <h6 class="fw-semibold text-dark mb-1">${item.co_level}</h6>
                                                    <small class="text-muted">${item.course_description}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                            });
                        }

                        coListContainer.innerHTML = html;
                    })
                    .catch(err => {
                        console.error(err);
                        coListContainer.innerHTML = `<p class='text-center text-danger py-3'>Error loading materials.</p>`;
                    });
            }



            // --- CO Card click handler ---
            coListContainer.addEventListener("click", e => {
                const card = e.target.closest(".co-card");
                if (!card) return;
                const coId = card.dataset.coId;
                const materialUrl = card.dataset.url;
                showSelectedMaterial(coId, currentMaterialType, materialUrl);
            });

            const MARK_ON_PLAY = false; // mark when user presses play
            const MARK_ON_PERCENT = 10; // mark when X% watched
            /* ------------------------------------------------ */

            /* Store completed items to avoid duplicate marking */
            function markOnce(videoKey, topicId, coId) {
                if (_pdfCompleteFiredFor.has(videoKey)) return;
                _pdfCompleteFiredFor.add(videoKey);
                console.log("✅ Progress saved for video:", videoKey);
                markMaterialComplete(topicId, coId, "video");
            }

            /* Load YouTube API only once */
            function ensureYouTubeAPI() {
                return new Promise(resolve => {
                    if (window.YT && window.YT.Player) return resolve();
                    if (!document.getElementById("yt-api")) {
                        let s = document.createElement("script");
                        s.src = "https://www.youtube.com/iframe_api";
                        s.id = "yt-api";
                        document.head.appendChild(s);
                    }
                    window.onYouTubeIframeAPIReady = () => resolve();
                });
            }

            function showSelectedMaterial(coId, materialType, materialUrl) {
                showMaterialSection(materialType);

                if (materialType === "reading") {
                    const pdfEl = document.querySelector("#readingSection iframe, #readingSection embed");
                    if (!pdfEl) return;

                    // set src exactly as you do now
                    pdfEl.src = `../uploads/materials/${materialUrl}`;

                    // avoid firing multiple times for same (topic,co)
                    const pdfKey = `${currentTopicId}:${coId}`;
                    _pdfCompleteFiredFor.delete(pdfKey); // allow re-open to re-check

                    // ---- STRATEGY A: try real scroll of the PDF document
                    const attachInnerScrollWatcher = () => {
                        try {
                            const win = pdfEl.contentWindow;
                            const doc = pdfEl.contentDocument || (win ? win.document : null);
                            if (!doc || !doc.scrollingElement) return false;

                            let done = false;
                            const onScroll = () => {
                                if (done) return;
                                const el = doc.scrollingElement;
                                // within 10px of bottom
                                if (el.scrollTop + el.clientHeight >= el.scrollHeight - 10) {
                                    done = true;
                                    if (!_pdfCompleteFiredFor.has(pdfKey)) {
                                        _pdfCompleteFiredFor.add(pdfKey);
                                        console.log("✅ PDF reached bottom (inner scroll)");
                                        markMaterialComplete(currentTopicId, coId, "pdf");
                                    }
                                }
                            };
                            doc.addEventListener("scroll", onScroll, {
                                passive: true
                            });
                            // also check once in case it's a single-page fit
                            setTimeout(onScroll, 500);
                            return true;
                        } catch (e) {
                            // plugin blocked access
                            return false;
                        }
                    };

                    // try to attach when loaded
                    const tryAttach = () => {
                        if (!attachInnerScrollWatcher()) {
                            // ---- STRATEGY B (fallback): heuristic — watch user interaction + time on viewer
                            installPdfFallbackWatcher();
                        }
                    };

                    // If iframe fires load, attempt inner watcher; some browsers need a small delay
                    pdfEl.addEventListener("load", () => setTimeout(tryAttach, 200));

                    // If the PDF plugin never fires load (happens sometimes), also try after a short delay
                    setTimeout(tryAttach, 1200);

                    function installPdfFallbackWatcher() {
                        console.log("ℹ️ Using fallback PDF completion detector");
                        // Conditions to consider it "read":
                        //  - viewer is visible on screen
                        //  - user attempts to scroll over it several times
                        //  - minimum time spent (e.g., 20s)
                        let visible = false;
                        let scrollAttempts = 0;
                        let secondsOnViewer = 0;
                        let completed = false;

                        const MIN_SECONDS = 20;
                        const MIN_SCROLLS = 3;

                        // visibility
                        const io = new IntersectionObserver(entries => {
                            entries.forEach(e => {
                                visible = e.isIntersecting;
                            });
                        }, {
                            threshold: 0.5
                        });
                        io.observe(pdfEl);

                        // wheel/touch over iframe area increments scrollAttempts
                        const wheelHandler = (e) => {
                            // only count if viewer is visible and user actually tried to scroll
                            if (visible) scrollAttempts++;
                            maybeComplete();
                        };
                        const touchHandler = (e) => {
                            if (visible) scrollAttempts++;
                            maybeComplete();
                        };

                        // Attach on parent container so events are captured (iframe won’t bubble)
                        const container = document.getElementById("readingSection") || document;
                        container.addEventListener("wheel", wheelHandler, {
                            passive: true
                        });
                        container.addEventListener("touchmove", touchHandler, {
                            passive: true
                        });

                        // time on viewer
                        const timer = setInterval(() => {
                            if (visible) secondsOnViewer++;
                            maybeComplete();
                        }, 1000);

                        function cleanup() {
                            clearInterval(timer);
                            container.removeEventListener("wheel", wheelHandler);
                            container.removeEventListener("touchmove", touchHandler);
                            io.disconnect();
                        }

                        function maybeComplete() {
                            if (completed) return;
                            if (secondsOnViewer >= MIN_SECONDS && scrollAttempts >= MIN_SCROLLS) {
                                completed = true;
                                cleanup();
                                if (!_pdfCompleteFiredFor.has(pdfKey)) {
                                    _pdfCompleteFiredFor.add(pdfKey);
                                    console.log("✅ PDF marked complete (fallback heuristic)");
                                    markMaterialComplete(currentTopicId, coId, "pdf");
                                }
                            }
                        }

                        // safety: if the user stays long enough even without scroll
                        setTimeout(() => {
                            if (!completed && visible && secondsOnViewer >= MIN_SECONDS * 2) {
                                completed = true;
                                cleanup();
                                if (!_pdfCompleteFiredFor.has(pdfKey)) {
                                    _pdfCompleteFiredFor.add(pdfKey);
                                    console.log("✅ PDF marked complete (time-based fallback)");
                                    markMaterialComplete(currentTopicId, coId, "pdf");
                                }
                            }
                        }, MIN_SECONDS * 2000);
                    }
                } else if (materialType === "video") {

                    const youtubeContainer = document.getElementById("youtubeContainer");
                    const localVideoContainer = document.getElementById("localVideoContainer");
                    const localVideo = document.getElementById("player");
                    const localSrc = document.querySelector("#player source");
                    const ytBox = document.getElementById("youtubeIframe");

                    if (!youtubeContainer || !localVideoContainer || !localVideo || !ytBox) {
                        console.error("❌ Video DOM missing");
                        return;
                    }

                    const cleanUrl = decodeURIComponent(materialUrl.trim());
                    const ytMatch = cleanUrl.match(/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/);

                    const videoKey = `${currentTopicId}:${coId}`;

                    /* ----------- YouTube Video ----------- */
                    if (ytMatch) {
                        const videoId = ytMatch[1];

                        localVideoContainer.style.display = "none";
                        youtubeContainer.style.display = "block";

                        ensureYouTubeAPI().then(() => {
                            if (window.ytPlayer) {
                                try {
                                    window.ytPlayer.destroy();
                                } catch (e) {}
                                window.ytPlayer = null;
                            }

                            window.ytPlayer = new YT.Player("youtubeIframe", {
                                videoId,
                                playerVars: {
                                    rel: 0,
                                    modestbranding: 1,
                                    enablejsapi: 1
                                },
                                events: {
                                    onStateChange: (e) => {
                                        if (e.data === YT.PlayerState.PLAYING) {
                                            if (MARK_ON_PLAY) markOnce(videoKey, currentTopicId, coId);

                                            if (!window._ytInterval) {
                                                window._ytInterval = setInterval(() => {
                                                    try {
                                                        const dur = ytPlayer.getDuration();
                                                        const cur = ytPlayer.getCurrentTime();
                                                        if (dur > 0 && cur / dur * 100 >= MARK_ON_PERCENT) {
                                                            markOnce(videoKey, currentTopicId, coId);
                                                            clearInterval(window._ytInterval);
                                                            window._ytInterval = null;
                                                        }
                                                    } catch {}
                                                }, 1000);
                                            }
                                        }

                                        if (e.data === YT.PlayerState.ENDED) {
                                            markOnce(videoKey, currentTopicId, coId);
                                            clearInterval(window._ytInterval);
                                            window._ytInterval = null;
                                        }
                                    }
                                }
                            });
                        });

                    } else {
                        /* ----------- Local Video ----------- */
                        youtubeContainer.style.display = "none";
                        localVideoContainer.style.display = "block";

                        localSrc.src = `../uploads/materials/${materialUrl}`;
                        localVideo.load();

                        localVideo.onplay = () => {
                            if (MARK_ON_PLAY) markOnce(videoKey, currentTopicId, coId);
                        };

                        localVideo.ontimeupdate = () => {
                            if (_pdfCompleteFiredFor.has(videoKey)) return;
                            const dur = localVideo.duration;
                            if (dur > 0 && (localVideo.currentTime / dur * 100 >= MARK_ON_PERCENT)) {
                                markOnce(videoKey, currentTopicId, coId);
                            }
                        };

                        localVideo.onended = () => markOnce(videoKey, currentTopicId, coId);
                    }
                } else if (materialType === "practice") {
                loadPracticeQuestions(coId);
            }
        }


        // --- Load Practice Questions ---
        function loadPracticeQuestions(coId) {
            const topicId = currentTopicId;
            const container = document.querySelector("#practiceSection #questionsContainer");
            const submitBtn = document.querySelector("#practiceSection #submitContainer");

            container.innerHTML = `<p class="text-center text-muted py-3">Loading questions...</p>`;
            submitBtn.style.display = "none";

            fetch(`api/get_practice_questions.php?launch_id=${launchId}&topic_id=${topicId}&co_id=${coId}`)
                .then(res => res.json())
                .then(data => {
                    if (data.status !== 200 || !data.data.length) {
                        container.innerHTML = `<p class='text-center text-danger py-3'>No practice questions found.</p>`;
                        return;
                    }

                    let html = "";
                    data.data.forEach((q, i) => {
                        let optionsHTML = "";
                        Object.entries(q.options).forEach(([key, value]) => {
                            optionsHTML += `
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q${q.pq_id}" value="${key}" id="q${q.pq_id}_${key}">
                                <label class="form-check-label" for="q${q.pq_id}_${key}">${key}. ${value}</label>
                            </div>`;
                        });

                        html += `
                        <div class="mb-3 question-block" data-pqid="${q.pq_id}">
                            <label class="form-label fw-semibold">${i + 1}. ${q.question}</label>
                            ${optionsHTML}
                        </div>`;
                    });

                    container.innerHTML = html;
                    submitBtn.style.display = "flex";
                    submitBtn.dataset.coId = coId;
                })
                .catch(err => {
                    console.error(err);
                    container.innerHTML = `<p class='text-center text-danger py-3'>Error loading questions.</p>`;
                });
        }

        // --- Submit Practice Answers ---
        document.querySelector("#practiceSection button.btn-gradient-glossy").addEventListener("click", () => {
            const answers = [];
            document.querySelectorAll(".question-block").forEach(block => {
                const pqId = block.dataset.pqid;
                const selected = block.querySelector("input[type='radio']:checked")?.value;
                if (selected) answers.push({
                    pq_id: pqId,
                    selected_answer: selected
                });
            });

            if (!answers.length) {
                Swal.fire({
                    icon: "warning",
                    title: "Incomplete!",
                    text: "Please answer at least one question before submitting.",
                    confirmButtonColor: "#3085d6"
                });
                return;
            }

            fetch("api/submit_practice_answers.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        answers
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.status === 200) {

                        const coId = document.querySelector("#practiceSection #submitContainer").dataset.coId;

                        // ✅ If score >= 50% then mark material complete
                        if (data.score >= 50) {
                            markMaterialComplete(currentTopicId, coId, "practice");
                            console.log("✅ Practice passed, progress updated");
                        } else {
                            console.log("❌ Practice failed (below 50%), progress not updated");
                        }

                        // ✅ Show result alert
                        Swal.fire({
                            icon: data.score >= 50 ? "success" : "warning",
                            title: data.score >= 50 ? "Practice Passed!" : "Practice Attempted",
                            text: `Your score: ${data.score}%`,
                            confirmButtonColor: data.score >= 50 ? "#4CAF50" : "#FF9800"
                        }).then(() => {
                            // Refresh materials + badges showing score
                            showCourseOutcomeList();
                            loadMaterialsForTopic(currentTopicId);
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Submission Failed",
                            text: data.message,
                            confirmButtonColor: "#d33"
                        });
                    }
                })


                .catch(err => {
                    console.error(err);
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "An error occurred while submitting the practice test.",
                        confirmButtonColor: "#d33"
                    });
                });
        });

        });
    </script>

    <!-- progress -->
    <script>
        // put this once near your other helpers
        // global
        let _pdfCompleteFiredFor = new Set();
        const launchId = new URLSearchParams(window.location.search).get("launch_id");

        function markMaterialComplete(topicId, coId, type) {

            fetch("api/update_material_progress.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        launch_id: launchId,
                        topic_id: topicId,
                        material_id: coId, // ✅ correct key name
                        type: type // ✅ match PHP
                    })
                })
                .then(r => r.json())
                .then(res => {
                    console.log("✅ Material saved:", res);

                    // ✅ Update Topic Progress
                    fetch("api/update_topic_progress.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/x-www-form-urlencoded"
                            },
                            body: `topic_id=${topicId}&launch_id=${launchId}`
                        })
                        .then(r => r.json())
                        .then(tp => {
                            console.log("📘 Topic Progress:", tp.progress + "%");

                            // ✅ Update Course Progress
                            fetch("api/update_course_progress.php", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/x-www-form-urlencoded"
                                    },
                                    body: `launch_id=${launchId}`
                                })
                                .then(r => r.json())
                                .then(cp => {
                                    // console.log("🎓 Course Progress:", cp.progress + "%");

                                    // UI Update
                                    updateCourseProgressUI(cp.progress);

                                    // Refresh topics if needed
                                    loadTopics();
                                    // 🔄 Refresh UI
                                    if (typeof loadTopics === "function") loadTopics();
                                    if (typeof loadMaterialsForTopic === "function" && currentTopicId) {
                                        loadMaterialsForTopic(currentTopicId);
                                    }
                                });
                        });
                })
                .catch(err => console.error("❌ progress save failed", err));
        }

        function updateCourseProgressUI(progress) {
            const bar = document.querySelector(".progress-bar.btn-blue-courses");
            const label = document.querySelector(".percentage-label");

            if (bar) {
                bar.style.width = progress + "%";
                bar.setAttribute("aria-valuenow", progress);
            }

            if (label) {
                label.textContent = progress + "%";
            }
        }

        function loadInitialProgress() {
            fetch("api/progress_utils.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `launch_id=${launchId}`
                })
                .then(r => r.json())
                .then(data => {
                    if (data.status === 200) {
                        updateCourseProgressUI(data.course_progress);

                        // apply topic progress to UI
                        data.topics.forEach(tp => {
                            let el = document.querySelector(`[data-topic-id="${tp.topic_id}"] .progress-bar`);
                            let label = document.querySelector(`[data-topic-id="${tp.topic_id}"] .progress-label`);

                            if (el) el.style.width = tp.progress + "%";
                            if (label) label.innerText = tp.progress + "%";
                        });
                    }
                });
        }

        // ✅ Call when page loads
        loadInitialProgress();
    </script>

</body>

</html>