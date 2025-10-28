<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />


    <style>
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
    </style>

</head>

<body>
    <main class="dashboard-main">

        <div class="content-container">
            <div class="profile-area">
                <div
                    class="header d-flex justify-content-between p-4 align-items-center position-relative bg-primary text-white">
                    <h5 class="mb-0">Viana Study</h5>

                    <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex flex-column justify-content-between " style="height: 18px;">
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><button class="dropdown-item w-100 text-start">Dashboard</button></li>
                            <li><button class="dropdown-item w-100 text-start">Assignments</button></li>
                            <li><button class="dropdown-item w-100 text-start">Courses</button></li>

                            <a href="../index.php">
                                <li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li>
                            </a>
                        </ul>
                    </div>
                </div>




                <div class="assignment-card card p-3 shadow-sm m-3 mb-3">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex flex-sm-row align-items-center justify-content-between gap-3">

                            <!-- Left Section: Profile + Info -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- Profile Image -->
                                <img src="../images/image.png" alt="Student Photo"
                                    class="profile-pic"
                                    style="width:50px; height:50px; border-radius:50%; object-fit:cover;">

                                <!-- Student Details -->
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Priya Sharma</p>
                                    <p class="text-muted mb-1 small">Reg No: SID2023012</p>
                                    <p class="text-muted mb-0 small">Department: ECE</p>
                                </div>
                            </div>

                            <!-- Right Section: Action Buttons -->
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success px-3">Accept</button>
                                <button class="btn btn-sm btn-danger px-3">Reject</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="assignment-card card p-3 shadow-sm m-3 mb-3">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex flex-sm-row align-items-center justify-content-between gap-3">

                            <!-- Left Section: Profile + Info -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- Profile Image -->
                                <img src="../images/image.png" alt="Student Photo"
                                    class="profile-pic"
                                    style="width:50px; height:50px; border-radius:50%; object-fit:cover;">

                                <!-- Student Details -->
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Priya Sharma</p>
                                    <p class="text-muted mb-1 small">Reg No: SID2023012</p>
                                    <p class="text-muted mb-0 small">Department: ECE</p>
                                </div>
                            </div>

                            <!-- Right Section: Action Buttons -->
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success px-3">Accept</button>
                                <button class="btn btn-sm btn-danger px-3">Reject</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="assignment-card card p-3 shadow-sm m-3 mb-3">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex flex-sm-row align-items-center justify-content-between gap-3">

                            <!-- Left Section: Profile + Info -->
                            <div class="d-flex align-items-center gap-3">
                                <!-- Profile Image -->
                                <img src="../images/image.png" alt="Student Photo"
                                    class="profile-pic"
                                    style="width:50px; height:50px; border-radius:50%; object-fit:cover;">

                                <!-- Student Details -->
                                <div>
                                    <p class="mb-1 fw-semibold text-dark">Priya Sharma</p>
                                    <p class="text-muted mb-1 small">Reg No: SID2023012</p>
                                    <p class="text-muted mb-0 small">Department: ECE</p>
                                </div>
                            </div>

                            <!-- Right Section: Action Buttons -->
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-success px-3">Accept</button>
                                <button class="btn btn-sm btn-danger px-3">Reject</button>
                            </div>

                        </div>
                    </div>
                </div>
                









                <!-- <div class="action-footer">
                    <button class="action-btn grade-btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">
                        <span class="material-icons">check_circle_outline</span>
                        Grade Assignments
                    </button>
                    <button class="action-btn add-btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;">
                        <span class="material-icons">add</span>
                        Add New Course
                    </button>
                </div> -->
            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            fetch('api/faculty_courses.php')
                .then(res => res.json())
                .then(response => {
                    if (response.status === 'success') {
                        const courses = response.data;
                        let html = '';

                        courses.forEach(course => {
                            html += `
                        <a href="courses-detail.php?launch_id=${course.launch_id}">
                            <div class="course-item">
                                <div class="course-details">
                                    <div class="course-name">${course.course_code}: ${course.course_name}</div>
                                    <div class="student-count">${course.student_count} Students</div>
                                </div>
                                <div class="course-time">Slot: ${course.slot}</div>
                            </div>
                        </a>
                    `;
                        });

                        $('.course-list').html(html);
                    } else {
                        $('.course-list').html(`<p>${response.message}</p>`);
                    }
                })
                .catch(err => {
                    console.error(err);
                    $('.course-list').html(`<p>Unable to load courses. Please try again.</p>`);
                });
        });
    </script>
</body>

</html>