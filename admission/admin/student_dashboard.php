<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Selection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #c5ccd3;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .page-container {
            max-width: 1100px;
            margin: 2rem auto;
        }

        .main-card {
            background: linear-gradient(to bottom, #f3f4f6, #e5e7eb);
            border-radius: 18px;
            border: 1px solid #d1d5db;
            box-shadow: 0 18px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header-bar {
            background: linear-gradient(to bottom, #4b5563, #1f2937);
            color: #fff;
            padding: 12px 20px;
            border-bottom: 1px solid #374151;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-btn {
            background: none;
            border: none;
            color: white;
        }

        .search-input {
            border: 2px solid #d1d5db;
            padding: 12px 16px;
            border-radius: 10px;
            padding-left: 42px;
        }

        .search-input:focus {
            border-color: #3b82f6;
            box-shadow: none;
        }

        .left-panel,
        .right-panel {
            background: white;
            border: 2px solid #d1d5db;
            border-radius: 18px;
            padding: 20px;
            height: 720px;
            overflow-y: auto;
        }

        .program-card {
            background: #f9fafb;
            border: 2px solid #d1d5db;
            border-radius: 14px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
        }

        .program-card:hover {
            background: #f3f4f6;
        }

        .priority-empty {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: #6b7280;
        }

        .select-btn {
            background: linear-gradient(to bottom, #4ade80, #16a34a);
            border: 2px solid #15803d;
            padding: 6px 14px;
            border-radius: 8px;
            font-weight: 600;
            color: white;
        }

        .play-btn {
            background: linear-gradient(to bottom, #a78bfa, #7c3aed);
            border: 2px solid #6d28d9;
            padding: 6px 10px;
            border-radius: 8px;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="page-container">

        <!-- HEADER -->
        <div class="main-card mb-4">
            <div class="header-bar">
                <div class="d-flex align-items-center gap-3">
                    <button class="header-btn" onclick="history.back()">
                        <svg width="28" height="28" stroke="currentColor" fill="none" stroke-width="2">
                            <path d="m12 19-7-7 7-7"></path>
                            <path d="M19 12H5"></path>
                        </svg>
                    </button>
                    <h4 class="m-0 fw-bold">Program Selection</h4>
                </div>
            </div>

            <div class="p-4">
                <div class="alert alert-warning border-2" style="border-color:#facc15;background:#fef9c3;">
                    <svg width="18" height="18" stroke="#b45309" fill="none" stroke-width="2" class="me-2">
                        <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                    </svg>
                    Select programs and arrange priorities. Click "<strong>Freeze Priority</strong>" to continue.
                </div>

                <!-- TWO COLUMN LAYOUT -->
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="left-panel">
                            <!-- SEARCH BAR -->
                            <div class="position-relative mb-3">
                                <svg width="20" height="20" class="position-absolute" style="top:12px;left:12px;"
                                    stroke="#6b7280" fill="none" stroke-width="2">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.34-4.34"></path>
                                </svg>
                                <input type="text" id="searchInput" class="form-control search-input"
                                    placeholder="Search programs...">
                            </div>

                            <!-- PROGRAM LIST -->
                            <div id="programList">
                                <!-- (Programs will be inserted here in PART 2) -->
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="right-panel" id="priorityPanel">
                            <!-- EMPTY PRIORITY STATE -->
                            <div class="priority-empty">
                                <svg width="70" height="70" stroke="#9ca3af" fill="none" stroke-width="2"
                                    class="mx-auto mb-3">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                </svg>
                                <h6 class="fw-bold text-secondary">No programs selected yet</h6>
                                <p class="text-muted">Select programs from the left</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>