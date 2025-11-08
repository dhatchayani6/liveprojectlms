<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Viana Study - Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


    <style>
        body {
            background: repeating-linear-gradient(to right, rgba(138, 198, 242, 0.3) 0px, rgba(138, 198, 242, 0.3) 1px, rgba(164, 216, 245, 0.4) 1px, rgba(164, 216, 245, 0.4) 2px, rgba(180, 226, 247, 0.45) 2px, rgba(180, 226, 247, 0.45) 3px, rgba(164, 216, 245, 0.4) 3px, rgba(164, 216, 245, 0.4) 4px) 0% 0% / 8px 100%;
        }

        .header {
            background-color: #1a73e8;
            color: white;
            padding: 15px 20px;
        }

        .container {
            max-width: 64rem !important;
            height: 100%;
        }

        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }

        .tab-btn {
            border: none;
            background: none;
            padding: 10px 20px;
            font-weight: 500;
            width: 100%;
        }

        .tab-btn.active {
            border-bottom: 3px solid #1a73e8;
            color: #1a73e8;
        }

        .assignment-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 15px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .pending-badge {
            background: linear-gradient(rgb(247, 107, 28) 0%, rgb(231, 76, 60) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            padding: 4px 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
            font-size: 0.8rem;
            width: 50%;
        }

        .nav-tabs .nav-link {
            font-weight: 500;
            color: #555;
        }

        .nav-tabs .nav-link.active {
            border-color: transparent transparent #1a73e8;
            color: #1a73e8;
            font-weight: 600;
        }

        .department,
        .faculty-id {
            font-size: 14px;
        }

        .assignment-titles {
            font-size: medium;
            font-weight: 600;
        }

        .logout-btn {
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%);
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
            height: 1.5rem;
            font-size: smaller;
            font-weight: 700;
        }

        .bg-secondary {
            background: linear-gradient(rgb(226, 226, 226) 0%, rgb(187, 187, 187) 100%);
            border-bottom: 1px solid rgb(153, 153, 153);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 15px;
        }

        a .bi-chevron-left {
            /* background: white; */
            border-radius: 50%;
            padding: 2px;
            /* color: #000; */
            background: linear-gradient(rgb(248, 248, 248) 0%, rgb(232, 232, 232) 100%) !important;
            color: rgb(51, 51, 51);
            border: 1px solid rgba(0, 0, 0, 0.15);
            box-shadow: rgba(255, 255, 255, 0.8) 0px 1px 0px inset, rgba(0, 0, 0, 0.05) 0px 1px 1px;
        }

        .bi-chevron-left::before {
            font-weight: 600 !important;
            font-size: 15px;

        }

        .pending a {
            font-size: 0.875rem;
            font-weight: 400;
        }

        .text-muted {
            font-size: 0.875rem;
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity, 1));
            line-height: 1.25rem;
        }

        .profile-pic {
            margin-right: 0px !important;
        }

        .badge {
            padding: 6px 10px;
            font-weight: 700 !important;
        }

        .bg-warning {
            --tw-bg-opacity: 1;
            background-color: rgb(254 249 195 / var(--tw-bg-opacity, 1)) !important;
            --tw-text-opacity: 1;
            color: rgb(133 77 14 / var(--tw-text-opacity, 1));
        }

        .bg-success {
            --tw-text-opacity: 1;
            color: rgb(22 101 52 / var(--tw-text-opacity, 1));
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity, 1)) !important;
        }

        .details-ass {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .h4 {
            font-size: 0.875rem;
        }

        .bg-gray {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1));
        }

        .p-3 {
            padding: 0.75rem !important;
        }

        .p-4 {
            padding: 1rem !important;
        }

        .border-blue {
            --tw-border-opacity: 1;
            border-color: rgb(147 197 253 / var(--tw-border-opacity, 1));
        }

        .content-scroll {
            height: 100%;
            max-height: 734px;
            overflow-y: scroll;
        }
    </style>
</head>

