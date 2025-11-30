<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Selection (Bootstrap UI)</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #c5ccd3;
            min-height: 100vh;
        }

        .program-box {
            border: 2px solid #d0d4da;
            border-radius: 15px;
            padding: 18px;
            background: white;
            transition: 0.2s;
        }

        .program-box:hover {
            border-color: #8bb5ff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .priority-card {
            border: 2px solid #bcd7ff;
            border-radius: 15px;
            padding: 18px;
            background: #f0f6ff;
        }

        .priority-item {
            border: 2px solid #a5b4fc;
            border-radius: 12px;
            padding: 12px;
            background: #eef2ff;
            cursor: grab;
        }

        .priority-item.dragging {
            opacity: 0.5;
        }
    </style>
</head>

<body>

    <div class="container py-4">

        <h2 class="fw-bold mb-4">Program Selection</h2>

        <div class="row g-4">

            <!-- LEFT SIDE -->
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Available Programs</h4>

                <input type="text" id="search" class="form-control mb-3" placeholder="Search programs...">

                <div id="programList" class="d-grid gap-3">

                    <!-- Example Card -->
                    <div class="program-box">
                        <h5 class="fw-bold">Computer Science Engineering</h5>
                        <p class="text-secondary small mb-2"><strong>Duration:</strong> 4 Years</p>
                        <p class="small">Learn programming, algorithms, and software systems.</p>
                        <button class="btn btn-success mt-2 btn-select" data-name="Computer Science Engineering">
                            Select
                        </button>
                    </div>

                    <div class="program-box">
                        <h5 class="fw-bold">Mechanical Engineering</h5>
                        <p class="text-secondary small mb-2"><strong>Duration:</strong> 4 Years</p>
                        <p class="small">Study mechanics, thermodynamics, and machine design.</p>
                        <button class="btn btn-success mt-2 btn-select" data-name="Mechanical Engineering">
                            Select
                        </button>
                    </div>

                    <div class="program-box">
                        <h5 class="fw-bold">Electrical Engineering</h5>
                        <p class="text-secondary small mb-2"><strong>Duration:</strong> 4 Years</p>
                        <p class="small">Master circuits, power systems, and electrical technology.</p>
                        <button class="btn btn-success mt-2 btn-select" data-name="Electrical Engineering">
                            Select
                        </button>
                    </div>

                    <!-- Add more here -->

                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Your Program Priorities</h4>

                <div class="priority-card">
                    <div id="priorityList" class="d-grid gap-3 text-center">

                        <div id="emptyState">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135697.png" width="70"
                                class="mb-3 opacity-50">
                            <p class="text-muted fw-semibold">No programs selected</p>
                            <p class="text-secondary small">Select programs from the left to set priorities</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const priorityList = document.getElementById("priorityList");
        const emptyState = document.getElementById("emptyState");

        // SELECT PROGRAM
        document.querySelectorAll(".btn-select").forEach(btn => {
            btn.addEventListener("click", () => {
                const name = btn.dataset.name;

                emptyState?.remove(); // remove empty message

                // Create priority element
                const item = document.createElement("div");
                item.className = "priority-item";
                item.draggable = true;
                item.innerHTML = `
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold program-name"></span>
                    <button class="btn btn-sm btn-danger btn-remove">Remove</button>
                </div>
            `;
                item.querySelector(".program-name").innerText = name;

                priorityList.appendChild(item);
                updateNumbers();

                // Remove from priority
                item.querySelector(".btn-remove").onclick = () => {
                    item.remove();
                    if (priorityList.children.length === 0) {
                        priorityList.appendChild(emptyState);
                    }
                    updateNumbers();
                };

                // Drag events
                item.addEventListener("dragstart", () => item.classList.add("dragging"));
                item.addEventListener("dragend", () => item.classList.remove("dragging"));
            });
        });

        // Drag & Drop Sorting
        priorityList.addEventListener("dragover", e => {
            e.preventDefault();
            const dragging = document.querySelector(".dragging");
            const after = getDragAfter(priorityList, e.clientY);
            if (after == null) {
                priorityList.appendChild(dragging);
            } else {
                priorityList.insertBefore(dragging, after);
            }
            updateNumbers();
        });

        function getDragAfter(container, y) {
            const items = [...container.querySelectorAll(".priority-item:not(.dragging)")];
            return items.find(item => {
                const box = item.getBoundingClientRect();
                return y < box.top + box.height / 2;
            });
        }

        function updateNumbers() {
            document.querySelectorAll(".priority-item").forEach((item, index) => {
                item.querySelector(".program-name").innerText =
                    `${index + 1}. ` + item.querySelector(".program-name").innerText.replace(/^\d+\.\s/, "");
            });
        }
    </script>

</body>

</html>