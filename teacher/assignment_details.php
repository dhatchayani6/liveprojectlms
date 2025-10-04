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
        }

        .nav-tabs .nav-link.active {
            border-color: transparent transparent #1a73e8;
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
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container bg-light p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Assignment Approval
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
                    <div class="bg-secondary px-2 py-0 w-100 d-flex justify-content-between align-items-center">
                        <div class=" p-3">
                            <h5 class="mb-0 assignment-titles">
                                Data Analytics Project
                            </h5>
                        </div>

                        <i class="bi bi-x-lg"></i>
                    </div>
                    <div class="details-ass p-3">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Profile image -->
                            <div class="me-3" style="width: 40px; height: 40px; overflow: hidden; border-radius: 50%;">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="Alex Johnson" class="img-fluid w-100 h-100" style="object-fit: cover;">
                            </div>
                            <!-- Name and ID -->
                            <div>
                                <h6 class="mb-0 text-dark">Alex Johnson</h6>
                                <small class="text-muted">ID: SID2023001</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small class="mb-0 text-dark text-muted">Course: Introduction to Data Structure</small>
                            <small class="text-muted">Submitted: 2023-11-16</small>
                        </div>
                        <div class="d-flex justify-content-between pt-2 mb-2">
                            <small class="mb-0 text-dark text-muted">Due: 2023-11-16</small>
                            <span class="badge bg-warning">Late</span>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Submission:</h4>
                            <div class="p-3 rounded border bg-gray"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <p class="mb-0">I have analyzed the dataset using Python and Pandas. The key findings
                                    are
                                    presented
                                    in
                                    the attached Jupyter notebook with visualizations created using Matplotlib and
                                    Seaborn.
                                </p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Attached Files:</h4>
                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                        </div>
                        <div class="mb-4">
                            <h4 class="form-label h4">Grade:</h4>

                            <div class="d-flex gap-2 w-25 mb-4">
                                <!-- Select dropdown -->
                                <select class="form-select  border-blue grade-select">
                                    <option value="">Select grade</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>

                                <span class="align-self-center">or</span>

                                <!-- Text input -->
                                <input type="text" class="form-control grade-input border-blue"
                                    placeholder="Enter grade">
                            </div>
                            <div class="mb-4">
                                <h4 class="form-label h4">Feedback:</h4>
                                <textarea name="" id="" rows="3" class="w-100 border-blue rounded p-4"></textarea>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- assignment 2 -->
                <div class="assignment-detail d-none">
                    <div class="bg-secondary px-2 py-0 w-100 d-flex justify-content-between align-items-center">
                        <div class=" p-3">
                            <h5 class="mb-0 assignment-titles">
                                Data Analytics Project
                            </h5>
                        </div>

                        <i class="bi bi-x-lg"></i>
                    </div>
                    <div class="details-ass p-3">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Profile image -->
                            <div class="me-3" style="width: 40px; height: 40px; overflow: hidden; border-radius: 50%;">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="Alex Johnson" class="img-fluid w-100 h-100" style="object-fit: cover;">
                            </div>
                            <!-- Name and ID -->
                            <div>
                                <h6 class="mb-0 text-dark">Aakash</h6>
                                <small class="text-muted">ID: SID2023001</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small class="mb-0 text-dark text-muted">Course: Introduction to Data Structure</small>
                            <small class="text-muted">Submitted: 2023-11-16</small>
                        </div>
                        <div class="d-flex justify-content-between pt-2 mb-2">
                            <small class="mb-0 text-dark text-muted">Due: 2023-11-16</small>
                            <span class="badge bg-warning">Late</span>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Submission:</h4>
                            <div class="p-3 rounded border bg-gray"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <p class="mb-0">I have analyzed the dataset using Python and Pandas. The key findings
                                    are
                                    presented
                                    in
                                    the attached Jupyter notebook with visualizations created using Matplotlib and
                                    Seaborn.
                                </p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Attached Files:</h4>
                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                        </div>
                        <div class="mb-4">
                            <h4 class="form-label h4">Grade:</h4>

                            <div class="d-flex gap-2 w-25 mb-4">
                                <!-- Select dropdown -->
                                <select class="form-select  border-blue grade-select">
                                    <option value="">Select grade</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>

                                <span class="align-self-center">or</span>

                                <!-- Text input -->
                                <input type="text" class="form-control grade-input border-blue"
                                    placeholder="Enter grade">
                            </div>
                            <div class="mb-4">
                                <h4 class="form-label h4">Feedback:</h4>
                                <textarea name="" id="" rows="3" class="w-100 border-blue rounded p-4"></textarea>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- assignment 3 -->
                <div class="assignment-detail d-none">
                    <div class="bg-secondary px-2 py-0 w-100 d-flex justify-content-between align-items-center">
                        <div class=" p-3">
                            <h5 class="mb-0 assignment-titles">
                                Data Analytics Project
                            </h5>
                        </div>

                        <i class="bi bi-x-lg"></i>
                    </div>
                    <div class="details-ass p-3">
                        <div class="d-flex align-items-center mb-3">
                            <!-- Profile image -->
                            <div class="me-3" style="width: 40px; height: 40px; overflow: hidden; border-radius: 50%;">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                    alt="Alex Johnson" class="img-fluid w-100 h-100" style="object-fit: cover;">
                            </div>
                            <!-- Name and ID -->
                            <div>
                                <h6 class="mb-0 text-dark">Dhatchayani</h6>
                                <small class="text-muted">ID: SID2023001</small>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <small class="mb-0 text-dark text-muted">Course: Introduction to Data Structure</small>
                            <small class="text-muted">Submitted: 2023-11-16</small>
                        </div>
                        <div class="d-flex justify-content-between pt-2 mb-2">
                            <small class="mb-0 text-dark text-muted">Due: 2023-11-16</small>
                            <span class="badge bg-warning">Late</span>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Submission:</h4>
                            <div class="p-3 rounded border bg-gray"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <p class="mb-0">I have analyzed the dataset using Python and Pandas. The key findings
                                    are
                                    presented
                                    in
                                    the attached Jupyter notebook with visualizations created using Matplotlib and
                                    Seaborn.
                                </p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4 class="h4">Attached Files:</h4>
                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                            <div class="d-flex align-items-center p-2 border rounded mb-2"
                                style="background: linear-gradient(180deg, #f9f9f9 0%, #f0f0f0 100%);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="me-2 text-primary"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                                <span class="small text-secondary">data_analysis.ipynb</span>
                            </div>

                        </div>
                        <div class="mb-4">
                            <h4 class="form-label h4">Grade:</h4>

                            <div class="d-flex gap-2 w-25 mb-4">
                                <!-- Select dropdown -->
                                <select class="form-select grade-select  border-blue grade-select">
                                    <option value="">Select grade</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>

                                <span class="align-self-center">or</span>

                                <!-- Text input -->
                                <input type="text" class="form-control grade-input border-blue"
                                    placeholder="Enter grade">
                            </div>
                            <div class="mb-4">
                                <h4 class="form-label h4">Feedback:</h4>
                                <textarea name="" id="" rows="3" class="w-100 border-blue rounded p-4"></textarea>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="border rounded"
                    style="background: linear-gradient(180deg, #f0f0f0 0%, #d8d8d8 100%); box-shadow: inset 0 1px 0 rgba(255,255,255,0.8);">

                    <!-- Dots indicator -->
                    <div class="d-flex justify-content-center py-2">
                        <div class="d-flex justify-content-center py-2 dots-indicator"></div>

                    </div>

                    <!-- Action buttons and navigation -->
                    <div class="d-flex justify-content-between align-items-center px-3 py-2">
                        <!-- Left arrow -->
                        <button id="prev-btn" class="btn btn-light p-1 rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>


                        <!-- Reject button -->
                        <button class="btn text-danger px-3 py-2 d-flex align-items-center"
                            style="border:1px solid rgba(229,62,62,0.3); background: linear-gradient(180deg, #f8f8f8 0%, #e8e8e8 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                stroke="currentColor" stroke-width="2" class="me-2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Reject
                        </button>

                        <!-- Approve button -->
                        <button class="btn text-white px-3 py-2 d-flex align-items-center approve-btn"
                            style="background: linear-gradient(180deg, #e0e0e0 0%, #c0c0c0 100%); border:1px solid rgba(0,0,0,0.15);"
                            disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                stroke="currentColor" stroke-width="2" class="me-2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Approve
                        </button>

                        <!-- Right arrow -->
                        <button id="next-btn" class="btn btn-light p-1 rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                    </div>

                    <!-- Progress text -->
                    <div class="text-center pb-2">
                        <small id="progress-text" class="text-muted">1 of 3</small>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const assignments = Array.from(document.querySelectorAll(".assignment-detail"));
            const approveBtn = document.querySelector(".approve-btn");
            const rejectBtn = document.querySelector(".btn.text-danger");
            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            const dotsContainer = document.querySelector(".dots-indicator");
            const progressText = document.getElementById("progress-text");
            let currentIndex = 0;

            // Enable/disable Approve button based on grade input
            function toggleApprove() {
                const currentAssignment = assignments[currentIndex];
                const gradeSelect = currentAssignment.querySelector(".grade-select");
                const gradeInput = currentAssignment.querySelector(".grade-input");

                if ((gradeSelect && gradeSelect.value.trim() !== "") ||
                    (gradeInput && gradeInput.value.trim() !== "")) {
                    approveBtn.disabled = false;
                    approveBtn.style.background = "linear-gradient(180deg, #4CAF50 0%, #388E3C 100%)";
                    approveBtn.style.cursor = "pointer";
                } else {
                    approveBtn.disabled = true;
                    approveBtn.style.background = "linear-gradient(180deg, #e0e0e0 0%, #c0c0c0 100%)";
                    approveBtn.style.cursor = "not-allowed";
                }
            }

            // Listen for grade changes
            assignments.forEach((assignment) => {
                const gradeSelect = assignment.querySelector(".grade-select");
                const gradeInput = assignment.querySelector(".grade-input");

                gradeSelect?.addEventListener("change", toggleApprove);
                gradeInput?.addEventListener("input", toggleApprove);
            });

            // Create dots dynamically
            assignments.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                dot.style.cssText = `
            width:10px; height:10px; margin:0 5px; border-radius:50%;
            display:inline-block; cursor:pointer; background:${index === 0 ? '#1a73e8' : '#ccc'};
        `;
                dot.addEventListener("click", () => showAssignment(index));
                dotsContainer.appendChild(dot);
            });
            const dots = document.querySelectorAll(".dot");

            // Update progress text
            function updateProgress(index) {
                if (progressText) {
                    progressText.textContent = `${index + 1} of ${assignments.length}`;
                }
            }

            // Show assignment at index
            function showAssignment(index) {
                assignments.forEach((a, i) => {
                    a.classList.toggle("d-none", i !== index);
                    dots[i].style.background = i === index ? "#1a73e8" : "#ccc";
                });
                currentIndex = index;
                updateProgress(currentIndex);
                toggleApprove();
                updateNavigationButtons();
            }

            // Prev/Next navigation
            function updateNavigationButtons() {
                prevBtn.disabled = currentIndex === 0;
                nextBtn.disabled = currentIndex === assignments.length - 1;
            }
            prevBtn?.addEventListener("click", () => {
                if (currentIndex > 0) showAssignment(currentIndex - 1);
            });
            nextBtn?.addEventListener("click", () => {
                if (currentIndex < assignments.length - 1) showAssignment(currentIndex + 1);
            });

            // Approve button click
            approveBtn?.addEventListener("click", () => {
                if (!approveBtn.disabled) moveToNext();
            });

            // Reject button click
            rejectBtn?.addEventListener("click", moveToNext);

            function moveToNext() {
                assignments[currentIndex].classList.add("d-block");
                let nextIndex = currentIndex + 1;

                // Skip hidden assignments
                while (nextIndex < assignments.length && assignments[nextIndex].classList.contains("d-block")) {
                    nextIndex++;
                }

                if (nextIndex < assignments.length) {
                    showAssignment(nextIndex);
                } else {
                    // No more assignments left
                    assignments.forEach(a => a.classList.add("d-block"));
                    progressText.textContent = `0 of ${assignments.length}`;
                }
            }

            // Initialize
            showAssignment(0);
        });
    </script>



    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const assignments = Array.from(document.querySelectorAll(".assignment-detail"));
            const gradeSelects = document.querySelectorAll(".grade-select");
            const gradeInputs = document.querySelectorAll(".grade-input");
            const approveBtn = document.querySelector(".approve-btn");
            const rejectBtn = document.querySelector(".btn.text-danger");
            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            const dotsContainer = document.querySelector(".dots-indicator");
            const progressText = document.getElementById("progress-text");
            let currentIndex = 0;

            // Enable Approve button only if grade is selected or entered
            function toggleApprove() {
                const currentAssignment = assignments[currentIndex];
                const gradeSelect = currentAssignment.querySelector(".grade-select");
                const gradeInput = currentAssignment.querySelector(".grade-input");

                if ((gradeSelect && gradeSelect.value.trim() !== "") ||
                    (gradeInput && gradeInput.value.trim() !== "")) {
                    approveBtn.disabled = false;
                    approveBtn.style.background = "linear-gradient(180deg, #4CAF50 0%, #388E3C 100%)";
                    approveBtn.style.cursor = "pointer";
                } else {
                    approveBtn.disabled = true;
                    approveBtn.style.background = "linear-gradient(180deg, #e0e0e0 0%, #c0c0c0 100%)";
                    approveBtn.style.cursor = "not-allowed";
                }
            }

            // Listen to input/select changes for all assignments
            assignments.forEach((assignment, index) => {
                const gradeSelect = assignment.querySelector(".grade-select");
                const gradeInput = assignment.querySelector(".grade-input");

                gradeSelect?.addEventListener("change", toggleApprove);
                gradeInput?.addEventListener("input", toggleApprove);
            });

            // Create dots dynamically
            assignments.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                dot.style.cssText = `
            width:10px; height:10px; margin:0 5px; border-radius:50%;
            display:inline-block; cursor:pointer; background:${index === 0 ? '#1a73e8' : '#ccc'};
        `;
                dot.addEventListener("click", () => showAssignment(index));
                dotsContainer.appendChild(dot);
            });

            const dots = document.querySelectorAll(".dot");

            // Update progress text
            function updateProgress(index) {
                if (progressText) {
                    progressText.textContent = `${index + 1} of ${assignments.length}`;
                }
            }

            // Show assignment at index
            function showAssignment(index) {
                assignments.forEach((a, i) => {
                    a.classList.toggle("d-none", i !== index);
                    dots[i].style.background = i === index ? "#1a73e8" : "#ccc";
                });
                currentIndex = index;
                updateProgress(currentIndex);
                toggleApprove(); // check Approve button for this assignment
            }

            // Prev/Next navigation
            prevBtn?.addEventListener("click", () => {
                if (currentIndex > 0) showAssignment(currentIndex - 1);
            });
            nextBtn?.addEventListener("click", () => {
                if (currentIndex < assignments.length - 1) showAssignment(currentIndex + 1);
            });

            // Approve action: hide current assignment and go to next
            approveBtn?.addEventListener("click", () => {
                if (!approveBtn.disabled) {
                    assignments[currentIndex].classList.add("d-none");
                    const nextIndex = assignments.findIndex(a => !a.classList.contains("d-none"));
                    if (nextIndex !== -1) showAssignment(nextIndex);
                }
            });

            // Reject action: hide current assignment and go to next
            rejectBtn?.addEventListener("click", () => {
                assignments[currentIndex].classList.add("d-none");
                const nextIndex = assignments.findIndex(a => !a.classList.contains("d-none"));
                if (nextIndex !== -1) showAssignment(nextIndex);
            });

            // Initialize
            showAssignment(0);
        });
    </script> -->

    <!-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            const assignments = Array.from(document.querySelectorAll(".assignment-detail"));
            const dotsContainer = document.querySelector(".dots-indicator");
            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            const progressText = document.getElementById("progress-text");
            let currentIndex = 0;

            // Create dots dynamically
            assignments.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                dot.style.cssText = `
            width:10px; height:10px; margin:0 5px; border-radius:50%;
            display:inline-block; cursor:pointer; background:${index === 0 ? '#1a73e8' : '#ccc'};
        `;
                dot.addEventListener("click", () => showAssignment(index));
                dotsContainer.appendChild(dot);
            });

            const dots = document.querySelectorAll(".dot");

            // Update progress text
            function updateProgress(index) {
                if (progressText) {
                    progressText.textContent = `${index + 1} of ${assignments.length}`;
                }
            }

            // Show assignment at index
            function showAssignment(index) {
                assignments.forEach((a, i) => {
                    a.classList.toggle("d-none", i !== index);
                    dots[i].style.background = i === index ? "#1a73e8" : "#ccc";
                });
                currentIndex = index;
                updateProgress(currentIndex);
            }

            // Previous button
            prevBtn?.addEventListener("click", () => {
                if (currentIndex > 0) showAssignment(currentIndex - 1);
            });

            // Next button
            nextBtn?.addEventListener("click", () => {
                if (currentIndex < assignments.length - 1) showAssignment(currentIndex + 1);
            });

            // Initialize
            showAssignment(0);
        });
    </script> -->



    <!-- <script>
        function toggleApprove(e) {
            const wrapper = e.target.closest('.assignment-detail');
            const approveBtn = wrapper ? wrapper.querySelector('.approve-btn') : null;

            if (!approveBtn) return; // stop if no button found

            if (wrapper.querySelector('.grade-select').value ||
                wrapper.querySelector('.grade-input').value.trim() !== "") {
                approveBtn.removeAttribute("disabled");
                approveBtn.style.background = "linear-gradient(180deg, #4CAF50 0%, #388E3C 100%)";
            } else {
                approveBtn.setAttribute("disabled", true);
                approveBtn.style.background = "linear-gradient(180deg, #e0e0e0 0%, #c0c0c0 100%)";
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const assignments = document.querySelectorAll(".assignment-detail");
            const dotsContainer = document.querySelector(".dots-indicator");
            const prevBtn = document.getElementById("prev-btn");
            const nextBtn = document.getElementById("next-btn");
            let currentIndex = 0;

            // Create dots dynamically
            assignments.forEach((_, index) => {
                const dot = document.createElement("span");
                dot.classList.add("dot");
                dot.style.width = "10px";
                dot.style.height = "10px";
                dot.style.margin = "0 5px";
                dot.style.borderRadius = "50%";
                dot.style.display = "inline-block";
                dot.style.cursor = "pointer";
                dot.style.background = index === 0 ? "#1a73e8" : "#ccc";

                dot.addEventListener("click", () => showAssignment(index));
                dotsContainer.appendChild(dot);
            });

            const dots = document.querySelectorAll(".dot");

            function showAssignment(index) {
                assignments.forEach((a, i) => {
                    a.classList.toggle("d-none", i !== index);
                    dots[i].style.background = i === index ? "#1a73e8" : "#ccc";
                });
                currentIndex = index;
            }

            prevBtn.addEventListener("click", () => {
                if (currentIndex > 0) {
                    showAssignment(currentIndex - 1);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentIndex < assignments.length - 1) {
                    showAssignment(currentIndex + 1);
                }
            });

            // Enable Approve only after grading
            assignments.forEach((assignment) => {
                const gradeSelect = assignment.querySelector("select");
                const gradeInput = assignment.querySelector("input[type='text']");
                const approveBtn = assignment.querySelector(".approve-btn");

                function toggleApprove() {
                    if ((gradeSelect && gradeSelect.value) || (gradeInput && gradeInput.value.trim() !== "")) {
                        approveBtn.removeAttribute("disabled");
                        approveBtn.style.background = "linear-gradient(180deg, #4CAF50 0%, #388E3C 100%)";
                        approveBtn.style.cursor = "pointer";
                    } else {
                        approveBtn.setAttribute("disabled", "true");
                        approveBtn.style.background = "linear-gradient(180deg, #e0e0e0 0%, #c0c0c0 100%)";
                        approveBtn.style.cursor = "not-allowed";
                    }
                }

                if (gradeSelect) gradeSelect.addEventListener("change", toggleApprove);
                if (gradeInput) gradeInput.addEventListener("input", toggleApprove);

                // Approve button action
                approveBtn.addEventListener("click", () => {
                    if (!approveBtn.hasAttribute("disabled")) {
                        assignment.classList.add("d-none"); // hide current assignment
                        if (currentIndex < assignments.length - 1) {
                            showAssignment(currentIndex + 1);
                        } else {
                            alert("🎉 All assignments reviewed!");
                        }
                    }
                });
            });

            // Reject button just hides the assignment
            document.querySelectorAll(".reject-btn").forEach((btn, idx) => {
                btn.addEventListener("click", () => {
                    assignments[idx].classList.add("d-none");
                    if (currentIndex < assignments.length - 1) {
                        showAssignment(currentIndex + 1);
                    } else {
                        alert("🎉 All assignments reviewed!");
                    }
                });
            });

            // Initialize first assignment
            showAssignment(0);
        });
    </script> -->





    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>