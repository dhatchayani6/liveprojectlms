<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        a {
            text-decoration: none !important;
        }

        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }

        .sidebar .nav-link {
            color: #495057;
            border-radius: 0.5rem;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f3f5;
        }

        .avatar {
            height: 80px;
            width: 80px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-btn {
            width: 100%;
            text-align: left;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247));
            border: 1px solid rgba(59, 130, 246, 0.5);
        }

        .btn-green {
            background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166));
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .btn-purple {
            background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242));
            border: 1px solid rgba(139, 92, 246, 0.5);
        }

        .btn-orange {
            background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139));
            border: 1px solid rgba(249, 115, 22, 0.5);
        }

        .menu-icon {
            border-radius: 50%;
            padding: 6px;
            margin-right: 8px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

        .slot-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #2196f3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 16px;
            color: white;
        }

        .co-count-card-icon {
            background-color: #0d6efd;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .unit-card-icon {
            background-color: #34C759;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .ass-card-icon {
            background-color: #ff9500;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .co-card-icon {
            background-color: rgb(88 86 214 / var(--tw-bg-opacity, 1));
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .card-icon .material-symbols-outlined {
            color: white;
            font-size: 28px;
        }


        .material-icons {
            color: white;
            font-size: 28px;
        }

        .co-count {
            background-color: #007AFF;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }

        .assignment-count {
            background-color: #ff9500;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }

        .unit-count {
            background-color: #34C759;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <?php include('sidebar copy.php') ?>

        <div class="main-content d-flex flex-column flex-grow-1">

            <?php include('header.php') ?>

            <main class="p-4">

                <div class="mb-3">
                    <div class="p-3 rounded border" style="background:white;">
                        <h4 class="teacher-courses-titile">CS1234: Introduction to Programming</h4>

                        <p class="mb-0">This course introduces the fundamental concepts of Progrmming, including
                            data collection, analysis, and visualization.
                        </p>
                        <div
                            class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center pt-3">
                            <small class="text-muted">Coordinator:<b> Dr.Deepak</b></small>
                            <small class="text-muted">Year: <b>2024-25</b></small>
                        </div>

                    </div>
                </div>

                <div class="mb-3 ">
                    <div class="p-3 rounded border d-flex justify-content-between" style=" background:white;">

                        <div class="row w-100">
                            <div class="mb-3 col-lg-4">
                                <div class="p-3 rounded border" style="background:white;">
                                    <div class="col-12">
                                        <label class="mb-2 text-dark fw-semibold" for="CourseGoals">CourseGoals</label>

                                        <!-- Hidden file input -->
                                        <input type="file" id="CourseGoals" class="d-none">

                                        <!-- Styled button -->
                                        <button type="button" class="btn btn-primary w-100" id="CourseGoalsuploadBtn">
                                            Upload File
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-lg-4">
                                <div class="p-3 rounded border" style="background:white;">
                                    <div class="col-12">
                                        <label class="mb-2 text-dark fw-semibold" for="CourseSyllabus">Course Syllabus</label>

                                        <!-- Hidden file input -->
                                        <input type="file" id="CourseSyllabus" class="d-none">

                                        <!-- Styled button -->
                                        <button type="button" class="btn btn-primary w-100" id="CourseSyllabusuploadBtn">
                                            Upload File
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 col-lg-4">
                                <div class="p-3 rounded border" style="background:white;">
                                    <div class="col-12">
                                        <label class="mb-2 text-dark fw-semibold" for="CommitteeReports">Committee Reports</label>

                                        <!-- Hidden file input -->
                                        <input type="file" id="CommitteeReports" class="d-none">

                                        <!-- Styled button -->
                                        <button type="button" class="btn btn-primary w-100" id="CommitteeReportsuploadBtn">
                                            Upload File
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="p-3 rounded border" style="background:white;">

                        <div class="assignments-card">
                            <div class="co-count-card-icon card-icon">
                                <span class="material-symbols-outlined">
                                    import_contacts
                                </span>
                            </div>
                            <div class="card-content">
                                <a href="course_outcome.php" class="text-decoration-none">
                                    <div class="card-title" style="color:black;">Course Outcomes</div>
                                </a>
                                <div class="card-subtitle" style="color:black;">Manage outcomes & PO mappings</div>
                            </div>
                            <div class="card-action">
                                <span class="co-count">1</span>
                            </div>
                        </div>

                        <div class="assignments-card">
                            <div class="unit-card-icon card-icon">
                                <span class="material-symbols-outlined">
                                    list
                                </span>
                            </div>
                            <div class="card-content">
                                <a href="overall_assignments.php" class="text-decoration-none">
                                    <div class="card-title" style="color:black;">Units & Topics </div>
                                </a>
                                <div class="card-subtitle" style="color:black;">Manage course content</div>
                            </div>
                            <div class="card-action">
                                <span class="unit-count">2</span>
                            </div>
                        </div>
                        <div class="assignments-card">
                            <div class="ass-card-icon card-icon">
                                <span class="material-icons">assignment</span>
                            </div>
                            <div class="card-content">
                                <a href="overall_assignments.php" class="text-decoration-none">
                                    <div class="card-title" style="color:black;">Assignments</div>
                                </a>
                                <div class="card-subtitle" style="color:black;">Manage course assignments</div>
                            </div>
                            <div class="card-action">
                                <span class="assignment-count">5</span>
                            </div>
                        </div>


                        <div class="assignments-card">
                            <div class="co-card-icon card-icon">
                                <span class="material-symbols-outlined">
                                    bar_chart_4_bars
                                </span>
                            </div>

                            <div class="card-content">
                                <a href="enrollment_request.php" class="text-decoration-none">
                                    <div class="card-title" style="color:black;">CO Analysis</div>
                                </a>
                                <div class="card-subtitle-enrollment" style="color:black;">View student performance</div>
                            </div>

                            <!-- <div class="card-action">
                                <span class="enrollmentCount">0</span>
                            </div> -->
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>