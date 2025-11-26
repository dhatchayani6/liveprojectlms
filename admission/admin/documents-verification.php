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

    <style>
        h5 {
            font-size: 11px !important;
        }

        span,
        small,
        .bi-arrow-left::before {
            font-size: 11px !important;

        }

        /* BODY BACKGROUND */
        .verification-dark {
            background-color: #0f172a;
            /* slate-900 */
        }

        /* TOP BAR */
        .v-topbar {
            background-color: #1e293b;
            /* slate-800 */
            border-bottom: 1px solid #334155;
            /* slate-700 */
        }

        /* SIDEBAR */
        .v-sidebar {
            background-color: #1e293b;
            /* slate-800 */
            border-left: 1px solid #334155;
        }

        /* BUTTONS */
        .v-btn {
            background-color: #334155;
            /* slate-700 */
            border: none;
            color: #fff;
        }

        .v-btn:hover {
            background-color: #475569;
            /* slate-600 */
        }

        /* SUBTLE BADGE BUTTON */
        .v-tab {
            background-color: #0f172a;
            border: 1px solid #475569;
            color: #94a3b8;
            transition: 0.2s;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 0.875rem;
        }

        .v-tab:hover {
            color: #fff;
            background-color: #1e293b;
        }

        .v-tab.active {
            background-color: #334155;
            color: #fff;
        }

        /* DOCUMENT PREVIEW BLOCK */
        .v-doc-wrapper {
            background-color: #f8fafc;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
        }

        /* INDIVIDUAL PREVIEW BOX */
        .v-doc-inner {
            background-color: #f1f5f9;
            /* slate-100 */
            padding: 4rem;
        }

        /* PROGRESS BAR */
        .v-progress-bg {
            background-color: #475569;
        }

        .v-progress-bar {
            background-color: #10b981;
            /* emerald-500 */
        }

        /* BORDER BOXES */
        .v-box {
            background-color: #334155;
            /* slate-700 */
            border-radius: 12px;
            padding: 1rem;
        }

        .v-box small {
            color: #a6b3c5;
        }

        /* Right Side Buttons */
        .v-approve {
            background-color: #059669;
            border: none;
        }

        .v-approve:hover {
            background-color: #047857;
        }

        .v-reject {
            background-color: #dc2626;
            border: none;
        }

        .v-reject:hover {
            background-color: #b91c1c;
        }

        .v-sidebar {
            height: 716px;
        }

        /* Make the PDF view FULL PAGE inside the right panel */
        .pdf-container {
            height: calc(100vh - 180px);
            /* Adjust 180px if your header area is bigger/smaller */
            width: 100%;
            border: 1px solid #6c757d;
        
            background: #f8f9fa;
        }

        .pdf-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>

<body>
    <div class="d-flex" style="position: relative;">



        <div class="verification-dark rounded-0  p-0 w-100 vh-100">

            <!-- TOP BAR -->
            <div class="v-topbar px-4 py-3 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <a href="index.php">
                        <button class="btn v-btn rounded-3 p-2">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                    </a>

                    <div>
                        <h5 class="fw-bold mb-0 text-white">Document Verification</h5>
                        <small class="text-secondary">Candidate 1 of 15</small>
                    </div>
                </div>

                <div class="d-flex gap-4 small text-secondary">
                    <span><kbd>←→</kbd> Navigate docs</span>
                    <span><kbd>Shift + ←→</kbd> Navigate candidates</span>
                    <span><kbd>A</kbd> Approve</span>
                    <span><kbd>R</kbd> Reject</span>
                </div>
            </div>

            <div class="d-flex" style="height: calc(100vh - 75px);">

                <!-- LEFT SIDE -->
                <div class="flex-grow-1 d-flex flex-column">

                    <!-- Candidate Info -->
                    <div class="v-topbar px-4 py-3 d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-column gap-2">
                            <div>
                                <h4 class="fw-bold text-white mb-0">Pankaj Mann</h4>
                                <span class="text-secondary">9488389680</span>
                            </div>
                            <!-- Tabs -->
                            <div class="d-flex gap-2">
                                <button class="v-tab">Academic Transcript</button>
                                <button class="v-tab">HSC Certificate</button>
                                <button class="v-tab active">Transfer Certificate</button>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn v-btn rounded-3 px-2"><i class="bi bi-chevron-left"></i></button>
                            <span class="px-3 text-light small">Document 3 of 3</span>
                            <button class="btn v-btn rounded-3 px-2" disabled><i
                                    class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>



                    <!-- Document Viewer -->
                    <div class="flex-grow-1 d-flex justify-content-center align-items-center p-4 overflow-auto">
                        <div class="v-doc-wrapper" style="width: 100%;;height:100vh">

                            <div class="position-relative v-doc-inner text-center">

                                <button class="btn btn-dark position-absolute top-0 end-0 mt-3 me-3 rounded-3">
                                    <i class="bi bi-zoom-in"></i>
                                </button>

                                <!-- <i class="bi bi-file-text display-4 text-secondary mb-3"></i>
                                <h4 class="fw-bold text-dark mb-1">Transfer Certificate</h4>
                                <p class="text-muted small">tc_Pankaj_Mann.pdf</p> -->

                                <!-- <div class="border border-secondary rounded-3 bg-light py-5">
                                    <span class="text-muted small">Document Preview</span>
                                </div> -->

                                <div class="pdf-container mt-4">
                                    <iframe src="../../pdf/LARAVEL BASICS FOM SCRATCH.pdf" width="100%" height="100%"
                                        style="border: none;">
                                    </iframe>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="v-sidebar d-flex flex-column justify-content-between p-4" style="width: 300px;">
                    <div>
                        <h5 class="fw-bold text-white mb-4">Review Actions</h5>

                        <div class="v-box mb-3">
                            <small>Current Document</small>
                            <p class="fw-semibold text-white mb-0">Transfer Certificate</p>
                        </div>

                        <div class="v-box mb-4">
                            <small>Progress</small>

                            <div class="progress v-progress-bg mt-2 rounded-pill" style="height: 6px;">
                                <div class="progress-bar v-progress-bar" style="width: 100%;"></div>
                            </div>

                            <span class="small text-secondary">3/3</span>
                        </div>
                    </div>

                    <div>
                        <button class="btn v-reject w-100 py-3 mb-3 fw-semibold text-white">
                            <i class="bi bi-x-circle"></i> Reject Documents
                        </button>

                        <button class="btn v-approve w-100 py-3 mb-3 fw-semibold text-white">
                            <i class="bi bi-check-circle"></i> Approve & Next
                        </button>

                        <div class="d-flex gap-2 pt-3 border-top border-secondary">
                            <button class="btn v-btn flex-grow-1">← Prev</button>
                            <button class="btn v-btn flex-grow-1">Next →</button>
                        </div>
                    </div>
                </div>

            </div>






        </div>
    </div>





    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>






</body>

</html>