<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Material Symbols Outlined -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <style>

        .glass-box {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 18px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            padding: 25px;
            width: 100%;
            color: #333;
            margin:10px;
            
        }

        .courses-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .courses-header h2 {
            font-size: 1.3rem;
            margin: 0;
            color: #333;
        }

        .notification-count {
            background: #e0e0ff;
            color: #5a55ff;
            border-radius: 50px;
            padding: 2px 10px;
            font-size: 0.8rem;
        }

    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container">
            <div class="profile-area">
                <div
                    class="header d-flex justify-content-between p-4 align-items-center position-relative bg-primary text-white">
                    <h5 class="mb-0">Viana Study</h5>

                    <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="profileDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex flex-column justify-content-between " style="height: 18px;">
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><button class="dropdown-item w-100 text-start">Dashboard</button></li>
                            <li><button class="dropdown-item w-100 text-start">Assignments</button></li>
                            <li><button class="dropdown-item w-100 text-start">Courses</button></li>

                            <li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li>
                        </ul>
                    </div>
                </div>
                
                <div class="user-profile">
                    <img src="../images/student.avif" alt="Dr. Emily Rodriguez" class="profile-pic">
                    <div class="user-details">
                        <div class="name">Aakash Ranga</div>
                        <div class="info">
                            <span class="id">Student ID: 1234567890</span>
                            &bull;
                            <span class="dept">3rd year</span>
                        </div>
                    </div>
                </div>

                <div class="glass-box">

                    <div class="courses-header">
                        <h2>Notifications</h2>
                        <div class="card-action">
                            <span class="notification-count">3 new</span>
                        </div>
                    </div>

                    <div class="assignments-card">
                        <div class="card-icon"><span class="material-icons">assignment</span></div>
                        <div class="card-content">
                            <a href="overall_assignments.php" class="text-decoration-none">
                                <div class="card-title">Data Science Project Due</div>
                            </a>
                            <div class="card-subtitle">Introduction to Data Science</div>
                            <div class="card-subtitle"><i class="bi bi-clock"></i> Due : 2025-11-26</div>
                        </div>
                    </div>

                    <div class="assignments-card">
                        <div class="card-icon"><span class="material-symbols-outlined">notifications</span></div>
                        <div class="card-content">
                            <a href="overall_assignments.php" class="text-decoration-none">
                                <div class="card-title">Mid Term Exam Schedule</div>
                            </a>
                            <div class="card-subtitle">Database System</div>
                            <div class="card-subtitle"><i class="bi bi-clock"></i> Posted : 2025-11-26</div>
                        </div>
                    </div>

                    <div class="assignments-card">
                        <div class="card-icon"><span class="material-icons">assignment</span></div>
                        <div class="card-content">
                            <a href="overall_assignments.php" class="text-decoration-none">
                                <div class="card-title">Algorithm Analysis</div>
                            </a>
                            <div class="card-subtitle">Algorithms</div>
                            <div class="card-subtitle"><i class="bi bi-clock"></i> Due : 2025-11-26</div>
                        </div>
                    </div>

                </div>

                <div class="courses-section">
                    <div class="courses-header">
                        <h2>Active Courses</h2>
                        <button class="view-all-btn">View All</button>
                    </div>

                    <div class="course-list">
                        <a href="courses.php">
                            <div class="course-item">
                                <div class="course-details">
                                    <div class="course-name">CS1234: Introduction to Data Science</div>
                                    <div class="student-count">35 Students</div>
                                </div>
                                <div class="course-time">Mon, Wed &bull; 10:00 - 11:30 AM</div>
                            </div>
                        </a>

                        <div class="course-item">
                            <div class="course-details">
                                <div class="course-name">CS2345: Database Systems</div>
                                <div class="student-count">28 Students</div>
                            </div>
                            <div class="course-time">Tue, Thu &bull; 1:00 - 2:30 PM</div>
                        </div>

                        <div class="course-item">
                            <div class="course-details">
                                <div class="course-name">CS3456: Algorithms</div>
                                <div class="student-count">32 Students</div>
                            </div>
                            <div class="course-time">Wed, Fri &bull; 3:00 - 4:30 PM</div>
                        </div>
                    </div>
                </div>
                <div class="action-footer">
                    <button class="action-btn grade-btn">
                        <span class="material-icons">check_circle_outline</span>
                        Grade Assignments
                    </button>
                    <button class="action-btn add-btn">
                        <span class="material-icons">add</span>
                        Add New Course
                    </button>
                </div>
            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>