<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />


    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">


</head>

<body>
    <?php include('topbar.php') ?>
    <div class="d-flex" style="position: relative;">

        <?php include('sidebar.php') ?>

        <!-- Main Content -->
        <div id="content-area" class="p-4 w-100">

            <div class="row g-4">

                <!-- Header -->
                <div class="col-12 ">
                    <div class="card border-2 rounded-4 p-4 shadow-sm hover-shadow">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class=" mb-0 fs-5">Interview Management

                                </h4>
                                <span>0 pending interviews
                                </span>
                            </div>
                            <div>
                                <button class="btn d-inline-flex align-items-center gap-2 px-4 py-2 text-white"
                                    style="background:#1e293b;">
                                    <i class="bi bi-arrow-repeat"></i>
                                    Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <h5 class="mb-4">Pending Candidates</h5>
                    <div class="col-6">
                        <!-- left column -->
                        <div class="bg-white border rounded-4 p-4 shadow-sm mb-3 candidateCard"
                            onclick="showCandidate('Aditya Bal','9269499055','aditya.bal80@email.com',25,'Automobile Engineering', this)">

                            <div class="d-flex gap-3">

                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                    style="width:55px; height:55px;">
                                    <i class="bi bi-person fs-2 text-secondary"></i>
                                </div>

                                <div>
                                    <h5 class=" mb-1">Aditya Bal</h5>
                                    <div class="small text-muted">
                                        <i class="bi bi-telephone me-1"></i> 9269499055 <br>
                                        <i class="bi bi-envelope me-1"></i> aditya.bal80@email.com
                                    </div>

                                    <div class="mt-2 small text-muted">
                                        Interview: 12/15/2025 | 10:00 AM – 10:30 AM
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="bg-white border rounded-4 p-4 shadow-sm mb-3 candidateCard"
                            onclick="showCandidate('Aakash','9269499055','aditya.bal80@email.com',25,'Automobile Engineering',this)">

                            <div class="d-flex gap-3">

                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                    style="width:55px; height:55px;">
                                    <i class="bi bi-person fs-2 text-secondary"></i>
                                </div>

                                <div>
                                    <h5 class=" mb-1">Aakash</h5>
                                    <div class="small text-muted">
                                        <i class="bi bi-telephone me-1"></i> 8939008355 <br>
                                        <i class="bi bi-envelope me-1"></i> ak@email.com
                                    </div>

                                    <div class="mt-2 small text-muted">
                                        Interview: 12/15/2025 | 10:00 AM – 10:30 AM
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="bg-white border rounded-4 p-4 shadow-sm mb-3 candidateCard"
                            onclick="showCandidate('Aditya Bal','9269499055','aditya.bal80@email.com',25,'Automobile Engineering',this)">

                            <div class="d-flex gap-3">

                                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center"
                                    style="width:55px; height:55px;">
                                    <i class="bi bi-person fs-2 text-secondary"></i>
                                </div>

                                <div>
                                    <h5 class=" mb-1">Aditya Bal</h5>
                                    <div class="small text-muted">
                                        <i class="bi bi-telephone me-1"></i> 9269499055 <br>
                                        <i class="bi bi-envelope me-1"></i> aditya.bal80@email.com
                                    </div>

                                    <div class="mt-2 small text-muted">
                                        Interview: 12/15/2025 | 10:00 AM – 10:30 AM
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <!-- Right Panel (Default State) -->
                        <div id="reviewPanel" class="bg-white border rounded-4 p-5 text-center shadow-sm">

                            <i class="bi bi-person fs-1 text-secondary opacity-50"></i>

                            <h5 class=" text-secondary mt-3">
                                Select a candidate to review interview
                            </h5>

                        </div>


                        <!-- Right Panel (Candidate Details) -->
                        <div id="candidateDetails" class="bg-white border rounded-4 p-4 shadow-sm d-none">

                            <h4 class=" mb-3">Interview Review</h4>

                            <p class="text-uppercase text-muted small fw-semibold mb-1">Candidate Information</p>

                            <div class="mb-3">
                                <div><strong>Name:</strong> <span id="cdName">—</span></div>
                                <div><strong>Phone:</strong> <span id="cdPhone">—</span></div>
                                <div><strong>Email:</strong> <span id="cdEmail">—</span></div>
                                <div><strong>Age:</strong> <span id="cdAge">—</span></div>
                            </div>

                            <p class="text-uppercase text-muted small fw-semibold mb-3">Select Course for Student</p>

                            <div class="alert alert-primary small rounded-3">
                                <i class="bi bi-lightbulb text-warning"></i>
                                <strong> Admin Action:</strong> You will select the final course based on priorities &
                                interview performance.
                            </div>

                            <div id="courseList">

                                <div class="border rounded-3 p-3 mb-3 course-card"
                                    onclick="selectCourse(1, 'Automobile Engineering', '4 Years', this)">
                                    <span class="badge bg-primary-subtle text-primary me-2">#1</span>
                                    Automobile Engineering
                                    <br />
                                    <small class="text-muted">4 Years</small>
                                </div>

                                <div class="border rounded-3 p-3 mb-3 course-card"
                                    onclick="selectCourse(2, 'Computer Science', '4 Years', this)">
                                    <span class="badge bg-primary-subtle text-primary me-2">#2</span>
                                    Computer Science
                                    <br />
                                    <small class="text-muted">4 Years</small>
                                </div>

                                <div class="border rounded-3 p-3 mb-4 course-card"
                                    onclick="selectCourse(3, 'Civil Engineering', '4 Years', this)">
                                    <span class="badge bg-primary-subtle text-primary me-2">#3</span>
                                    Civil Engineering
                                    <br />
                                    <small class="text-muted">4 Years</small>
                                </div>

                            </div>


                            <!-- Buttons -->
                            <div class="d-flex gap-3">
                                <button id="rejectBtn" class="btn reject-btn fw-semibold w-50 text-danger">
                                    <i class="bi bi-x-circle"></i> Reject
                                </button>

                                <button id="approveBtn" class="btn btn-success w-50 fw-semibold" disabled>
                                    <i class="bi bi-check2-circle"></i> Approve & Assign Course
                                </button>

                            </div>

                        </div>
                    </div>

                </div>


                <!-- Program Card -->
                <div class="col-12">
                    <div class="bg-white border rounded-4 p-5 text-center shadow-sm mt-3">

                        <!-- Icon -->
                        <i class="bi bi-camera-video text-secondary" style="font-size:4rem;"></i>

                        <!-- Heading -->
                        <h3 class=" text-dark mt-3 mb-2">No Pending Interviews</h3>

                        <!-- Sub Text -->
                        <p class="text-muted mb-4">All interviews have been completed</p>

                        <!-- Refresh Button -->
                        <button class="btn d-inline-flex align-items-center gap-2 px-4 py-2 text-white"
                            style="background:#1e293b;">
                            <i class="bi bi-arrow-repeat"></i>
                            Refresh List
                        </button>

                    </div>



                </div>
            </div>

        </div>
    </div>





    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- left card -->
    <script>
        function showCandidate(name, phone, email, age, course, element) {
            // Remove highlight from all cards
            document.querySelectorAll('.candidateCard').forEach(card => {
                card.classList.remove('selected-card');
            });

            // Add highlight to the clicked card
            element.classList.add('selected-card');

            // hide placeholder
            document.getElementById("reviewPanel").classList.add("d-none");

            // show details block
            document.getElementById("candidateDetails").classList.remove("d-none");

            // fill dynamic values
            document.getElementById("cdName").textContent = name;
            document.getElementById("cdPhone").textContent = phone;
            document.getElementById("cdEmail").textContent = email;
            document.getElementById("cdAge").textContent = age;
            document.getElementById("cdCourse").textContent = course;
        }
    </script>

    <script>
        let selectedCourse = null;

        function selectCourse(id, name, duration, element) {

            // deselect if clicking again
            if (selectedCourse === id) {
                selectedCourse = null;
                element.classList.remove('course-selected');
                document.getElementById("approveBtn").disabled = true;
                return;
            }

            selectedCourse = id;

            // Remove selection from all cards
            document.querySelectorAll('.course-card').forEach(card => {
                card.classList.remove('course-selected');
            });

            // Apply purple selection highlight
            element.classList.add('course-selected');

            // Enable approve button
            document.getElementById("approveBtn").disabled = false;

            // You can store selected course details if needed
            window.selectedCourseDetails = {
                id: id,
                name: name,
                duration: duration
            };
        }
    </script>





</body>

</html>