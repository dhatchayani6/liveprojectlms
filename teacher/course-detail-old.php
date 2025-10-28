<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="stylesheet/courses.css">
    <!-- vidoplayer.js library -->
    <!-- Include Plyr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.css" />
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

        #video .ratio::before {
            padding-top: 0;
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

    <!-- Faculty Profile -->
    <div class="container  p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Manage: Introduction to
                Data Science
            </h5>

            <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
            <a href="../index.php"><button class="btn d-flex align-items-center logout-btn gap-2">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span> </button></a>
        </div>


        <div class="content-scroll bg-light">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                        Dashboard</a>
                </h6>
                <!-- Committee Report button (hidden by default) -->
                <button id="committeeReportBtn" class="d-none">
                    <i class="bi bi-file-bar-graph"></i> Committee Report
                </button>
            </div>

            <div class="assignmnent p-3" id="assignments-slider">

                <!-- asiignment1 -->
                <div class="assignment-detail">
                    <div class="mb-3">
                        <div class="p-3 rounded border bg-gray"
                            style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                            <h4 class="teacher-courses-titile">CS1234: Introduction to Data Science</h4>

                            <p class="mb-0">This course introduces the fundamental concepts of data science, including
                                data collection, analysis, and visualization.
                            </p>
                            <div
                                class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center pt-3">
                                <small class="text-muted">35 Students</small>
                                <small class="text-muted">Mon, Wed 10:00 - 11:30 AM</small>
                            </div>

                        </div>
                    </div>
                    <div class="details-ass border rounded">
                        <!-- bootstrap tab -->
                        <ul class="nav nav-tabs justify-content-between" id="assignmentTabs" role="tablist"
                            style="background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="add-tab" data-bs-toggle="tab"
                                    data-bs-target="#overview" type="button" role="tab" aria-selected="true">
                                    OverView
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="materials-tab" data-bs-toggle="tab"
                                    data-bs-target="#materials" type="button" role="tab" aria-selected="false">
                                    Materials
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="students-tab" data-bs-toggle="tab"
                                    data-bs-target="#students" type="button" role="tab" aria-selected="false">
                                    Students
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
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
                                                    <strong style="font-weight: 500;">CS1234</strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Course Name:</small><br>
                                                    <strong style="font-weight: 500;">Introduction to Data
                                                        Science</strong>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Department:</small><br>
                                                    <strong style="font-weight: 500;">Computer Science</strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Credit Hours:</small><br>
                                                    <strong style="font-weight: 500;">3</strong>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Schedule:</small><br>
                                                    <strong style="font-weight: 500;">Mon, Wed 10:00 - 11:30 AM</strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Location:</small><br>
                                                    <strong style="font-weight: 500;">Science Building, Room
                                                        301</strong>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <small class="text-muted">Description:</small><br>
                                                    <span>
                                                        This course introduces the fundamental concepts of data science,
                                                        including data collection, analysis, and visualization.
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border rounded mb-3">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="    font-size: 1rem;">Course Goals</h5>
                                        </div>
                                        <div class="p-3">
                                            <ul>
                                                <li><small class="text-muted">Understand core data science concepts and
                                                        methodologies</small></li>
                                                <li><small class="text-muted">Develop proficiency in data collection,
                                                        cleaning,
                                                        and preprocessing</small></li>
                                                <li><small class="text-muted">Apply statistical methods to extract
                                                        insights from
                                                        data</small></li>
                                                <li><small class="text-muted">Create effective data visualizations to
                                                        communicate findings</small></li>
                                                <li><small class="text-muted">Implement basic machine learning
                                                        algorithms for
                                                        data analysis</small></li>
                                            </ul>

                                        </div>
                                    </div>

                                    <div class="border rounded mb-3">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="font-size: 1rem;">Committee Recommendations
                                            </h5>
                                        </div>
                                        <div class="p-3">
                                            <small class="text-muted">The following recommendations were made by the
                                                course
                                                committee to improve course delivery and student outcomes:

                                            </small>
                                            <ol class="list-unstyled pt-2">
                                                <li class="mb-2 d-flex align-items-start">
                                                    <span class="badge bg-blue text-blue  me-2 rounded-circle"
                                                        style="width: 24px; height: 24px; ">1</span>
                                                    <span class="text-muted small">Increase hands-on lab sessions from 1
                                                        to 2
                                                        hours per week</span>
                                                </li>
                                                <li class="mb-2 d-flex align-items-start">
                                                    <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                        style="width: 24px; height: 24px;">2</span>
                                                    <span class="text-muted small">Incorporate more real-world datasets
                                                        from
                                                        industry partners</span>
                                                </li>
                                                <li class="mb-2 d-flex align-items-start">
                                                    <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                        style="width: 24px; height: 24px;">3</span>
                                                    <span class="text-muted small">Add a mid-term group project to
                                                        enhance
                                                        collaborative skills</span>
                                                </li>
                                                <li class="mb-2 d-flex align-items-start">
                                                    <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                        style="width: 24px; height: 24px;">4</span>
                                                    <span class="text-muted small">Update statistical methods section to
                                                        include
                                                        Bayesian approaches</span>
                                                </li>
                                                <li class="mb-3 d-flex align-items-start">
                                                    <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                        style="width: 24px; height: 24px;">5</span>
                                                    <span class="text-muted small">Include guest lectures from industry
                                                        practitioners</span>
                                                </li>
                                            </ol>

                                            <div class="d-flex justify-content-end">
                                                <button class="view-committe rounded p-2 font-bold"><small
                                                        class="text-muted "
                                                        style="font-weight: 500;color:white !important">View Full
                                                        Committee
                                                        Report</small></button>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="border rounded mb-3">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="font-size: 1rem;">Learning Outcomes & Mappings</h5>
                                        </div>

                                        <!-- Body -->
                                        <div class="p-3">
                                            <!-- Course Outcomes List -->
                                            <div class="mb-3">
                                                <h6>Course Outcomes (COs)</h6>
                                                <ul class="list-unstyled">
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">CO1</span><small>Define
                                                            and
                                                            explain key
                                                            concepts in data science</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">CO2</span><small>Apply
                                                            appropriate
                                                            data
                                                            collection and preprocessing techniques</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">CO3</span><small>Perform
                                                            exploratory
                                                            data
                                                            analysis using statistical methods</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">CO4</span><small>Develop
                                                            and
                                                            evaluate basic
                                                            machine learning models</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">CO5</span><small>Communicate
                                                            insights
                                                            derived from data analysis effectively</small></li>
                                                </ul>
                                            </div>

                                            <!-- Legend -->
                                            <div class="mb-2">
                                                <span class="badge bg-success"
                                                    style="font-weight: 400 !important;">Strong</span>
                                                <span class="badge bg-blue text-blue"
                                                    style="font-weight: 400 !important;">Moderate</span>
                                                <span class="badge bg-warning text-dark"
                                                    style="font-weight: 400 !important;">Slight</span>
                                            </div>

                                            <!-- CO-PO Mapping Table -->
                                            <div class="table-responsive">
                                                <table class="table table-bordered align-middle text-center">
                                                    <thead class="border rounded bg-secondary ">
                                                        <tr class="bg-secondary text-white">
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO / PO</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO1</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO2</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO3</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO4</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO5</small>
                                                            </th>
                                                            <th scope="col"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">PO6</small>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row" class="text-start"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO1</small>
                                                            </th>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td>
                                                                <div class="rounded"
                                                                    style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                                    -</div>
                                                            </td>
                                                            <td><span class="badge bg-warning">Slight</span></td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-start"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO2</small>
                                                            </th>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td>
                                                                <div class="rounded"
                                                                    style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                                    -</div>
                                                            </td>
                                                            <td><span class="badge bg-warning text-dark">Slight</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-start"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO3</small>
                                                            </th>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td>
                                                                <div class="rounded"
                                                                    style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                                    -</div>
                                                            </td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-start"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO4</small>
                                                            </th>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" class="text-start"><small class="text-muted"
                                                                    style="font-weight: 500 !important;">CO5</small>
                                                            </th>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td><span class="badge bg-warning ">Slight</span></td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-blue text-blue">Moderate</span>
                                                            </td>
                                                            <td><span class="badge bg-success">Strong</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="rounded border mb-3">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="font-size: 1rem;">Required Textbooks</h5>
                                        </div>

                                        <!-- Book List -->
                                        <div class="p-3">
                                            <!-- Book 1 -->
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <div class=" border rounded p-2 book"
                                                            style="background-color: #f0f0f0;">
                                                            <i class="bi bi-book"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>Introduction to Data Science with
                                                            Python</div>
                                                        <div class="text-muted small">By John Smith</div>
                                                        <div class="text-muted small">Academic Press, 2022</div>
                                                        <div class="text-muted small">ISBN: 978-1234567890</div>
                                                    </div>
                                                </div>
                                                <!-- <span class="badge bg-primary">Required</span> -->
                                                <small class="btn-blue">Required</small>
                                            </div>

                                            <hr class="my-2" />

                                            <!-- Book 2 -->
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div class="d-flex">
                                                    <div class="me-3">
                                                        <div class="border rounded p-2 book"
                                                            style="background-color: #f0f0f0;">
                                                            <i class="bi bi-book"></i>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div>Statistical Methods for Data Analysis
                                                        </div>
                                                        <div class="text-muted small">By Emily Chen</div>
                                                        <div class="text-muted small">Tech Publications, 2021</div>
                                                        <div class="text-muted small">ISBN: 978-0987654321</div>
                                                    </div>
                                                </div>
                                                <!-- <span class="badge bg-light text-dark border">Optional</span> -->
                                                <small class="text-muted btn-gray">Optional</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Materials Content -->
                            <div class="tab-pane fade" id="materials" role="tabpanel" aria-labelledby="materials-tab">
                                <div class="p-3">

                                    <!-- Course Topics Section -->
                                    <div id="courseTopicsSection">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6>Course Topics</h6>
                                            <button class="add-topic-btn"><i class="bi bi-plus"></i> Add Topic</button>
                                        </div>

                                        <!-- Create New Topic Form -->
                                        <div id="createTopicForm" class="p-2" style="display: none;">
                                            <div class="bg-secondary text-dark p-3 rounded-top">
                                                <h5 class="mb-0" style="font-size: 1rem;">Create New Topic</h5>
                                            </div>
                                            <div class="p-3 border rounded">
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <label for="topicTitle" class="form-label">Topic Title</label>
                                                        <input type="text" class="form-control" id="topicTitle"
                                                            placeholder="Enter the topic title">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="topicDescription" class="form-label">Topic
                                                            Description</label>
                                                        <textarea class="form-control" id="topicDescription" rows="4"
                                                            placeholder="Enter the topic description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="p-2">
                                                    <div class="d-flex justify-content-end gap-2">
                                                        <button
                                                            class="cancel-btn btn btn-secondary rounded">Cancel</button>
                                                        <button class="create-btn btn btn-primary rounded">Create
                                                            Topic</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Topic Cards -->
                                        <div class="p-3">
                                            <div class="topic-card rounded border p-4 mb-3"
                                                style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%); cursor:pointer;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6>Data Collection and Preprocessing</h6>
                                                    <button class="outcomes-btn"><small>4 outcomes</small></button>
                                                </div>
                                                <small style="color:rgb(75 85 99)">Methods for gathering and cleaning
                                                    data for analysis</small>
                                            </div>

                                            <div class="topic-card rounded border p-4"
                                                style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%); cursor:pointer;">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h6>Exploratory Data Analysis</h6>
                                                    <button class="outcomes-btn"><small>3 outcomes</small></button>
                                                </div>
                                                <small style="color:rgb(75 85 99)">Techniques for initial data
                                                    investigation and visualization</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enrolled Students Section (Hidden by default) -->
                                    <div id="enrolledStudentsSection" style="display:none;">
                                        <!-- Header -->
                                        <div class="d-flex align-items-center mb-3" style="gap:30%">
                                            <button id="backToTopics" class="btn btn-sm text-primary">← Back to
                                                Topics</button>
                                            <h6 class="mb-0">Introduction to Data Science</h6>
                                        </div>

                                        <!-- Overview -->
                                        <div class="mb-3">
                                            <div class="p-3 rounded border"
                                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                                <small class="text-muted">Overview of data science concepts and
                                                    methodologies</small>
                                            </div>
                                        </div>



                                        <!-- Course Outcome Header -->
                                        <div class="outcome-header">
                                            <div class="d-flex align-items-center mb-3 justify-content-between p-3">
                                                <h6 class="mb-0">Course Outcome</h6>
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
                                                <div class="row">
                                                    <div class="col-12 mb-3">
                                                        <label for="outcomeTitle" class="form-label">Outcome
                                                            Title</label>
                                                        <input type="text" class="form-control" id="outcomeTitle"
                                                            placeholder="Enter the outcome title">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="courseoutcomeDescription" class="form-label">Outcome
                                                            Description</label>
                                                        <textarea class="form-control" id="courseoutcomeDescription"
                                                            rows="4"
                                                            placeholder="Enter the outcome description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="p-2">
                                                    <div class="d-flex justify-content-end gap-2">
                                                        <button class="btn cancel-course-outcome-btny rounded"
                                                            id="cancelOutcomeBtn">Cancel</button>
                                                        <button class="btn create-course-outcome-btn rounded"
                                                            id="createOutcomeBtn">Create Outcome</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Outcome Cards -->
                                        <div id="courseOutcomeList">
                                            <div class="card outcome-card shadow-sm border rounded-3 mb-3"
                                                style="background: linear-gradient(#f9f9f9, #f0f0f0); cursor:pointer;">
                                                <div class="card-body p-3">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <h6 class="card-title mb-0 text-dark">Data Science Basics</h6>
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
                                                                <i class="bi bi-file-earmark-check text-success"></i>
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
                                            <div class="d-flex align-items-center mb-3" style="gap:30%;">
                                                <button id="backToOutcomes" class="btn btn-sm text-primary">← Back to
                                                    Outcomes</button>
                                                <h6 class="mb-0" id="outcomeTitle">Data Collection Methods</h6>
                                            </div>
                                            <div class="mb-3">
                                                <div class="p-3 rounded border bg-gray">
                                                    <small class="text-muted" id="outcomeDescription">
                                                        Students will be able to identify and apply various data
                                                        collection methods.
                                                    </small>
                                                </div>
                                            </div>

                                            <!-- Tabs -->
                                            <ul class="nav nav-tabs bg-secondary" id="outcomeTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="notes-tab" data-bs-toggle="tab"
                                                        data-bs-target="#notes" type="button">Notes</button>
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
                                                    <button class="nav-link" id="assignment-tab" data-bs-toggle="tab"
                                                        data-bs-target="#assignment" type="button">Assignments</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content border p-3">
                                                <div class="d-flex align-items-center justify-content-end mb-2 gap-2">
                                                    <button id="editBtn" class="btn edit-btn btn-sm">
                                                        <i class="bi bi-pencil"></i> Edit
                                                    </button>
                                                    <button id="saveBtn" class="btn save-btn btn-sm"
                                                        style="display:none;">Save</button>
                                                    <button id="cancelBtn" class="btn outcome-cancel-btn btn-sm"
                                                        style="display:none;">Cancel</button>
                                                </div>

                                                <!-- Notes Tab -->
                                                <div class="tab-pane fade show active pt-2" id="notes">

                                                    <!-- 📘 Static Notes Section -->
                                                    <div class="border rounded p-3 mb-4 bg-light shadow-sm">
                                                        <h6 class="fw-semibold mb-3">📘 Static Notes</h6>
                                                        <div class="ratio ratio-16x9 border rounded shadow-sm">
                                                            <iframe src="../pdf/LARAVEL BASICS FOM SCRATCH.pdf"
                                                                width="100%" height="600" style="border:none;"
                                                                title="Static Notes PDF Viewer"></iframe>
                                                        </div>
                                                    </div>

                                                    <!-- 📂 Upload & Preview Notes Section -->
                                                    <div class="border rounded p-3 bg-light shadow-sm">
                                                        <h6 class="fw-semibold mb-3">📂 Upload & Preview Your Notes</h6>

                                                        <!-- Drag & Drop Upload -->
                                                        <div id="dropZone"
                                                            class="border border-primary rounded p-5 text-center mb-3"
                                                            style="cursor: pointer; background-color: #f8f9fa;">
                                                            <p class="mb-0 fw-semibold">📄 Drag & Drop your PDF here or
                                                                Click to Upload</p>
                                                            <input type="file" id="fileInput" accept="application/pdf"
                                                                style="display:none;">
                                                        </div>

                                                        <!-- PDF Preview Container -->
                                                        <div id="pdfPreviewContainer" class="rounded border p-3"
                                                            style="height: 600px; display:none;">
                                                            <iframe id="pdfViewer" width="100%" height="100%"
                                                                style="border:none;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- vide tab -->
                                                <div class="tab-pane fade show  pt-2" id="video">

                                                    <!-- 🎬 Static Video Section -->
                                                    <div class="border rounded p-3 mb-4 bg-light shadow-sm">
                                                        <h6 class="fw-semibold mb-3">📺 Static Video</h6>
                                                        <div class="ratio ratio-16x9">
                                                            <video id="staticVideo" playsinline controls
                                                                controlsList="nodownload noremoteplayback"
                                                                oncontextmenu="return false">
                                                                <source src="../video/someone.mp4" type="video/mp4" />
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                    </div>

                                                    <!-- 🎥 Drag & Drop Upload Section -->
                                                    <div class="border rounded p-3 bg-light shadow-sm">
                                                        <h6 class="fw-semibold mb-3">🎥 Upload & Preview Your Video</h6>

                                                        <div id="videoDropZone"
                                                            class="border border-primary rounded p-5 text-center mb-3"
                                                            style="cursor: pointer; background-color: #f8f9fa;">
                                                            <p class="mb-0 fw-semibold">📂 Drag & Drop your video here
                                                                or Click to Upload</p>
                                                            <input type="file" id="videoInput" accept="video/*"
                                                                style="display:none;">
                                                        </div>

                                                        <div id="videoPreviewContainer" class="ratio ratio-16x9"
                                                            style="display:none;">
                                                            <video id="uploadedVideo" playsinline controls
                                                                controlsList="nodownload noremoteplayback"
                                                                oncontextmenu="return false">
                                                                <source type="video/mp4" />
                                                            </video>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- practice tab -->
                                                <div class="tab-pane fade" id="practice">
                                                    <div class="p-3" id="practiceSection">
                                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                                            <div class="p-2 border-bottom bg-secondary text-dark">
                                                                Practice Material
                                                            </div>
                                                            <div class="p-3">

                                                                <!-- CO Level Selection -->
                                                                <div class="mb-3 d-flex justify-content-end gap-3">
                                                                    <label for="coLevel"
                                                                        class="form-label fw-semibold mb-0">Select CO
                                                                        Level</label>
                                                                    <select id="coLevel" class="border rounded">
                                                                        <option value="1">CO1</option>
                                                                        <option value="2">CO2</option>
                                                                        <option value="3">CO3</option>
                                                                        <option value="4">CO4</option>
                                                                        <option value="5">CO5</option>
                                                                    </select>
                                                                </div>

                                                                <!-- Questions Container -->
                                                                <div id="questionsContainer"></div>

                                                                <!-- Submit Button -->
                                                                <div class="justify-content-center mt-3"
                                                                    id="submitContainer" style="display:none;">
                                                                    <button type="submit"
                                                                        class="btn btn-gradient-glossy">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Assignment Tab -->
                                                <div class="tab-pane fade pt-1" id="assignment">
                                                    <div id="assignmentDisplay" class="rounded border p-3">
                                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                                            <div class="p-2 border-bottom bg-secondary text-dark">
                                                                Assignment Material
                                                            </div>
                                                            <div class="p-3">
                                                                <div class="form-div">
                                                                    <form id="assignment-approval-faculty"
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
                                                                                        class="form-control" name="file"
                                                                                        accept=".pdf" required>
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
                                                                                        <option value="10">10</option>
                                                                                        <option value="20">20</option>
                                                                                        <option value="25">25</option>
                                                                                        <option value="50">50</option>
                                                                                        <option value="100">100</option>
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
                                                                                class="btn btn-gradient-glossy">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <ol id="assignmentEdit" class="mb-0" style="display:none;">
                                                        <li>What are the primary methods for collecting data?</li>
                                                        <li>What ethical considerations should be taken into account
                                                            during data collection?</li>
                                                        <li>How do you determine the appropriate data collection method
                                                            for a given problem?</li>
                                                    </ol> -->

                                                </div>

                                            </div>



                                        </div>
                                    </div>





                                </div>
                            </div>

                            <!-- Students Content -->

                            <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                                <div class="p-4">
                                    <h6 class="mb-4">Enrolled Students</h6>
                                    <div class="rounded border">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="font-size: 1rem;">Students (5)</h5>
                                        </div>

                                        <!-- Body -->
                                        <div class="p-3">
                                            <table class="table align-middle mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Student</th>
                                                        <th>Registration</th>
                                                        <th>Progress</th>
                                                        <th>Attendance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Student 1 -->
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                                    style="width: 30px;height: 30px;background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);">
                                                                    AJ
                                                                </div>
                                                                <div>
                                                                    <div>Alex Johnson</div>
                                                                    <small
                                                                        class="text-muted">alex.johnson@example.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SID2023001</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress flex-grow-1 me-2"
                                                                    style="height:8px;">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 78%"></div>
                                                                </div>
                                                                <small>78%</small>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-success-subtle text-success">92%</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Student 2 -->
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                                    style="width: 30px;height: 30px;background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);">
                                                                    EW
                                                                </div>
                                                                <div>
                                                                    <div>Emma Williams</div>
                                                                    <small
                                                                        class="text-muted">emma.williams@example.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SID2023002</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress flex-grow-1 me-2"
                                                                    style="height:8px;">
                                                                    <div class="progress-bar bg-primary"
                                                                        role="progressbar" style="width: 65%"></div>
                                                                </div>
                                                                <small>65%</small>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-primary-subtle text-primary">85%</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Student 3 -->
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                                    style="width: 30px;height: 30px;background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);">
                                                                    MB
                                                                </div>
                                                                <div>
                                                                    <div>Michael Brown</div>
                                                                    <small
                                                                        class="text-muted">michael.brown@example.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SID2023003</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress flex-grow-1 me-2"
                                                                    style="height:8px;">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 92%"></div>
                                                                </div>
                                                                <small>92%</small>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-success-subtle text-success">98%</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Student 4 -->
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                                    style="width: 30px;height: 30px;background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);">
                                                                    SD
                                                                </div>
                                                                <div>
                                                                    <div>Sophia Davis</div>
                                                                    <small
                                                                        class="text-muted">sophia.davis@example.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SID2023004</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress flex-grow-1 me-2"
                                                                    style="height:8px;">
                                                                    <div class="progress-bar bg-danger"
                                                                        role="progressbar" style="width: 45%"></div>
                                                                </div>
                                                                <small>45%</small>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge bg-danger-subtle text-danger">72%</span>
                                                        </td>
                                                    </tr>

                                                    <!-- Student 5 -->
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                                    style="width: 30px;height: 30px;background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);">
                                                                    JW
                                                                </div>
                                                                <div>
                                                                    <div>James Wilson</div>
                                                                    <small
                                                                        class="text-muted">james.wilson@example.com</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SID2023005</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress flex-grow-1 me-2"
                                                                    style="height:8px;">
                                                                    <div class="progress-bar bg-success"
                                                                        role="progressbar" style="width: 82%"></div>
                                                                </div>
                                                                <small>82%</small>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="badge bg-primary-subtle text-primary">88%</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Settings Content -->
                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="p-4">
                                    <!-- Header -->
                                    <div class="bg-secondary text-dark p-3 rounded-top">
                                        <h5 class="mb-0" style="font-size: 1rem;">Course Settings</h5>
                                    </div>
                                    <div class="p-3 border rounded">
                                        <div class="row g-3">
                                            <!-- Course Code -->
                                            <div class="col-md-6">
                                                <label for="courseCode" class="form-label">Course Code</label>
                                                <input type="text" class="form-control" id="courseCode" value="CS1234">
                                            </div>

                                            <!-- Course Name -->
                                            <div class="col-md-6">
                                                <label for="courseName" class="form-label">Course Name</label>
                                                <input type="text" class="form-control" id="courseName"
                                                    value="Introduction to Data Science">
                                            </div>

                                            <!-- Department -->
                                            <div class="col-md-6">
                                                <label for="department" class="form-label">Department</label>
                                                <input type="text" class="form-control" id="department"
                                                    value="Computer Science">
                                            </div>

                                            <!-- Credit Hours -->
                                            <div class="col-md-6">
                                                <label for="creditHours" class="form-label">Credit Hours</label>
                                                <input type="number" class="form-control" id="creditHours" value="3">
                                            </div>

                                            <!-- Course Description -->
                                            <div class="col-12">
                                                <label for="courseDescription" class="form-label">Course
                                                    Description</label>
                                                <textarea class="form-control" id="courseDescription"
                                                    rows="3">This course introduces the fundamental concepts of data science, including data collection, analysis, and visualization.</textarea>
                                            </div>

                                            <!-- Schedule -->
                                            <div class="col-md-6">
                                                <label for="schedule" class="form-label">Schedule</label>
                                                <input type="text" class="form-control" id="schedule"
                                                    value="Mon, Wed 10:00 - 11:30 AM">
                                            </div>

                                            <!-- Location -->
                                            <div class="col-md-6">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text" class="form-control" id="location"
                                                    value="Science Building, Room 301">
                                            </div>

                                            <!-- Prerequisites -->
                                            <div class="col-6">
                                                <label for="prerequisites" class="form-label">Prerequisites
                                                    (comma-separated)</label>
                                                <input type="text" class="form-control" id="prerequisites"
                                                    value="CS1101, MATH2200">
                                            </div>
                                        </div>

                                        <div class="pt-3">
                                            <div
                                                style="    background: rgba(255, 255, 255, 0.7);border: 1px solid #ecececee;">

                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <!-- Section Title -->
                                            <h6
                                                style="font-size: 0.875rem;line-height: 1.25rem;font-weight: 500;--tw-text-opacity: 1;color: rgb(55 65 81 / var(--tw-text-opacity, 1));">
                                                Course Coordinator Information</h6>

                                            <div class="row g-3">
                                                <!-- Coordinator Name -->
                                                <div class="col-md-6">
                                                    <label for="coordinatorName" class="form-label">Coordinator
                                                        Name</label>
                                                    <input type="text" class="form-control" id="coordinatorName"
                                                        value="Dr. Sarah Johnson">
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        value="sjohnson@university.edu">
                                                </div>

                                                <!-- Phone -->
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        value="555-123-4567">
                                                </div>

                                                <!-- Office Hours -->
                                                <div class="col-md-6">
                                                    <label for="officeHours" class="form-label">Office Hours</label>
                                                    <input type="text" class="form-control" id="officeHours"
                                                        value="Tues 2-4 PM, Thurs 1-3 PM">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button class="reset-btn rounded">Rest</button>
                                                <button class="save-changes rounded">Save Changes</button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="p-4">
                                    <!-- Header -->
                                    <div class="bg-secondary text-dark p-3 rounded-top">
                                        <h5 class="mb-0" style="font-size: 1rem;">Advanced Settings
                                        </h5>
                                    </div>
                                    <div class="p-3 border rounded">
                                        <h5 class="mb-2" style="font-size: 1rem;">Course Visibility </h5>
                                        <div class="d-flex gap-2">
                                            <input type="checkbox" name="" id="" style="width:17px">
                                            <small>Make course visible to students</small>
                                        </div>
                                        <small class="text-muted">When disabled, students won't be able to see or access
                                            this course.

                                        </small>
                                    </div>
                                    <div class="pt-3">
                                        <div
                                            style="    background: rgba(255, 255, 255, 0.7);border: 1px solid #ecececee;">
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h5 class="mb-2" style="font-size: 1rem;">Enrollment Options
                                        </h5>
                                        <div class="d-flex gap-2 mb-2">
                                            <input type="checkbox" name="" id="" style="width:17px" checked>
                                            <small>Allow student self-enrollment</small>
                                        </div>
                                        <div class="d-flex gap-2">
                                            <input type="checkbox" name="" id="" style="width:17px">
                                            <small>Require enrollment key
                                            </small>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div style="background: rgba(255, 255, 255, 0.7);border: 1px solid #ecececee;">
                                        </div>
                                    </div>

                                    <div class="p-3">
                                        <h5 class="mb-2" style="font-size: 0.9rem;">Danger Zone</h5>

                                        <div class="p-3 rounded border border-red-200 bg-red-200">
                                            <h5 class="mb-2 text-red-setting" style="font-size: 1rem;">Archive Course
                                            </h5>
                                            <div class="d-flex gap-2 flex-column">
                                                <small class="text-red-settings">
                                                    Archiving will make this course read-only and move it to the
                                                    archives
                                                    section.
                                                </small>
                                                <button class="archieve-btn rounded w-md-50 w-lg-25">Archieve
                                                    Course</button>
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
    </div>
    <!-- quuestion -->
    <script>
        const questionsContainer = document.getElementById('questionsContainer');
        const coLevelSelect = document.getElementById('coLevel');
        const submitContainer = document.getElementById('submitContainer');
        const totalQuestions = 10; // Number of questions

        coLevelSelect.addEventListener('change', () => {
            const coLevel = coLevelSelect.value;
            questionsContainer.innerHTML = ''; // Clear previous questions
            submitContainer.style.display = 'flex'; // Show submit button

            for (let i = 1; i <= totalQuestions; i++) {
                const questionHTML = `
        <div class="border rounded shadow-sm p-3 mb-3 bg-white">
            <div class="d-flex justify-content-between mb-2">
                <h6>CO Level: <span class="text-primary">CO${coLevel}</span></h6>
                <i class="bi bi-x-circle removeQuestionBtn" style="color:red;cursor:pointer;"></i>
            </div>

            <div class="d-flex justify-content-between align-items-center question-index mb-2 gap-2">
                <h6 class="mb-0">Q${i}</h6>
                <input type="text" name="question_text[${coLevel}][]" class="form-control" placeholder="Enter Question ${i}" required>
                <input type="hidden" name="co_level[${coLevel}][]" value="${coLevel}">
            </div>

            <div class="row g-2">
                ${['A', 'B', 'C', 'D'].map(opt => `
                <div class="col-md-6 d-flex align-items-center">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="radio" name="correct_answer_${coLevel}_${i}" value="${opt}" required>
                    </div>
                    <input type="text" class="form-control" name="option_${opt.toLowerCase()}[${coLevel}][]" placeholder="Option ${opt}" required>
                </div>
                `).join('')}
            </div>
        </div>`;

                const tempDiv = document.createElement('div');
                tempDiv.innerHTML = questionHTML;
                const questionElement = tempDiv.firstElementChild;

                // Remove question functionality
                questionElement.querySelector('.removeQuestionBtn').addEventListener('click', () => {
                    questionElement.remove();
                });

                questionsContainer.appendChild(questionElement);
            }
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
    <script>
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
    </script>

    <!-- Include Plyr JS -->
    <script src="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.polyfilled.js"></script>

    <!-- video tab -->
    <script>
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
                sources: [{ src: fileURL, type: file.type }]
            };

            // Show preview area
            videoPreviewContainer.style.display = "block";
            uploadedPlayer.play();
        }
    </script>




    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>