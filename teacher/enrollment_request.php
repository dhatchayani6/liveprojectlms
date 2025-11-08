<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <!-- Add this in your <head> if not already included -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">



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

    <main class="dashboard-main">
        <div class="content-container">
            <div class="profile-area">
                <!-- Header -->
                <div class="header d-flex justify-content-between p-3 align-items-center bg-primary text-white">
                    <h5 class="mb-0">Viana Study</h5>

                    <!-- Hamburger Dropdown -->
                    <div class="dropdown">
                        <button class="btn p-0 border-0" type="button" id="profileDropdown" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="d-flex flex-column justify-content-between" style="height: 18px;">
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                                <span style="display:block; height:2px; width:20px; background-color:#fff;"></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><button class="dropdown-item w-100 text-start">Dashboard</button></li>
                            <li><button class="dropdown-item w-100 text-start">Assignments</button></li>
                            <li><button class="dropdown-item w-100 text-start">Courses</button></li>
                            <li><a href="../index.php" class="dropdown-item text-danger">Logout</a></li>
                        </ul>
                    </div>

                </div>
                <div class="user-profile">
                    <img src="../images/image.png" alt="Dr. Emily Rodriguez" class="profile-pic">
                    <div class="user-details">
                        <div class="name">Dr. <?php echo htmlspecialchars($_SESSION['name'] ?? ''); ?></div>

                        <div class="info">
                            <span class="id">Faculty ID: <?php echo htmlspecialchars($_SESSION['regno'] ?? ''); ?></span>
                            &bull;
                            <span class="dept">Medical</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>
                    <!-- Committee Report button (hidden by default) -->
                    <button id="committeeReportBtn" class="d-none">
                        <i class="bi bi-file-bar-graph"></i> Committee Report
                    </button>
                </div>



                <!-- Assignment Cards -->
                <div class="container-fluid py-3">
                    <div class="row gy-3">
                        <div class="container mt-4" id="facultyRequests"></div>
                    </div>
                </div>
            </div>
        </div>



    </main>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            loadPendingApprovals();

            function loadPendingApprovals() {
                $("#facultyRequests").html('<div class="text-center py-3">Loading...</div>');
                $.getJSON("api/faculty_get_pending_students.php", function(res) {
                    if (res.status !== 200) {
                        $("#facultyRequests").html('<div class="text-danger text-center">Error loading approvals</div>');
                        return;
                    }

                    if (res.data.length === 0) {
                        $("#facultyRequests").html('<div class="text-muted text-center">No pending approvals</div>');
                        return;
                    }

                    let html = "";
                    res.data.forEach(item => {
                        const remaining = item.remaining_seats;
                        html += `
          <div class="col-12 mb-3">
            <div class="card p-3 shadow-sm">
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                <div class="d-flex align-items-center gap-3 flex-wrap">
                  <img src="../images/image.png" alt="Student Photo" class="profile-pic"
                       style="width:50px; height:50px; border-radius:50%; object-fit:cover;">
                  <div>
                    <p class="mb-1 fw-semibold text-dark">${item.student_name}  &bull; Reg No: ${item.reg_no}</p>
                    <p class="text-muted mb-1 small">Slot: ${item.slot}</p>
                    <p class="text-muted mb-1 small">Course Code: ${item.course_code}</p>
                    <p class="text-muted mb-1 small">Course Name: ${item.course_name}</p>
                    <p class="text-muted mb-1 small">Department: ${item.department}</p>
                    <p class="text-muted mb-0 small">Remaining Seats: ${remaining} / ${item.seat_allotment}</p>
                  </div>
                </div>

                <div class="d-flex gap-2 flex-shrink-0">
                  <button class="btn btn-sm btn-success approve-btn px-3" data-id="${item.approval_id}" ${remaining === 0 ? "disabled" : ""}>
                    <i class="bi bi-hand-thumbs-up-fill me-1"></i>Accept
                  </button>
                  <button class="btn btn-sm btn-danger reject-btn px-3" data-id="${item.approval_id}">
                    <i class="bi bi-hand-thumbs-down-fill me-1"></i>Reject
                  </button>
                </div>
              </div>
            </div>
          </div>
        `;
                    });

                    $("#facultyRequests").html(html);
                });
            }

            // ✅ Approve
            $(document).on("click", ".approve-btn", function() {
                const id = $(this).data("id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Approving...");
                $.post("api/faculty_update_approval.php", {
                    approval_id: id,
                    action: "approve"
                }, function(res) {
                    if (res.status === 200) {
                        $btn.closest(".card").fadeOut(400, function() {
                            $(this).remove();
                        });
                    } else {
                        alert(res.message);
                        $btn.prop("disabled", false).text("Accept");
                    }
                }, "json");
            });

            // ❌ Reject
            $(document).on("click", ".reject-btn", function() {
                const id = $(this).data("id");
                const $btn = $(this);
                $btn.prop("disabled", true).text("Rejecting...");
                $.post("api/faculty_update_approval.php", {
                    approval_id: id,
                    action: "reject"
                }, function(res) {
                    if (res.status === 200) {
                        $btn.closest(".card").fadeOut(400, function() {
                            $(this).remove();
                        });
                    } else {
                        alert(res.message);
                        $btn.prop("disabled", false).text("Reject");
                    }
                }, "json");
            });
        });
    </script>

</body>

</html>