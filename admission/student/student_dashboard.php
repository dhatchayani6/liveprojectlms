<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Selection</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #e5e7eb;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-size: 14px;
        }

        .page-container {
            max-width: 1100px;
            margin: 1.5rem auto;
        }

        .main-card {
            background: #f8fafc;
            border-radius: 14px;
            border: 1px solid #d1d5db;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.07);
        }

        .header-bar {
            background: linear-gradient(to bottom, #4b5563, #1f2937);
            color: #fff;
            padding: 10px 16px;
        }

        .header-bar h4 {
            font-size: 18px;
            font-weight: 600;
        }

        .search-input {
            border: 1px solid #cbd5e1;
            padding: 8px 12px;
            border-radius: 8px;
            padding-left: 38px;
            font-size: 14px;
        }

        .left-panel,
        .right-panel {
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 14px;
            padding: 15px;
            height: 620px;
        }

        .program-card {
            background: #f9fafb;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 12px;
            transition: 0.2s;
        }

        .program-card h5 {
            font-size: 15px;
            font-weight: 600;
        }

        .program-card p {
            font-size: 12px;
            margin-bottom: 6px;
        }

        .play-btn,
        .select-btn {
            font-size: 12px;
            padding: 4px 10px;
            border-radius: 6px;
        }

        .play-btn {
            background: #8b5cf6;
            border: 1px solid #7c3aed;
            color: #fff;
        }

        .select-btn {
            background: #22c55e;
            border: 1px solid #15803d;
            color: #fff;
        }

        /* Empty State */
        .priority-empty h6 {
            font-size: 15px;
            font-weight: 600;
        }

        /* Priority Box */
        #priorityBox h2 {
            font-size: 17px;
            font-weight: 600;
        }

        #priorityBox p {
            font-size: 12px;
        }

        /* Priority Cards */
        .priority-card {
            background: linear-gradient(to bottom, #dbeafe, #bfdbfe);
            border: 1px solid #60a5fa;
            padding: 12px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .priority-card h4 {
            font-size: 14px;
            font-weight: 600;
        }

        .priority-card p {
            font-size: 11px;
            margin-bottom: 4px;
        }

        .priority-badge {
            font-size: 12px;
            padding: 3px 10px;
        }

        #freezeBtn,
        #saveBtn {
            font-size: 13px;
            padding: 10px;
            border-radius: 10px;
        }

        /* FIXED LEFT PANEL SCROLL — WORKING */
        .left-panel {
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 14px;
            padding: 15px;
            height: 620px;
            overflow: hidden;
            /* Panel will NOT scroll */
            display: flex;
            flex-direction: column;
        }

        /* Only the program list will scroll */
        .program-card-scroll {
            flex: 1;
            /* take remaining height */
            overflow-y: auto;
            /* scroll enabled here */
            overflow-x: hidden;
            padding-right: 6px;
            margin-top: 5px;
        }



        .btn-blue {
            background: linear-gradient(to bottom, #60A5FA, #2563EB);
            border: 2px solid #1D4ED8;
            color: #fff;
        }

        .btn-green {
            background: linear-gradient(to bottom, #4ADE80, #16A34A);
            border: 2px solid #15803D;
            color: #fff;
        }
    </style>

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

        .left-panel,
        .right-panel {
            background: #fff;
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
            margin-bottom: 15px;
            transition: 0.2s;
        }

        .program-card:hover {
            background: #f3f4f6;
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

        .priority-empty {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: #6b7280;
        }

        .program-card-scroll {
            max-height: 570px;
            overflow-y: scroll;
        }

        /* Blue Priority Card */
        .priority-card {
            background: linear-gradient(to bottom, #bfdbfe, #93c5fd);
            border: 2px solid #60a5fa;
            border-radius: 16px;
            padding: 18px;
            box-shadow: 0 8px 25px rgba(96, 165, 250, 0.4);
        }

        .priority-grip {
            cursor: grab;
        }
    </style>
</head>

<body>

    <div class="page-container">

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

                <!-- ALERT -->
                <div class="alert alert-warning border-2" style="border-color:#facc15; background:#fef9c3;">
                    <svg width="18" height="18" stroke="#b45309" fill="none" stroke-width="2" class="me-2">
                        <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                    </svg>
                    Select programs and arrange priorities. Click <strong>Freeze Priority</strong> to continue.
                </div>

                <div class="row g-4">
                    <!-- LEFT -->
                    <div class="col-md-6">
                        <div class="left-panel">
                            <h6 class="fw-bold mb-3">Available Programs</h6>

                            <div class="position-relative mb-3">
                                <svg width="20" height="20" class="position-absolute" style="top:12px;left:12px;"
                                    stroke="#6b7280" fill="none" stroke-width="2">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.34-4.34"></path>
                                </svg>
                                <input type="text" id="searchInput" class="form-control search-input"
                                    placeholder="Search programs...">
                            </div>

                            <div class="program-card-scroll">

                                <!-- 1 card -->
                                <!-- PROGRAM 1 -->
                                <div class="program-card" data-title="Computer Science Engineering">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h5 class="fw-bold mb-1 program-title">Computer Science Engineering</h5>
                                            <p class="mb-1"><strong>Duration:</strong> 4 Years</p>
                                            <p class="text-muted small">
                                                Learn programming, algorithms, software development, and computer
                                                systems.
                                            </p>
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button class="play-btn"
                                                onclick="toggleVideo(this, 'videos/cse.mp4')">▶</button>
                                            <button class="select-btn" onclick="addToPriority(this)">Select</button>
                                        </div>
                                    </div>

                                    <div class="video-container mt-3" style="display:none;">
                                        <video width="100%" controls style="border-radius: 10px; height: 265px;">
                                            <source src="">
                                        </video>
                                    </div>
                                </div>


                                <!-- PROGRAM 2 -->
                                <div class="program-card" data-title="Mechanical Engineering">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h5 class="fw-bold mb-1 program-title">Mechanical Engineering</h5>
                                            <p class="mb-1"><strong>Duration:</strong> 4 Years</p>
                                            <p class="text-muted small">
                                                Study machines, automation, thermodynamics, and manufacturing
                                                technologies.
                                            </p>
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button class="play-btn"
                                                onclick="toggleVideo(this, 'videos/mechanical.mp4')">▶</button>
                                            <button class="select-btn" onclick="addToPriority(this)">Select</button>
                                        </div>
                                    </div>

                                    <div class="video-container mt-3" style="display:none;">
                                        <video width="100%" controls style="border-radius: 10px; height: 265px;">
                                            <source src="">
                                        </video>
                                    </div>
                                </div>


                                <!-- PROGRAM 3 -->
                                <div class="program-card" data-title="Electronics & Communication Engineering">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <h5 class="fw-bold mb-1 program-title">Electronics & Communication
                                                Engineering</h5>
                                            <p class="mb-1"><strong>Duration:</strong> 4 Years</p>
                                            <p class="text-muted small">
                                                Learn electronics, embedded systems, signal processing, and wireless
                                                communication.
                                            </p>
                                        </div>

                                        <div class="d-flex gap-2">
                                            <button class="play-btn"
                                                onclick="toggleVideo(this, 'videos/ece.mp4')">▶</button>
                                            <button class="select-btn" onclick="addToPriority(this)">Select</button>
                                        </div>
                                    </div>

                                    <div class="video-container mt-3" style="display:none;">
                                        <video width="100%" controls style="border-radius: 10px; height: 265px;">
                                            <source src="">
                                        </video>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- RIGHT -->
                    <div class="col-md-6">
                        <div class="right-panel">

                            <!-- EMPTY STATE -->
                            <div id="emptyState" class="priority-empty">
                                <svg width="70" height="70" stroke="#9ca3af" fill="none" stroke-width="2"
                                    class="mx-auto mb-3">
                                    <path
                                        d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                                    </path>
                                    <path d="M22 10v6"></path>
                                </svg>
                                <h6 class="fw-bold">No programs selected yet</h6>
                            </div>

                            <!-- PRIORITY BOX -->
                            <div id="priorityBox" class="bg-white rounded-xl border-2 border-gray-300 shadow-lg p-4"
                                style="display:none;">
                                <h2 class="text-lg font-bold mb-2">Your Program Priorities</h2>
                                <p class="text-sm text-gray-600 mb-4">Drag to reorder your priorities</p>

                                <div id="priorityList" class="space-y-3" aria-describedby="DndDescribedBy"></div>

                                <div id="DndDescribedBy" style="display:none;">
                                    To pick up a draggable item, press Space.
                                    Use arrow keys to reorder.
                                    Press Space again to drop.
                                </div>

                                <div id="DndLiveRegion" role="status" aria-live="assertive" aria-atomic="true"
                                    style="position:absolute;left:-9999px;"></div>

                                <div class="d-flex w-100 gap-2 flex-column mt-2">

                                    <!-- Save Changes -->
                                    <button
                                        class="w-full bg-gradient-to-b from-blue-400 to-blue-600 text-white font-semibold py-3 px-4 rounded-lg shadow border border-blue-700 hover:shadow-md transition-all btn-blue"
                                        id="saveBtn">
                                        Save Changes
                                    </button>

                                    <!-- Freeze Priority -->
                                    <button
                                        class="w-full bg-gradient-to-b from-green-400 to-green-600 text-white font-semibold py-3 px-4 rounded-lg shadow border border-green-700 hover:shadow-md transition-all flex items-center justify-center gap-2 btn-green"
                                        id="freezeBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none"
                                            stroke="currentColor" stroke-width="2" class="lucide lucide-lock">
                                            <rect width="16" height="10" x="3" y="10" rx="2" ry="2"></rect>
                                            <path d="M7 10V7a5 5 0 0 1 10 0v3"></path>
                                        </svg>
                                        Freeze Priority (0 selected)
                                    </button>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script>
        /* ---------------------- Video Toggle ---------------------- */
        function toggleVideo(btn, videoUrl) {
            let card = btn.closest(".program-card");
            let container = card.querySelector(".video-container");
            let video = container.querySelector("video");
            let source = video.querySelector("source");

            if (container.style.display === "none") {
                source.src = videoUrl;
                video.load();
                video.play();
                container.style.display = "block";
            } else {
                video.pause();
                container.style.display = "none";
            }
        }

        /* ---------------------- Add to Priority ---------------------- */
        let selectedTitles = [];

        function addToPriority(btn) {
            let card = btn.closest(".program-card");
            let title = card.querySelector(".program-title").innerText;

            if (selectedTitles.includes(title)) return;
            selectedTitles.push(title);

            document.getElementById("emptyState").style.display = "none";
            document.getElementById("priorityBox").style.display = "block";

            let priorityList = document.getElementById("priorityList");

            let newCard = document.createElement("div");
            newCard.className = "priority-card";
            newCard.setAttribute("draggable", "true");
            newCard.innerHTML = `
                <div class="d-flex gap-3">
                    <div class="priority-grip" aria-roledescription="sortable" tabindex="0">
                        <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2">
                            <circle cx="9" cy="12" r="1"></circle>
                            <circle cx="9" cy="5" r="1"></circle>
                            <circle cx="9" cy="19" r="1"></circle>
                            <circle cx="15" cy="12" r="1"></circle>
                            <circle cx="15" cy="5" r="1"></circle>
                            <circle cx="15" cy="19" r="1"></circle>
                        </svg>
                    </div>

                    <div class="flex-grow-1">
                        <div class="d-flex justify-content-between">
                            <h4 class="fw-bold title-text">${title}</h4>
                            <span class="priority-badge bg-success text-white px-3 rounded-pill fw-bold">#1</span>
                        </div>
                        <p class="mb-1"><strong>Duration:</strong> 4 Years</p>
                        <p class="small">Learn programming, algorithms, software development, and computer systems.</p>
                    </div>
                </div>
            `;

            priorityList.appendChild(newCard);
            refreshPriorityNumbers();

            enableDragAndDrop();
        }

        /* ---------------------- Update Priority Number ---------------------- */
        function refreshPriorityNumbers() {
            let items = document.querySelectorAll(".priority-card");
            items.forEach((el, index) => {
                let badge = el.querySelector(".priority-badge");
                badge.innerText = `#${index + 1}`;
            });

            document.getElementById("freezeBtn").innerText =
                `Freeze Priority (${items.length} selected)`;
        }

        /* ---------------------- Drag & Drop Logic ---------------------- */
        function enableDragAndDrop() {
            const list = document.getElementById("priorityList");
            const live = document.getElementById("DndLiveRegion");

            list.querySelectorAll(".priority-card").forEach(card => {
                card.addEventListener("dragstart", e => {
                    e.dataTransfer.setData("text/plain", "");
                    card.classList.add("dragging");
                });

                card.addEventListener("dragend", e => {
                    card.classList.remove("dragging");
                    refreshPriorityNumbers();
                });
            });

            list.addEventListener("dragover", e => {
                e.preventDefault();
                const dragging = document.querySelector(".dragging");
                const after = getDragAfterElement(list, e.clientY);

                if (after == null) {
                    list.appendChild(dragging);
                } else {
                    list.insertBefore(dragging, after);
                }
            });

            function getDragAfterElement(container, y) {
                const items = [...container.querySelectorAll(".priority-card:not(.dragging)")];
                return items.reduce((closest, child) => {
                    const box = child.getBoundingClientRect();
                    const offset = y - box.top - box.height / 2;
                    if (offset < 0 && offset > closest.offset) {
                        return { offset: offset, element: child };
                    } else {
                        return closest;
                    }
                }, { offset: Number.NEGATIVE_INFINITY }).element;
            }
        }
    </script>

</body>

</html>