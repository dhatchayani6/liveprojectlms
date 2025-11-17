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

                            <div class="mb-4">
                                <h6>Add New Program</h6>
                                <div class="row g-3">

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select class="form-select" id="Institution" name="institution" required>
                                                <option value="" selected disabled>Select Institution</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Medical">Medical</option>
                                            </select>
                                            <label for="Institution">Select Institution</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="Program" class="form-control"
                                                placeholder="Enter Program name">
                                            <label for="Program">Enter Program</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" id="ProgramCode" class="form-control"
                                                placeholder="Enter Program Code">
                                            <label for="ProgramCode">Program Code</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-4">Program Outcomes</h6>
                                            <button class="btn btn-success" id="addoutcomebtn"> + Add Outcome</button>
                                        </div>
                                    </div>


                                    <div class="col-md-12" id="outcomeContainer">
                                        <span id="poWarning" style='color:red;'>
                                            * At least one program outcome is required
                                        </span>
                                        <!-- <div class="d-flex align-items-center">

                                            <span class="badge bg-primary me-2">PO1</span>

                                            <div class="form-floating flex-grow-1">
                                                <input type="text" id="outcome" class="form-control" placeholder="Enter outcome description">
                                                <label for="outcome">Outcome Description</label>
                                            </div>

                                            <button type="button" class="btn btn-danger ms-2">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <button class="btn btn-primary w-100" id="saveCourseBtn">Save Program</button>
                            </div> -->
                            <div class="text-center">
                                <button class="btn btn-primary" id="saveCourseBtn">Save Program</button>
                            </div>



                    </form>
                </div>

                <div class="card-custom shadow mt-4 p-4">
                    <div class="d-flex justify-content-between">
                        <h5 class="mb-4">Existing Program</h5>

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
                                    <th>Program Code</th>
                                    <th>Program Name</th>
                                    <th>outcomes</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="coursesTableBody">
                                <tr>
                                    <td>1.</td>
                                    <td>Engineering</td>
                                    <td>CS</td>
                                    <td>Computer Science</td>
                                    <td>2 Outcomes</td>
                                    <td> <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editcourse"><i class="bi bi-pencil"></i> Edit</button></td>

                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Engineering</td>
                                    <td>CS</td>
                                    <td>Computer Science</td>
                                    <td>2 Outcomes</td>
                                    <td> <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editcourse"><i class="bi bi-pencil"></i> Edit</button></td>

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

    <!-- Outcome List -->
    <script>
        let outcomeCount = 0;

        document.getElementById("addoutcomebtn").addEventListener("click", function(e) {
            e.preventDefault();

            outcomeCount++;

            // hide warning when adding first item
            document.getElementById("poWarning").style.display = "none";

            const container = document.getElementById("outcomeContainer");

            const row = document.createElement("div");
            row.className = "col-md-12 mb-3 po-item";
            row.innerHTML = `
            <div class="d-flex align-items-center outcome-row">

                <span class="badge bg-primary me-2">PO${outcomeCount}</span>

                <div class="form-floating flex-grow-1">
                    <input type="text" name="outcome[]" class="form-control" placeholder="Enter outcome description">
                    <label>Outcome Description</label>
                </div>

                <button type="button" class="btn btn-danger ms-2 deleteOutcome">
                    <i class="bi bi-trash"></i>
                </button>

            </div>
        `;

            container.appendChild(row);
        });

        // delete outcome
        document.addEventListener("click", function(e) {
            if (e.target.closest(".deleteOutcome")) {
                e.target.closest(".po-item").remove();

                // check if no outcome items remain -> show warning
                const remaining = document.querySelectorAll(".po-item").length;

                if (remaining === 0) {
                    document.getElementById("poWarning").style.display = "inline";
                }
            }
        });
    </script>



</body>

</html>