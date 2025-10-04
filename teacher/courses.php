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
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6>Course Topics
                                        </h6>
                                        <button class="add-topic-btn btn btn-primary"><i class="bi bi-plus"></i>
                                            Add Topic</button>

                                    </div>
                                    <!-- Create New Topic Form (Hidden by default) -->
                                    <div id="createTopicForm" class="p-2" style="display: none;">
                                        <!-- Header -->
                                        <div class="bg-secondary text-dark p-3 rounded-top">
                                            <h5 class="mb-0" style="font-size: 1rem;">Create New Topic</h5>
                                        </div>
                                        <div class="p-3 border rounded">
                                            <div class="row">
                                                <!-- Topic Title -->
                                                <div class="col-12 mb-3">
                                                    <label for="topicTitle" class="form-label">Topic Title</label>
                                                    <input type="text" class="form-control" id="topicTitle"
                                                        placeholder="Enter the topic title">
                                                </div>

                                                <!-- Topic Description -->
                                                <div class="col-12 mb-3">
                                                    <label for="topicDescription" class="form-label">Topic
                                                        Description</label>
                                                    <textarea class="form-control" id="topicDescription" rows="4"
                                                        placeholder="Enter the topic description"></textarea>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div class="d-flex justify-content-end gap-2">
                                                    <button class="cancel-btn btn btn-secondary rounded">Cancel</button>
                                                    <button class="create-btn btn btn-primary rounded">Create
                                                        Topic</button>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>