<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

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
        .bi-book::before {
            color: #000 !important;

        }

        .bi-book {
            background: rgba(59, 130, 246, 0.15);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-file-earmark-text {
            background: rgba(16, 185, 129, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-check2-circle {
            background: rgba(139, 92, 246, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        .bi-calendar3 {
            background: rgba(249, 115, 22, 0.15);
            color: rgb(0, 0, 0);
            padding: 7px;
            border-radius: 53%;
            font-size: medium !important;
        }

        button {
            background-color: lightgray;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 1s ease-out, transform 1s ease-out;
        }

        button:hover {
            background-color: lightgreen;
            transform: scale(1.02);
            transition: transform 0.2s ease, background-color 0.2s ease;
            /* smooth effect */
        }


        .fs-6 {
            font-size: 0.8rem !important;
        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <?php include ("header.php") ?>

            <div class="p-3">
                <!-- Notifications -->
                <div class="rounded border">
                    <!-- <div class="notifications  p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small>Notifications</small>
                            <small class="text-primary fw-semibold">• 3 new</small>
                        </div>

                 

                        <a href="notification_assignments.php">
                            <div class="notification-card mb-2 rounded border p-2"
                                style="background: linear-gradient(rgb(246, 249, 255), rgb(237, 243, 255)); border: 1px solid rgba(79, 129, 251, 0.2); box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px;">
                                <div class="d-flex gap-2">
                                    <div class="p-2 rounded-circle d-flex align-items-center justify-content-center"
                                        style="background: linear-gradient(rgb(219, 231, 255), rgb(196, 215, 255)); 
                                                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px; 
                                                        border: 1px solid rgba(79, 129, 251, 0.3); width: 32px; height: 32px;">
                                                                                    <i class="bi bi-file-text" style="    --tw-text-opacity: 1;
                                                color: rgb(37 99 235 / var(--tw-text-opacity, 1));"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small class="mb-0 text-dark "> Data Science Project Review</small>
                                        <small class="text-muted fs-6">Pending Student Submissions</small>
                                        <small class="text-dark"><i class="bi bi-clock "></i> Due: 2023-11-15</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                
                        <a href="notification_schedule.php" class="text-dark">
                            <div class="notification-card mb-2 rounded border p-2" style="background: linear-gradient(rgb(255, 249, 246), rgb(255, 244, 237)); 
                                    border: 1px solid rgba(251, 146, 79, 0.2); 
                                    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px;">
                                <div class="d-flex gap-2">
                                    <div class="p-2 rounded-circle d-flex align-items-center justify-content-center"
                                        style="background: linear-gradient(rgb(255, 230, 210), rgb(255, 210, 180)); 
                                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px; 
                                            border: 1px solid rgba(251, 146, 79, 0.3); width: 32px; height: 32px;">
                                        <i class="bi bi-bell text-warning"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small class="mb-0">Midterm Exam Schedule Posted</small>
                                        <small class="text-muted fs-6">Database Systems - Faculty Allocation</small>
                                        <small><i class="bi bi-clock"></i> Posted: 2023-11-10</small>
                                    </div>
                                </div>
                            </div>
                        </a>    

                  
                        <a href="notification_assignments.php" class="text-dark">
                            <div class="notification-card rounded border p-2" style="background: linear-gradient(rgb(246, 249, 255), rgb(237, 243, 255)); 
                                    border: 1px solid rgba(79, 129, 251, 0.2); 
                                    box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 2px;">
                                <div class="d-flex gap-2">
                                    <div class="p-2 rounded-circle d-flex align-items-center justify-content-center"
                                        style="background: linear-gradient(rgb(219, 231, 255), rgb(196, 215, 255)); 
                                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.1) 0px 1px 2px; 
                                            border: 1px solid rgba(79, 129, 251, 0.3); width: 32px; height: 32px;">
                                        <i class="bi bi-people text-primary"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <small class="mb-0">Algorithm Evaluation Meeting</small>
                                        <small class="text-muted fs-6">Scheduled Faculty Discussion</small>
                                        <small><i class="bi bi-clock"></i> Date: 2023-11-20</small>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div> -->
                </div>

                <div class="rounded border mt-3">
                    <!-- Faculty Menu -->
                    <div class="menu-section d-flex flex-column p-4 gap-2  ">
                        <a href="courses.php">
                            <button class="menu-btn menu-courses p-4 rounded  w-100 text-start"
                                style="background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247)); border: 1px solid rgba(59, 130, 246, 0.5); box-shadow: rgba(59, 130, 246, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
                                <i class="bi bi-book "></i> Course
                            </button>
                        </a>
                        <a href="assignments.php">
                            <button class="menu-btn menu-assignments p-4 rounded  w-100 text-start"
                                style="background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166)); border: 1px solid rgba(16, 185, 129, 0.5); box-shadow: rgba(16, 185, 129, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
                                <i class="bi bi-file-earmark-text" style="background: rgba(16, 185, 129, 0.15);
                                color: rgb(0, 0, 0);"></i> Assignments
                            </button>
                        </a>
                        <!-- <a href="transcripts.php">
                            <button class="menu-btn menu-grading p-4 rounded  w-100 text-start"
                                style="background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242)); border: 1px solid rgba(139, 92, 246, 0.5); box-shadow: rgba(139, 92, 246, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
                                <i class="bi bi-check2-circle"></i> Transcripts
                            </button>
                        </a>
                        <a href="schedule.php">
                            <button class="menu-btn menu-research p-4 rounded  w-100 text-start"
                                style="background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139)); border: 1px solid rgba(249, 115, 22, 0.5); box-shadow: rgba(249, 115, 22, 0.3) 0px 2px 4px, rgba(255, 255, 255, 0.6) 0px 1px 0px inset;">
                                <i class="bi bi-calendar3"></i> Schedule
                            </button>
                        </a> -->
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>