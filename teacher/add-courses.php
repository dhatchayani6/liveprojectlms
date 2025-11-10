<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_faculty.php"; ?>

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
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container  p-0 ">


        <div class="bg-light h-100">
            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Manage: Introduction
                    to
                    Data Science
                </h5>

                <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
                <a href="../index.php"><button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span> </button></a>
            </div>
            <div class="d-flex justify-content-between align-items-center p-3">
                <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                        Dashboard</a>
                </h6>

            </div>
            <div class="p-3">
                <div class="card shadow-sm">
                    <div class="card-header bg-secondary">
                        <h5 class="mb-0">Create New Course</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="courseSelect" class="form-label">Select Course</label>
                                <select class="form-select" id="courseSelect">
                                    <option selected>-- Select a course --</option>
                                    <option value="1">Course 1</option>
                                    <option value="2">Course 2</option>
                                    <option value="3">Course 3</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="timeSlotSelect" class="form-label">Select Time Slot</label>
                                <select class="form-select" id="timeSlotSelect">
                                    <option selected>-- Select a slot --</option>
                                    <option value="morning">Morning (8AM - 10AM)</option>
                                    <option value="afternoon">Afternoon (12PM - 2PM)</option>
                                    <option value="evening">Evening (4PM - 6PM)</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between bg-secondary p-3">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
    color: white;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">Launch Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>