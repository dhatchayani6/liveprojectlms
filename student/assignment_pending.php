<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
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
        }
    </style>
</head>

<body>
    <main class="dashboard-main">

        <div class="content-container bg-light ">

            <!-- Header -->
            <div
                class="header d-flex justify-content-between align-items-center position-relative px-3 py-2 bg-secondary text-dark">
                <h5 class="mb-0 assignment-titles">
                    <div class="d-flex gap-2">
                        <a href="dashboard.php"><i class="bi bi-chevron-left rounded-circle"></i></a>Introduction
                        to Data Science
                    </div>
                </h5>
                <a href="../index.php">
                    <button class="btn d-flex align-items-center logout-btn gap-2">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </button>
                </a>
            </div>

            <div class="content-scroll">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h6 class="mb-0 pending"><a href="dashboard.php"><i class="bi bi-arrow-left me-2"></i>Back to
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
                        <div class="card-body rounded border bg-white">
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
                                    <input type="file" id="fileInput" style="display: none;" multiple accept="image/*">
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
            </div>

        </div>
    </main>

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
            handleFiles({ target: { files } });
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


</body>

</html>