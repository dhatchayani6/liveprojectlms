<?php include "../includes/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facutly Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../images/logo1.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../stylesheet/responsive.css">

    <link rel="stylesheet" href="../stylesheet/styles.css">
    <style>
        .card-custom {
            background-color: #fff;
            border-radius: 12px;
            padding: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle !important;
        }

        .table thead th {
            font-weight: 600;
            letter-spacing: 0.5px;
            font-size: 0.75rem;
        }

        .table tbody td {
            font-size: 0.85rem;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 2px 10px;
        }

        .dropdown-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="container-fluid students-section">
        <div class="row">
            <!-- didebar -->
            <?php include('sidebar.php') ?>
            <!-- Main Content -->
            <div class="col-12 col-sm-10 col-md-9 col-lg-10 p-0">
                <!-- Topbar -->

                <?php include('topbar.php') ?>
                <!-- Topbar with Breadcrumb -->
                <style>
                    a {
                        text-decoration: none;
                    }
                </style>

                <!-- Page Content -->
                <div class="p-4 content-scroll">
                    <!-- Breadcrumb -->
                    <!-- <nav aria-label="breadcrumb" style="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="course-admin.php">Course Admin</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Course</li>
                        </ol>
                    </nav> -->
                    <!-- Add New Course Form -->
                    <div class="card-custom shadow mt-4 p-4">
                        <h5 class="mb-4">Launch New Course</h5>
                        <form id="addCourseForm">
                            <div class="row g-3">
                                <!-- Course ID -->
                                <input type="hidden" id="courseid" name="courseid">

                                <!-- Course Name -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="courseName" name="courseName" required>
                                            <option value="" selected disabled>Select Course Name</option>
                                        </select>
                                        <label for="courseName">Course Name</label>
                                    </div>
                                </div>

                                <!-- Course Code -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="courseCode" name="courseCode" required>
                                            <option value="" selected disabled>Select Course Code</option>
                                        </select>
                                        <label for="courseCode">Course Code</label>
                                    </div>
                                </div>



                                <!-- Seat Allotment -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="seatAllotment" name="seatAllotment"
                                            placeholder="Seat Allotment" required>
                                        <label for="seatAllotment">Seat Allotment</label>
                                    </div>
                                </div>

                                <!-- Duration -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-control" name="faculty_id" id="faculty_id" required>

                                            <?php


                                            // Query to get faculty (assuming role = 'faculty' in login table)
                                            $sql = "SELECT user_id, name, reg_no FROM users WHERE user_type = 'faculty'";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                echo '<option value="" selected disabled>Select Faculty</option>'; // Default option
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    // ID will be the value, Name will be shown in dropdown
                                                    echo '<option value="' . $row['user_id'] . '">' . $row['name'] . ' / Faculty ID - ' . $row['reg_no'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">No Faculty Found</option>';
                                            }

                                            mysqli_close($conn);
                                            ?>

                                        </select>
                                        <label for="duration">Duration</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="slot" name="slot" placeholder="Slot"
                                            required>
                                        <label for="slot">Slot</label>
                                    </div>
                                </div>

                            </div>

                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-secondary w-20">Add Course</button>
                            </div>
                        </form>
                    </div>

                    <!-- 📊 Courses Table -->
                    <div class="card-custom shadow mt-4 p-4">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-4">Launched Courses</h5>

                            <!-- 🔍 Search Box -->
                            <div class="mb-3">
                                <input type="text" id="courseSearch" class="form-control"
                                    placeholder="Search courses...">
                            </div>

                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle" id="coursesTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>S No</th>
                                        <th>Course Code</th>
                                        <th>Seat Allotment</th>
                                        <th>Faculty Name</th>
                                        <th>Slot</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody id="coursesTableBody">
                                    <!-- Courses will be loaded here -->
                                </tbody>

                            </table>
                        </div>
                    </div>

                    <!-- 🔍 JavaScript for search -->
                    <script>
                        document.getElementById('courseSearch').addEventListener('keyup', function() {
                            const searchValue = this.value.toLowerCase();
                            const rows = document.querySelectorAll('#coursesTable tbody tr');

                            rows.forEach(row => {
                                const text = row.textContent.toLowerCase();
                                row.style.display = text.includes(searchValue) ? '' : 'none';
                            });
                        });
                    </script>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editcourse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:100%;max-width: 1030px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Course</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addCourseForm">
                        <div class="row g-3">
                            <!-- Course Code -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="courseCode" name="courseCode" required>
                                        <option value="" selected disabled>Select Course Code</option>
                                    </select>
                                    <label for="courseCode">Course Code</label>
                                </div>
                            </div>

                            <!-- Course Name -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="courseName" name="courseName" required>
                                        <option value="" selected disabled>Select Course Name</option>
                                    </select>
                                    <label for="courseName">Course Name</label>
                                </div>
                            </div>




                            <!-- Seat Allotment -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="seatAllotment" name="seatAllotment"
                                        placeholder="Seat Allotment" required>
                                    <label for="seatAllotment">Seat Allotment</label>
                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        placeholder="Duration" required>
                                    <label for="duration">Duration</label>
                                </div>
                            </div>

                            <!-- Course type -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="course_type" name="course_type" required>
                                        <option value="" selected disabled>Select Course Type</option>
                                        <option value="core">Core</option>
                                        <option value="elective">Elective</option>
                                        <option value="certificate">Certificate</option>
                                    </select>
                                    <label for="course_type">Course Type</label>
                                </div>
                            </div>

                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-center mt-3">
                            <button type="submit" class="btn btn-secondary w-20">Add Course</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function loadCourses() {
            $.get("api/get_courses.php", function(res) {
                if (res.status) {
                    res.courses.forEach(c => {
                        $("#courseName").append(`<option value="${c.course_id}">${c.course_name}</option>`);
                        $("#courseCode").append(`<option value="${c.course_id}">${c.course_code}</option>`);
                    });
                }
            });
        }
        loadCourses();
        $("#courseName").change(function() {
            $("#courseCode").val($(this).val());
        });
        $("#courseCode").change(function() {
            $("#courseName").val($(this).val());
        });
    </script>

    <script>
        $("#addCourseForm").on("submit", function(e) {
            e.preventDefault();

            let payload = {
                course_id: $("#courseName").val(),
                seat_allotment: $("#seatAllotment").val(),
                faculty_id: $("#faculty_id").val(),
                slot: $("#slot").val()
            };

            $.ajax({
                url: "api/launch_course.php",
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify(payload),
                success: function(res) {
                    if (res.status) {
                        Swal.fire("Success", res.message, "success");
                        loadLaunchedCourses();
                        $("#addCourseForm")[0].reset();
                    } else {
                        Swal.fire("Error", res.message, "error");
                    }
                }
            });
        });
    </script>

    <script>
        function loadLaunchedCourses() {
            $.get("api/get_launched_courses.php", function(res) {
                if (res.status) {
                    let html = "";
                    res.courses.forEach(c => {
                        html += `
                <tr>
                    <td>${c.sno}</td>
                    <td>${c.code}</td>
                    <td>${c.seat_allotment}</td>
                    <td>${c.faculty_name}</td>
                    <td>${c.slot}</td>
                    <td>${c.created_at}</td>
                </tr>`;
                    });
                    $("#coursesTableBody").html(html);
                }
            });
        }
        loadLaunchedCourses();
    </script>

</body>

</html>