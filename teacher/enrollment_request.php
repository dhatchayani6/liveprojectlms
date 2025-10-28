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
    <!-- Add this in your <head> if not already included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">



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

        .btn-success {
            background-color: #6feb58 !important;
            border: none;
        }
    </style>

</head>

<body>
    <main class="dashboard-main">
        <div class="content-container">
            <div class="profile-area">
                <!-- Header -->
                <div class="header d-flex justify-content-between p-3 align-items-center bg-primary text-white">
                    <h5 class="mb-0">Viana Study</h5>

                    <!-- Hamburger Dropdown -->
                    <div class="dropdown">
                        <button class="btn p-0 border-0" type="button" id="profileDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="d-flex flex-column justify-content-between" style="height: 18px;">
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><button class="dropdown-item w-100 text-start">Dashboard</button></li>
                            <li><button class="dropdown-item w-100 text-start">Assignments</button></li>
                            <li><button class="dropdown-item w-100 text-start">Courses</button></li>
                            <li><a href="../index.php" class="dropdown-item text-danger">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Assignment Cards -->
                <div class="container-fluid py-3">
                    <div class="row gy-3">
                        <!-- Card Example (Repeat this block) -->
                        <div class="col-12">
                            <div class="card p-3 shadow-sm">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <!-- Left: Profile Info -->
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                                            style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                                        <div>
                                            <p class="mb-1 fw-semibold text-dark">Rahul Menon</p>
                                            <p class="text-muted mb-1 small">Reg No: SID2023008</p>
                                            <p class="text-muted mb-0 small">Department: CSE</p>
                                        </div>
                                    </div>
                                    <!-- Right: Action Buttons -->
                                    <div class="d-flex gap-2 flex-shrink-0">
                                        <button
                                            class="btn btn-sm btn-success d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-up-fill me-1"></i><span
                                                class="d-sm-inline">Accept</span>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-down-fill me-1"></i><span
                                                class="d-sm-inline">Reject</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card p-3 shadow-sm">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                                            style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                                        <div>
                                            <p class="mb-1 fw-semibold text-dark">Meera Krishnan</p>
                                            <p class="text-muted mb-1 small">Reg No: SID2023015</p>
                                            <p class="text-muted mb-0 small">Department: IT</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 flex-shrink-0">
                                        <button
                                            class="btn btn-sm btn-success d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-up-fill me-1"></i><span
                                                class="d-sm-inline">Accept</span>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-down-fill me-1"></i><span
                                                class="d-sm-inline">Reject</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card p-3 shadow-sm">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                                            style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                                        <div>
                                            <p class="mb-1 fw-semibold text-dark">Sanjay Reddy</p>
                                            <p class="text-muted mb-1 small">Reg No: SID2023021</p>
                                            <p class="text-muted mb-0 small">Department: EEE</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 flex-shrink-0">
                                        <button
                                            class="btn btn-sm btn-success d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-up-fill me-1"></i><span
                                                class="d-sm-inline">Accept</span>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-down-fill me-1"></i><span
                                                class="d-sm-inline">Reject</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card p-3 shadow-sm">
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex align-items-center gap-3 flex-wrap">
                                        <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                                            style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                                        <div>
                                            <p class="mb-1 fw-semibold text-dark">Aditi Nair</p>
                                            <p class="text-muted mb-1 small">Reg No: SID2023034</p>
                                            <p class="text-muted mb-0 small">Department: Mechanical</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 flex-shrink-0">
                                        <button
                                            class="btn btn-sm btn-success d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-up-fill me-1"></i><span
                                                class="d-sm-inline">Accept</span>
                                        </button>
                                        <button
                                            class="btn btn-sm btn-danger d-flex align-items-center justify-content-center px-3">
                                            <i class="bi bi-hand-thumbs-down-fill me-1"></i><span
                                                class="d-sm-inline">Reject</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
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