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
        a {
            text-decoration: none;
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


                    <!-- Courses Table -->
                    <div class="card-custom shadow mt-4 p-4">
                        <h5 class="mb-4">Courses List</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle" id="coursesTable">
                                <thead class="table-light">
                                    <tr>
                                        <th>S no</th>
                                        <th>Course Name</th>
                                        <th>Course Code</th>
                                        <th>Course Category</th>
                                        <th>Components (Max / Pass Marks)</th>
                                        <th>Passing Criteria</th>
                                    </tr>
                                </thead>
                                <tbody id="coursesApproveReject"></tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function loadAllCourses() {
            $.get("api/get_all_courses_full.php", function(res) {

                console.log("API response:", res); // <-- Debug

                if (!res.status) {
                    $("#coursesApproveReject").html("<tr><td colspan='6'>No courses found</td></tr>");
                    return;
                }

                let html = "";

                res.courses.forEach(c => {

                    let compStr = "";
                    if (Array.isArray(c.components)) {
                        c.components.forEach(comp => {
                            compStr += `${comp.name}: ${comp.max_marks} (${comp.passing_marks} pass)<br>`;
                        });
                    } else {
                        compStr = "-";
                    }

                    let pcStr = "";
                    if (Array.isArray(c.passing_criteria)) {
                        c.passing_criteria.forEach(pc => {
                            let compsJson = pc.component_list;

                            // ✅ If string, parse. If already object, use directly
                            if (typeof compsJson === "string") {
                                try {
                                    compsJson = JSON.parse(compsJson);
                                } catch (e) {}
                            }

                            if (typeof compsJson === "object") {
                                let parts = [];
                                for (const key in compsJson) {
                                    parts.push(`${key}: ${compsJson[key]}`);
                                }
                                pcStr += `${parts.join(", ")} → Min: ${pc.required_marks}/${pc.total_marks}<br>`;
                            }
                        });
                    } else {
                        pcStr = "-";
                    }

                    html += `
                        <tr>
                            <td>${c.sno}</td>
                            <td>${c.course_name}</td>
                            <td>${c.course_code}</td>
                            <td>${c.course_category}</td>
                            <td>${compStr}</td>
                            <td>${pcStr}</td>
                        </tr>`;
                });


                $("#coursesApproveReject").html(html);
            });
        }

        loadAllCourses();
    </script>


</body>

</html>