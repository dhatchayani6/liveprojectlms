<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Progress Reports</title>

    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />
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

    <!-- TOPBAR -->
    <?php include('topbar.php'); ?>

    <div class="d-flex" style="position: relative;">

        <!-- SIDEBAR -->
        <?php include('sidebar.php'); ?>

        <!-- MAIN CONTENT -->
        <div id="content-area" class="p-4 w-100">

            <div class="row g-4">

                <!-- HEADER SECTION -->
                <div class="col-12">
                    <div class="card border-2 rounded-4 p-4 shadow-sm page-header-card">
                        <h4 class="mb-0 fs-5">Admission Progress Reports</h4>
                        <span class="text-muted small">Comprehensive stage-wise tracking • 200 students</span>
                    </div>
                </div>

                <!-- METRICS SECTION -->
                <div class="col-12">
                    <div class="bg-white border rounded-4 px-4 py-3 shadow-sm">

                        <div class="d-flex gap-4 flex-wrap small">
                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#94a3b8;"></div>
                                <span class="text-secondary">Total:</span>
                                <span class="fw-bold text-dark">200</span>
                            </div>

                            <div class="vr"></div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#3b82f6;"></div>
                                <span class="text-secondary">Programs:</span>
                                <span class="fw-bold text-dark">180</span>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#8b5cf6;"></div>
                                <span class="text-secondary">Exam Scheduled:</span>
                                <span class="fw-bold text-dark">160</span>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#10b981;"></div>
                                <span class="text-secondary">Passed:</span>
                                <span class="fw-bold text-dark">120</span>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#ef4444;"></div>
                                <span class="text-secondary">Failed:</span>
                                <span class="fw-bold text-dark">20</span>
                            </div>

                            <div class="vr"></div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#f59e0b;"></div>
                                <span class="text-secondary">Token Paid:</span>
                                <span class="fw-bold text-dark">60</span>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="stat-dot" style="background:#22c55e;"></div>
                                <span class="text-secondary">Enrolled:</span>
                                <span class="fw-bold text-dark">10</span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- TABLE SECTION -->
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered align-middle">

                            <!-- THEAD -->
                            <th class="bg-light text-secondary small fw-bold border-end">
                                <button class="btn btn-sm p-0 d-flex align-items-center gap-1">
                                    Student <i class="bi bi-arrow-up"></i>
                                </button>
                            </th>
                            <th class="bg-light text-secondary small fw-bold border-end">Contact</th>
                            <th class="bg-light text-center text-secondary small fw-bold border-end">
                                <button class="btn btn-sm p-0 d-flex align-items-center gap-1">Registered
                                    <i class="bi bi-arrow-down"></i></button>
                            </th>

                            <!-- Status Columns -->
                            <th class="text-center small fw-bold border-end">
                                Programs</th>
                            <th class="text-center small fw-bold border-end">
                                Exam Sched</th>
                            <th class="text-center small fw-bold border-end">
                                Exam Done</th>
                            <th class="text-center small fw-bold border-end">Result
                            </th>
                            <th class="text-center small fw-bold border-end">Score
                            </th>
                            <th class="text-center small fw-bold border-end">
                                Interview</th>
                            <th class="text-center small fw-bold border-end">Course
                            </th>
                            <th class="text-center small fw-bold border-end">Token
                            </th>
                            <th class="text-center small fw-bold border-end">Docs
                                Upload</th>
                            <th class="text-center small fw-bold border-end">Docs
                                Verify</th>
                            <th class="text-center small fw-bold border-end">Full
                                Fee
                            </th>
                            <th class="text-center small fw-bold">Enrolled</th>

                            <!-- TABLE BODY -->
                            <tbody>

                                <!-- ROW 1 -->
                                <tr class="table-row-hover">
                                    <td class="px-3 py-3 border-end"><strong>Suresh Garg</strong></td>
                                    <td class="px-3 py-3 border-end small">
                                        <span class="text-primary d-block">9245887262</span>
                                        <span class="text-secondary text-wrap"
                                            style="white-space: normal; width: 200px; display: inline-block;">
                                            suresh.garg144@email.com
                                        </span>
                                    </td>
                                    <td class="text-center">Nov 25</td>

                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center">-
                                    </td>
                                    <td class="text-center">-</td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                </tr>

                                <!-- ROW 2 -->
                                <tr class="table-row-hover">
                                    <td class="px-3 py-3 border-end"><strong>Meena Sharma</strong></td>
                                    <td class="px-3 py-3 border-end small">
                                        <span class="text-primary d-block">8899776644</span>
                                        <span class="text-secondary d-block text-truncate"
                                            style="max-width:150px;">meena.sharma@example.com</span>
                                    </td>
                                    <td class="text-center">Nov 26</td>

                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center">-
                                    </td>
                                    <td class="text-center">-</td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                </tr>

                                <!-- ROW 3 -->
                                <tr class="table-row-hover">
                                    <td class="px-3 py-3 border-end"><strong>Aman Verma</strong></td>
                                    <td class="px-3 py-3 border-end small">
                                        <span class="text-primary d-block">9001234567</span>
                                        <span class="text-secondary d-block text-truncate"
                                            style="max-width:150px;">amanv@example.com</span>
                                    </td>
                                    <td class="text-center">Nov 28</td>

                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center" style="font-size:12px">PASS</td>
                                    <td class=" text-center " style=" font-size:12px">6/10 (60.00%)

                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#e63946"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="m15 9-6 6"></path>
                                            <path d="m9 9 6 6"></path>
                                        </svg>
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                    <td class="text-center">-
                                    </td>
                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                            height="15" viewBox="0 0 24 24" fill="none" stroke="#129b71"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></td>
                                </tr>

                            </tbody>

                        </table>
                    </div>

                    <!-- PAGINATION -->
                    <div class="d-flex justify-content-between align-items-center mt-3 px-2">

                        <!-- Showing text -->
                        <span class="text-muted small">
                            Showing <strong>1</strong> to <strong>10</strong> of <strong>200</strong> entries
                        </span>

                        <!-- Custom Pagination -->
                        <div class="d-flex align-items-center">

                            <!-- Prev -->
                            <button class="btn py-1 px-3 rounded-pill border border-secondary-subtle text-secondary 
                       shadow-sm me-2 pagination-btn">
                                Prev
                            </button>

                            <!-- Page 1 (Active) -->
                            <button
                                class="btn py-1 px-3 rounded-pill bg-dark text-white shadow-sm me-2 pagination-active">
                                1
                            </button>

                            <!-- Page 2 -->
                            <button class="btn py-1 px-3 rounded-pill border border-secondary-subtle text-secondary 
                       shadow-sm me-2 pagination-btn">
                                2
                            </button>

                            <!-- Page 3 -->
                            <button class="btn py-1 px-3 rounded-pill border border-secondary-subtle text-secondary 
                       shadow-sm me-2 pagination-btn">
                                3
                            </button>

                            <!-- Next -->
                            <button class="btn py-1 px-3 rounded-pill border border-secondary-subtle text-secondary 
                       shadow-sm pagination-btn">
                                Next
                            </button>

                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>