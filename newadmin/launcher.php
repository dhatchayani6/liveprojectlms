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
        .content-scroll {
            height: calc(100vh - 7px);
            overflow-y: auto;
            padding-right: 10px;
        }

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

        .form-c-select {
            --bs-form-select-bg-img: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e);
            display: block;
            width: 100%;
            padding: .375rem 2.25rem .375rem .75rem;
            font-size: 1rem;
            font-weight: 100;
            line-height: 1.5;
            color: var(--bs-body-color);
            /* -webkit-appearance: none; */
            -moz-appearance: none;

            background-color: var(--bs-body-bg);
            background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
            background-repeat: no-repeat;
            background-position: right .75rem center;
            background-size: 16px 12px;
            border: var(--bs-border-width) solid var(--bs-border-color);
            border-radius: var(--bs-border-radius);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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

                <div class="p-4 content-scroll">

                    <!-- TOP SELECTION FORM -->
                    <form action="">
                        <div class="card-custom shadow mt-4 p-4">
                            <h5 class="text-center mb-4">Institution Master</h5>

                            <div class="mb-4">
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Institution" required>
                                                <option value="" disabled selected>Choose an Institution</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Medical">Medical</option>
                                            </select>
                                            <label for="Institution">Select Institution</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Slots" required>
                                                <option value="" disabled selected>Choose a slot</option>
                                                <option value="1">1 Slot</option>
                                                <option value="2">2 Slots</option>
                                                <option value="3">3 Slots</option>
                                                <option value="4">4 Slots</option>
                                                <option value="5">5 Slots</option>
                                                <option value="6">6 Slots</option>
                                            </select>
                                            <label for="Slots">Number of slots</label>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Program" name="program" required>
                                                <option value="" selected disabled>Choose a program</option>
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            </select>
                                            <label for="Program">Select Program</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" id="Department" name="department" required>
                                                <option value="" selected disabled>Choose a department</option>
                                                <option value="Software Engineering">Software Engineering</option>
                                                <option value="AI & ML">AI & ML</option>
                                            </select>
                                            <label for="Department">Select Department</label>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- FACULTY TABLE (HIDDEN INITIALLY) -->
                    <div class="card-custom shadow mt-4 p-4 d-none" id="facultySection">

                        <h5 class="mb-4">Faculty Course Assignment</h5>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle text-center">
                                <thead class="table-light" id="facultyHeader">
                                    <tr>
                                        <th>S No</th>
                                        <th>Faculty Name</th>
                                        <!-- Dynamic Slot Columns Here -->
                                    </tr>
                                </thead>

                                <tbody id="facultyBody">
                                    <tr>
                                        <td>1.</td>
                                        <td>DR. John</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>DR. Sarah</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- SLOT DATE TABLES (GENERATED DYNAMICALLY) -->
                    <div id="slotDatesContainer" class="mt-4"></div>

                    <!-- Launch Button (Optional) -->
                    <button class="btn btn-primary mt-4 d-none" id="saveCourseBtn">Launch Course</button>
                </div>
            </div>




        </div>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ======================= -->
    <!--      JAVASCRIPT         -->
    <!-- ======================= -->

    <script>
        document.getElementById("Slots").addEventListener("change", function() {

            const slotCount = parseInt(this.value);
            const facultySection = document.getElementById("facultySection");
            const saveButton = document.getElementById("saveCourseBtn");
            const facultyHeader = document.getElementById("facultyHeader").querySelector("tr");
            const facultyBody = document.getElementById("facultyBody");
            const slotDatesContainer = document.getElementById("slotDatesContainer");

            // SHOW SECTIONS
            facultySection.classList.remove("d-none");
            saveButton.classList.remove("d-none");

            // CLEAR previous headers & slot cards
            facultyHeader.innerHTML = `
        <th>S No</th>
        <th>Faculty Name</th>
    `;
            slotDatesContainer.innerHTML = "";

            // Slot names (A, B, C, D, E, F)
            const slotNames = ["A", "B", "C", "D", "E", "F"];

            // Add slot headers
            for (let i = 0; i < slotCount; i++) {
                facultyHeader.innerHTML += `<th>Slot ${slotNames[i]}</th>`;
            }

            // Update each faculty row
            const rows = facultyBody.querySelectorAll("tr");
            rows.forEach((row) => {
                // Keep only first two cells (S No + Faculty Name)
                row.innerHTML = row.children[0].outerHTML + row.children[1].outerHTML;

                // Add new slot cells
                for (let i = 0; i < slotCount; i++) {
                    row.innerHTML += `
                <td>
                    <select class="form-select">
                        <option selected disabled>None</option>
                        <option>CS101 – Programming</option>
                        <option>CS102 – Data Structures</option>
                    </select>
                </td>
            `;
                }
            });

            // Generate Slot Date Cards
            for (let i = 0; i < slotCount; i++) {
                slotDatesContainer.innerHTML += `
            <div class="card-custom shadow mt-4 p-4">
                <h5 class="mb-4">Slot ${slotNames[i]}</h5>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Exam Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="date" class="form-control"></td>
                                <td><input type="date" class="form-control"></td>
                                <td><input type="date" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        `;
            }
        });
    </script>
</body>

</html>