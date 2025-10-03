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


    <style>
        body {
            background: repeating-linear-gradient(to right, rgba(138, 198, 242, 0.3) 0px, rgba(138, 198, 242, 0.3) 1px, rgba(164, 216, 245, 0.4) 1px, rgba(164, 216, 245, 0.4) 2px, rgba(180, 226, 247, 0.45) 2px, rgba(180, 226, 247, 0.45) 3px, rgba(164, 216, 245, 0.4) 3px, rgba(164, 216, 245, 0.4) 4px) 0% 0% / 8px 100%;
        }

        .header {
            background-color: #1a73e8;
            color: white;
            padding: 15px 20px;
        }

        .container {
            max-width: 64rem !important;
            height: 100vh;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .tab-btn {
            border: none;
            background: none;
            padding: 10px 20px;
            font-weight: 500;
            width: 100%;
        }

        .tab-btn.active {
            border-bottom: 3px solid #1a73e8;
            color: #1a73e8;
        }

        .assignment-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .pending-badge {
            background: linear-gradient(rgb(247, 107, 28) 0%, rgb(231, 76, 60) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            padding: 4px 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
            font-size: 0.8rem;
            width: 50%;
        }

        .nav-tabs .nav-link {
            font-weight: 500;
            color: #555;
            width: 100%;
        }

        .nav-tabs .nav-link.active {
            border-color: transparent transparent #1a73e8;
            background: rgba(255, 255, 255, 0.3);
            color: #1a73e8;
            font-weight: 600;

        }

        .department,
        .faculty-id {
            font-size: 14px;
        }

        .assignment-titles {
            font-size: medium;
            font-weight: 600;
        }

        .logout-btn {
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%);
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
            height: 1.5rem;
            font-size: smaller;
            font-weight: 700;
        }

        .bg-secondary {
            background: linear-gradient(rgb(226, 226, 226) 0%, rgb(187, 187, 187) 100%);
            border-bottom: 1px solid rgb(153, 153, 153);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 15px;
        }

        a .bi-chevron-left {
            /* background: white; */
            border-radius: 50%;
            padding: 2px;
            /* color: #000; */
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%) !important;
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
        }

        .bi-chevron-left::before {
            font-weight: 600 !important;
            font-size: 15px;

        }

        .pending a {
            font-size: 0.875rem;
            font-weight: 400;
        }

        .text-muted {
            font-size: 0.875rem;
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity, 1));
            line-height: 1.25rem;
        }

        .profile-pic {
            margin-right: 0px !important;
        }

        .badge {
            padding: 6px 10px;
            font-weight: 700 !important;
            margin: 0px;
            border-radius: 7px;
        }

        .bg-warning {
            --tw-bg-opacity: 1;
            background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1)) !important;
            --tw-text-opacity: 1;
            color: rgb(133 77 14 / var(--tw-text-opacity, 1));
        }

        .bg-success {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1));
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1)) !important;
        }

        .details-ass {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .h4 {
            font-size: 0.875rem;
        }

        .bg-gray {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1));
        }

        .p-3 {
            padding: 0.75rem !important;
        }

        .p-4 {
            padding: 1rem !important;
        }

        .border-blue {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity, 1));
        }

        .content-scroll {
            height: 100%;
            max-height: 734px;
            overflow-y: scroll;
        }

        .details-ass .nav-tabs .nav-item {
            flex: 1;
            /* each li takes equal space */
            text-align: center;
            /* center the button text */
        }

        .bg-blue {
            --tw-bg-opacity: 1;
            background-color: rgb(219 234 254 / var(--tw-bg-opacity, 1));
        }

        .text-blue {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity, 1));
        }

        .view-committe {
            background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
            color: white;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
        }

        .table>:not(caption)>*>* {
            background-color: transparent;
        }

        thead th:nth-child(1) {
            width: 100%;
            text-align: left;
        }

        .book {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 70px;
        }
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container bg-light p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left"></i></a> Assignment Approval
            </h5>

            <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
            <a href="../index.php"><button class="btn d-flex align-items-center logout-btn gap-2">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span> </button></a>
        </div>


        <div class="content-scroll">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                        Dashboard</a>
                </h6>

            </div>

            <div class="assignmnent p-3" id="assignments-slider">

                <!-- asiignment1 -->
                <div class="assignment-detail">
                    <div class="mb-4">
                        <div class="p-3 rounded border bg-gray"
                            style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                            <h4>CS1234: Introduction to Data Science</h4>

                            <p class="mb-0">This course introduces the fundamental concepts of data science, including
                                data collection, analysis, and visualization.
                            </p>
                            <div class="d-flex justify-content-between align-items-center pt-3">
                                <small class="text-muted">35 Students</small>
                                <small class="text-muted">Mon, Wed 10:00 - 11:30 AM</small>

                            </div>
                        </div>
                    </div>
                    <div class="details-ass border rounded">
                        <ul class="nav nav-tabs justify-content-between" id="assignmentTabs" role="tablist"
                            style="    background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="add-tab" data-bs-toggle="tab"
                                    data-bs-target="#addAssignment" type="button" role="tab" aria-selected="true"
                                    fdprocessedid="x7onb2">
                                    OverView
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="approval-tab" data-bs-toggle="tab"
                                    data-bs-target="#assignmentApproval" type="button" role="tab" aria-selected="false"
                                    tabindex="-1">
                                    Materials
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="approval-tab" data-bs-toggle="tab"
                                    data-bs-target="#assignmentApproval" type="button" role="tab" aria-selected="false"
                                    tabindex="-1">
                                    Students
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="approval-tab" data-bs-toggle="tab"
                                    data-bs-target="#assignmentApproval" type="button" role="tab" aria-selected="false"
                                    tabindex="-1">
                                    Settings
                                </button>
                            </li>
                        </ul>
                        <div class="courses-outer p-3">
                            <div class="border rounded shadow-sm mb-4">
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
                                            <strong style="font-weight: 500;">Introduction to Data Science</strong>
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
                                            <strong style="font-weight: 500;">Science Building, Room 301</strong>
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
                            <div class="border rounded mb-4">
                                <!-- Header -->
                                <div class="bg-secondary text-dark p-3 rounded-top">
                                    <h5 class="mb-0" style="    font-size: 1rem;">Course Goals</h5>
                                </div>
                                <div class="p-3">
                                    <ul>
                                        <li><small class="text-muted">Understand core data science concepts and
                                                methodologies</small></li>
                                        <li><small class="text-muted">Develop proficiency in data collection, cleaning,
                                                and preprocessing</small></li>
                                        <li><small class="text-muted">Apply statistical methods to extract insights from
                                                data</small></li>
                                        <li><small class="text-muted">Create effective data visualizations to
                                                communicate findings</small></li>
                                        <li><small class="text-muted">Implement basic machine learning algorithms for
                                                data analysis</small></li>
                                    </ul>

                                </div>
                            </div>

                            <div class="border rounded mb-4">
                                <!-- Header -->
                                <div class="bg-secondary text-dark p-3 rounded-top">
                                    <h5 class="mb-0" style="font-size: 1rem;">Committee Recommendations
                                    </h5>
                                </div>
                                <div class="p-3">
                                    <small class="text-muted">The following recommendations were made by the course
                                        committee to improve course delivery and student outcomes:

                                    </small>
                                    <ol class="list-unstyled pt-2">
                                        <li class="mb-2 d-flex align-items-start">
                                            <span class="badge bg-blue text-blue  me-2 rounded-circle"
                                                style="width: 24px; height: 24px; ">1</span>
                                            <span class="text-muted small">Increase hands-on lab sessions from 1 to 2
                                                hours per week</span>
                                        </li>
                                        <li class="mb-2 d-flex align-items-start">
                                            <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                style="width: 24px; height: 24px;">2</span>
                                            <span class="text-muted small">Incorporate more real-world datasets from
                                                industry partners</span>
                                        </li>
                                        <li class="mb-2 d-flex align-items-start">
                                            <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                style="width: 24px; height: 24px;">3</span>
                                            <span class="text-muted small">Add a mid-term group project to enhance
                                                collaborative skills</span>
                                        </li>
                                        <li class="mb-2 d-flex align-items-start">
                                            <span class="badge bg-blue text-blue me-2 rounded-circle"
                                                style="width: 24px; height: 24px;">4</span>
                                            <span class="text-muted small">Update statistical methods section to include
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
                                        <button class="view-committe rounded p-2 font-bold"><small class="text-muted "
                                                style="font-weight: 500;color:white !important">View Full Committee
                                                Report</small></button>
                                    </div>


                                </div>
                            </div>

                            <div class="border rounded mb-4">
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
                                                            style="font-weight: 500 !important;">CO / PO</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO1</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO2</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO3</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO4</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO5</small></th>
                                                    <th scope="col"><small class="text-muted"
                                                            style="font-weight: 500 !important;">PO6</small></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-start"><small class="text-muted"
                                                            style="font-weight: 500 !important;">CO1</small></th>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td>
                                                        <div class="rounded"
                                                            style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                            -</div>
                                                    </td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start"><small class="text-muted"
                                                            style="font-weight: 500 !important;">CO2</small></th>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td>
                                                        <div class="rounded"
                                                            style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                            -</div>
                                                    </td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start"><small class="text-muted"
                                                            style="font-weight: 500 !important;">CO3</small></th>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td>
                                                        <div class="rounded"
                                                            style="    --tw-bg-opacity: 1; background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1));">
                                                            -</div>
                                                    </td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start"><small class="text-muted"
                                                            style="font-weight: 500 !important;">CO4</small></th>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start"><small class="text-muted"
                                                            style="font-weight: 500 !important;">CO5</small></th>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td><span class="badge bg-warning text-dark">Slight</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-blue text-blue">Moderate</span></td>
                                                    <td><span class="badge bg-success">Strong</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded border mb-4">
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
                                                <div class="bg-light border rounded p-2 book">
                                                    <i class="bi bi-book"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Introduction to Data Science with Python</div>
                                                <div class="text-muted small">By John Smith</div>
                                                <div class="text-muted small">Academic Press, 2022</div>
                                                <div class="text-muted small">ISBN: 978-1234567890</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-primary">Required</span>
                                    </div>

                                    <hr class="my-2" />

                                    <!-- Book 2 -->
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <div class="bg-light border rounded p-2 book">
                                                    <i class="bi bi-book"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Statistical Methods for Data Analysis</div>
                                                <div class="text-muted small">By Emily Chen</div>
                                                <div class="text-muted small">Tech Publications, 2021</div>
                                                <div class="text-muted small">ISBN: 978-0987654321</div>
                                            </div>
                                        </div>
                                        <span class="badge bg-light text-dark border">Optional</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>



            </div>
        </div>

    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>