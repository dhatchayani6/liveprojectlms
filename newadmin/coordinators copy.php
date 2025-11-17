<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
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
                <!-- Page Content -->
                <div class="p-4 content-scroll">
                    <!-- Add New Course Form -->

                    <form action="">
                        <div class="card-custom shadow mt-4 p-4">
                            <h5 class="text-center mb-4">Assign Course Coordinator</h5>

                            <!-- Course Details -->
                            <div class="mb-4">
                                <h6>New Assignment</h6>
                                <div class="row g-3"> <!-- g-3 adds gap between columns -->
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="Course" name="course" required>
                                                <option value="" selected disabled>Choose a course</option>
                                                <option value="CSA01 - Data Structures">CSA01 - Data Structures</option>
                                                <option value="CSA02 - Big Data">CSA02 - Big Data</option>
                                            </select>
                                            <label for="Institution">Select Course</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="Academic" name="academic" required>
                                                <option value="" selected disabled>Choose a year</option>
                                                <option value="2025-2024">2025-2024</option>
                                                <option value="2024-2023">2024-2023</option>
                                            </select>
                                            <label for="Institution">Academic Year</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" id="Faculty" name="faculty" required>
                                                <option value="" selected disabled>Choose Faculty</option>
                                                <option value="Dr. Ambedkar">Dr. Ambedkar</option>
                                                <option value="Prof. Gandhi">Prof. Gandhi</option>
                                            </select>
                                            <label for="Faculty">Select Faculty</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" id="saveCourseBtn">Save Assignment</button>
                    </form>
                </div>

                <div class="card-custom shadow mt-4 p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="m-0">Historical Assignments</h5>

                        <div class="d-flex align-items-center flex-grow-1 justify-content-end ms-4">
                            <label for="filterDate" class="me-2 fw-semibold">Filter by Date:</label>
                            <input type="date" id="filterDate" class="form-control w-auto">
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle" style="text-align:center;" id="coursesTable">
                            <thead class="table-light">
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Coordinator</th>
                                    <th>Department</th>
                                    <th>Bio ID</th>
                                    <th>Assigned Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="coursesTableBody">
                                <!-- Courses will be loaded here -->
                                <tr>
                                    <td>CS101</td>
                                    <td>Introduction to Programming</td>
                                    <td>Dr. John Smith</td>
                                    <td>Computer Science</td>
                                    <td>BIO001</td>
                                    <td>2024-08-01</td>
                                    <td><a href="course_manager.php"><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editcourse">View Course</button></a></td>

                                </tr>
                                <tr>
                                    <td>CS101</td>
                                    <td>Introduction to Programming</td>
                                    <td>Dr. John Smith</td>
                                    <td>Computer Science</td>
                                    <td>BIO001</td>
                                    <td>2024-08-01</td>
                                    <td><a href="course_manager.php"><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editcourse">View Course</button></a></td>

                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>