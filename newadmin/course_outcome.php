<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Faculty Dashboard</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../responsive.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        a {
            text-decoration: none !important;
        }

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
            flex-grow: 1;
            overflow-y: auto;
        }

        .menu-btn {
            width: 100%;
            text-align: left;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 500;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .menu-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-blue {
            background: linear-gradient(rgb(168, 213, 255), rgb(126, 182, 247));
            border: 1px solid rgba(59, 130, 246, 0.5);
        }

        .btn-green {
            background: linear-gradient(rgb(182, 240, 200), rgb(139, 224, 166));
            border: 1px solid rgba(16, 185, 129, 0.5);
        }

        .btn-purple {
            background: linear-gradient(rgb(224, 200, 249), rgb(201, 167, 242));
            border: 1px solid rgba(139, 92, 246, 0.5);
        }

        .btn-orange {
            background: linear-gradient(rgb(255, 213, 184), rgb(255, 186, 139));
            border: 1px solid rgba(249, 115, 22, 0.5);
        }

        .menu-icon {
            border-radius: 50%;
            padding: 6px;
            margin-right: 8px;
            background-color: rgba(255, 255, 255, 0.6);
        }

        .sidebar .nav-link {
            padding: 15px !important;
        }

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

        .co-count-card-icon {
            background-color: #0d6efd;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .unit-card-icon {
            background-color: #34C759;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .ass-card-icon {
            background-color: #ff9500;
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .co-card-icon {
            background-color: rgb(88 86 214 / var(--tw-bg-opacity, 1));
            padding: 12px 10px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 25px;
        }

        .card-icon .material-symbols-outlined {
            color: white;
            font-size: 28px;
        }


        .material-icons {
            color: white;
            font-size: 28px;
        }

        .co-count {
            background-color: #007AFF;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }

        .assignment-count {
            background-color: #ff9500;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }

        .unit-count {
            background-color: #34C759;
            color: var(--card-bg);
            font-size: 1.1rem;
            font-weight: 500;
            padding: 6px 10px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <?php include('sidebar copy.php') ?>

        <div class="main-content d-flex flex-column flex-grow-1">

            <?php include('header.php') ?>

            <main class="p-4">

                <!-- Back + Header -->
                <div class="card shadow-sm border rounded mb-4 p-3 bg-white">
                    <button class="btn btn-light btn-sm mb-3">
                        ← Back
                    </button>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <h4 class="mb-0 fw-bold text-dark">Course Outcomes</h4>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </div>
                        <button class="btn btn-primary" id="addOutcomeBtn">
    <i class="bi bi-plus-lg"></i>
</button>

                    </div>
                </div>


                <!-- Add New CO Form -->
                <!-- Add New CO Form -->
                <div class="card shadow-sm border rounded mb-4 p-4 bg-white d-none" id="addCOCard">

                    <h6 class="fw-bold mb-3">Add New Course Outcome</h6>

                    <label class="fw-semibold text-dark small mb-2">Course Outcome Description *</label>
                    <input type="text" class="form-control mb-3" placeholder="Enter course outcome description">

                    <div class="border rounded p-3 bg-light">

                        <p class="fw-semibold small text-dark mb-2">Map to Program Outcomes *</p>
                        <p class="text-danger small fw-semibold mb-3">
                            At least one Program Outcome mapping is required
                        </p>

                        <!-- ⭐ PO LIST HIDDEN INITIALLY -->
                        <div id="poListContainer" class="d-none">
                            <div class="d-flex flex-column gap-3">

                                <div>
                                    <p class="small mb-2"><strong>PO1:</strong> Engineering Knowledge</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-light btn-sm flex-fill">Mild</button>
                                        <button class="btn btn-warning text-white btn-sm flex-fill">Moderate</button>
                                        <button class="btn btn-light btn-sm flex-fill">Strong</button>
                                        <button class="btn btn-danger btn-sm">✕</button>
                                    </div>
                                </div>

                                <div>
                                    <p class="small mb-2"><strong>PO2:</strong> Problem Analysis</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-light btn-sm flex-fill">Mild</button>
                                        <button class="btn btn-warning text-white btn-sm flex-fill">Moderate</button>
                                        <button class="btn btn-light btn-sm flex-fill">Strong</button>
                                        <button class="btn btn-danger btn-sm">✕</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Selected Mapping Section -->
                        <div class="mt-3 pt-3 border-top">
                            <p class="small fw-semibold text-muted mb-2">Selected Mappings:</p>

                            <div class="d-flex flex-wrap gap-2">
                                <span class="badge bg-warning text-white">PO1 • MODERATE</span>
                                <span class="badge bg-warning text-white">PO2 • MODERATE</span>
                            </div>
                        </div>

                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <button class="btn btn-primary flex-fill">Save Course Outcome</button>
                        <button class="btn btn-light flex-fill">Cancel</button>
                    </div>

                </div>



                <!-- CO LIST BELOW -->
                <div class="d-flex flex-column gap-3">

                    <!-- CO Card 1 -->
                    <div class="card bg-white shadow-sm border rounded overflow-hidden">
                        <div class="p-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <span class="badge bg-primary">CO1</span>
                                        <h6 class="mb-0">Understand basic programming concepts</h6>
                                    </div>
                                </div>

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>

                            <button class="btn btn-link text-primary fw-semibold p-0 mb-3">
                                <i class="bi bi-link-45deg"></i> Close PO Mapping
                            </button>

                            <div class="border bg-light p-3 rounded">
                                <p class="small fw-semibold text-muted mb-3">Select Program Outcomes:</p>

                                <!-- Example PO 1 -->
                                <div class="mb-3">
                                    <p class="small mb-2"><strong>PO1:</strong> Engineering Knowledge</p>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-light btn-sm flex-fill">Mild</button>
                                        <button class="btn btn-light btn-sm flex-fill">Moderate</button>
                                        <button class="btn btn-success btn-sm flex-fill text-white">Strong</button>
                                        <button class="btn btn-danger btn-sm">✕</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Selected List -->
                            <div class="mt-3">
                                <p class="small  fw-semibold text-muted mb-2">Mapped to:</p>

                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-success">PO1 • STRONG</span>
                                    <span class="badge bg-warning text-white">PO2 • MODERATE</span>
                                    <span class="badge bg-warning text-white">PO3 • MODERATE</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.getElementById("addOutcomeBtn").addEventListener("click", function () {

    let addCard = document.getElementById("addCOCard");
    let poList = document.getElementById("poListContainer");

    // Show Add CO Card
    addCard.classList.remove("d-none");

    // Show PO list
    poList.classList.remove("d-none");

    // Smooth scroll
    addCard.scrollIntoView({ behavior: "smooth" });
});
</script>



</body>

</html>