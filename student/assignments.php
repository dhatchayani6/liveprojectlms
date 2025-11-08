<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link rel="stylesheet" href="stylesheet/courses.css">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .btn-back-assi {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 160px;
            justify-content: center;
        }

        .content-scroll {
            max-height: 648px !important;
        }


        .summary-card {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
        }

        .content-overflow-scroll {
            overflow-y: scroll;
            height: 100%;
            max-height: 370px;
        }



        .btn-pending {
            background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;

        }

        .btn-submit {
            background: linear-gradient(rgb(182, 240, 200) 0%, rgb(139, 224, 166) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: rgba(16, 185, 129, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-submitted {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;
        }

        .btn-review {
            background: linear-gradient(rgb(168, 213, 255) 0%, rgb(126, 182, 247) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(59, 130, 246, 0.5);
            box-shadow: rgba(59, 130, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: rgb(0, 0, 0);
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 100px;

        }

        .btn-viewfeed {
            background: linear-gradient(rgb(224, 200, 249) 0%, rgb(201, 167, 242) 100%);
            color: rgb(0, 0, 0);
            border: 1px solid rgba(139, 92, 246, 0.5);
            box-shadow: rgba(139, 92, 246, 0.3) 0px 1px 2px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;
            text-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px;
            min-width: 120px;
        }

        small {
            font-size: 0.8rem;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <?php include "header.php"; ?>

            <div class="content-scroll">
                <div class="p-4 min-vh-100">

                    <!-- Back Button -->
                    <a href="dashboard.php"><button class="btn-back-assi mb-3">
                            <i class="bi bi-arrow-left"></i> Back to Dashboard
                        </button></a>

                    <h5 class="mb-3">Your Assignments</h5>

                    <div id="assignmentsContainer"></div>

                </div>
            </div>




        </div>

    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            loadAssignments();

            function loadAssignments() {
                $("#assignmentsContainer").html('<div class="text-center text-muted p-4">Loading...</div>');

                $.getJSON("api/student_assignments.php", function(res) {
                    if (res.status !== 200) {
                        $("#assignmentsContainer").html('<div class="text-danger p-4 text-center">Unable to load assignments.</div>');
                        return;
                    }

                    if (res.data.length === 0) {
                        $("#assignmentsContainer").html('<div class="text-center text-muted p-4">No assignments available.</div>');
                        return;
                    }

                    let html = "";

                    res.data.forEach(item => {
                        const dueDate = item.due_date ? new Date(item.due_date).toISOString().slice(0, 10) : "N/A";
                        const status = item.status || "pending";
                        const marks = item.marks_obtained || 0;

                        let statusBadge = "";
                        let btnLabel = "";
                        let link = "#";

                        // UI logic
                        if (status === "pending") {
                            statusBadge = `<button class="btn btn-pending btn-sm rounded-2" style="width:125px;"><small>Pending</small></button>`;
                            btnLabel = "Submit Now";
                            link = `assignment_pending.php?ass_id=${item.ass_id}`;
                        } else if (status === "submitted" && !marks) {
                            statusBadge = `<button class="btn btn-warning btn-sm rounded-2" style="width:125px;"><small>Submitted</small></button>`;
                            btnLabel = "Review Submission";
                            link = `assignment_submit.php?ass_id=${item.ass_id}`;
                        } else if (status === "feedback" && marks) {
                            statusBadge = `<button class="btn btn-success btn-sm rounded-2" style="width:125px;"><small>Grade - ${marks}</small></button>`;
                            btnLabel = "View Feedback";
                            link = `assignment_feedback.php?ass_id=${item.ass_id}`;
                        }

                        html += `
                    <a href="${link}" class="text-decoration-none">
                        <div class="card mb-3" style="border-radius:10px;border:none;
                            background:linear-gradient(#f9f9f9 0%, #e8e8e8 100%);
                            box-shadow:rgba(255,255,255,0.8)0px 1px 0px inset,rgba(0,0,0,0.1)0px 1px 2px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-1 fw-bold">${item.title}</h6>
                                    ${statusBadge}
                                </div>
                                <div>
                                    <p class="mb-1 text-muted">${item.course_name}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">Due: ${dueDate}</small>
                                    <button class="btn btn-submit btn-sm rounded-2" style="width:125px;">
                                        <small>${btnLabel}</small>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>`;
                    });

                    $("#assignmentsContainer").html(html);
                });
            }
        });
    </script>

</body>

</html>