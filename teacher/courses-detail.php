<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
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
                            <h4 class="teacher-courses-titile" id="cCodename">CS1234: Introduction to Data Science</h4>

                            <!-- <p class="mb-0">This course introduces the fundamental concepts of data science, including
                                data collection, analysis, and visualization.
                            </p> -->
                            <div
                                class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center pt-3">
                                <small class="text-muted">0 Students</small>
                                <small class="text-muted" id="slt">Slot A</small>
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
                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="students-tab" data-bs-toggle="tab"
                                    data-bs-target="#students" type="button" role="tab" aria-selected="false">
                                    Students
                                </button>
                            </li> -->
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
                                                    <strong style="font-weight: 500;" id="CCode">CS1234</strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Course Name:</small><br>
                                                    <strong style="font-weight: 500;" id="cName">Introduction to Data
                                                        Science</strong>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Department:</small><br>
                                                    <strong style="font-weight: 500;">Medical</strong>
                                                </div>
                                                <div class="col-md-6">
                                                    <small class="text-muted">Credit Hours:</small><br>
                                                    <strong style="font-weight: 500;">3</strong>
                                                </div>
                                            </div>

                                            <div class="row mb-2">
                                                <div class="col-md-6">
                                                    <small class="text-muted">Schedule:</small><br>
                                                    <strong style="font-weight: 500;" id="schedule">Mon, Wed 10:00 - 11:30 AM</strong>
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

                                            <div class="mb-3">
                                                <h6>Program Outcomes (POs)</h6>
                                                <ul class="list-unstyled">
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO1</span><small>Demonstrate advanced understanding of educational process and planning.</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO2</span><small>Design and implement evidence-based teaching-learning strategies based on sound principles and theories.</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO3</span><small>Design and implement evidence-based assessment strategies based on sound principles.</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO4</span><small>Evaluate and design curriculum with all its components</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO5</span><small>Demonstrate attributes of leadership and quality educational management</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO6</span><small>Conduct and publish research in health professions education.</small></li>
                                                    <li class="py-1"><span class="badge bg-blue text-blue me-2"
                                                            style="font-size: 0.8rem;    font-weight: 500 !important;">PO7</span><small>Function as reflective practitioners and change agents.</small></li>
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
                                                <form id="topicForm">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="topicTitle" class="form-label">Topic Title</label>
                                                            <input type="text" class="form-control" id="topicTitle" name="topic_title"
                                                                placeholder="Enter the topic title" required>
                                                        </div>

                                                        <div class="col-12 mb-3">
                                                            <label for="topicDescription" class="form-label">Topic Description</label>
                                                            <textarea class="form-control" id="topicDescription" name="topic_description" rows="4"
                                                                placeholder="Enter the topic description" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="p-2">
                                                        <div class="d-flex justify-content-end gap-2">
                                                            <button type="button" class="cancel-btn btn btn-secondary rounded">Cancel</button>
                                                            <button type="submit" class="create-btn btn btn-primary rounded">Create Topic</button>
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
                                        <div class="d-flex align-items-center mb-3" style="gap:30%">
                                            <button id="backToTopics" class="btn btn-sm text-primary">← Back to
                                                Topics</button>
                                            <h6 class="mb-0" id="cTName">-</h6>
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
                                                <form id="frmCreateOutcome" autocomplete="off" onsubmit="return false;">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <label for="outcomeTitle" class="form-label">Outcome Title</label>
                                                            <input type="text" class="form-control" id="outcomeTitle" name="outcome_title" placeholder="Enter the outcome title" required>
                                                        </div>

                                                        <div class="col-12 mb-3">
                                                            <label for="courseoutcomeDescription" class="form-label">Outcome Description</label>
                                                            <textarea class="form-control" id="courseoutcomeDescription" name="course_description" rows="4" placeholder="Enter the outcome description" required></textarea>
                                                        </div>

                                                        <div class="col-6 mb-3">
                                                            <label for="poLevel" class="form-label">PO Level</label>
                                                            <select class="form-select" id="poLevel" name="po_level" required>
                                                                <option value="" disabled selected>Select PO</option>
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
                                                            <select class="form-select" id="poMap" name="po_Map" required>
                                                                <option value="" disabled selected>Select PO Mapping</option>
                                                                <option value="Slight">Slight</option>
                                                                <option value="Moderate">Moderate</option>
                                                                <option value="Strong">Strong</option>

                                                            </select>
                                                        </div>

                                                        <div class="col-12 mb-3">
                                                            <label for="poDescription" class="form-label">PO Description</label>
                                                            <textarea readonly class="form-control" id="poDescription" name="po_description" rows="4" placeholder="PO Description" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="p-2">
                                                        <div class="d-flex justify-content-end gap-2">
                                                            <button type="button" class="btn btn-secondary rounded" id="btnCancelOutcome">Cancel</button>
                                                            <button type="button" class="btn btn-primary rounded" id="btnCreateOutcome">Create Outcome</button>
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
                                                <h6 class="mb-0" id="out-come-Title">-</h6>
                                            </div>
                                            <div class="mb-3">
                                                <div class="p-3 rounded border bg-gray">
                                                    <small class="text-muted" id="outcomeDescription"> - </small>
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
                                                    <!-- 🟢 Static Notes (preview when stored PDF exists) -->
                                                    <div id="staticNotesSection" class="border rounded p-3 mb-4 bg-light shadow-sm" style="display:none;">
                                                        <h6 class="fw-semibold mb-3">📘 Static Notes</h6>
                                                        <div class="ratio ratio-16x9 border rounded shadow-sm">
                                                            <iframe id="staticPdfViewer" src="" width="100%" height="600" style="border:none;" title="Notes PDF Viewer"></iframe>
                                                        </div>
                                                    </div>

                                                    <!-- 📂 Upload & Preview Notes Section (shown only when no stored PDF) -->
                                                    <div id="notesUploadSection" class="border rounded p-3 bg-light shadow-sm" style="display:none;">
                                                        <h6 class="fw-semibold mb-3">📂 Upload & Preview Your Notes</h6>

                                                        <!-- Drag & Drop Upload -->
                                                        <div id="dropZone" class="border border-primary rounded p-5 text-center mb-3" style="cursor: pointer; background-color: #f8f9fa;">
                                                            <p class="mb-0 fw-semibold">📄 Drag & Drop your PDF here or Click to Upload</p>
                                                            <input type="file" id="fileInput" accept="application/pdf" style="display:none;">
                                                        </div>

                                                        <!-- PDF Preview Container (optional after upload) -->
                                                        <div id="pdfPreviewContainer" class="rounded border p-3" style="height: 600px; display:none;">
                                                            <iframe id="pdfViewer" width="100%" height="100%" style="border:none;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Video Tab -->
                                                <div class="tab-pane fade show pt-2" id="video">
                                                    <!-- Static Video preview (if stored) -->
                                                    <div id="staticVideoSection" class="border rounded p-3 mb-4 bg-light shadow-sm" style="display:none;">
                                                        <h6 class="fw-semibold mb-3">📺 Flipped Class</h6>
                                                        <div class="ratio ratio-16x9">
                                                            <video id="staticVideoPlayer" playsinline controls controlsList="nodownload noremoteplayback" oncontextmenu="return false">
                                                                <source id="staticVideoSource" src="" type="video/mp4" />
                                                            </video>
                                                        </div>
                                                    </div>

                                                    <!-- Upload video (shown if no stored video) -->
                                                    <div id="videoUploadSection" class="border rounded p-3 bg-light shadow-sm" style="display:none;">
                                                        <h6 class="fw-semibold mb-3">🎥 Upload & Preview Your Video</h6>

                                                        <div id="videoDropZone" class="border border-primary rounded p-5 text-center mb-3" style="cursor: pointer; background-color: #f8f9fa;">
                                                            <p class="mb-0 fw-semibold">📂 Drag & Drop your video here or Click to Upload</p>
                                                            <input type="file" id="videoInput" accept="video/*" style="display:none;">
                                                        </div>

                                                        <div id="videoPreviewContainer" class="ratio ratio-16x9" style="display:none;">
                                                            <video id="uploadedVideo" playsinline controls controlsList="nodownload noremoteplayback" oncontextmenu="return false">
                                                                <source type="video/mp4" />
                                                            </video>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- PRACTICE TAB -->

                                                <div class="tab-pane fade" id="practice">
                                                    <div class="p-3" id="practiceSection">
                                                        <div class="border rounded shadow-sm overflow-hidden bg-light">
                                                            <div class="p-2 border-bottom bg-secondary text-dark fw-semibold">
                                                                Practice Material
                                                            </div>
                                                            <div class="p-3">

                                                                <!-- 🧮 Question Count Input -->
                                                                <div class="mb-3 d-flex justify-content-end align-items-center gap-3">
                                                                    <label for="questionCount" class="form-label fw-semibold mb-0">
                                                                        Number of Questions (max 50)
                                                                    </label>
                                                                    <input type="number" id="questionCount" class="form-control w-auto" min="1" max="50"
                                                                        placeholder="Enter count">
                                                                    <button id="generateBtn" class="btn btn-sm btn-outline-primary">Generate</button>
                                                                </div>

                                                                <!-- Questions Container -->
                                                                <div id="questionsContainer"></div>

                                                                <!-- Buttons -->
                                                                <div class="d-flex justify-content-center mt-3 gap-2" id="practiceButtons" style="display:none;">
                                                                    <button id="submitPracticeBtn" class="btn btn-gradient-glossy btn-sm">🚀 Submit</button>
                                                                    <button id="editPracticeBtn" class="btn btn-outline-warning btn-sm" style="display:none;">✏️
                                                                        Edit</button>
                                                                    <button id="savePracticeBtn" class="btn btn-gradient-glossy btn-sm"
                                                                        style="display:none;">💾 Save</button>
                                                                    <button id="cancelPracticeBtn" class="btn btn-outline-secondary btn-sm"
                                                                        style="display:none;">❌ Cancel</button>
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
                                                                                        class="form-control" name="file"
                                                                                        accept=".pdf">
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
                                    <div class="p-3 border rounded" id="topicFormSection">
                                        <form id="topicDetailForm">
                                            <div class="row g-3">
                                                <!-- Course Code -->
                                                <div class="col-md-6">
                                                    <label for="courseCode" class="form-label">Course Code</label>
                                                    <input type="text" class="form-control" id="courseCode-form">
                                                </div>

                                                <!-- Course Name -->
                                                <div class="col-md-6">
                                                    <label for="courseName" class="form-label">Course Name</label>
                                                    <input type="text" class="form-control" id="courseName-form">
                                                </div>

                                                <!-- Department -->
                                                <div class="col-md-6">
                                                    <label for="department" class="form-label">Department</label>
                                                    <input type="text" class="form-control" id="department-form">
                                                </div>

                                                <!-- Credit Hours -->
                                                <div class="col-md-6">
                                                    <label for="creditHours" class="form-label">Credit Hours</label>
                                                    <input type="text" class="form-control" id="creditHours-form">
                                                </div>

                                                <!-- Course Description -->
                                                <div class="col-12">
                                                    <label for="courseDescription" class="form-label">Course
                                                        Description</label>
                                                    <textarea class="form-control" id="courseDescription-form"
                                                        rows="3">This course introduces the fundamental concepts of data science, including data collection, analysis, and visualization.</textarea>
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
                                                <div class="col-6">
                                                    <label for="prerequisites" class="form-label">Prerequisites
                                                        (comma-separated)</label>
                                                    <input type="text" class="form-control" id="prerequisites-form">
                                                </div>
                                            </div>
                                        </form>

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
                                                    <input type="text" class="form-control" id="coordinatorName-form">
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="email-form">
                                                </div>

                                                <!-- Phone -->
                                                <div class="col-md-6">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="phone-form">
                                                </div>

                                                <!-- Office Hours -->
                                                <div class="col-md-6">
                                                    <label for="officeHours" class="form-label">Office Hours</label>
                                                    <input readonly type="text" class="form-control" id="officeHours"
                                                        value="Tues 2-4 PM, Thurs 1-3 PM">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-3">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button type="button" class="btn btn-secondary" id="btnResetCourse">Reset</button>
                                                <button type="button" class="btn btn-primary" id="btnSaveCourse">Save Changes</button>
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

    <!-- assignments preview -->
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
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

            poSelect.addEventListener("change", function() {
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
        document.addEventListener("DOMContentLoaded", function() {
            const contentScroll = document.querySelector(".content-scroll");

            // Bootstrap tab shown event
            document.querySelectorAll('button[data-bs-toggle="tab"]').forEach(tab => {
                tab.addEventListener("shown.bs.tab", function(e) {
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
        document.addEventListener('DOMContentLoaded', function() {
            const studentsTab = document.getElementById('students-tab');
            const settingsTab = document.getElementById('settings-tab');
            const committeeBtn = document.getElementById('committeeReportBtn');

            // When Students tab is clicked → Show button
            studentsTab.addEventListener('shown.bs.tab', function() {
                committeeBtn.classList.remove('d-none');
            });

            // When any other tab is clicked → Hide button
            document.querySelectorAll('#myTab button').forEach(tab => {
                tab.addEventListener('shown.bs.tab', function(e) {
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
        document.addEventListener("DOMContentLoaded", function() {
            const addBtn = document.querySelector(".add-topic-btn");
            const formDiv = document.getElementById("createTopicForm");
            const cancelBtn = document.querySelector(".cancel-btn");

            // Show form on Add Topic click
            addBtn.addEventListener("click", function() {
                formDiv.style.display = "block";
                // addBtn.style.display = "none";  <-- removed this line
            });

            // Hide form on Cancel click
            cancelBtn.addEventListener("click", function() {
                formDiv.style.display = "none";
                // addBtn.style.display = "inline-block"; <-- no need to show it
            });
        });
    </script>

    <!-- add outocme hrer -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
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

    <!-- Select Course Topic / Outcomes  -->
    <script>
        function loadTopics(launch_id, containerId) {
            const container = document.getElementById(containerId);
            if (!container) return;

            fetch(`api/faculty_topics.php?launch_id=${launch_id}`)
                .then(res => res.json())
                .then(response => {
                    if (response.status === 'success') {
                        const course = response.data[0];

                        // ✅ These are course-level details (same for all topics)
                        document.getElementById('cCodename').textContent = course.course_code + ": " + course.course_name;
                        document.getElementById('CCode').textContent = course.course_code || "N/A";
                        document.getElementById('cName').textContent = course.course_name || "N/A";
                        document.getElementById('slt').textContent = "Slot " + (course.slot || "N/A");
                        document.getElementById('schedule').textContent = "Slot " + (course.slot || "N/A");
                        document.getElementById('seatallot').textContent = course.seat_allotment;

                        // ✅ Fill form details (only once)
                        document.getElementById('courseCode-form').value = course.course_code || "N/A";
                        document.getElementById('courseName-form').value = course.course_name || "N/A";
                        document.getElementById('department-form').value = course.department || "N/A";
                        document.getElementById('creditHours-form').value = course.credit_hours || "N/A";
                        document.getElementById('courseDescription-form').value = course.course_description || "N/A";
                        document.getElementById('schedule-form').value = course.Schedule || "N/A";
                        document.getElementById('location-form').value = course.location || "N/A";
                        document.getElementById('prerequisites-form').value = course.Prerequisites || "N/A";
                        document.getElementById('coordinatorName-form').value = course.user_name || "N/A";
                        document.getElementById('email-form').value = course.email || "N/A";
                        document.getElementById('phone-form').value = course.phone || "N/A";

                        // ✅ Generate topics list
                        let html = '';
                        response.data.forEach(topic => {
                            html += `
                        <div class="topic-card rounded border p-4 mb-3"
                            data-topic-id="${topic.topic_id}"
                            data-topic-title="${topic.topic_title}"
                            data-topic-desc="${topic.topic_description}"
                            style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%);
                                   cursor:pointer;">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6>${topic.topic_title}</h6>
                                <button class="outcomes-btn btn btn-sm btn-outline-primary" data-topic-id="${topic.topic_id}">
                                    ${topic.outcome_count} outcomes
                                </button>
                            </div>
                            <small style="color:rgb(75 85 99)">${topic.topic_description}</small>
                        </div>
                    `;
                        });
                        container.innerHTML = html;

                        // ✅ Handle topic click (each card)
                        container.querySelectorAll('.topic-card').forEach(card => {
                            card.addEventListener('click', function() {
                                const topicId = this.dataset.topicId;
                                const topicTitle = this.dataset.topicTitle;
                                const topicDesc = this.dataset.topicDesc;

                                // 🧠 FIXED: Set the current topic title & desc here dynamically
                                document.getElementById('cTName').textContent = topicTitle || "-";
                                document.getElementById('cTDesc').textContent = topicDesc || "-";

                                // Then show outcome section
                                showOutcomeSection(topicId, topicTitle, topicDesc);
                            });
                        });

                    } else {
                        container.innerHTML = `<p class="text-muted">${response.message}</p>`;
                    }
                })
                .catch(err => {
                    console.error('Error loading topics:', err);
                    container.innerHTML = `<p class="text-danger">Failed to load topics.</p>`;
                });
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

            // ✅ Always reset previous view
            outcomeList.innerHTML = "";
            outcomeList.style.display = "block";
            createOutcomeForm.style.display = "none";
            if (outcomeDetail) outcomeDetail.style.display = "none"; // hide materials tab

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
                                <p class="card-text text-muted small mb-0">${outcome.course_description}</p>
                            </div>
                        </div>
                    `;
                        });

                        outcomeList.innerHTML = html;

                        // ✅ Click on outcome to show materials
                        const cards = outcomeList.querySelectorAll('.outcome-card');
                        cards.forEach(card => {
                            card.addEventListener('click', function() {
                                const title = this.dataset.coTitle;
                                const desc = this.dataset.coDesc;

                                outcomeList.style.display = "none";
                                outcomeDetail.style.display = "block";

                                document.getElementById("out-come-Title").textContent = title;
                                document.getElementById("outcomeDescription").textContent = desc;

                                // Reset tabs inside detail
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
                        // ✅ Hide materials if no outcomes
                        if (outcomeDetail) outcomeDetail.style.display = "none";

                        outcomeList.innerHTML = `
                    <div class="text-center p-4 border rounded bg-light">
                        <p class="text-muted mb-2">No outcomes found for this topic.</p>
                       
                    </div>
                `;

                        // Handle "Add Outcome" button
                        const addEmptyBtn = document.getElementById('addOutcomeBtnEmpty');
                        if (addEmptyBtn) {
                            addEmptyBtn.addEventListener('click', () => {
                                outcomeList.style.display = 'none';
                                createOutcomeForm.style.display = 'block';
                            });
                        }
                    }
                })
                .catch(err => {
                    console.error('Error loading outcomes:', err);
                    outcomeList.innerHTML = `<p class="text-danger p-3">⚠️ Failed to load outcomes.</p>`;
                    if (outcomeDetail) outcomeDetail.style.display = "none";
                });
        }


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

            $btnCreate.off("click").on("click", function() {
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
                    success: function(res) {
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
                    error: function(xhr, status, err) {
                        console.error("AJAX Error:", status, err);
                        alert("⚠️ Server error. Please try again later.");
                    },
                    complete: function() {
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
        document.addEventListener("DOMContentLoaded", function() {
            const addBtn = document.querySelector(".add-topic-btn");
            const cancelBtn = document.querySelector(".cancel-btn");
            const formDiv = document.getElementById("createTopicForm");
            const topicForm = document.getElementById("topicForm");

            // Get launch_id from URL
            const urlParams = new URLSearchParams(window.location.search);
            const launch_id = urlParams.get("launch_id");

            // ✅ Show form
            addBtn.addEventListener("click", function() {
                formDiv.style.display = "block";
            });

            // ✅ Hide form
            cancelBtn.addEventListener("click", function() {
                formDiv.style.display = "none";
                topicForm.reset();
            });

            // ✅ Handle form submit via AJAX
            topicForm.addEventListener("submit", function(e) {
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
        (async function() {
            // Utility helpers
            const show = el => el && (el.style.display = 'block');
            const hide = el => el && (el.style.display = 'none');

            let uploadedPlayer = null;
            let staticPlayer = null;


            // DOM references
            const editBtn = document.getElementById("editBtn");
            const saveBtn = document.getElementById("saveBtn");
            const cancelBtn = document.getElementById("cancelBtn");

            const staticNotesSection = document.getElementById("staticNotesSection");
            const staticPdfViewer = document.getElementById("staticPdfViewer");
            const notesUploadSection = document.getElementById("notesUploadSection");
            const dropZone = document.getElementById("dropZone");
            const fileInput = document.getElementById("fileInput");
            const pdfPreviewContainer = document.getElementById("pdfPreviewContainer");
            const pdfViewer = document.getElementById("pdfViewer");

            const staticVideoSection = document.getElementById("staticVideoSection");
            const staticVideoSource = document.getElementById("staticVideoSource");
            const staticVideoPlayer = document.getElementById("staticVideoPlayer");
            const videoUploadSection = document.getElementById("videoUploadSection");
            const videoDropZone = document.getElementById("videoDropZone");
            const videoInput = document.getElementById("videoInput");
            const videoPreviewContainer = document.getElementById("videoPreviewContainer");
            const uploadedVideo = document.getElementById("uploadedVideo");

            let selectedFile = null;
            let selectedType = null;

            // ✅ Context setter (called before load)
            window.setMaterialContext = function({
                launch_id,
                topic_id,
                co_id
            }) {
                window._materialContext = {
                    launch_id,
                    topic_id,
                    co_id
                };
            };

            // ✅ Load existing materials
            window.loadModulesForCurrentContext = async function() {
                const ctx = window._materialContext || {};
                if (!ctx.launch_id || !ctx.topic_id || !ctx.co_id) {
                    show(notesUploadSection);
                    show(videoUploadSection);
                    hide(staticNotesSection);
                    hide(staticVideoSection);
                    hide(editBtn);
                    return;
                }

                try {
                    const res = await fetch(`./api/get_modules.php?launch_id=${ctx.launch_id}&topic_id=${ctx.topic_id}&co_id=${ctx.co_id}`);
                    const json = await res.json();

                    if (json.status !== "success" || !json.data || json.data.length === 0) {
                        show(notesUploadSection);
                        show(videoUploadSection);
                        hide(staticNotesSection);
                        hide(staticVideoSection);
                        hide(editBtn);
                        return;
                    }

                    let pdfModule = null,
                        videoModule = null;
                    json.data.forEach(m => {
                        const lt = (m.learning_type || '').toLowerCase();
                        const filename = m.url ? m.url.replace(/\\/g, '/') : null;
                        if (!filename) return;
                        const filePath = `../uploads/materials/${filename}`;
                        if (lt === 'pdf' || lt === 'document') pdfModule = filePath;
                        if (lt === 'video') videoModule = filePath;
                    });

                    // ✅ PDF
                    if (pdfModule) {
                        staticPdfViewer.src = pdfModule;
                        show(staticNotesSection);
                        hide(notesUploadSection);
                    } else {
                        show(notesUploadSection);
                        hide(staticNotesSection);
                    }

                    // ✅ Video (separate static player)
                    // ✅ Video (separate static player)
                    if (videoModule) {
                        const staticSource = staticVideoPlayer.querySelector("source");
                        staticSource.src = videoModule;

                        // Small delay ensures video is visible when switching tabs
                        setTimeout(() => {
                            staticVideoPlayer.load();
                            if (staticPlayer) staticPlayer.restart();
                        }, 100);

                        show(staticVideoSection);
                        hide(videoUploadSection);
                    } else {
                        show(videoUploadSection);
                        hide(staticVideoSection);
                    }


                    if (pdfModule || videoModule) show(editBtn);
                    else hide(editBtn);
                    hide(saveBtn);
                    hide(cancelBtn);
                } catch (err) {
                    console.error("Error fetching modules:", err);
                    show(notesUploadSection);
                    show(videoUploadSection);
                    hide(staticNotesSection);
                    hide(staticVideoSection);
                    hide(editBtn);
                }
            };

            // ✅ File selection unified handler
            function handleFileSelect(file, type) {
                selectedFile = file;
                selectedType = type;

                if (type === "pdf") {
                    const fileURL = URL.createObjectURL(file);
                    pdfViewer.src = fileURL;
                    show(pdfPreviewContainer);
                }

                if (type === "video") {
                    const fileURL = URL.createObjectURL(file);

                    // ✅ Only affect the PREVIEW player (uploadedVideo)
                    const previewSource = uploadedVideo.querySelector("source");
                    previewSource.src = fileURL;
                    uploadedVideo.load();
                    show(videoPreviewContainer);

                    // ✅ Reinitialize Plyr for preview only (not for static)
                    if (uploadedPlayer) uploadedPlayer.destroy();
                    uploadedPlayer = new Plyr('#uploadedVideo', {
                        controls: ['play', 'progress', 'current-time', 'volume', 'fullscreen'],
                        hideControls: false
                    });
                }

                hide(editBtn);
                show(saveBtn);
                show(cancelBtn);
            }

            // ✅ Upload to backend
            async function uploadMaterial() {
                if (!selectedFile || !selectedType) return alert("No file selected!");

                const ctx = window._materialContext || {};
                const fd = new FormData();
                fd.append("launch_id", ctx.launch_id);
                fd.append("topic_id", ctx.topic_id);
                fd.append("co_id", ctx.co_id);
                fd.append("learning_type", selectedType);
                fd.append("file", selectedFile);

                saveBtn.disabled = true;
                saveBtn.textContent = "Uploading...";

                try {
                    const resp = await fetch("api/upload_module.php", {
                        method: "POST",
                        body: fd
                    });
                    const j = await resp.json();
                    if (j.status === "success") {
                        alert("✅ Material uploaded successfully!");
                        selectedFile = null;
                        selectedType = null;
                        await loadModulesForCurrentContext();
                    } else {
                        alert("❌ Upload failed: " + (j.message || "Unknown error"));
                    }
                } catch (e) {
                    console.error(e);
                    alert("⚠️ Upload error, please try again.");
                } finally {
                    saveBtn.disabled = false;
                    saveBtn.textContent = "Save";
                }
            }

            // ✅ Edit / Cancel button logic
            editBtn.addEventListener("click", () => {
                hide(staticNotesSection);
                hide(staticVideoSection);
                show(notesUploadSection);
                show(videoUploadSection);
                hide(editBtn);
                show(saveBtn);
                show(cancelBtn);
            });

            cancelBtn.addEventListener("click", async () => {
                selectedFile = null;
                selectedType = null;
                await loadModulesForCurrentContext();
            });

            saveBtn.addEventListener("click", uploadMaterial);

            // ✅ Drag-drop and click upload triggers (PDF)
            dropZone.addEventListener("click", () => fileInput.click());
            dropZone.addEventListener("dragover", e => e.preventDefault());
            dropZone.addEventListener("drop", e => {
                e.preventDefault();
                const f = e.dataTransfer.files[0];
                if (f && f.type === "application/pdf") handleFileSelect(f, "pdf");
                else alert("Please upload a valid PDF file.");
            });
            fileInput.addEventListener("change", e => {
                const f = e.target.files[0];
                if (f && f.type === "application/pdf") handleFileSelect(f, "pdf");
                e.target.value = "";
            });

            // ✅ Drag-drop and click upload triggers (Video)
            videoDropZone.addEventListener("click", () => videoInput.click());
            videoDropZone.addEventListener("dragover", e => e.preventDefault());
            videoDropZone.addEventListener("drop", e => {
                e.preventDefault();
                const f = e.dataTransfer.files[0];
                if (f && f.type.startsWith("video/")) handleFileSelect(f, "video");
                else alert("Please upload a valid video file.");
            });
            videoInput.addEventListener("change", e => {
                const f = e.target.files[0];
                if (f && f.type.startsWith("video/")) handleFileSelect(f, "video");
                e.target.value = "";
            });

            // ✅ Attach click handler for .outcome-card
            document.addEventListener("click", async e => {
                const card = e.target.closest(".outcome-card");
                if (!card) return;

                const coId = card.dataset.outcomeId;
                const topicId = card.dataset.topicId;
                const launchId = card.dataset.launchId;

                setMaterialContext({
                    launch_id: launchId,
                    topic_id: topicId,
                    co_id: coId
                });

                document.getElementById("courseOutcomeList").style.display = "none";
                document.getElementById("outcomeDetail").style.display = "block";

                await loadModulesForCurrentContext();
            });

            // ✅ Initialize Plyr for static video (existing stored video)
            document.addEventListener("DOMContentLoaded", () => {
                staticPlayer = new Plyr("#staticVideoPlayer", {
                    controls: ['play', 'progress', 'current-time', 'volume', 'fullscreen'],
                    hideControls: false
                });
            });

            document.addEventListener("shown.bs.tab", function(e) {
                if (e.target && e.target.id === "video-tab") {
                    const video = document.getElementById("staticVideoPlayer");
                    if (video) {
                        setTimeout(() => {
                            video.load();
                            if (staticPlayer) staticPlayer.play();
                        }, 200);
                    }
                }
            });

        })();
    </script>

    <!-- Add / Upload Assignments -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("assignment-submit-faculty");

            form.addEventListener("submit", async function(e) {
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
                baseUrl = "http://180.235.121.253/uploads/assignments/";
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
            <i class="bi bi-x-circle removeQuestionBtn" style="color:red;cursor:pointer;"></i>
        </div>

        <div class="mb-3">
            <input type="text" class="form-control question-input" placeholder="Enter question text" value="${questionText}" required>
        </div>

        <div class="row g-2">
            ${['A','B','C','D'].map(opt => `
            <div class="col-md-6 d-flex align-items-center">
                <div class="form-check me-2">
                    <input class="form-check-input" tabindex="-1" type="radio" name="correct_${index}" value="${opt}" ${correct === opt ? 'checked' : ''}>
                </div>
                <input type="text" class="form-control option-input" data-opt="${opt}" placeholder="Option ${opt}" value="${options[opt] || ''}" required>
            </div>`).join('')}
        </div>
        `;

                card.querySelector('.removeQuestionBtn').addEventListener('click', () => card.remove());
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
                    alert("Launch ID missing in URL.");
                    return;
                }

                const data = {
                    launch_id: launch_id,
                    course_code: document.getElementById('courseCode-form').value.trim(),
                    course_name: document.getElementById('courseName-form').value.trim(),
                    department: document.getElementById('department-form').value.trim(),
                    credit_hours: document.getElementById('creditHours-form').value.trim(),
                    course_description: document.getElementById('courseDescription-form').value.trim(),
                    schedule: document.getElementById('schedule-form').value.trim(),
                    location: document.getElementById('location-form').value.trim(),
                    prerequisites: document.getElementById('prerequisites-form').value.trim(),
                    coordinator_name: document.getElementById('coordinatorName-form').value.trim(),
                    email: document.getElementById('email-form').value.trim(),
                    phone: document.getElementById('phone-form').value.trim()
                };

                btnSave.disabled = true;
                btnSave.textContent = "Saving...";

                fetch("api/update_faculty_course.php", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(data)
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
                        console.error("Update Error:", err);
                        alert("⚠️ Failed to update course. Try again later.");
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




</body>

</html>