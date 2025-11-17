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

                    <form action="">
                        <div class="card-custom shadow mt-4 p-4">
                            <h5 class="text-center mb-4">Course Master</h5>

                            <div class="mb-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Program" name="program" required>
                                                <option value="" selected disabled>Choose a Program</option>
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Information Technology">Information Technology</option>
                                                <option value="Electronics And Communication">Electronics And Communication</option>
                                            </select>
                                            <label for="Program">Select Program</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Academic" name="academic" required>
                                                <option value="" selected disabled>Choose Academic Year</option>
                                                <option value="2025 - 2024">2025 - 2024</option>
                                                <option value="2024 - 2023">2024 - 2023</option>
                                            </select>
                                            <label for="Academic">Academic Year</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- EXISTING COURSES SECTION (Hidden Initially) -->
                    <div class="card-custom mt-4 p-4 d-none" id="coursesSection">

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-4">Existing Courses</h5>

                            <div class="mb-3 w-25">
                                <input type="text" id="courseSearch" class="form-control" placeholder="Search courses...">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle text-center" id="coursesTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>S No</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody id="coursesTableBody">
                                    <tr>
                                        <td>1.</td>
                                        <td>CS101</td>
                                        <td>Introduction to Programming</td>
                                        <td>Program Core</td>
                                    </tr>

                                    <tr>
                                        <td>2.</td>
                                        <td>CS102</td>
                                        <td>Data Structures</td>
                                        <td>University Core</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-3">
                            <button class="btn btn-success" id="addCourseBtn">+ Add Course</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <!-- ADD COURSE MODAL -->
    <div class="modal fade" id="addCourseModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Add New Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="courseCode" placeholder="Course Code">
                        <label for="courseCode">Course Code</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="courseName" placeholder="Course Name">
                        <label for="courseName">Course Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" id="courseType">
                            <option value="P" selected disabled>Select Course Type</option>
                            <option value="Program Core">Program Core</option>
                            <option value="University Core">University Core</option>
                        </select>
                        <label for="courseType">Course Type</label>
                    </div>

                    <!-- Grade Type Radio Buttons -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Grade Type</label>
                        <div class="d-flex gap-4">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gradeType" id="cgpa" value="CGPA" checked>
                                <label class="form-check-label" for="cgpa">
                                    CGPA
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gradeType" id="noncgpa" value="Non-CGPA">
                                <label class="form-check-label" for="noncgpa">
                                    Non-CGPA
                                </label>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="modal-footer">
                    <button class="btn btn-primary">Save Course</button>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const program = document.getElementById("Program");
        const academic = document.getElementById("Academic");
        const section = document.getElementById("coursesSection");

        function checkDropdowns() {
            if (program.value !== "" && academic.value !== "") {
                section.classList.remove("d-none");
            } else {
                section.classList.add("d-none");
            }
        }

        program.addEventListener("change", checkDropdowns);
        academic.addEventListener("change", checkDropdowns);

        // Show modal
        document.getElementById("addCourseBtn").addEventListener("click", function() {
            let modal = new bootstrap.Modal(document.getElementById("addCourseModal"));
            modal.show();
        });
    </script>
</body>

</html>