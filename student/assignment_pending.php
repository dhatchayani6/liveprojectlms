<?php include "../includes/auth_student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment Feedback - Student Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
            flex-shrink: 0;
        }

        .sidebar .nav-link.active {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 600;
        }

        .sidebar .nav-link {
            color: #495057;
            border-radius: 0.5rem;
        }

        .sidebar .nav-link:hover {
            background-color: #f1f3f5;
        }

        .avatar {
            height: 80px;
            width: 80px;

            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .main-content {
            flex: 1;
            min-width: 0;
            overflow-x: hidden;
        }

        .btn-graded {
            background: linear-gradient(rgb(140, 198, 87) 0%, rgb(111, 173, 59) 100%);
            color: white;
            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            min-width: 100px;
            text-align: center;
        }

        .student-answer-block {
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: pre-wrap;
            background-color: #f8f9fa;
        }

        .pdf-viewer {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
        }

        .pdf-viewer iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 8px;
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

        #content-scroll {
            height: 100%;
            max-height: 721px;
            overflow-y: scroll;
        }

        /* Responsive file list styling */
        .uploaded-file-item {
            transition: background 0.2s ease, transform 0.1s ease;
            word-break: break-word;
            flex-wrap: wrap;
        }

        .uploaded-file-item:hover {
            background: #f1f3f5;
            transform: scale(1.01);
        }

        .uploaded-file-item a {
            display: block;
            overflow-wrap: break-word;
            white-space: normal;
        }

        @media (max-width: 991.98px) {

            /* For small and medium screens */
            .uploaded-file-item {
                flex-direction: column;
                align-items: flex-start !important;
                text-align: left;
            }

            .uploaded-file-item i {
                margin-bottom: 6px;
            }

            .uploaded-file-item a {
                width: 100%;
            }
        }
    </style>
    <style>
        /* .bi-book::before {
            color: #0d6efd !important;

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
        } */

        .card-header {
            background: linear-gradient(rgb(233, 233, 233) 0%, rgb(196, 196, 196) 100%);
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <?php include "sidebar.php"; ?>

        <!-- Main Content -->
        <div class="main-content d-flex flex-column flex-grow-1">
            <!-- Header -->
            <header class="bg-white border-bottom shadow-sm">
                <div class="d-flex justify-content-between align-items-center px-4 py-3">

                    <div class="d-flex align-items-center">
                        <!-- 🔹 Offcanvas Toggle (Visible on Mobile Only) -->
                        <button class="btn btn-light btn-sm me-2 d-md-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="bi bi-list"></i>
                        </button>

                        <!-- 🔹 Back Button (Visible on Desktop) -->
                        <button onclick="window.history.back()"
                            class="btn btn-light btn-sm me-2 d-none d-md-inline-flex">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <h5 class="fw-semibold mb-0">Viana Study</h5>
                    </div>

                    <a href="../index.php" class="btn btn-light d-flex align-items-center">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </a>
                </div>
            </header>
            <!-- Offcanvas Sidebar -->
            <div class="offcanvas offcanvas-start offcanvas-full" tabindex="-1" id="offcanvasSidebar"
                aria-labelledby="offcanvasSidebarLabel">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title fw-semibold" id="offcanvasSidebarLabel">Student Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body p-0">
                    <aside class="sidebar flex-column h-100 w-100">
                        <div class="text-center border-bottom p-4">
                            <div class="avatar mx-auto mb-3">
                                <i class="bi bi-person-fill fs-1 text-primary"></i>
                            </div>
                            <h5 class="mb-1 fw-semibold text-dark"><?php echo $_SESSION['name']; ?></h5>
                            <p class="text-muted small">Student ID: <?php echo $_SESSION['regno']; ?></p>
                        </div>

                        <nav class="flex-grow-1 pt-3 px-4">
                            <ul class="nav flex-column gap-3">
                                <li><a href="dashboard.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-grid-fill me-2"></i>Dashboard</a></li>
                                <li><a href="courses.php" class="nav-link d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-book me-2"></i>Courses</a></li>
                                <li><a href="assignments.php"
                                        class="nav-link active d-flex align-items-center px-3 py-2">
                                        <i class="bi bi-file-earmark-text me-2"></i>Assignments</a></li>
                            </ul>
                        </nav>
                    </aside>
                </div>
            </div>



            <!-- Dashboard Content -->
            <main class="p-4" id="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php" class="btn btn-outline-primary btn-sm"><i
                                class="bi bi-arrow-left me-2"></i>Back to
                            Dashboard</a>
                    </h6>

                </div>

                <div class="p-3">
                    <!-- Notifications -->

                    <div class="card rounded border mb-4">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center bg-secondary p-3">
                            <i class="bi bi-book fs-5 me-2" style="background-color: #DBEAFF; 
                  border: 1px solid rgba(59, 130, 246, 0.5); 
                  color: #2563EB; 
                  border-radius: 50%; 
                  padding: 5px;">
                            </i>
                            <h6 class="mb-0 fw-semibold">Data Science Project Due</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body rounded border bg-white file_link">
                            <small class="fw-semibold ">Details:</small>
                            <h6 class="mb-3 text-gray fw-normal pt-2">
                                This assignment requires your attention for the course
                                <strong>"Introduction to Data Science"</strong>.
                            </h6>

                            <small class="fw-semibold mb-2">Questions:</small>
                            <div class="p-3 bg-light rounded mb-3 mt-3" style="border: 1px solid #e3e8ef;">
                                <ol class="ps-3 mb-0">
                                    <li class="mb-3">Explain the key concepts covered in the recent lectures and how
                                        they
                                        apply to
                                        real-world scenarios.</li>
                                    <li class="mb-3">Analyze the provided dataset and create visualizations to support
                                        your
                                        findings.
                                    </li>
                                    <li class="mb-3">Implement the algorithm discussed in class and document your
                                        approach.
                                    </li>
                                </ol>
                            </div>

                            <div class="d-flex flex-column align-items-start">
                                <small class="fw-semibold mb-1">Due Date:</small>
                                <span class="badge rounded fs-6" style="    background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
                            color: white;
                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                            border: 1px solid rgba(0, 0, 0, 0.2);">
                                    2023-11-15
                                </span>
                            </div>

                            <div class="d-flex flex-column align-items-start pt-3">
                                <small class="fw-semibold mb-1">Status</small>
                                <span class="badge rounded fs-6" style="    background: linear-gradient(rgb(249, 217, 118) 0%, rgb(243, 159, 89) 100%);
                            color: white;
                            box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, rgba(0, 0, 0, 0.2) 0px 1px 2px;
                            border: 1px solid rgba(0, 0, 0, 0.2);">
                                    <small>Pending</small>
                                </span>
                            </div>
                        </div>


                    </div>
                    <div class="rounded border mt-3">
                        <!-- Card Header -->
                        <div class="card-header d-flex align-items-center bg-secondary p-3">
                            <h6 class="mb-0 fw-semibold text-dark">Your Response</h6>
                        </div>

                        <!-- Card Body -->
                        <div class="card-body p-3">
                            <!-- Answer Input -->
                            <div class="mb-3">
                                <label for="answer" class="form-label fw-semibold">Answer:</label>
                                <textarea id="answer" class="form-control" rows="5"
                                    placeholder="Type your answer here..."></textarea>
                            </div>

                            <!-- File Upload -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Upload Files:</label>

                                <div id="drop-area" class="border rounded p-4 text-center"
                                    style="border-style: dashed; position: relative;">
                                    <div class="mb-2">
                                        <i class="bi bi-cloud-arrow-up" style="font-size: 2rem;"></i>
                                    </div>
                                    <p>Drag and drop your files here<br>or<br>
                                        <a href="#"
                                            onclick="document.getElementById('fileInput').click(); return false;">Browse
                                            files</a>
                                    </p>

                                    <input type="file" id="fileInput" name="files[]" multiple accept="*/*"
                                        style="display: none;">

                                </div>

                                <!-- Preview Area -->
                                <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
                            </div>


                            <!-- Submit Button -->
                            <div class="text-end">
                                <button class="btn btn-sm" style="
                                        position: relative;
                                        background: linear-gradient(rgb(75, 147, 213) 0%, rgb(21, 103, 186) 100%);
                                        color: white;
                                        border: 1px solid rgba(0, 0, 0, 0.2);
                                        box-shadow: rgba(255, 255, 255, 0.4) 0px 1px 0px inset, 
                                                    rgba(0, 0, 0, 0.3) 0px 1px 3px;
                                        text-shadow: rgba(0, 0, 0, 0.25) 0px -1px 0px;
                                        overflow: hidden;
                                        border-radius: 8px;
                                        padding: 10px 25px;
                                        font-weight: 500;
                                    ">
                                    Submit Assignment
                                    <span style="
                                        content: '';
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        right: 0;
                                        height: 50%;
                                        background: linear-gradient(
                                            rgba(255, 255, 255, 0.8) 0%, 
                                            rgba(255, 255, 255, 0.2) 49%, 
                                            rgba(255, 255, 255, 0) 51%, 
                                            rgba(255, 255, 255, 0.1) 100%
                                        );
                                        border-top-left-radius: 8px;
                                        border-top-right-radius: 8px;
                                        pointer-events: none;
                                        display: block;
                                    "></span>
                                </button>

                            </div>
                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('fileInput');
        const preview = document.getElementById('preview');

        // Trigger file selection when 'Browse' is clicked
        fileInput.addEventListener('change', handleFiles);

        // Prevent default browser behavior
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, e => e.preventDefault(), false);
        });

        // Highlight on drag
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => dropArea.classList.add('bg-light'), false);
        });
        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => dropArea.classList.remove('bg-light'), false);
        });

        // Handle file drop
        dropArea.addEventListener('drop', e => {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles({
                target: {
                    files
                }
            });
        });

        // Handle and preview files
        function handleFiles(e) {
            const files = e.target.files;
            preview.innerHTML = '';

            Array.from(files).forEach(file => {
                const fileType = file.type;

                // Create a preview container
                const fileContainer = document.createElement('div');
                fileContainer.classList.add('d-flex', 'align-items-center', 'gap-2', 'border', 'rounded', 'p-2');
                fileContainer.style.width = 'fit-content';

                if (fileType.startsWith('image/')) {
                    // Show thumbnail for images
                    const reader = new FileReader();
                    reader.onload = e => {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.style.width = '80px';
                        img.style.height = '80px';
                        img.style.objectFit = 'cover';
                        img.classList.add('rounded');
                        fileContainer.appendChild(img);

                        const span = document.createElement('span');
                        span.textContent = file.name;
                        span.classList.add('small');
                        fileContainer.appendChild(span);
                    };
                    reader.readAsDataURL(file);
                } else {
                    // Use a file icon for non-images
                    const icon = document.createElement('i');
                    icon.className = 'bi bi-file-earmark-text fs-3 text-secondary';
                    const fileName = document.createElement('span');
                    fileName.textContent = file.name;
                    fileName.classList.add('small');
                    fileContainer.appendChild(icon);
                    fileContainer.appendChild(fileName);
                }

                preview.appendChild(fileContainer);
            });
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Extract ass_id from URL
            const urlParams = new URLSearchParams(window.location.search);
            const ass_id = urlParams.get('ass_id');

            if (!ass_id) {
                alert("No assignment ID found in URL");
                return;
            }

            // Fetch assignment data
            $.getJSON(`api/student_assignment_detail.php?ass_id=${ass_id}`, function (res) {
                if (res.status !== 200) {
                    alert("Unable to fetch assignment details");
                    return;
                }

                const a = res.data;

                // Update Title and Course Header
                $(".assignment-titles").html(`
                        <div class="d-flex gap-2">
                            <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>${a.course_name}
                        </div>
                    `);

                $(".card-header h6").text(a.title || "Untitled Assignment");
                $(".card-body h6 strong").text(`"${a.course_name}"`);

                // Replace Question list with dynamic instructions
                $(".card-body ol").html("");
                if (a.instruction && a.instruction.trim() !== "") {
                    const questions = a.instruction.split("\n").filter(q => q.trim() !== "");
                    questions.forEach((q) => $(".card-body ol").append(`<li class="mb-3">${q}</li>`));
                } else {
                    $(".card-body ol").append(`<li>No questions provided.</li>`);
                }

                // Due date
                $(".card-body .badge").first().text(a.due_date ? a.due_date.split(" ")[0] : "N/A");

                // Status badge color
                const statusColor =
                    a.status === "feedback" ?
                        "linear-gradient(#81c784, #4caf50)" :
                        a.status === "submitted" ?
                            "linear-gradient(#f9d976, #f39f59)" :
                            "linear-gradient(#f9d976, #f39f59)";

                $(".card-body .badge")
                    .last()
                    .css("background", statusColor)
                    .find("small")
                    .text(a.status.charAt(0).toUpperCase() + a.status.slice(1));

                // Prefill answer if already submitted
                if (a.submitted_text && a.submitted_text.trim() !== "") {
                    $("#answer").val(a.submitted_text);
                }

                // Show uploaded file if any
                if (a.file_url && a.file_url.trim() !== "") {
                    $("#preview").html(`
                        <div class="d-flex align-items-center gap-2 border rounded p-2">
                            <i class="bi bi-file-earmark-text fs-4 text-secondary"></i>
                            <a href="../${a.file_url}" target="_blank">${a.file_url.split('/').pop()}</a>
                        </div>
                    `);
                }

                // ✅ Show "View Material" button if PDF available in notes
                if (a.notes && a.notes.trim() !== "") {
                    // Detect if it's a PDF file
                    const isPDF = a.notes.toLowerCase().endsWith(".pdf");

                    const materialSection = `
                            <div class="mt-4">
                                <h6 class="fw-semibold">Assignment Material</h6>
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-file-earmark-pdf text-danger fs-4"></i>
                                    <a href="../uploads/assignments/${a.notes}" target="_blank" 
                                    class="btn btn-outline-danger btn-sm rounded-pill px-3 py-1 fw-semibold">
                                        View Material
                                    </a>
                                </div>
                            </div>
                        `;

                    // Insert below question list
                    $(".file_link").append(materialSection);
                }

                // ✅ If feedback exists, show it
                if (a.status === "feedback" && a.comments) {
                    const feedback = `
                        <div class="card mt-3 border-success">
                            <div class="card-header bg-success text-white fw-semibold">Faculty Feedback</div>
                            <div class="card-body">
                                <p class="mb-2"><strong>Comments:</strong> ${a.comments}</p>
                                <p><strong>Marks:</strong> ${a.marks_obtained ?? "N/A"}</p>
                            </div>
                        </div>
                    `;
                    $(".content-scroll .p-3").append(feedback);
                }
            });

        });
    </script>

    <!-- submit assignment -->
    <script>
        $(document).ready(function () {
            const dropArea = document.getElementById('drop-area');
            const fileInput = document.getElementById('fileInput');
            const preview = document.getElementById('preview');
            const submitBtn = $("button:contains('Submit Assignment')");
            const urlParams = new URLSearchParams(window.location.search);
            const ass_id = urlParams.get('ass_id');
            let selectedFiles = [];

            // 🧩 Handle file input
            fileInput.addEventListener('change', handleFiles);

            // Prevent default drag behaviors
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, e => e.preventDefault(), false);
            });

            // Highlight drop area
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, () => dropArea.classList.add('bg-light'), false);
            });
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, () => dropArea.classList.remove('bg-light'), false);
            });

            // Handle drop
            dropArea.addEventListener('drop', e => {
                const dt = e.dataTransfer;
                const files = dt.files;
                handleFiles({
                    target: {
                        files
                    }
                });
            });

            // Handle selected files
            function handleFiles(e) {
                const files = e.target.files;
                Array.from(files).forEach(file => {
                    const ext = file.name.split('.').pop().toLowerCase();
                    if (!['jpg', 'jpeg', 'png', 'pdf'].includes(ext)) {
                        alert(`${file.name} is not an allowed file type (only images and PDFs allowed).`);
                        return;
                    }
                    selectedFiles.push(file);
                });
                renderPreview();
                fileInput.value = ""; // reset input so same file can be reselected
            }

            // 🖼️ Render preview (image + PDF)
            function renderPreview() {
                preview.innerHTML = '';
                selectedFiles.forEach((file, index) => {
                    const fileType = file.type;
                    const container = document.createElement('div');
                    container.classList.add('d-flex', 'align-items-center', 'gap-2', 'border', 'rounded', 'p-2');
                    container.style.width = 'fit-content';

                    if (fileType.startsWith('image/')) {
                        // Image Preview
                        const reader = new FileReader();
                        reader.onload = e => {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.style.width = '70px';
                            img.style.height = '70px';
                            img.style.objectFit = 'cover';
                            img.classList.add('rounded');
                            container.appendChild(img);
                            const span = document.createElement('span');
                            span.textContent = file.name;
                            span.classList.add('small');
                            container.appendChild(span);
                        };
                        reader.readAsDataURL(file);
                    } else if (fileType === 'application/pdf') {
                        // PDF Preview
                        const icon = document.createElement('i');
                        icon.className = 'bi bi-file-earmark-pdf fs-3 text-danger';
                        const link = document.createElement('span');
                        link.textContent = file.name;
                        link.classList.add('small');
                        container.appendChild(icon);
                        container.appendChild(link);
                    } else {
                        // Other allowed type (if extended later)
                        const icon = document.createElement('i');
                        icon.className = 'bi bi-file-earmark-text fs-3 text-secondary';
                        const link = document.createElement('span');
                        link.textContent = file.name;
                        link.classList.add('small');
                        container.appendChild(icon);
                        container.appendChild(link);
                    }

                    // ❌ Remove File
                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn btn-sm btn-outline-danger ms-2';
                    removeBtn.innerHTML = '<i class="bi bi-x-lg"></i>';
                    removeBtn.onclick = () => {
                        selectedFiles.splice(index, 1);
                        renderPreview();
                    };
                    container.appendChild(removeBtn);

                    preview.appendChild(container);
                });
            }

            // 🚀 Submit Assignment
            submitBtn.on('click', function () {
                const context = $("#answer").val().trim();

                if (!ass_id) {
                    alert("Invalid assignment ID!");
                    return;
                }
                if (!context && selectedFiles.length === 0) {
                    alert("Please enter an answer or upload at least one file.");
                    return;
                }

                const formData = new FormData();
                formData.append("ass_id", ass_id);
                formData.append("context", context);
                selectedFiles.forEach(file => {
                    formData.append("files[]", file);
                });

                submitBtn.prop("disabled", true).text("Submitting...");

                $.ajax({
                    url: "api/submit_assignment.php",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function (res) {
                        if (res.status === 200) {
                            window.location.href = `assignment_submit.php?ass_id=${ass_id}`;
                        } else {
                            alert("⚠️ " + res.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                        alert("❌ Error submitting assignment. Try again.");
                    },
                    complete: function () {
                        submitBtn.prop("disabled", false).text("Submit Assignment");
                    }
                });
            });
        });
    </script>
</body>

</html>