<body>

    <!-- Faculty Profile -->
    <div class="container bg-light p-0 ">
        <!-- Header -->
        <div
            class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
            <h5 class="mb-0 assignment-titles">
                <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a> Assignment Approval
            </h5>

            <!-- Profile / Menu Dropdown (Desktop & Mobile) -->
            <a href="../index.php"><button class="btn d-flex align-items-center logout-btn gap-2">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span> </button></a>
        </div>


        <div class="content-scroll">
            <div class="d-flex justify-content-between align-items-center p-3">
                <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
                        Dashboard</a>
                </h6>

            </div>

            <div class="assignmnent p-3" id="assignments-slider">


            </div>
        </div>

    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const sub_id = urlParams.get("sub_id");
            let assignments = [];
            let currentIndex = 0;

            loadAssignments();

            function loadAssignments() {
                $("#assignments-slider").html('<div class="text-center text-muted p-4">Loading...</div>');

                $.getJSON("api/faculty_assignment_details.php", {
                    sub_id
                }, function(res) {
                    if (res.status !== 200 || !res.data.length) {
                        $("#assignments-slider").html('<div class="text-center text-muted p-4">No assignments found.</div>');
                        return;
                    }
                    assignments = res.data;
                    renderAssignments();
                });
            }

            function renderAssignments() {
                let html = "";
                assignments.forEach((item, index) => {
                    const files = (item.file_urls || []).map(f => `
                <div class="d-flex align-items-center p-2 border rounded mb-2"
                    style="background:linear-gradient(180deg,#f9f9f9 0%,#f0f0f0 100%);">
                    <i class="bi bi-file-earmark-text me-2 text-primary"></i>
                    <a href="../../uploads/assignments/${f}" target="_blank" class="small text-secondary text-decoration-none">${f}</a>
                </div>
            `).join("");

                    // Pre-filled values for graded assignments
                    const marks = item.marks_obtained ? item.marks_obtained : "";
                    const feedback = item.comments ? item.comments : "";
                    const isLate = item.status === "Late";

                    html += `
                <div class="assignment-detail ${index === 0 ? '' : 'd-none'}" data-sub-id="${item.sub_id}">
                    <div class="bg-secondary px-2 py-0 d-flex justify-content-between align-items-center">
                        <div class="p-3"><h5 class="mb-0">${item.assignment_title}</h5></div>
                        <i class="bi bi-x-lg"></i>
                    </div>
                    <div class="details-ass p-3">
                        <div class="d-flex align-items-center mb-3">
                            <img src="../images/image.png" class="me-3 rounded-circle" width="40" height="40">
                            <div>
                                <h6 class="mb-0">${item.student_name}</h6>
                                <small class="text-muted">ID: ${item.reg_no}</small>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <small>Course: ${item.course_name}</small>
                            <small>Submitted: ${item.submission_date}</small>
                        </div>
                        <div class="d-flex justify-content-between pt-2 mb-2">
                            <small>Due: ${item.due_date}</small>
                            <span class="badge ${isLate ? "bg-warning" : "bg-success"}">${item.status}</span>
                        </div>

                        <div class="mb-4">
                            <h4 class="h4">Submission:</h4>
                            <div class="p-3 rounded border bg-light">${item.context}</div>
                        </div>

                        <div class="mb-4">
                            <h4 class="h4">Attached Files:</h4>
                            ${files || "<small class='text-muted'>No files attached.</small>"}
                        </div>

                        <div class="mb-4">
                            <h4 class="form-label h4">Total Marks: ${item.marks}</h4>
                            <h4 class="form-label h4">Grade / Marks:</h4>
                            <div class="d-flex gap-2 w-25 mb-4">
                                <select class="form-select grade-select border-blue">
                                    <option value="">Select grade</option>
                                    <option value="A" ${marks === 'A' ? 'selected' : ''}>A</option>
                                    <option value="B" ${marks === 'B' ? 'selected' : ''}>B</option>
                                    <option value="C" ${marks === 'C' ? 'selected' : ''}>C</option>
                                </select>
                                <span class="align-self-center">or</span>
                                <input type="text" class="form-control grade-input border-blue" placeholder="Enter marks" value="${marks}">
                            </div>

                            <h4 class="form-label h4">Feedback:</h4>
                            <textarea rows="3" class="w-100 border-blue rounded p-3 feedback-text">${feedback}</textarea>
                        </div>
                    </div>
                </div>`;
                });

                html += `
        <div class="border rounded" style="background:#f0f0f0;">
            <div class="d-flex justify-content-center py-2"><div class="dots-indicator"></div></div>
            <div class="d-flex justify-content-between align-items-center px-3 py-2">
                <button id="prev-btn" class="btn btn-light p-1 rounded-circle"><i class="bi bi-chevron-left"></i></button>
                <button id="reject-btn" class="btn text-danger border px-3 py-2">Reject</button>
                <button id="approve-btn" class="btn btn-success px-3 py-2" disabled>Approve</button>
                <button id="next-btn" class="btn btn-light p-1 rounded-circle"><i class="bi bi-chevron-right"></i></button>
            </div>
            <div class="text-center pb-2"><small id="progress-text" class="text-muted"></small></div>
        </div>`;

                $("#assignments-slider").html(html);
                initSlider();
            }

            function initSlider() {
                const items = $(".assignment-detail");
                let index = 0;

                const updateView = () => {
                    items.addClass("d-none").eq(index).removeClass("d-none");
                    $("#progress-text").text(`${index + 1} of ${items.length}`);
                    checkApproveButton();
                };

                updateView();

                $(document).on("input change", ".grade-select, .grade-input", checkApproveButton);

                $("#prev-btn").click(() => {
                    if (index > 0) {
                        index--;
                        updateView();
                    }
                });
                $("#next-btn").click(() => {
                    if (index < items.length - 1) {
                        index++;
                        updateView();
                    }
                });

                $("#approve-btn").click(() => handleSubmit("approved", index));
                $("#reject-btn").click(() => handleSubmit("rejected", index));

                function checkApproveButton() {
                    const current = items.eq(index);
                    const hasValue = current.find(".grade-select").val() || current.find(".grade-input").val();
                    const approveBtn = $("#approve-btn");
                    if (hasValue) {
                        approveBtn.prop("disabled", false)
                            .css("background", "linear-gradient(180deg,#4CAF50 0%,#2E7D32 100%)")
                            .css("cursor", "pointer");
                    } else {
                        approveBtn.prop("disabled", true)
                            .css("background", "linear-gradient(180deg,#e0e0e0 0%,#bdbdbd 100%)")
                            .css("cursor", "not-allowed");
                    }
                }
            }

            function handleSubmit(status, currentIndex) {
                const current = $(".assignment-detail").eq(currentIndex);
                const sub_id = current.data("sub-id");
                const marks = current.find(".grade-select").val() || current.find(".grade-input").val();
                const feedback = current.find(".feedback-text").val();

                $.post("api/faculty_update_assignment.php", {
                    sub_id,
                    marks,
                    feedback,
                    status
                }, function(res) {
                    if (res.status === 200) {
                        alert("✅ " + res.message);
                        $("#next-btn").trigger("click");
                    } else {
                        alert("⚠️ " + res.message);
                    }
                }, "json");
            }
        });
    </script>


</body>

</html>