<!DOCTYPE html>
<html lang="en">
<?php include "../includes/auth_faculty.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

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
                           <a href="dashboard.php"> <li><button class="dropdown-item w-100 text-start">Dashboard</button></li></a>
                           <a href="overall_assignments.php"><li><button class="dropdown-item w-100 text-start">Assignments</button></li></a> 
                           <a href="courses.php"><li><button class="dropdown-item w-100 text-start">Courses</button></li></a> 

                            <a href="../index.php"><li><button class="dropdown-item w-100 text-start text-danger">Logout</button></li></a>
                        </ul>
                    </div>
                </div>
                <div class="user-profile">
                    <img src="../images/<?php echo $profile; ?>" alt="Dr. Emily Rodriguez" class="profile-pic">
                    <div class="user-details">
                      <div class="name"> <?php echo htmlspecialchars($_SESSION['name'] ?? ''); ?></div>

                        <div class="info">
                            <span class="id">Faculty ID: <?php echo htmlspecialchars($_SESSION['regno'] ?? ''); ?></span>
                            &bull;
                            <span class="dept"><?php echo $department;?></span>
                        </div>
                    </div>
                </div>

                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

                <nav class="tabs-nav">
                    <a href="dashboard.php" class="tab <?php if ($current_page == 'dashboard.php')
                                                            echo 'active'; ?>">Dashboard</a>
                    <!-- <a href="assignments.php" class="tab <?php if ($current_page == 'assignments.php')
                                                                echo 'active'; ?>">
                        Assignments
                        <span class="badge">5</span>
                    </a> -->
                    <a href="courses.php" class="tab <?php if ($current_page == 'courses.php')
                                                            echo 'active'; ?>">Courses</a>
                </nav>

                <!-- Courses Section -->
                <div class="courses-section p-3">
                    <!-- <div class="courses-header d-flex justify-content-between align-items-center mb-1">
                        <h6>Your Courses</h6>
                        <a href="add-courses.php"><button class="btn" style="background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                        color: white;
                        border: 1px solid rgba(0, 0, 0, 0.2);
                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                                   "><i class="bi bi-plus"></i>
                                Add Course</button></a>
                    </div> -->

                    <div class="course-list" id="facultyCourseList">
                        <p class="text-muted text-center">Loading courses...</p>
                    </div>
                </div>



            </div>
        </div>
    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const courseContainer = document.getElementById("facultyCourseList");

            // Fetch courses for current faculty
            fetch("api/faculty_courses.php")
                .then(res => res.json())
                .then(response => {
                    console.log("API Response:", response);

                    if (response.status === "success" && response.data.length > 0) {
                        let html = "";

                        response.data.forEach(course => {
                            html += `
                        <div class="course-item d-flex justify-content-between align-items-center p-3 rounded shadow-sm mb-2 bg-light"
                             data-launch-id="${course.launch_id}"
                             style="cursor:pointer;">
                            <div>
                                <h6 class="mb-1">${course.course_code}: ${course.course_name}</h6>
                                <small class="text-muted">${course.student_count || 0} Students</small>
                            </div>
                            <div class="text-end">
                                <small class="text-secondary d-block mb-2">${course.schedule || "No Schedule"}</small>
                                <a href="courses-detail.php?launch_id=${course.launch_id}" 
                                   class="btn btn-outline-secondary btn-sm">Manage</a>
                            </div>
                        </div>
                    `;
                        });

                        courseContainer.innerHTML = html;

                        // Optional: Click on full course card
                        courseContainer.querySelectorAll(".course-item").forEach(card => {
                            card.addEventListener("click", function(e) {
                                // Avoid double triggering if Manage button clicked
                                if (e.target.tagName.toLowerCase() === "a") return;
                                const launchId = this.dataset.launchId;
                                window.location.href = `courses-detail.php?launch_id=${launchId}`;
                            });
                        });

                    } else {
                        courseContainer.innerHTML = `
                    <p class="text-muted text-center">No courses found for your account.</p>
                `;
                    }
                })
                .catch(error => {
                    console.error("Error loading courses:", error);
                    courseContainer.innerHTML = `
                <p class="text-danger text-center">Failed to load courses. Please try again later.</p>
            `;
                });
        });
    </script>

</body>

</html>