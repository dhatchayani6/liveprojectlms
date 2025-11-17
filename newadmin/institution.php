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
                            <h5 class="text-center mb-4">Institution Master</h5>

                            <!-- Course Details -->
                            <div class="mb-4">
                                <h6>Institution Name</h6>
                                <div class="row g-3"> <!-- g-3 adds gap between columns -->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="InstitutionName" class="form-control"
                                                placeholder="Enter Institution name">
                                            <label for="InstitutionName">Enter Institution Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="InstitutionCode" class="form-control"
                                                placeholder="Enter Institution Code">
                                            <label for="InstitutionCode">Institution Code</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" id="saveCourseBtn">Add Institution</button>
                    </form>
                </div>

                <div class="card-custom shadow mt-4 p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-4">Existing Institution</h5>

                        <!-- 🔍 Search Box -->
                        <div class="mb-3">
                            <input type="text" id="courseSearch" class="form-control"
                                placeholder="Search courses...">
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle" style="text-align:center;" id="coursesTable">
                            <thead class="table-light">
                                <tr>
                                    <th>S No</th>
                                    <th>Institution</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="coursesTableBody">
                                <!-- Courses will be loaded here -->
                                <tr>
                                    <td>1.</td>
                                    <td>Medicine</td>
                                    <td>MED</td>
                                    <td><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>

                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Engineering</td>
                                    <td>ENG</td>
                                    <td><button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>

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