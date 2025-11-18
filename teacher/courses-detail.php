<?php include "../includes/auth_faculty.php"; ?>

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

        /* Equal width nav tabs */
        #assignmentTabs .nav-item {
            text-align: center;
        }

        #assignmentTabs .nav-link {
            border: none;
            border-radius: 0;
            font-weight: 500;
            color: #333;
            transition: all 0.2s ease-in-out;
            padding: 0.75rem 0;
        }

        #assignmentTabs .nav-link:hover {
            background: rgba(0, 0, 0, 0.05);
            color: #0d6efd;
        }

        #assignmentTabs .nav-link.active {
            background: #fff;
            color: #0d6efd;
            border-bottom: 3px solid #0d6efd;
            font-weight: 600;
        }

        /* Make sure it looks good on small screens */
        @media (max-width: 767.98px) {
            #assignmentTabs .nav-item {
                flex: 1 1 50%;
            }
        }

        /* Prevent sidebar from shrinking when form expands */
        .sidebar {
            flex-shrink: 0;
        }

        /* Ensure main content never overflows horizontally */
        .main-content {
            min-width: 0;
            overflow-x: hidden;
        }

        /* Fix for forms and inputs overflowing the container */
        #settings input,
        #settings textarea,
        #settings select {
            max-width: 100%;
            width: 100%;
            box-sizing: border-box;
        }

        /* Keep rows from stretching layout */
        #settings .row {
            margin-right: 0;
            margin-left: 0;
        }

        /* Prevent long text from pushing layout */
        #settings {
            overflow-x: hidden;
        }

        /* Responsive file input fixes */
        #settings input[type="file"] {
            white-space: normal;
            text-overflow: ellipsis;
        }

        /* Padding and background consistency */
        #settings .p-3,
        #settings .p-4 {
            background-color: #fff;
        }

        .bg-secondary {
            background: linear-gradient(rgb(249, 249, 249) 0%, rgb(232, 232, 232) 100%);
        }

        .card-title {
            font-size: 13px;
        }

        .topic-title-text {
            font-size: 15px;
        }

        .add-topic-btn {
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

        }

        @media (max-width: 767.98px) {
            #practiceSection .row {
                flex-direction: column;
            }

            #practiceSection .form-label {
                margin-bottom: 0.5rem;
            }

            #practiceSection input[type="number"] {
                width: 100%;
            }

            #practiceSection button {
                width: 100%;
            }

            #practiceButtons button {
                flex: 1 1 100%;
            }
        }

        @media (min-width: 768px) {
            #practiceButtons button {
                min-width: 100px;
            }
        }

        /* Default look for desktop */
        #assignmentTabs {
            border: none;
        }

        #assignmentTabs .nav-item {
            text-align: center;
        }

        #assignmentTabs .nav-link {
            border: none;
            border-radius: 0;
            font-weight: 500;
            color: #333;
            padding: 0.75rem 0.5rem;
            transition: all 0.2s ease-in-out;
        }

        #assignmentTabs .nav-link:hover {
            background: rgba(0, 0, 0, 0.05);
            color: #0d6efd;
        }

        #assignmentTabs .nav-link.active {
            background: #fff;
            color: #0d6efd;
            border-bottom: 3px solid #0d6efd;
            font-weight: 600;
        }

        /* 🧭 Mobile & Tablet Responsiveness */
        @media (max-width: 768px) {
            #assignmentTabs {
                display: flex;
                overflow-x: auto;
                white-space: nowrap;
                scrollbar-width: thin;
            }

            #assignmentTabs::-webkit-scrollbar {
                height: 6px;
            }

            #assignmentTabs::-webkit-scrollbar-thumb {
                background: rgba(0, 0, 0, 0.2);
                border-radius: 3px;
            }

            #assignmentTabs .nav-item {
                flex: 0 0 auto;
                /* don’t shrink */
                min-width: 120px;
                /* equal tab width */
            }

            #assignmentTabs .nav-link {
                font-size: 0.875rem;
                padding: 0.6rem 0.8rem;
            }
        }

        /* ✅ Ensure table responsiveness */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            border-radius: 8px;
        }

        /* ✅ Improve table readability on small screens */
        .table th,
        .table td {
            white-space: nowrap;
            vertical-align: middle;
        }

        /* ✅ On very small screens, allow horizontal scroll without text breaking */
        @media (max-width: 576px) {
            .table {
                font-size: 0.85rem;
            }

            .table th,
            .table td {
                padding: 0.5rem 0.75rem;
            }

            .table-responsive {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
         <?php include ("sidebar.php"); ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
             <?php include ("header.php"); ?>

            <!-- Dashboard Content -->
            <main class="p-4">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>
                    <!-- Committee Report button (hidden by default) -->
                    <!-- <button id="committeeReportBtn" class="d-none">
                    <i class="bi bi-file-bar-graph"></i> Committee Report
                </button> -->
                </div>

                <div class="assignmnent" id="assignments-slider">

                    <!-- asiignment1 -->
                    <div class="assignment-detail">
                        <div class="mb-3">
                            <div class="p-3 rounded border bg-gray"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <h4 class="teacher-courses-titile" id="cCodename"></h4>

                                <!-- <p class="mb-0">This course introduces the fundamental concepts of data science, including
                                data collection, analysis, and visualization.
                            </p> -->
                                <div
                                    class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center pt-3">
                                    <small class="text-muted" id="studentCount">0 Students</small>
                                    <small class="text-muted" id="slt"></small>
                                </div>

                            </div>
                        </div>
                        <div class="details-ass border rounded">
                            <!-- bootstrap tab -->
                            <ul class="nav nav-tabs justify-content-between flex-nowrap  w-100 text-center"
                                id="assignmentTabs" role="tablist" style="background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);
           border-radius: 8px;">

                                <li class="nav-item flex-fill text-nowrap" role="presentation">
                                    <button class="nav-link active w-100" id="add-tab" data-bs-toggle="tab"
                                        data-bs-target="#overview" type="button" role="tab" aria-selected="true">
                                        Overview
                                    </button>
                                </li>

                                <li class="nav-item flex-fill text-nowrap" role="presentation">
                                    <button class="nav-link w-100" id="materials-tab" data-bs-toggle="tab"
                                        data-bs-target="#materials" type="button" role="tab" aria-selected="false">
                                        Materials
                                    </button>
                                </li>

                                <li class="nav-item flex-fill text-nowrap" role="presentation">
                                    <button class="nav-link w-100" id="students-tab" data-bs-toggle="tab"
                                        data-bs-target="#students" type="button" role="tab" aria-selected="false">
                                        Students
                                    </button>
                                </li>

                                <li class="nav-item flex-fill text-nowrap" role="presentation">
                                    <button class="nav-link w-100" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings" type="button" role="tab" aria-selected="false">
                                        Settings
                                    </button>
                                </li>
                            </ul>


                            <div class="tab-content mt-3">
                                <!-- OverView Content -->
                                <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                    aria-labelledby="add-tab">
                                    <div class="courses-outer p-3">
                                        <div class="border rounded shadow-sm mb-3">
                                            <!-- Header -->
                                            <div class="bg-secondary text-dark p-3 rounded-top">
                                                <h5 class="mb-0" style="    font-size: 1rem;">Course Information</h5>
                                            </div>

                                            <!-- Body -->
                                            <div class="p-3">
                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Course Code:</small><br>
                                                        <strong style="font-weight: 500;" id="CCode"></strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Course Name:</small><br>
                                                        <strong style="font-weight: 500;" id="cName"></strong>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Department:</small><br>
                                                        <strong style="font-weight: 500;"
                                                            id="OverviewDepartment"></strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Credit Hours:</small><br>
                                                        <strong style="font-weight: 500;" id="Chours"></strong>
                                                    </div>
                                                </div>

                                                <div class="row mb-2">
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Schedule:</small><br>
                                                        <strong style="font-weight: 500;" id="schedule"></strong>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <small class="text-muted">Total Seats:</small><br>
                                                        <strong style="font-weight: 500;" id="seatallot">-</strong>
                                                    </div>
                                                </div>

                                                <!-- <div class="row">
                                                <div class="col-12">
                                                    <small class="text-muted">Description:</small><br>
                                                    <span>
                                                        This course introduces the fundamental concepts of data science,
                                                        including data collection, analysis, and visualization.
                                                    </span>
                                                </div>
                                            </div> -->
                                            </div>

                                        </div>






                                    </div>
                                </div>

                                <!-- Materials Content -->
                                <div class="tab-pane fade" id="materials" role="tabpanel"
                                    aria-labelledby="materials-tab">
                                    <div class="p-3">

                                        <!-- Course Topics Section -->
                                        <div id="courseTopicsSection">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h6>Course Topics</h6>
                                                <button class="add-topic-btn"><i class="bi bi-plus"></i> Add
                                                    Topic</button>
                                            </div>

                                            <!-- Create New Topic Form -->
                                            <div id="createTopicForm" class="p-2" style="display: none;">
                                                <div class="bg-secondary text-dark p-3 rounded-top">
                                                    <h5 class="mb-0" style="font-size: 1rem;">Create New Topic</h5>
                                                </div>

                                                <div class="p-3 border rounded">
                                                    <form id="topicForm">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label for="topicTitle" class="form-label">Topic
                                                                    Title</label>
                                                                <input type="text" class="form-control" id="topicTitle"
                                                                    name="topic_title"
                                                                    placeholder="Enter the topic title" required>
                                                            </div>

                                                            <div class="col-12 mb-3">
                                                                <label for="topicDescription" class="form-label">Topic
                                                                    Description</label>
                                                                <textarea class="form-control" id="topicDescription"
                                                                    name="topic_description" rows="4"
                                                                    placeholder="Enter the topic description"
                                                                    required></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="p-2">
                                                            <div class="d-flex justify-content-end gap-2">
                                                                <button type="button"
                                                                    class="cancel-btn btn btn-secondary rounded">Cancel</button>
                                                                <button type="submit"
                                                                    class="create-btn btn btn-primary rounded">Create
                                                                    Topic</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>



                                            <!-- Topic Cards -->
                                            <div class="p-3" id="topicContainer">
                                                <div class="topic-card rounded border p-4 mb-3"
                                                    style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%); cursor:pointer;">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6>No Data</h6>
                                                        <button class="outcomes-btn"><small></small></button>
                                                    </div>
                                                    <small style="color:rgb(75 85 99)"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Enrolled Students Section (Hidden by default) -->
                                        <div id="enrolledStudentsSection" style="display:none;">
                                            <!-- Header -->
                                            <div class="d-flex align-items-start flex-column mb-3 " style="gap:30%">
                                                <button id="backToTopics" class="btn btn-sm text-primary ">← Back to
                                                    Topics</button>
                                                <h6 class="mb-0 py-3" id="cTName">-</h6>
                                            </div>

                                            <!-- Overview -->
                                            <div class="mb-3">
                                                <div class="p-3 rounded border"
                                                    style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                                    <small class="text-muted" id="cTDesc">-</small>
                                                </div>
                                            </div>



                                            <!-- Course Outcome Header -->
                                            <div class="outcome-header">
                                                <div class="d-flex align-items-center mb-3 justify-content-between p-3">
                                                    <h6 class="mb-0">Course Outcomes</h6>
                                                    <button id="addOutcomeBtn" class="btn add-outcome-btn btn-sm"><i
                                                            class="bi bi-plus"></i> Add Outcome</button>
                                                </div>
                                            </div>

                                            <!-- Create New Outcome Form -->

                                            <div id="createOutcomeForm" class="p-2" style="display: none;">
                                                <div class="bg-secondary text-dark p-3 rounded-top">
                                                    <h5 class="mb-0" style="font-size: 1rem;">Create New Outcome</h5>
                                                </div>

                                                <div class="p-3 border rounded">
                                                    <form id="frmCreateOutcome" autocomplete="off"
                                                        onsubmit="return false;">
                                                        <div class="row">
                                                            <div class="col-12 mb-3">
                                                                <label for="outcomeTitle" class="form-label">Outcome
                                                                    Title</label>
                                                                <input type="text" class="form-control"
                                                                    id="outcomeTitle" name="outcome_title"
                                                                    placeholder="Enter the outcome title" required>
                                                            </div>

                                                            <div class="col-12 mb-3">
                                                                <label for="courseoutcomeDescription"
                                                                    class="form-label">Outcome Description</label>
                                                                <textarea class="form-control"
                                                                    id="courseoutcomeDescription"
                                                                    name="course_description" rows="4"
                                                                    placeholder="Enter the outcome description"
                                                                    required></textarea>
                                                            </div>

                                                            <div class="col-6 mb-3">
                                                                <label for="poLevel" class="form-label">PO Level</label>
                                                                <select class="form-select" id="poLevel" name="po_level"
                                                                    required>
                                                                    <option value="" disabled selected>Select PO
                                                                    </option>
                                                                    <option value="PO1">PO1</option>
                                                                    <option value="PO2">PO2</option>
                                                                    <option value="PO3">PO3</option>
                                                                    <option value="PO4">PO4</option>
                                                                    <option value="PO5">PO5</option>
                                                                    <option value="PO6">PO6</option>
                                                                    <option value="PO7">PO7</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <label for="poMap" class="form-label">PO Mapping</label>
                                                                <select class="form-select" id="poMap" name="po_Map"
                                                                    required>
                                                                    <option value="" disabled selected>Select PO Mapping
                                                                    </option>
                                                                    <option value="Slight">Slight</option>
                                                                    <option value="Moderate">Moderate</option>
                                                                    <option value="Strong">Strong</option>

                                                                </select>
                                                            </div>

                                                            <div class="col-12 mb-3">
                                                                <!-- <label for="poDescription" class="form-label">PO Description</label> -->
                                                                <input readonly type="hidden" class="form-control"
                                                                    id="poDescription" name="po_description" rows="4"
                                                                    placeholder="PO Description" required>
                                                            </div>
                                                        </div>

                                                        <div class="p-2">
                                                            <div class="d-flex justify-content-end gap-2">
                                                                <button type="button" class="btn btn-secondary rounded"
                                                                    id="btnCancelOutcome">Cancel</button>
                                                                <button type="button" class="btn btn-primary rounded"
                                                                    id="btnCreateOutcome">Create Outcome</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>



                                            <!-- Outcome Cards -->
                                            <div id="courseOutcomeList">
                                                <div class="card outcome-card shadow-sm border rounded-3 mb-3"
                                                    style="background: linear-gradient(#f9f9f9, #f0f0f0); cursor:pointer;">
                                                    <div class="card-body p-3">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-2">
                                                            <h6 class="card-title mb-0 text-dark">Data Science Basics
                                                            </h6>
                                                            <div class="d-flex gap-2">
                                                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                                                    style="width: 30px; height: 30px; background: linear-gradient(#c4e0f9, #96c6f3); border:1px solid #ddd;">
                                                                    <i class="bi bi-eye text-primary"></i>
                                                                </div>
                                                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                                                    style="width: 30px; height: 30px; background: linear-gradient(#f9c4c4, #f39696); border:1px solid #ddd;">
                                                                    <i class="bi bi-journal-text text-danger"></i>
                                                                </div>
                                                                <div class="rounded-circle d-flex align-items-center justify-content-center"
                                                                    style="width: 30px; height: 30px; background: linear-gradient(#c4f9c4, #96f396); border:1px solid #ddd;">
                                                                    <i
                                                                        class="bi bi-file-earmark-check text-success"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="card-text text-muted small mb-0">
                                                            Overview of data science concepts and methodologies
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>

                                            <!-- Outcome Detail -->
                                            <div id="outcomeDetail" style="display:none;">
                                                <div class="d-flex align-items-start flex-column mb-3" style="gap:30%;">
                                                    <button id="backToOutcomes" class="btn btn-sm text-primary">← Back
                                                        to
                                                        Outcomes</button>
                                                    <h6 class="mb-0 py-3" id="out-come-Title">-</h6>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="p-3 rounded border bg-gray">
                                                        <small class="text-muted" id="outcomeDescription"> - </small>
                                                    </div>
                                                </div>

                                                <!-- Tabs -->
                                                <ul class="nav nav-tabs bg-secondary" id="outcomeTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="notes-tab"
                                                            data-bs-toggle="tab" data-bs-target="#notes"
                                                            type="button">Notes</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="video-tab" data-bs-toggle="tab"
                                                            data-bs-target="#video" type="button">Video</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="practice-tab" data-bs-toggle="tab"
                                                            data-bs-target="#practice" type="button">Practice</button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="assignment-tab"
                                                            data-bs-toggle="tab" data-bs-target="#assignment"
                                                            type="button">Assignments</button>
                                                    </li>
                                                </ul>

                                                <div class="tab-content border p-3">
                                                    <!-- <div class="d-flex align-items-center justify-content-end mb-2 gap-2">
                                                    <button id="editBtn" class="btn edit-btn btn-sm">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </button>
                                                    <button id="saveBtn" class="btn save-btn btn-sm"
                                                        style="display:none;">Save</button>
                                                    <button id="cancelBtn" class="btn outcome-cancel-btn btn-sm"
                                                        style="display:none;">Cancel</button>
                                                </div> -->

                                                    <!-- Notes Tab -->
                                                    <div class="tab-pane fade show active pt-2" id="notes">
                                                        <div
                                                            class="d-flex align-items-center justify-content-end mb-2 gap-2 notes-actions">
                                                            <button id="editPdfBtn" class="btn btn-sm btn-secondary"><i
                                                                    class="bi bi-pencil"></i> Edit</button>
                                                            <button id="savePdfBtn" class="btn btn-sm btn-success"
                                                                style="display:none;">Save</button>
                                                            <button id="cancelPdfBtn" class="btn btn-sm btn-danger"
                                                                style="display:none;">Cancel</button>
                                                        </div>

                                                        <!-- 🟢 Static Notes (preview when stored PDF exists) -->
                                                        <div id="staticNotesSection"
                                                            class="border rounded p-3 mb-4 bg-light shadow-sm"
                                                            style="display:none;">
                                                            <h6 class="fw-semibold mb-3">📘 Static Notes</h6>
                                                            <div class="ratio ratio-16x9 border rounded shadow-sm">
                                                                <iframe id="staticPdfViewer" src="" width="100%"
                                                                    height="600" style="border:none;"
                                                                    title="Notes PDF Viewer"></iframe>
                                                            </div>
                                                        </div>

                                                        <!-- 📂 Upload & Preview Notes Section (shown only when no stored PDF) -->
                                                        <div id="notesUploadSection"
                                                            class="border rounded p-3 bg-light shadow-sm"
                                                            style="display:none;">
                                                            <h6 class="fw-semibold mb-3">📂 Upload & Preview Your Notes
                                                            </h6>

                                                            <!-- Drag & Drop Upload -->
                                                            <div id="dropZone"
                                                                class="border border-primary rounded p-5 text-center mb-3"
                                                                style="cursor: pointer; background-color: #f8f9fa;">
                                                                <p class="mb-0 fw-semibold">📄 Drag & Drop your PDF here
                                                                    or
                                                                    Click to Upload</p>
                                                                <input type="file" id="fileInput"
                                                                    accept="application/pdf" style="display:none;">
                                                            </div>

                                                            <!-- PDF Preview Container (optional after upload) -->
                                                            <div id="pdfPreviewContainer" class="rounded border p-3"
                                                                style="height: 600px; display:none;">
                                                                <iframe id="pdfViewer" width="100%" height="100%"
                                                                    style="border:none;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Video Tab -->
                                                    <div class="tab-pane fade show pt-2" id="video">
                                                        <div
                                                            class="d-flex align-items-center justify-content-end mb-2 gap-2 video-actions">
                                                            <button id="editVideoBtn"
                                                                class="btn btn-sm btn-secondary"><i
                                                                    class="bi bi-pencil"></i> Edit</button>
                                                            <button id="saveVideoBtn" class="btn btn-sm btn-success"
                                                                style="display:none;">Save</button>
                                                            <button id="cancelVideoBtn" class="btn btn-sm btn-danger"
                                                                style="display:none;">Cancel</button>
                                                        </div>

                                                        <!-- View saved video link (optional tiny section) -->
                                                        <div id="staticVideoSection"
                                                            class="border rounded p-3 mb-3 bg-light shadow-sm"
                                                            style="display:none;">
                                                            <h6 class="fw-semibold mb-2">Saved YouTube Link:</h6>
                                                            <a id="savedVideoLink" href="#" target="_blank"
                                                                class="text-primary"></a>
                                                        </div>

                                                        <!-- Add / Edit YouTube Link -->
                                                        <div id="videoUploadSection"
                                                            class="border rounded p-3 bg-light shadow-sm"
                                                            style="display:none;">
                                                            <h6 class="fw-semibold mb-3">Add YouTube Video Link</h6>
                                                            <input type="text" id="youtubeLinkInput"
                                                                class="form-control mb-2"
                                                                placeholder="Paste YouTube link here (example: https://youtu.be/xyz123)">
                                                            <small class="text-muted">* Only YouTube link
                                                                allowed</small>
                                                        </div>
                                                    </div>



                                                    <!-- PRACTICE TAB -->

                                                    <div class="tab-pane fade" id="practice">
                                                        <div class="p-3" id="practiceSection">
                                                            <div
                                                                class="border rounded shadow-sm overflow-hidden bg-light">
                                                                <div
                                                                    class="p-2 border-bottom bg-secondary text-dark fw-semibold">
                                                                    Practice Material
                                                                </div>
                                                                <div class="p-3">

                                                                    <!-- 🧮 Question Count Input -->
                                                                    <div class="mb-3">
                                                                        <div class="row g-2 align-items-center">
                                                                            <div class="col-12 col-md-auto">
                                                                                <label for="questionCount"
                                                                                    class="form-label fw-semibold mb-0">
                                                                                    Number of Questions (max 50)
                                                                                </label>
                                                                            </div>
                                                                            <div class="col-12 col-sm-6 col-md-3">
                                                                                <input type="number" id="questionCount"
                                                                                    class="form-control w-100" min="1"
                                                                                    max="50" placeholder="Enter count">
                                                                            </div>
                                                                            <div class="col-12 col-sm-auto">
                                                                                <button id="generateBtn"
                                                                                    class="btn btn-outline-primary w-100 w-sm-auto mt-2 mt-sm-0">
                                                                                    Generate
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Questions Container -->
                                                                    <div id="questionsContainer"></div>

                                                                    <!-- Buttons -->
                                                                    <div class="d-flex flex-wrap justify-content-center mt-3 gap-2"
                                                                        id="practiceButtons" style="display:none;">
                                                                        <button id="submitPracticeBtn"
                                                                            class="btn btn-gradient-glossy btn-sm flex-fill flex-sm-grow-0">
                                                                            🚀 Submit
                                                                        </button>
                                                                        <button id="editPracticeBtn"
                                                                            class="btn btn-outline-warning btn-sm flex-fill flex-sm-grow-0"
                                                                            style="display:none;">
                                                                            ✏️ Edit
                                                                        </button>
                                                                        <button id="savePracticeBtn"
                                                                            class="btn btn-gradient-glossy btn-sm flex-fill flex-sm-grow-0"
                                                                            style="display:none;">
                                                                            💾 Save
                                                                        </button>
                                                                        <button id="cancelPracticeBtn"
                                                                            class="btn btn-outline-secondary btn-sm flex-fill flex-sm-grow-0"
                                                                            style="display:none;">
                                                                            ❌ Cancel
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Assignment Tab -->
                                                    <div class="tab-pane fade pt-1" id="assignment">
                                                        <div id="assignmentDisplay" class="rounded border p-3">
                                                            <div
                                                                class="border rounded shadow-sm overflow-hidden bg-light">
                                                                <div class="p-2 border-bottom bg-secondary text-dark">
                                                                    Assignment Material
                                                                </div>
                                                                <div class="p-3">
                                                                    <div class="form-div">
                                                                        <form id="assignment-submit-faculty"
                                                                            enctype="multipart/form-data">
                                                                            <!-- ✅ Hidden Inputs -->
                                                                            <input type="hidden" name="c_id" value="">
                                                                            <input type="hidden" name="launch_c_id"
                                                                                value="1">

                                                                            <!-- Title -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Title</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="title"
                                                                                    placeholder="Enter assignment title"
                                                                                    required>
                                                                            </div>

                                                                            <!-- Instructions -->
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Instructions
                                                                                    <small
                                                                                        class="text-muted">(optional)</small></label>
                                                                                <textarea class="form-control"
                                                                                    name="instruction" rows="3"
                                                                                    placeholder="Enter instructions if any"></textarea>
                                                                            </div>

                                                                            <div class="row">
                                                                                <!-- Upload PDF -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label">Upload
                                                                                            File (PDF only)</label>
                                                                                        <input type="file"
                                                                                            class="form-control"
                                                                                            name="file" accept=".pdf">
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Total Marks -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label">Total
                                                                                            Marks</label>
                                                                                        <select class="form-select"
                                                                                            name="marks" required>
                                                                                            <option value="" selected
                                                                                                disabled>Select marks
                                                                                            </option>
                                                                                            <option value="10">10
                                                                                            </option>
                                                                                            <option value="20">20
                                                                                            </option>
                                                                                            <option value="25">25
                                                                                            </option>
                                                                                            <option value="50">50
                                                                                            </option>
                                                                                            <option value="100">100
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Due Date -->
                                                                                <div class="col-lg-4">
                                                                                    <div class="mb-3">
                                                                                        <label class="form-label">Due
                                                                                            Date</label>
                                                                                        <input type="date"
                                                                                            class="form-control"
                                                                                            name="due_date" required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Submit Button -->
                                                                            <div class="d-flex justify-content-center">
                                                                                <button type="submit"
                                                                                    class="btn btn-gradient-glossy btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Students Content -->

                                <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                                    <div class="p-4">
                                        <h6 class="mb-4"></h6>
                                        <div class="rounded border">
                                            <!-- Header -->
                                            <div class="bg-secondary text-dark p-3 rounded-top">
                                                <h5 class="mb-0" style="font-size: 1rem;">Enrolled Students</h5>
                                            </div>

                                            <!-- Body -->
                                            <div class="p-3">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover align-middle mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th scope="col">Student</th>
                                                                <th scope="col">Registration</th>
                                                                <th scope="col">Progress</th>
                                                                <!-- <th scope="col">Attendance</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody id="studentProgressTable">
                                                            <!-- Rows populated dynamically -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Settings Content -->
                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="p-3">
                                        <div class="container-fluid">
                                            <div class="bg-secondary text-dark p-3 rounded-top">
                                                <h5 class="mb-0" style="font-size: 1rem;">Course Settings</h5>
                                            </div>
                                            <div class="p-3 border rounded" id="topicFormSection">
                                                <form id="topicDetailForm">
                                                    <div class="row g-3">
                                                        <!-- Course Code -->
                                                        <div class="col-md-6">
                                                            <label for="courseCode" class="form-label">Course
                                                                Code</label>
                                                            <input type="text" class="form-control"
                                                                id="courseCode-form">
                                                        </div>

                                                        <!-- Course Name -->
                                                        <div class="col-md-6">
                                                            <label for="courseName" class="form-label">Course
                                                                Name</label>
                                                            <input type="text" class="form-control"
                                                                id="courseName-form">
                                                        </div>

                                                        <!-- Department -->
                                                        <div class="col-md-6">
                                                            <label for="department"
                                                                class="form-label">Department</label>
                                                            <input type="text" class="form-control"
                                                                id="department-form">
                                                        </div>

                                                        <!-- Credit Hours -->
                                                        <div class="col-md-6">
                                                            <label for="creditHours" class="form-label">Credit
                                                                Hours</label>
                                                            <input type="text" class="form-control"
                                                                id="creditHours-form">
                                                        </div>

                                                        <!-- Course Description -->
                                                        <div class="col-12">
                                                            <label for="courseDescription" class="form-label">Course
                                                                Description</label>
                                                            <textarea class="form-control" id="courseDescription-form"
                                                                rows="3"></textarea>
                                                        </div>

                                                        <!-- Schedule -->
                                                        <div class="col-md-6">
                                                            <label for="schedule" class="form-label">Schedule</label>
                                                            <input type="text" class="form-control" id="schedule-form">
                                                        </div>

                                                        <!-- Location -->
                                                        <div class="col-md-6">
                                                            <label for="location" class="form-label">Location</label>
                                                            <input type="text" class="form-control" id="location-form"
                                                                value="Science Building, Room 301">
                                                        </div>

                                                        <!-- Prerequisites -->
                                                        <div class="col-md-6">
                                                            <label for="prerequisites" class="form-label">Prerequisites
                                                                (comma-separated)</label>
                                                            <input type="text" class="form-control"
                                                                id="prerequisites-form">
                                                        </div>
                                                    </div>

                                                    <div class="pt-3">
                                                        <div class="bg-light border rounded p-2"></div>
                                                    </div>

                                                    <div class="p-3">
                                                        <h6 class="fw-semibold mb-3">Course Coordinator Information</h6>
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <label for="coordinatorName"
                                                                    class="form-label">Coordinator Name</label>
                                                                <input type="text" class="form-control"
                                                                    id="coordinatorName-form">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="email" class="form-label">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="email-form">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" id="phone-form">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="profile" class="form-label">Profile</label>
                                                                <input type="file" class="form-control" id="profile">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="p-3 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-primary"
                                                            id="btnSaveCourse">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- 📄 PDF Preview Modal -->
    <div class="modal fade" id="pdfPreviewModal" tabindex="-1" aria-labelledby="pdfPreviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-semibold" id="pdfPreviewLabel">Assignment PDF Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0" style="height: 80vh;">
                    <iframe id="pdfPreviewFrame" src="" width="100%" height="100%" style="border:none;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Topic Modal -->
    <div class="modal fade" id="editTopicModal" tabindex="-1">
        <div class="modal-dialog">
            <form id="editTopicForm" class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Topic</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_topic_id">

                    <div class="mb-3">
                        <label class="form-label">Topic Name</label>
                        <input type="text" id="edit_topic_title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Topic Description</label>
                        <textarea id="edit_topic_desc" class="form-control" rows="3" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Edit Outcome Modal -->
    <div class="modal fade" id="editOutcomeModal" tabindex="-1">
        <div class="modal-dialog">
            <form id="editOutcomeForm" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Course Outcome</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="edit_co_id">

                    <div class="mb-3">
                        <label class="form-label">CO Level (e.g., CO1)</label>
                        <input type="text" id="edit_co_title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Outcome Description</label>
                        <textarea id="edit_co_desc" class="form-control" rows="3" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const poDescriptions = {
                "PO1": "Demonstrate advanced understanding of educational process and planning.",
                "PO2": "Design and implement evidence-based teaching-learning strategies based on sound principles and theories.",
                "PO3": "Design and implement evidence-based assessment strategies based on sound principles.",
                "PO4": "Evaluate and design curriculum with all its components.",
                "PO5": "Demonstrate attributes of leadership and quality educational management.",
                "PO6": "Conduct and publish research in health professions education.",
                "PO7": "Function as reflective practitioners and change agents."
            };

            const poSelect = document.getElementById("poLevel");
            const poDescription = document.getElementById("poDescription");

            poSelect.addEventListener("change", function () {
                const selectedPO = poSelect.value;
                poDescription.value = poDescriptions[selectedPO] || "";
            });
        });
    </script>


    <!-- material tab course outcome edit btn start -->

    <script>
        const editBtn = document.getElementById('editBtn');
        const saveBtn = document.getElementById('saveBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        editBtn.addEventListener('click', () => {
            // Hide Edit, show Save and Cancel
            editBtn.style.display = 'none';
            saveBtn.style.display = 'inline-block';
            cancelBtn.style.display = 'inline-block';

            // Notes tab: hide display, show textarea
            document.getElementById('notesDisplay').style.display = 'none';
            document.getElementById('notesEdit').style.display = 'block';

            // Assignment tab: hide display, show textarea
            document.getElementById('assignmentDisplay').style.display = 'none';
            document.getElementById('assignmentEdit').style.display = 'block';

            // Make video URL editable
            document.getElementById('video_url').removeAttribute('readonly');
        });

        cancelBtn.addEventListener('click', () => {
            // Hide Save and Cancel, show Edit
            editBtn.style.display = 'inline-block';
            saveBtn.style.display = 'none';
            cancelBtn.style.display = 'none';

            // Revert Notes
            document.getElementById('notesEdit').style.display = 'none';
            document.getElementById('notesDisplay').style.display = 'block';

            // Revert Assignment
            document.getElementById('assignmentEdit').style.display = 'none';
            document.getElementById('assignmentDisplay').style.display = 'block';

            // Make video URL readonly again
            document.getElementById('video_url').setAttribute('readonly', true);
        });

        saveBtn.addEventListener('click', () => {
            // Save Notes
            const notesText = document.getElementById('notesEdit').value;
            document.getElementById('notesDisplay').innerText = notesText;

            // Save Assignment
            const assignmentText = document.getElementById('assignmentEdit').value;
            const assignmentArray = assignmentText.split('\n').map(item => item.trim()).filter(Boolean);
            let olContent = '';
            assignmentArray.forEach(item => {
                olContent += `<li>${item.replace(/^\d+\.\s*/, '')}</li>`;
            });
            document.getElementById('assignmentDisplay').innerHTML = `<ol>${olContent}</ol>`;

            // Make video URL readonly
            document.getElementById('video_url').setAttribute('readonly', true);

            // Hide Save/Cancel, show Edit
            editBtn.style.display = 'inline-block';
            saveBtn.style.display = 'none';
            cancelBtn.style.display = 'none';

            // Hide textareas, show displays
            document.getElementById('notesEdit').style.display = 'none';
            document.getElementById('notesDisplay').style.display = 'block';
            document.getElementById('assignmentEdit').style.display = 'none';
            document.getElementById('assignmentDisplay').style.display = 'block';
        });
    </script>
    <!-- material tab course outcome edit btn end -->

    <!-- for displaying the course outcome in the materials tabs here start -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const courseTopicsSection = document.getElementById('courseTopicsSection');
            const enrolledStudentsSection = document.getElementById('enrolledStudentsSection');
            const courseOutcomeList = document.getElementById('courseOutcomeList');
            const outcomeDetail = document.getElementById('outcomeDetail');
            const outcomeTitle = document.getElementById('outcomeTitle');
            const outcomeDescription = document.getElementById('outcomeDescription');
            const backToTopicsBtn = document.getElementById('backToTopics');
            const backToOutcomesBtn = document.getElementById('backToOutcomes');

            // Topic click
            document.querySelectorAll(".topic-card").forEach(card => {
                card.addEventListener("click", () => {
                    courseTopicsSection.style.display = "none";
                    enrolledStudentsSection.style.display = "block";
                });
            });

            // Back to topics
            backToTopicsBtn.addEventListener("click", () => {
                enrolledStudentsSection.style.display = "none";
                courseTopicsSection.style.display = "block";
            });

            // Outcome card click
            document.querySelectorAll('.outcome-card').forEach(card => {
                card.addEventListener('click', () => {
                    // Hide course outcome list
                    courseOutcomeList.style.display = 'none';

                    // Hide outcome header
                    const outcomeHeader = document.querySelector('.outcome-header');
                    if (outcomeHeader) outcomeHeader.style.display = 'none';

                    // Hide create outcome form
                    const createOutcomeForm = document.querySelector('#createOutcomeForm');
                    if (createOutcomeForm) createOutcomeForm.style.display = 'none';

                    // Update the detail view
                    outcomeTitle.textContent = card.querySelector('h6').textContent;
                    outcomeDescription.textContent = card.querySelector('p').textContent;
                    outcomeDetail.style.display = 'block';
                });
            });


            // Back to outcomes
            backToOutcomesBtn.addEventListener('click', () => {
                const outcomeHeader = document.querySelector('.outcome-header');
                outcomeDetail.style.display = 'none';
                courseOutcomeList.style.display = 'block';
                if (outcomeHeader) outcomeHeader.style.display = 'block'; // show header again
            });

        });
    </script>
    <!-- for displaying the course outcome in the materials tabs here end -->


    <script>
        // Click on topic -> Show students section
        document.querySelectorAll(".topic-card").forEach(card => {
            card.addEventListener("click", () => {
                document.getElementById("courseTopicsSection").style.display = "none";
                document.getElementById("enrolledStudentsSection").style.display = "block";
            });
        });

        // Back button -> Show topics again
        document.getElementById("backToTopics").addEventListener("click", () => {
            document.getElementById("enrolledStudentsSection").style.display = "none";
            document.getElementById("courseTopicsSection").style.display = "block";
        });
    </script>

    <!-- for hiding the scroll in students tab -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const contentScroll = document.querySelector(".content-scroll");

            // Bootstrap tab shown event
            document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(tab => {
                tab.addEventListener("shown.bs.tab", function (e) {
                    const targetId = e.target.getAttribute("data-bs-target");

                    if (targetId === "#students") {
                        // Disable scroll for Students
                        contentScroll.style.overflowY = "hidden";
                        // contentScroll.style.maxHeight = "none";
                    } else {
                        // Enable scroll for other tabs
                        contentScroll.style.overflowY = "auto";
                        contentScroll.style.maxHeight = "748px";
                    }
                });
            });
        });
    </script>

    <!-- for hiddening the committe report button in other page herer  -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const studentsTab = document.getElementById('students-tab');
            const settingsTab = document.getElementById('settings-tab');
            const committeeBtn = document.getElementById('committeeReportBtn');

            // When Students tab is clicked → Show button
            studentsTab.addEventListener('shown.bs.tab', function () {
                committeeBtn.classList.remove('d-none');
            });

            // When any other tab is clicked → Hide button
            document.querySelectorAll('#myTab button').forEach(tab => {
                tab.addEventListener('shown.bs.tab', function (e) {
                    if (e.target.id !== 'students-tab') {
                        committeeBtn.classList.add('d-none');
                    }
                    if (e.target.id !== 'settings-tab') {
                        committeeBtn.classList.add('d-none');
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addBtn = document.querySelector(".add-topic-btn");
            const formDiv = document.getElementById("createTopicForm");
            const cancelBtn = document.querySelector(".cancel-btn");

            // Show form on Add Topic click
            addBtn.addEventListener("click", function () {
                formDiv.style.display = "block";
                // addBtn.style.display = "none";  <-- removed this line
            });

            // Hide form on Cancel click
            cancelBtn.addEventListener("click", function () {
                formDiv.style.display = "none";
                // addBtn.style.display = "inline-block"; <-- no need to show it
            });
        });
    </script>

    <!-- add outocme hrer -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addOutcomeBtn = document.getElementById("addOutcomeBtn");
            const createOutcomeForm = document.getElementById("createOutcomeForm");
            const cancelOutcomeBtn = document.getElementById("cancelOutcomeBtn");

            // Show the form when "Add Outcome" is clicked
            addOutcomeBtn.addEventListener("click", () => {
                createOutcomeForm.style.display = "block";
                // addOutcomeBtn.style.display = "none";
            });

            // Hide the form when "Cancel" is clicked
            cancelOutcomeBtn.addEventListener("click", () => {
                createOutcomeForm.style.display = "none";
                addOutcomeBtn.style.display = "inline-block";
            });
        });
    </script>

    <!-- notes tab -->
    <!-- <script>
        const dropZone = document.getElementById("dropZone");
        const fileInput = document.getElementById("fileInput");
        const pdfPreviewContainer = document.getElementById("pdfPreviewContainer");
        const pdfViewer = document.getElementById("pdfViewer");

        // 🖱️ Click to open file picker
        dropZone.addEventListener("click", () => fileInput.click());

        // 📂 When file selected manually
        fileInput.addEventListener("change", handleFile);

        // 🧲 Drag events
        dropZone.addEventListener("dragover", (e) => {
            e.preventDefault();
            dropZone.classList.add("bg-light", "border-success");
        });

        dropZone.addEventListener("dragleave", () => {
            dropZone.classList.remove("bg-light", "border-success");
        });

        dropZone.addEventListener("drop", (e) => {
            e.preventDefault();
            dropZone.classList.remove("bg-light", "border-success");
            const file = e.dataTransfer.files[0];
            if (file) previewPDF(file);
        });

        // 🧾 Handle PDF file
        function handleFile(e) {
            const file = e.target.files[0];
            if (file) previewPDF(file);
        }

        // 👁️ Show uploaded PDF in iframe
        function previewPDF(file) {
            if (file.type !== "application/pdf") {
                alert("Please upload a valid PDF file.");
                return;
            }

            const fileURL = URL.createObjectURL(file);
            pdfViewer.src = fileURL;
            pdfPreviewContainer.style.display = "block";
        }
    </script> -->

    <!-- Include Plyr JS -->
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.polyfilled.js"></script>

    <!-- video tab -->
    <!-- <script>
        // Initialize both Plyr players
        const staticPlayer = new Plyr('#staticVideo');
        const uploadedPlayer = new Plyr('#uploadedVideo');

        const videoDropZone = document.getElementById("videoDropZone");
        const videoInput = document.getElementById("videoInput");
        const videoPreviewContainer = document.getElementById("videoPreviewContainer");

        // Click to upload
        videoDropZone.addEventListener("click", () => videoInput.click());

        // File selected manually
        videoInput.addEventListener("change", handleVideoFile);

        // Drag and drop functionality
        videoDropZone.addEventListener("dragover", (e) => {
            e.preventDefault();
            videoDropZone.classList.add("bg-light", "border-success");
        });

        videoDropZone.addEventListener("dragleave", () => {
            videoDropZone.classList.remove("bg-light", "border-success");
        });

        videoDropZone.addEventListener("drop", (e) => {
            e.preventDefault();
            videoDropZone.classList.remove("bg-light", "border-success");
            const file = e.dataTransfer.files[0];
            if (file) previewVideo(file);
        });

        // Handle selected video
        function handleVideoFile(e) {
            const file = e.target.files[0];
            if (file) previewVideo(file);
        }

        // Preview uploaded video using Plyr
        function previewVideo(file) {
            if (!file.type.startsWith("video/")) {
                alert("Please upload a valid video file.");
                return;
            }

            const fileURL = URL.createObjectURL(file);

            uploadedPlayer.source = {
                type: 'video',
                sources: [{
                    src: fileURL,
                    type: file.type
                }]
            };

            // Show preview area
            videoPreviewContainer.style.display = "block";
            uploadedPlayer.play();
        }
    </script> -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // ===== Globals =====
        let selectedTopicId = null; // currently opened topic (right pane header)
        const currentLaunchId = window.currentLaunchId || (
            new URLSearchParams(location.search).get("launch_id")
        );

        // ===== Load topics into a container =====
        function loadTopics(launch_id, containerId) {
            const container = document.getElementById(containerId);
            if (!container) return;

            fetch(`api/faculty_topics.php?launch_id=${launch_id}`)
                .then(r => r.json())
                .then(response => {
                    if (response.status !== 'success' || !Array.isArray(response.data) || !response.data.length) {
                        container.innerHTML = `<p class="text-muted">${response.message || 'No topics found.'}</p>`;
                        return;
                    }

                    const course = response.data[0];
                    document.getElementById("studentCount").innerText = course.student_count + " Student";

                    // Course header fields
                    setText('cCodename', `${course.course_code}: ${course.course_name}`);
                    setText('CCode', course.course_code);
                    setText('cName', course.course_name);
                    setText('slt', `Slot ${course.slot}`);
                    setText('schedule', `Slot ${course.slot}`);
                    setText('seatallot', course.seat_allotment);
                    setText('OverviewDepartment', course.department)
                    setText('Chours', course.credit_hours)

                    // Pre-fill form fields (if present)
                    setValue('courseCode-form', course.course_code);
                    setValue('courseName-form', course.course_name);
                    setValue('department-form', course.department);
                    setValue('creditHours-form', course.credit_hours);
                    setValue('courseDescription-form', course.course_description);
                    setValue('schedule-form', course.Schedule);
                    setValue('location-form', course.location);
                    setValue('prerequisites-form', course.Prerequisites);
                    setValue('coordinatorName-form', course.user_name);
                    setValue('email-form', course.email);
                    setValue('phone-form', course.phone);

                    // Build topic cards
                    let html = '';
                    response.data.forEach(t => {
                        html += `
            <div class="topic-card rounded border p-3 mb-3"
               data-topic-id="${t.topic_id}"
               data-topic-title="${escapeAttr(t.topic_title)}"
               data-topic-desc="${escapeAttr(t.topic_description)}"
               style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%); cursor:pointer;">
                <div class="d-flex gap-2 justify-content-end mb-3">
                <button type="button"
                        class="btn btn-sm btn-outline-secondary edit-topic-btn"
                        data-topic-id="${t.topic_id}"
                        data-title="${escapeAttr(t.topic_title)}"
                        data-desc="${escapeAttr(t.topic_description)}">
                  ✏️ Edit
                </button>

                <button type="button"
                        class="outcomes-btn btn btn-sm btn-outline-primary"
                        data-topic-id="${t.topic_id}">
                  ${t.outcome_count ?? 0} outcomes
                </button>
              </div>
            <div class="d-flex justify-content-between align-items-center">
              <h6 class="mb-0 topic-title-text">${escapeHtml(t.topic_title)}</h6>

              
            </div>

            <small class="text-secondary topic-desc-text">${escapeHtml(t.topic_description)}</small>
            </div>
        `;
                    });

                    container.innerHTML = html;

                    // Event delegation — one listener for the whole container
                    container.addEventListener('click', onTopicContainerClick, {
                        passive: true
                    });
                })
                .catch(err => {
                    console.error(err);
                    document.getElementById(containerId).innerHTML = `<p class="text-danger">No Data Found.</p>`;
                });
        }

        // ===== Container click handler (delegated) =====
        function onTopicContainerClick(e) {
            const editBtn = e.target.closest('.edit-topic-btn');
            const outcomesBtn = e.target.closest('.outcomes-btn');
            const card = e.target.closest('.topic-card');

            // Edit button clicked -> open modal; DO NOT let card click run
            if (editBtn) {
                e.preventDefault();
                e.stopPropagation();
                openEditModalFromButton(editBtn);
                return;
            }

            // Outcomes button clicked -> call outcome loader; DO NOT let card click run
            if (outcomesBtn) {
                e.preventDefault();
                e.stopPropagation();
                const topicId = outcomesBtn.getAttribute('data-topic-id');
                const cardEl = outcomesBtn.closest('.topic-card');
                const title = cardEl?.getAttribute('data-topic-title') || '';
                const desc = cardEl?.getAttribute('data-topic-desc') || '';
                selectedTopicId = topicId;
                setText('cTName', title);
                setText('cTDesc', desc);
                if (typeof showOutcomeSection === 'function') {
                    showOutcomeSection(topicId, title, desc);
                }
                return;
            }

            // Clicked empty part of the card -> load the topic details
            if (card) {
                const topicId = card.getAttribute('data-topic-id');
                const title = card.getAttribute('data-topic-title') || '';
                const desc = card.getAttribute('data-topic-desc') || '';
                selectedTopicId = topicId;
                setText('cTName', title);
                setText('cTDesc', desc);
                if (typeof showOutcomeSection === 'function') {
                    showOutcomeSection(topicId, title, desc);
                }
            }
        }

        // ===== Open Edit Modal and prefill =====
        function openEditModalFromButton(btn) {
            const id = btn.getAttribute('data-topic-id');
            const title = btn.getAttribute('data-title') || '';
            const desc = btn.getAttribute('data-desc') || '';

            document.getElementById('edit_topic_id').value = id;
            document.getElementById('edit_topic_title').value = title;
            document.getElementById('edit_topic_desc').value = desc;

            const modalEl = document.getElementById('editTopicModal');
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
            modal.show();
        }

        // ===== Save Edited Topic (AJAX) =====
        document.getElementById('editTopicForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const topic_id = document.getElementById('edit_topic_id').value.trim();
            const topic_title = document.getElementById('edit_topic_title').value.trim();
            const topic_desc = document.getElementById('edit_topic_desc').value.trim();

            fetch('api/update_topic.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    topic_id,
                    topic_title,
                    topic_desc
                })
            })
                .then(r => r.json())
                .then(resp => {
                    if (resp.status == 200) {
                        // Patch the card in-place
                        const card = document.querySelector(`.topic-card[data-topic-id="${CSS.escape(topic_id)}"]`);
                        if (card) {
                            // Text nodes
                            const titleNode = card.querySelector('.topic-title-text');
                            const descNode = card.querySelector('.topic-desc-text');
                            if (titleNode) titleNode.textContent = topic_title;
                            if (descNode) descNode.textContent = topic_desc;

                            // Data attributes (used by click handler)
                            card.setAttribute('data-topic-title', topic_title);
                            card.setAttribute('data-topic-desc', topic_desc);

                            // Also update the edit button data so the modal re-opens with latest
                            const eb = card.querySelector('.edit-topic-btn');
                            if (eb) {
                                eb.setAttribute('data-title', topic_title);
                                eb.setAttribute('data-desc', topic_desc);
                            }
                        }

                        // If this is the currently opened topic, update the right header too
                        if (selectedTopicId && selectedTopicId.toString() === topic_id.toString()) {
                            setText('cTName', topic_title);
                            setText('cTDesc', topic_desc);
                        }

                        Swal.fire('Updated!', 'Topic updated successfully.', 'success');

                        // Close modal
                        const modalEl = document.getElementById('editTopicModal');
                        bootstrap.Modal.getInstance(modalEl)?.hide();
                        // Optional: modalEl.querySelector('form').reset();
                    } else {
                        Swal.fire('Error', resp.message || 'Failed to update topic', 'error');
                    }
                })
                .catch(err => {
                    console.error(err);
                    Swal.fire('Error', 'Network/Server error', 'error');
                });
        });

        // ===== Helpers =====
        function setText(id, val) {
            const el = document.getElementById(id);
            if (el) el.textContent = val ?? '';
        }

        function setValue(id, val) {
            const el = document.getElementById(id);
            if (el) el.value = val ?? '';
        }

        function escapeHtml(s = '') {
            return s.replace(/[&<>"']/g, m => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            }[m]));
        }

        function escapeAttr(s = '') {
            // Same as escapeHtml for safety in data-* attributes
            return escapeHtml(s);
        }




        /**
         * Display the outcome section for a given topic
         */
        function showOutcomeSection(topicId, topicTitle, topicDesc) {
            const topicSection = document.getElementById('courseTopicsSection');
            const outcomeSection = document.getElementById('enrolledStudentsSection');
            const outcomeTitle = document.getElementById('outcomeTitle');
            const outcomeDescription = document.getElementById('outcomeDescription');
            const outcomeForm = document.getElementById('createOutcomeForm');
            const outcomeList = document.getElementById('courseOutcomeList');

            // Hide topic list, show outcomes section
            topicSection.style.display = 'none';
            outcomeSection.style.display = 'block';

            // Always show list first, hide form
            outcomeForm.style.display = 'none';
            outcomeList.style.display = 'block';

            // Update header details
            outcomeTitle.textContent = topicTitle;
            outcomeDescription.textContent = topicDesc;

            // Load outcomes dynamically
            loadOutcomes(topicId);

            // Attach Add Outcome handler
            setupAddOutcomeButton(topicId);
        }

        /**
         * Fetch and render outcomes for selected topic
         */
        function loadOutcomes(topicId) {
            const outcomeList = document.getElementById('courseOutcomeList');
            const outcomeDetail = document.getElementById('outcomeDetail');
            const createOutcomeForm = document.getElementById('createOutcomeForm');

            outcomeList.innerHTML = "";
            outcomeList.style.display = "block";
            createOutcomeForm.style.display = "none";
            if (outcomeDetail) outcomeDetail.style.display = "none";

            fetch(`api/faculty_outcomes.php?topic_id=${topicId}`)
                .then(res => res.json())
                .then(response => {
                    if (response.status === 'success' && response.data.length > 0) {
                        let html = '';

                        response.data.forEach(outcome => {
                            html += `
                    <div class="card outcome-card shadow-sm border rounded-3 mb-3"
                        data-outcome-id="${outcome.co_id}"
                        data-topic-id="${outcome.topic_id}"        
                        data-launch-id="${outcome.launch_id}"  
                        data-co-title="${outcome.co_level}"
                        data-co-desc="${outcome.course_description}"
                        style="background: linear-gradient(#f9f9f9, #f0f0f0); cursor:pointer;">

                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h6 class="card-title mb-0 text-dark">${outcome.co_level}</h6>
                                <div class="d-flex gap-2 align-items-center">
                                    <!-- Existing Icons -->
                                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; background: linear-gradient(#c4e0f9, #96c6f3); border:1px solid #ddd;">
                                        <i class="bi bi-eye text-primary"></i>
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; background: linear-gradient(#f9c4c4, #f39696); border:1px solid #ddd;">
                                        <i class="bi bi-journal-text text-danger"></i>
                                    </div>
                                    <div class="rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 30px; height: 30px; background: linear-gradient(#c4f9c4, #96f396); border:1px solid #ddd;">
                                        <i class="bi bi-file-earmark-check text-success"></i>
                                    </div>

                                    <!-- 🖊️ Edit Button -->
                                    <button type="button"
                                        class="btn btn-sm btn-outline-secondary edit-co-btn"
                                        data-co="${outcome.co_id}"
                                        data-title="${outcome.co_level}"
                                        data-desc="${outcome.course_description}">
                                        ✏️ Edit
                                    </button>
                                </div>
                            </div>

                            <p class="card-text text-muted small mb-0">${outcome.course_description}</p>
                        </div>
                    </div>`;
                        });

                        outcomeList.innerHTML = html;

                        // ✅ Handle clicking on a card (to show details)
                        outcomeList.querySelectorAll('.outcome-card').forEach(card => {
                            card.addEventListener('click', function () {
                                const title = this.dataset.coTitle;
                                const desc = this.dataset.coDesc;

                                outcomeList.style.display = "none";
                                outcomeDetail.style.display = "block";

                                document.getElementById("out-come-Title").textContent = title;
                                document.getElementById("outcomeDescription").textContent = desc;

                                const notesTab = outcomeDetail.querySelector('#notes-tab');
                                const notesPane = outcomeDetail.querySelector('#notes');
                                outcomeDetail.querySelectorAll('.tab-pane').forEach(tab => tab.classList.remove('show', 'active'));
                                outcomeDetail.querySelectorAll('.nav-link').forEach(nav => nav.classList.remove('active'));

                                if (notesTab && notesPane) {
                                    notesTab.classList.add('active');
                                    notesPane.classList.add('show', 'active');
                                }
                            });
                        });
                    } else {
                        if (outcomeDetail) outcomeDetail.style.display = "none";
                        outcomeList.innerHTML = `
                    <div class="text-center p-4 border rounded bg-light">
                        <p class="text-muted mb-2">No outcomes found for this topic.</p>
                    </div>`;
                    }
                })
                .catch(err => {
                    console.error('Error loading outcomes:', err);
                    outcomeList.innerHTML = `<p class="text-danger p-3">⚠️ Failed to load outcomes.</p>`;
                    if (outcomeDetail) outcomeDetail.style.display = "none";
                });
        }
        // 🖊️ Open Edit Modal
        $(document).on("click", ".edit-co-btn", function (e) {
            e.preventDefault();
            e.stopPropagation(); // avoid card click

            $("#edit_co_id").val($(this).data("co"));
            $("#edit_co_title").val($(this).data("title"));
            $("#edit_co_desc").val($(this).data("desc"));

            new bootstrap.Modal(document.getElementById("editOutcomeModal")).show();
        });

        // 💾 Save Edited Outcome
        $("#editOutcomeForm").on("submit", function (e) {
            e.preventDefault();

            $.post("api/update_outcome.php", {
                co_id: $("#edit_co_id").val(),
                co_level: $("#edit_co_title").val(),
                course_description: $("#edit_co_desc").val()
            }, function (resp) {
                try {
                    resp = JSON.parse(resp);
                } catch { }

                if (resp.status == 200) {
                    Swal.fire("Updated!", "Outcome updated successfully.", "success");

                    const id = $("#edit_co_id").val();
                    const newTitle = $("#edit_co_title").val();
                    const newDesc = $("#edit_co_desc").val();

                    const card = $(`.outcome-card[data-outcome-id="${id}"]`);
                    card.find(".card-title").text(newTitle);
                    card.find("p").text(newDesc);
                    card.find(".edit-co-btn").data("title", newTitle);
                    card.find(".edit-co-btn").data("desc", newDesc);

                    // ✅ Update dataset attributes too
                    card.attr("data-co-title", newTitle);
                    card.attr("data-co-desc", newDesc);

                    // ✅ Refresh UI everywhere like topics
                    loadOutcomes(selectedTopicId);
                    loadTopics(currentLaunchId, "topicContainer");

                    $("#editOutcomeModal").modal("hide");
                } else {
                    Swal.fire("Error", resp.message || "Update failed", "error");
                }
            });
        });




        /**
         * Show Create Outcome form only when +Add Outcome is clicked
         */
        function setupAddOutcomeButton(topicId) {
            const addBtn = document.getElementById('addOutcomeBtn');
            const formDiv = document.getElementById('createOutcomeForm');
            const outcomeList = document.getElementById('courseOutcomeList');
            const cancelBtn = document.getElementById('btnCancelOutcome');

            addBtn.onclick = () => {
                formDiv.style.display = 'block';
                outcomeList.style.display = 'none';
            };

            cancelBtn.onclick = () => {
                formDiv.style.display = 'none';
                outcomeList.style.display = 'block';
            };

            // Initialize Create Outcome logic
            setupOutcomeCreation(topicId);
        }

        /**
         * AJAX create outcome
         */
        function setupOutcomeCreation(topicId) {
            const $form = $("#frmCreateOutcome");
            const $btnCreate = $("#btnCreateOutcome");

            const urlParams = new URLSearchParams(window.location.search);
            const launch_id = urlParams.get("launch_id");

            $btnCreate.off("click").on("click", function () {
                const outcomeTitle = $("#outcomeTitle").val().trim();
                const courseDesc = $("#courseoutcomeDescription").val().trim();
                const poLevel = $("#poLevel").val();
                const poDesc = $("#poDescription").val().trim();
                const poMap = $("#poMap").val().trim();

                if (!outcomeTitle || !courseDesc || !poLevel || !poDesc) {
                    alert("Please fill all fields.");
                    return;
                }

                const fd = new FormData();
                fd.append("topic_id", topicId);
                fd.append("launch_id", launch_id);
                fd.append("outcome_title", outcomeTitle);
                fd.append("course_description", courseDesc);
                fd.append("po_level", poLevel);
                fd.append("po_description", poDesc);
                fd.append("po_Map", poMap);

                $btnCreate.prop("disabled", true).text("Creating...");

                $.ajax({
                    url: "api/add_outcome.php",
                    type: "POST",
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        const data = typeof res === "string" ? JSON.parse(res) : res;
                        if (data.status === "success") {
                            alert("✅ Outcome created successfully!");
                            $form[0].reset();
                            $("#createOutcomeForm").hide();
                            $("#courseOutcomeList").show();
                            loadOutcomes(topicId);
                            loadTopics(launch_id, "topicContainer");
                        } else {
                            alert("❌ " + data.message);
                        }
                    },
                    error: function (xhr, status, err) {
                        console.error("AJAX Error:", status, err);
                        alert("⚠️ Server error. Please try again later.");
                    },
                    complete: function () {
                        $btnCreate.prop("disabled", false).text("Create Outcome");
                    }
                });
            });
        }

        // Auto-load topics based on launch_id
        document.addEventListener("DOMContentLoaded", () => {
            const urlParams = new URLSearchParams(window.location.search);
            const launch_id = urlParams.get("launch_id");
            if (launch_id) loadTopics(launch_id, "topicContainer");
        });
    </script>

    <!-- Add Course Topic  -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const addBtn = document.querySelector(".add-topic-btn");
            const cancelBtn = document.querySelector(".cancel-btn");
            const formDiv = document.getElementById("createTopicForm");
            const topicForm = document.getElementById("topicForm");

            // Get launch_id from URL
            const urlParams = new URLSearchParams(window.location.search);
            const launch_id = urlParams.get("launch_id");

            // ✅ Show form
            addBtn.addEventListener("click", function () {
                formDiv.style.display = "block";
            });

            // ✅ Hide form
            cancelBtn.addEventListener("click", function () {
                formDiv.style.display = "none";
                topicForm.reset();
            });

            // ✅ Handle form submit via AJAX
            topicForm.addEventListener("submit", function (e) {
                e.preventDefault(); // stop default form reload

                const formData = new FormData(topicForm);
                formData.append("launch_id", launch_id);

                fetch("api/add_topic.php", {
                    method: "POST",
                    body: formData
                })
                    .then(res => res.json())
                    .then(response => {
                        console.log("Add Topic Response:", response);

                        if (response.status === "success") {
                            alert("✅ Topic created successfully!");
                            formDiv.style.display = "none";
                            topicForm.reset();
                            loadTopics(launch_id, "topicContainer"); // reload the topics list
                        } else {
                            alert("❌ " + response.message);
                        }
                    })
                    .catch(err => {
                        console.error("Error creating topic:", err);
                        alert("Server error. Please try again later.");
                    });
            });
        });
    </script>

    <!-- PDF / Video Material -->
    <script>
        (async function () {
            const show = el => el && (el.style.display = 'block');
            const hide = el => el && (el.style.display = 'none');

            // ✅ PDF buttons
            const editPdfBtn = document.getElementById("editPdfBtn");
            const savePdfBtn = document.getElementById("savePdfBtn");
            const cancelPdfBtn = document.getElementById("cancelPdfBtn");

            // ✅ Video buttons
            const editVideoBtn = document.getElementById("editVideoBtn");
            const saveVideoBtn = document.getElementById("saveVideoBtn");
            const cancelVideoBtn = document.getElementById("cancelVideoBtn");

            // ✅ PDF UI
            const staticNotesSection = document.getElementById("staticNotesSection");
            const notesUploadSection = document.getElementById("notesUploadSection");
            const pdfViewer = document.getElementById("pdfViewer");
            const pdfPreviewContainer = document.getElementById("pdfPreviewContainer");
            const dropZone = document.getElementById("dropZone");
            const fileInput = document.getElementById("fileInput");
            const staticPdfViewer = document.getElementById("staticPdfViewer");

            // ✅ Video UI
            const staticVideoSection = document.getElementById("staticVideoSection");
            const videoUploadSection = document.getElementById("videoUploadSection");
            const youtubeLinkInput = document.getElementById("youtubeLinkInput");
            const savedVideoLink = document.getElementById("savedVideoLink");

            let selectedFile = null;

            // ✅ Context from topic/outcome click
            window.setMaterialContext = ({
                launch_id,
                topic_id,
                co_id
            }) => {
                window._materialContext = {
                    launch_id,
                    topic_id,
                    co_id
                };
            };

            // ✅ Load saved materials
            window.loadModulesForCurrentContext = async function () {
                const ctx = window._materialContext || {};
                if (!ctx.launch_id || !ctx.topic_id || !ctx.co_id) return;

                try {
                    const res = await fetch(`api/get_modules.php?launch_id=${ctx.launch_id}&topic_id=${ctx.topic_id}&co_id=${ctx.co_id}`);
                    const data = await res.json();

                    let pdfModule = null,
                        videoModule = null;

                    if (data.status && data.data.length) {
                        data.data.forEach(m => {
                            const t = m.learning_type.toLowerCase();
                            if (t === "pdf") pdfModule = `../uploads/materials/${m.url}`;
                            if (t === "video") videoModule = m.url;
                        });
                    }

                    // ✅ PDF display
                    if (pdfModule) {
                        staticPdfViewer.src = pdfModule;
                        show(staticNotesSection);
                        hide(notesUploadSection);
                    } else {
                        hide(staticNotesSection);
                        show(notesUploadSection);
                    }

                    // ✅ Video display
                    if (videoModule) {
                        savedVideoLink.textContent = videoModule;
                        savedVideoLink.href = videoModule;
                        youtubeLinkInput.value = videoModule;
                        show(staticVideoSection);
                        hide(videoUploadSection);
                    } else {
                        youtubeLinkInput.value = "";
                        hide(staticVideoSection);
                        show(videoUploadSection);
                    }

                    // ✅ Default state
                    hide(savePdfBtn);
                    hide(cancelPdfBtn);
                    hide(saveVideoBtn);
                    hide(cancelVideoBtn);

                    show(editPdfBtn);
                    show(editVideoBtn);

                } catch (e) {
                    console.error(e);
                }
            };

            // ✅ Handle PDF file select
            dropZone.addEventListener("click", () => fileInput.click());
            fileInput.addEventListener("change", e => {
                const f = e.target.files[0];
                if (f && f.type === "application/pdf") {
                    selectedFile = f;
                    pdfViewer.src = URL.createObjectURL(f);
                    show(pdfPreviewContainer);
                    show(savePdfBtn);
                    show(cancelPdfBtn);
                    hide(editPdfBtn);
                }
            });

            // ✅ Save handler
            async function saveMaterial(type) {
                const ctx = window._materialContext;

                const fd = new FormData();
                fd.append("launch_id", ctx.launch_id);
                fd.append("topic_id", ctx.topic_id);
                fd.append("co_id", ctx.co_id);

                if (type === "pdf") {
                    fd.append("learning_type", "pdf");
                    fd.append("file", selectedFile);
                } else {
                    fd.append("learning_type", "video");
                    fd.append("url", youtubeLinkInput.value.trim());
                }

                await fetch("api/upload_module.php", {
                    method: "POST",
                    body: fd
                });
                await loadModulesForCurrentContext();
            }

            // ✅ PDF buttons
            editPdfBtn.onclick = () => {
                hide(staticNotesSection);
                show(notesUploadSection);
                show(savePdfBtn);
                show(cancelPdfBtn);
                hide(editPdfBtn);
            };

            savePdfBtn.onclick = () => saveMaterial("pdf");
            cancelPdfBtn.onclick = loadModulesForCurrentContext;

            // ✅ Video buttons
            editVideoBtn.onclick = () => {
                hide(staticVideoSection);
                show(videoUploadSection);
                show(saveVideoBtn);
                show(cancelVideoBtn);
                hide(editVideoBtn);
            };

            saveVideoBtn.onclick = () => {
                if (!youtubeLinkInput.value.trim()) return alert("Paste YouTube link");
                saveMaterial("video");
            };

            cancelVideoBtn.onclick = loadModulesForCurrentContext;

            // ✅ Show save when typing YouTube
            youtubeLinkInput.addEventListener("input", () => {
                if (youtubeLinkInput.value.trim()) {
                    show(saveVideoBtn);
                    show(cancelVideoBtn);
                }
            });

            // ✅ Load content when selecting outcome
            document.addEventListener("click", async e => {
                const card = e.target.closest(".outcome-card");
                if (!card) return;

                setMaterialContext({
                    launch_id: card.dataset.launchId,
                    topic_id: card.dataset.topicId,
                    co_id: card.dataset.outcomeId
                });

                document.getElementById("courseOutcomeList").style.display = "none";
                document.getElementById("outcomeDetail").style.display = "block";

                await loadModulesForCurrentContext();
            });

        })();
    </script>




    <!-- Add / Upload Assignments -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("assignment-submit-faculty");

            form.addEventListener("submit", async function (e) {
                e.preventDefault();

                const ctx = window._materialContext || {};
                if (!ctx.launch_id || !ctx.topic_id || !ctx.co_id) {
                    alert("❗ Missing context (launch/topic/co)");
                    return;
                }

                const fd = new FormData(form);
                fd.append("launch_id", ctx.launch_id);
                fd.append("topic_id", ctx.topic_id);
                fd.append("co_id", ctx.co_id);

                const btn = form.querySelector("button[type='submit']");
                btn.disabled = true;
                btn.innerHTML = "⏳ Uploading...";

                try {
                    const res = await fetch("api/upload_assignment.php", {
                        method: "POST",
                        body: fd
                    });
                    const json = await res.json();

                    if (json.status === "success") {
                        alert("✅ " + json.message);
                        setTimeout(async () => {
                            await loadAssignmentForCurrentContext();
                        }, 500);
                        form.reset();
                    } else {
                        alert("⚠️ " + (json.message || "An unknown error occurred."));
                    }
                } catch (err) {
                    console.error(err);
                    alert("🚫 Network or server error. Please try again.");
                } finally {
                    btn.disabled = false;
                    btn.innerHTML = "Submit";
                }
            });
        });


        // ✅ Load assignment for currently selected CO/topic/launch
        async function loadAssignmentForCurrentContext() {
            const ctx = window._materialContext || {};
            if (!ctx.launch_id || !ctx.topic_id || !ctx.co_id) return;

            console.log("🔄 Loading assignment for:", ctx);

            // Clear previous data
            const titleInput = document.querySelector('input[name="title"]');
            const instructionInput = document.querySelector('textarea[name="instruction"]');
            const marksSelect = document.querySelector('select[name="marks"]');
            const dueDateInput = document.querySelector('input[name="due_date"]');

            titleInput.value = '';
            instructionInput.value = '';
            marksSelect.value = '';
            dueDateInput.value = '';

            document.querySelectorAll(".view-assignment-pdf").forEach(btn => btn.remove());

            // Fetch latest data
            const res = await fetch(
                `api/get_assignments.php?launch_id=${ctx.launch_id}&topic_id=${ctx.topic_id}&co_id=${ctx.co_id}&_=${Date.now()}`, {
                cache: "no-store"
            }
            );

            const json = await res.json();
            console.log("📦 Assignment response:", json);

            if (json.status !== "success" || !json.data) {
                console.log("⚠️ No assignment found for this CO");
                return;
            }

            const a = json.data;

            // Fill values
            titleInput.value = a.title || '';
            instructionInput.value = a.instruction || '';
            marksSelect.value = a.marks || '';
            dueDateInput.value = a.due_date ? a.due_date.split(" ")[0] : '';

            // PDF view button
            if (a.notes) {
                const viewBtn = document.createElement("button");
                viewBtn.type = "button";
                viewBtn.className = "btn btn-outline-primary btn-sm mt-2 view-assignment-pdf";
                viewBtn.innerHTML = "📄 View Uploaded PDF";
                viewBtn.onclick = () => openPdfPreview(`${a.notes}`);
                document.querySelector('input[name="file"]').insertAdjacentElement("afterend", viewBtn);
            }
        }


        // ✅ Open PDF in new tab instead of pdf.js viewer
        function openPdfPreview(filename) {
            // Detect environment automatically
            let baseUrl;

            if (window.location.hostname === "localhost") {
                // 🖥 Local environment
                baseUrl = "http://localhost/workingproject/liveprojectlms/uploads/assignments/";
            } else {
                // 🌐 Live server
                baseUrl = "https://lms.saveetha.com/uploads/assignments/";
            }

            // Construct full URL
            const fullUrl = baseUrl + encodeURIComponent(filename);

            // Open in new tab
            window.open(fullUrl, "_blank");
        }


        // ✅ On clicking any outcome card
        document.addEventListener("click", async e => {
            const card = e.target.closest(".outcome-card");
            if (!card) return;

            const coId = card.dataset.outcomeId;
            const topicId = card.dataset.topicId;
            const launchId = card.dataset.launchId;

            // Store context globally
            window.setMaterialContext({
                launch_id: launchId,
                topic_id: topicId,
                co_id: coId
            });

            console.log("📘 Context set:", window._materialContext);

            document.getElementById("courseOutcomeList").style.display = "none";
            document.getElementById("outcomeDetail").style.display = "block";

            // Load content
            await loadModulesForCurrentContext();
            await loadAssignmentForCurrentContext();
        });
    </script>


    <!-- question -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const questionCountInput = document.getElementById('questionCount');
            const generateBtn = document.getElementById('generateBtn');
            const questionsContainer = document.getElementById('questionsContainer');
            const submitBtn = document.getElementById('submitPracticeBtn');
            const editBtn = document.getElementById('editPracticeBtn');
            const saveBtn = document.getElementById('savePracticeBtn');
            const cancelBtn = document.getElementById('cancelPracticeBtn');
            const buttonsDiv = document.getElementById('practiceButtons');

            // ✅ Generate new questions
            generateBtn.addEventListener('click', () => {
                const count = parseInt(questionCountInput.value);
                if (!count || count < 1 || count > 50) {
                    alert("Please enter a valid number between 1 and 50");
                    return;
                }

                questionsContainer.innerHTML = "";
                for (let i = 1; i <= count; i++) {
                    const q = createQuestionCard(i);
                    questionsContainer.appendChild(q.element);
                }

                buttonsDiv.style.display = 'flex';
                submitBtn.style.display = 'inline-block';
                editBtn.style.display = 'none';
                saveBtn.style.display = 'none';
                cancelBtn.style.display = 'none';
            });

            // ✅ Create Question Card
            function createQuestionCard(index, questionText = "", options = {}, correct = "", pq_id = null) {
                const card = document.createElement('div');
                card.className = "border rounded shadow-sm p-3 mb-3 bg-white";

                card.innerHTML = `
        <input type="hidden" class="pq-id" value="${pq_id || ''}">
        <div class="d-flex justify-content-between mb-2">
            <h6 class="fw-semibold mb-0">Question ${index}</h6>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control question-input" placeholder="Enter question text" value="${questionText}" required>
        </div>

        <div class="row g-2">
            ${['A', 'B', 'C', 'D'].map(opt => `
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-check me-2">
                    <input class="form-check-input" tabindex="-1" type="radio" name="correct_${index}" value="${opt}" ${correct === opt ? 'checked' : ''}>
                </div>
                <input type="text" class="form-control option-input" data-opt="${opt}" placeholder="Option ${opt}" value="${options[opt] || ''}" required>
            </div>`).join('')}
        </div>
        `;

                // card.querySelector('.removeQuestionBtn').addEventListener('click', () => card.remove());
                return {
                    element: card
                };
            }

            // ✅ Read all questions (with pq_id)
            function readCurrentQuestions() {
                const validData = [];
                let skipped = 0;

                document.querySelectorAll('#questionsContainer .border').forEach((card, i) => {
                    const pq_id = card.querySelector('.pq-id').value || null;
                    const questionText = card.querySelector('.question-input').value.trim();
                    const options = {};
                    let filled = 0;
                    card.querySelectorAll('.option-input').forEach(inp => {
                        options[inp.dataset.opt] = inp.value.trim();
                        if (inp.value.trim()) filled++;
                    });
                    const correct = card.querySelector('.form-check-input:checked')?.value || "";

                    if (questionText && filled === 4 && correct) {
                        validData.push({
                            pq_id,
                            question: questionText,
                            options,
                            answer: correct
                        });
                    } else {
                        skipped++;
                    }
                });

                if (skipped > 0) alert(`⚠️ ${skipped} incomplete question(s) skipped.`);
                return validData;
            }

            // ✅ Submit new questions
            submitBtn.addEventListener('click', async () => {
                const ctx = window._materialContext || {};
                const questions = readCurrentQuestions();
                if (!questions.length) return alert("Please fill at least one valid question.");

                const fd = new FormData();
                fd.append('launch_id', ctx.launch_id);
                fd.append('topic_id', ctx.topic_id);
                fd.append('co_id', ctx.co_id);
                fd.append('questions', JSON.stringify(questions));

                const res = await fetch('api/insert_practice.php', {
                    method: 'POST',
                    body: fd
                });
                const json = await res.json();
                alert(json.message);
                if (json.status === 'success') await loadPracticeQuestions();
            });

            // ✅ Edit
            editBtn.addEventListener('click', () => {
                enableInputs(true);
                editBtn.style.display = 'none';
                saveBtn.style.display = 'inline-block';
                cancelBtn.style.display = 'inline-block';
            });

            // ✅ Save (Update)
            saveBtn.addEventListener('click', async () => {
                const ctx = window._materialContext || {};
                const updated = readCurrentQuestions();
                if (!updated.length) return alert("No valid questions to update.");

                const fd = new FormData();
                fd.append('launch_id', ctx.launch_id);
                fd.append('topic_id', ctx.topic_id);
                fd.append('co_id', ctx.co_id);
                fd.append('questions', JSON.stringify(updated));

                const res = await fetch('api/update_practice.php', {
                    method: 'POST',
                    body: fd
                });
                const json = await res.json();
                alert(json.message);
                if (json.status === 'success') await loadPracticeQuestions();
            });

            // ✅ Cancel
            cancelBtn.addEventListener('click', loadPracticeQuestions);

            // ✅ Load Existing Questions
            async function loadPracticeQuestions() {
                const ctx = window._materialContext || {};
                const res = await fetch(`api/get_practice.php?launch_id=${ctx.launch_id}&topic_id=${ctx.topic_id}&co_id=${ctx.co_id}`);
                const json = await res.json();

                questionsContainer.innerHTML = "";
                if (json.status === 'success' && json.data.length > 0) {
                    json.data.forEach((q, i) => {
                        const options = JSON.parse(q.options || "{}");
                        const card = createQuestionCard(i + 1, q.question, options, q.answer, q.pq_id);
                        questionsContainer.appendChild(card.element);
                    });
                    buttonsDiv.style.display = 'flex';
                    submitBtn.style.display = 'none';
                    editBtn.style.display = 'inline-block';
                    saveBtn.style.display = 'none';
                    cancelBtn.style.display = 'none';
                    enableInputs(false);
                } else {
                    buttonsDiv.style.display = 'none';
                }
            }

            function enableInputs(enable) {
                document.querySelectorAll('#questionsContainer input').forEach(inp => inp.disabled = !enable);
            }

            // Auto-load when Practice tab opens
            document.addEventListener('click', e => {
                if (e.target.closest('#practice-tab')) loadPracticeQuestions();
            });
        });
    </script>

    <!-- course settings -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const btnSave = document.getElementById("btnSaveCourse");
            const btnReset = document.getElementById("btnResetCourse");

            btnSave.addEventListener("click", () => {
                const urlParams = new URLSearchParams(window.location.search);
                const launch_id = urlParams.get("launch_id");

                if (!launch_id) {
                    alert("Launch ID missing in URL");
                    return;
                }

                let formData = new FormData();
                formData.append("launch_id", launch_id);
                formData.append("course_code", document.getElementById('courseCode-form').value.trim());
                formData.append("course_name", document.getElementById('courseName-form').value.trim());
                formData.append("department", document.getElementById('department-form').value.trim());
                formData.append("credit_hours", document.getElementById('creditHours-form').value.trim());
                formData.append("course_description", document.getElementById('courseDescription-form').value.trim());
                formData.append("schedule", document.getElementById('schedule-form').value.trim());
                formData.append("location", document.getElementById('location-form').value.trim());
                formData.append("prerequisites", document.getElementById('prerequisites-form').value.trim());
                formData.append("coordinator_name", document.getElementById('coordinatorName-form').value.trim());
                formData.append("email", document.getElementById('email-form').value.trim());
                formData.append("phone", document.getElementById('phone-form').value.trim());

                // ✅ profile image file
                const fileInput = document.getElementById("profile");
                if (fileInput.files.length > 0) {
                    formData.append("profile_image", fileInput.files[0]);
                }

                btnSave.disabled = true;
                btnSave.textContent = "Saving...";

                fetch("api/update_faculty_course.php", {
                    method: "POST",
                    body: formData
                })
                    .then(res => res.json())
                    .then(response => {
                        if (response.status === "success") {
                            alert("✅ " + response.message);
                        } else {
                            alert("❌ " + response.message);
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert("⚠️ Failed to update. Try again.");
                    })
                    .finally(() => {
                        btnSave.disabled = false;
                        btnSave.textContent = "Save Changes";
                    });
            });


            btnReset.addEventListener("click", () => {
                document.getElementById("topicDetailForm").reset();
            });
        });
    </script>


    <!-- student course progress -->
    <script>
        function loadStudentProgress() {
            const launchId = new URLSearchParams(window.location.search).get("launch_id");
            const tbody = $("#studentProgressTable");

            tbody.html(`<tr><td colspan='4' class='text-center'>Loading...</td></tr>`);

            fetch(`api/faculty_get_student_progress.php?launch_id=${launchId}`)
                .then(res => res.json())
                .then(res => {
                    if (res.status !== 200 || res.students.length === 0) {
                        tbody.html(`<tr><td colspan='4' class='text-center text-muted'>No students found</td></tr>`);
                        return;
                    }

                    let html = "";
                    res.students.forEach(std => {
                        const initials = std.name.split(" ").map(w => w[0]).join("").toUpperCase().slice(0, 2);
                        const progressColor = std.progress >= 75 ? "bg-success" : std.progress >= 40 ? "bg-warning" : "bg-danger";

                        html += `
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="rounded-circle text-white d-flex align-items-center justify-content-center me-2"
                                style="width:35px; height:35px; background:linear-gradient(rgb(75,147,213), rgb(21,103,186)); font-weight:bold;">
                                ${initials}
                            </div>
                            <div>
                                <div>${std.name}</div>
                                <small class="text-muted">${std.email}</small>
                            </div>
                        </div>
                    </td>
                    <td>${std.reg_no}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="progress flex-grow-1 me-2" style="height:8px;">
                                <div class="progress-bar ${progressColor}" style="width:${std.progress}%"></div>
                            </div>
                            <small>${std.progress}%</small>
                        </div>
                    </td>
                  
                </tr>`;
                    });
                    //   <td>
                    //     <span class="badge bg-success-subtle text-success">${std.attendance}%</span>
                    // </td>

                    tbody.html(html);
                })
                .catch(() => {
                    tbody.html(`<tr><td colspan='4' class='text-danger text-center'>Error loading data</td></tr>`);
                });
        }

        // 🚀 Auto-load when page opens
        $(document).ready(function () {
            loadStudentProgress();
        });
    </script>

</body>

</html>