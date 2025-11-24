<?php include "../includes/auth_faculty.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        a {
            text-decoration: none !important;
        }

        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }

        .sidebar .nav-link {
            color: #495057;
            border-radius: 0.5rem;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f3f5;
        }

        .avatar {
            height: 80px;
            width: 80px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-btn {
            width: 100%;
            text-align: left;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247));
            border: 1px solid rgba(59, 130, 246, 0.5);
        }

        .btn-green {
            background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166));
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .btn-purple {
            background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242));
            border: 1px solid rgba(139, 92, 246, 0.5);
        }

        .btn-orange {
            background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139));
            border: 1px solid rgba(249, 115, 22, 0.5);
        }

        .menu-icon {
            border-radius: 50%;
            padding: 6px;
            margin-right: 8px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

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
    <div class="d-flex">
        <!-- Sidebar -->
        <?php include('sidebar.php'); ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <?php include("header.php"); ?>

            <!-- Dashboard Content -->
            <main class="p-4">
                <div class="container-fluid">
                    <div class="bg-secondary text-dark p-3 rounded-top">
                        <h5 class="mb-0" style="font-size: 1rem; color:white;">Add Student</h5>
                    </div>
                    <div class="p-3 border rounded" id="topicFormSection">
                        <form id="Addstudent">
                            <div class="row g-3">
                                <!-- Course Code -->
                                <div class="col-md-6">
                                    <label for="courseCode" class="form-label">Register Number</label>
                                    <input type="text" placeholder="Enter Register Number" class="form-control" id="reg_no">
                                </div>

                                <!-- Course Name -->
                                <div class="col-md-6">
                                    <label for="courseName" class="form-label">Email</label>
                                    <input type="text" placeholder="Enter Email Address" class="form-control"
                                        id="email">
                                </div>

                                <!-- Department -->
                                <div class="col-md-6">
                                    <label for="department"
                                        class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control"
                                       placeholder="Enter Mobile Number" id="mobile">
                                </div>

                                <!-- Credit Hours -->
                                <div class="col-md-6">
                                    <label for="creditHours" class="form-label">Name</label>
                                    <input type="text" class="form-control"
                                      placeholder="Enter Name"  id="name">
                                </div>

                                <div class="p-3 d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary"
                                        id="btnSaveCourse">Save Changes</button>
                                </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $("#btnSaveCourse").click(function() {

            let reg_no = $("#reg_no").val().trim();
            let email = $("#email").val().trim();
            let mobile = $("#mobile").val().trim();
            let name = $("#name").val().trim();

            if (!reg_no || !email || !mobile || !name) {
                Swal.fire("Required!", "Please fill all fields", "warning");
                return;
            }

            $.ajax({
                url: "api/add_student.php",
                type: "POST",
                data: {
                    reg_no: reg_no,
                    email: email,
                    mobile: mobile,
                    name: name
                },
                dataType: "json",

                beforeSend: function() {
                    $("#btnSaveCourse").prop("disabled", true)
                        .html("Saving...");
                },

                success: function(response) {

                    if (response.status === "success") {
                        Swal.fire({
                            icon: "success",
                            title: "Student Added",
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        });

                        $("#Addstudent")[0].reset(); // Reset form
                    } else if (response.status === "exists") {
                        Swal.fire({
                            icon: "error",
                            title: "Already Exists",
                            text: response.message
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: response.message
                        });
                    }
                },

                error: function() {
                    Swal.fire("Error", "Cannot connect to server!", "error");
                },

                complete: function() {
                    $("#btnSaveCourse").prop("disabled", false)
                        .html("Save Changes");
                }
            });
        });
    </script>


</body>

</html>