<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../images/logo1.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../stylesheet/responsive.css">

    <link rel="stylesheet" href="../stylesheet/styles.css">
    <style>
        .card-custom {
            background-color: #fff;
            border-radius: 12px;
            padding: 1rem;
        }

        .table th,
        .table td {
            vertical-align: middle !important;
        }

        .table thead th {
            font-weight: 600;
            letter-spacing: 0.5px;
            font-size: 0.75rem;
        }

        .table tbody td {
            font-size: 0.85rem;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 2px 10px;
        }

        .dropdown-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="container-fluid students-section">
        <div class="row">
            <!-- didebar -->
            <?php include('sidebar.php') ?>
            <!-- Main Content -->
            <div class="col-12 col-sm-10 col-md-9 col-lg-10 p-0">
                <!-- Topbar -->
                <?php include('topbar.php') ?>
                <!-- Page Content -->
                <div class="p-4 content-scroll">
                    <!-- Add New Course Form -->
                    <div class="card-custom shadow mt-4 p-4">
                        <h6 class="text-center mb-4">Course Creator</h6>

                        <!-- Course Details -->
                        <div class="mb-4">
                            <h6>Course Details</h6>
                            <div class="row g-3"> <!-- g-3 adds gap between columns -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="courseName" class="form-control"
                                            placeholder="Enter course name">
                                        <label for="courseName">Course Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" id="courseCode" class="form-control"
                                            placeholder="Enter course code">
                                        <label for="courseCode">Course Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="row g-3">
                                <!-- Category Selector -->
                                <div class="col-md-6">
                                    <h6>Course Category</h6>
                                    <div id="categoryGroup" class="btn-group" role="group" aria-label="Category">
                                        <button type="button" class="btn btn-outline-primary">University Core</button>
                                        <button type="button" class="btn btn-outline-primary">University Elective</button>
                                        <button type="button" class="btn btn-outline-primary">Program Core</button>
                                        <button type="button" class="btn btn-outline-primary">Program Elective</button>
                                    </div>
                                </div>
                                <!-- Regulation Selector -->
                                <div class="col-md-6">
                                    <h6>Select Regulation</h6>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="regBtn"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Regulation
                                        </button>
                                        <ul class="dropdown-menu" id="regMenu">
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2024">Regulation
                                                    2024</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2023">Regulation
                                                    2023</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2022">Regulation
                                                    2022</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2021">Regulation
                                                    2021</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2020">Regulation
                                                    2020</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2019">Regulation
                                                    2019</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2018">Regulation
                                                    2018</a></li>
                                            <li><a class="dropdown-item" href="#" data-value="Regulation 2017">Regulation
                                                    2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- Rubrics Selector -->
                        <div class="mb-4">
                            <h6>Select Exam Rubrics</h6>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="rubricBtn"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Select Rubric
                                </button>
                                <ul class="dropdown-menu" id="rubricMenu">
                                    <!-- Default rubric options -->
                                    <li><a class="dropdown-item" href="#" data-value="Final Exam">Final Exam</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Mid-term Exam">Mid-term Exam</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" data-value="Assignments">Assignments</a></li>
                                    <li><a class="dropdown-item" href="#" data-value="Projects">Projects</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <!-- "Add New Rubric" opens modal -->
                                    <li><a class="dropdown-item" href="#" id="addNewRubric">+ Add New Rubric</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Rubrics Table (shown when a rubric is selected) -->
                        <div class="mb-4" id="rubricTableSection" style="display:none;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 id="rubricTitle" style="display:none;"></h6>
                                <button class="btn btn-sm btn-primary"  style="display:none;" id="saveRubricBtn">Save</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" style="display:none;" id="rubricTable">
                                    <thead>
                                        <tr>
                                            <th>Component</th>
                                            <th>Max Marks</th>
                                            <th>Passing Marks</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Rubric component rows are inserted here by JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-sm btn-secondary"  style="display:none;" id="addComponentBtn">+ Add Component</button>
                        </div>

                        <!-- Passing Criteria Section -->
                        <div class="mb-4" style="display: none;">
                            <h6>Passing Criteria</h6>
                            <div id="criteriaTableSection" style="display:none;">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="criteriaTable">
                                        <thead>
                                            <tr>
                                                <th>Components</th>
                                                <th>Required Marks</th>
                                                <th>Out of</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Passing criteria rows here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p id="criteriaNote" class="text-muted">No passing criteria defined yet.</p>
                            <p id="noComponentsNote" class="text-muted" style="display:none;">Add components to rubrics
                                first before
                                creating passing criteria.</p>
                            <button class="btn btn-sm btn-secondary" id="toggleCriteriaForm">+ Add Passing
                                Criteria</button>
                            <div class="mt-3" id="criteriaForm" style="display:none;">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3>Select Components</h3>
                                    <button class="btn btn-sm btn-outline-secondary" id="selectAllComponents">Select
                                        All</button>
                                </div>
                                <div id="componentCheckboxList" class="mb-3">
                                    <!-- Checkboxes for components inserted here -->
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="requiredMarks" class="form-label">Required Marks</label>
                                        <input type="number" id="requiredMarks" class="form-control"
                                            placeholder="Required marks">
                                    </div>
                                    <div class="col">
                                        <label for="maximumMarks" class="form-label">Out of (Maximum)</label>
                                        <input type="number" id="maximumMarks" class="form-control"
                                            placeholder="Maximum marks">
                                    </div>
                                </div>
                                <button class="btn btn-primary" id="addCriteriaBtn">Add Criteria</button>
                            </div>
                        </div>

                        <!-- Cancel/Save Course Buttons -->
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-secondary me-2">Cancel</button>
                            <button class="btn btn-primary" id="saveCourseBtn">Save Course</button>
                        </div>
                    </div>

                    <!-- "Add New Rubric" Modal -->
                    <div class="modal" tabindex="-1" id="rubricModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Rubric</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control mb-2" id="newRubricName"
                                        placeholder="Enter rubric name">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button class="btn btn-primary" id="saveNewRubricBtn">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- "Add New Rubric" Modal -->
    <div class="modal" tabindex="-1" id="rubricModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Rubric</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" id="newRubricName" placeholder="Enter rubric name">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveNewRubricBtn">Add</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="token_refresh.js"></script> -->

    <script>
        // JavaScript state
        let selectedCategory = '';
        let selectedRegulation = '';
        let rubrics = [];
        let selectedRubric = '';
        let passingCriteria = [];

        // Category button click handling
        document.querySelectorAll('#categoryGroup .btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Toggle active class on clicked button
                document.querySelectorAll('#categoryGroup .btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                selectedCategory = this.textContent;
            });
        });

        // Regulation dropdown selection
        document.querySelectorAll('#regMenu .dropdown-item').forEach(item => {
            item.addEventListener('click', function() {
                selectedRegulation = this.getAttribute('data-value');
                document.getElementById('regBtn').textContent = selectedRegulation;
            });
        });

        // Add rubric option to dropdown
        function addRubricOption(name) {
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.className = 'dropdown-item';
            a.href = '#';
            a.setAttribute('data-value', name);
            a.textContent = name;
            a.addEventListener('click', () => selectRubric(name));
            li.appendChild(a);
            const addNewLi = document.getElementById('addNewRubric').closest('li');
            document.getElementById('rubricMenu').insertBefore(li, addNewLi);
        }

        // Handle rubric selection
        function selectRubric(name) {
            selectedRubric = name;
            document.getElementById('rubricBtn').textContent = name;
            document.getElementById('rubricTitle').textContent = name + ' Components';
            document.getElementById('rubricTableSection').style.display = 'block';
            let r = rubrics.find(r => r.name === name);
            if (!r) {
                // Initialize new rubric with a default component
                r = {
                    name: name,
                    components: [{
                        name: 'Theory',
                        maxMarks: 100,
                        passingMarks: 40
                    }]
                };
                rubrics.push(r);
            }
            renderRubricTable();
        }
        document.querySelectorAll('#rubricMenu .dropdown-item').forEach(item => {
            const name = item.getAttribute('data-value');
            if (name) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    selectRubric(name);
                });
            }
        });

        // Show modal to add a new rubric
        document.getElementById('addNewRubric').addEventListener('click', function(event) {
            event.preventDefault();
            new bootstrap.Modal(document.getElementById('rubricModal')).show();
        });

        // Save new rubric from modal
        document.getElementById('saveNewRubricBtn').addEventListener('click', function() {
            const newName = document.getElementById('newRubricName').value.trim();
            if (newName) {
                addRubricOption(newName);
                selectedRubric = newName;
                rubrics.push({
                    name: newName,
                    components: []
                });
                document.getElementById('rubricBtn').textContent = newName;
                document.getElementById('rubricTitle').textContent = newName + ' Components';
                document.getElementById('rubricTableSection').style.display = 'block';
                renderRubricTable();
                bootstrap.Modal.getInstance(document.getElementById('rubricModal')).hide();
                document.getElementById('newRubricName').value = '';
            }
        });

        // Render rubric components table
        function renderRubricTable() {
            const r = rubrics.find(r => r.name === selectedRubric);
            const tbody = document.querySelector('#rubricTable tbody');
            tbody.innerHTML = '';
            if (r) {
                r.components.forEach((comp, index) => {
                    const row = tbody.insertRow();
                    // Component name input
                    const cellName = row.insertCell(0);
                    const inputName = document.createElement('input');
                    inputName.type = 'text';
                    inputName.className = 'form-control';
                    inputName.value = comp.name;
                    inputName.addEventListener('input', function() {
                        r.components[index].name = this.value;
                    });
                    cellName.appendChild(inputName);
                    // Max marks input
                    const cellMax = row.insertCell(1);
                    const inputMax = document.createElement('input');
                    inputMax.type = 'number';
                    inputMax.className = 'form-control';
                    inputMax.value = comp.maxMarks;
                    inputMax.addEventListener('input', function() {
                        r.components[index].maxMarks = parseInt(this.value) || 0;
                    });
                    cellMax.appendChild(inputMax);
                    // Passing marks input
                    const cellPass = row.insertCell(2);
                    const inputPass = document.createElement('input');
                    inputPass.type = 'number';
                    inputPass.className = 'form-control';
                    inputPass.value = comp.passingMarks;
                    inputPass.addEventListener('input', function() {
                        r.components[index].passingMarks = parseInt(this.value) || 0;
                    });
                    cellPass.appendChild(inputPass);
                    // Action (Remove button)
                    const cellAction = row.insertCell(3);
                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn btn-sm btn-danger';
                    removeBtn.textContent = 'Remove';
                    removeBtn.addEventListener('click', function() {
                        r.components.splice(index, 1);
                        renderRubricTable();
                        updateCriteriaToggle();
                    });
                    cellAction.appendChild(removeBtn);
                });
            }
            updateCriteriaToggle();
        }

        // Add a new empty component row
        document.getElementById('addComponentBtn').addEventListener('click', function() {
            const r = rubrics.find(r => r.name === selectedRubric);
            if (r) {
                r.components.push({
                    name: '',
                    maxMarks: 0,
                    passingMarks: 0
                });
                renderRubricTable();
                updateCriteriaToggle();
            }
        });

        // Check if we should allow adding passing criteria (requires components)
        function updateCriteriaToggle() {
            const allComponents = getAllComponents();
            const button = document.getElementById('toggleCriteriaForm');
            const noCompNote = document.getElementById('noComponentsNote');
            if (allComponents.length > 0) {
                button.style.display = 'inline-block';
                noCompNote.style.display = 'none';
            } else {
                button.style.display = 'none';
                noCompNote.style.display = 'block';
                document.getElementById('criteriaForm').style.display = 'none';
            }
        }

        // Gather all components across rubrics
        function getAllComponents() {
            let all = [];
            rubrics.forEach(r => {
                r.components.forEach(comp => {
                    if (comp.name) {
                        all.push({
                            rubric: r.name,
                            component: comp.name,
                            maxMarks: comp.maxMarks
                        });
                    }
                });
            });
            return all;
        }

        // Toggle the passing-criteria form
        document.getElementById('toggleCriteriaForm').addEventListener('click', function() {
            const form = document.getElementById('criteriaForm');
            form.style.display = (form.style.display === 'none') ? 'block' : 'none';
            if (form.style.display === 'block') {
                populateComponentCheckboxes();
            }
        });

        // Populate the list of checkboxes for components
        function populateComponentCheckboxes() {
            const listDiv = document.getElementById('componentCheckboxList');
            listDiv.innerHTML = '';
            const allComps = getAllComponents();
            allComps.forEach((comp, idx) => {
                const div = document.createElement('div');
                div.className = 'form-check';
                const checkbox = document.createElement('input');
                checkbox.className = 'form-check-input';
                checkbox.type = 'checkbox';
                checkbox.id = 'comp-' + idx;
                checkbox.dataset.rubric = comp.rubric;
                checkbox.dataset.component = comp.component;
                checkbox.dataset.max = comp.maxMarks;
                const label = document.createElement('label');
                label.className = 'form-check-label';
                label.htmlFor = 'comp-' + idx;
                label.textContent = `${comp.rubric} - ${comp.component} (${comp.maxMarks} marks)`;
                div.appendChild(checkbox);
                div.appendChild(label);
                listDiv.appendChild(div);
            });
        }

        // "Select All" button for checkboxes
        document.getElementById('selectAllComponents').addEventListener('click', function() {
            document.querySelectorAll('#componentCheckboxList .form-check-input').forEach(cb => cb.checked = true);
        });

        // Add a passing criterion based on selected checkboxes
        document.getElementById('addCriteriaBtn').addEventListener('click', function() {
            const checkboxes = document.querySelectorAll('#componentCheckboxList .form-check-input');
            let selected = [];
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    selected.push({
                        rubric: cb.dataset.rubric,
                        component: cb.dataset.component,
                        maxMarks: parseInt(cb.dataset.max)
                    });
                }
            });
            const req = parseInt(document.getElementById('requiredMarks').value) || 0;
            const tot = parseInt(document.getElementById('maximumMarks').value) || 0;
            if (selected.length > 0) {
                passingCriteria.push({
                    components: selected,
                    requiredMarks: req,
                    maximumMarks: tot
                });
                renderCriteria();
                document.getElementById('criteriaForm').style.display = 'none';
                document.getElementById('requiredMarks').value = '';
                document.getElementById('maximumMarks').value = '';
            }
        });

        // Render the passing criteria table
        function renderCriteria() {
            const note = document.getElementById('criteriaNote');
            const section = document.getElementById('criteriaTableSection');
            const tbody = document.querySelector('#criteriaTable tbody');
            tbody.innerHTML = '';
            if (passingCriteria.length === 0) {
                section.style.display = 'none';
                note.style.display = 'block';
            } else {
                section.style.display = 'block';
                note.style.display = 'none';
                passingCriteria.forEach((crit, idx) => {
                    const row = tbody.insertRow();
                    const compList = crit.components.map(c => `${c.rubric} (${c.component})`).join(', ');
                    row.insertCell(0).textContent = compList;
                    row.insertCell(1).textContent = crit.requiredMarks;
                    row.insertCell(2).textContent = crit.maximumMarks;
                    const actionCell = row.insertCell(3);
                    const removeBtn = document.createElement('button');
                    removeBtn.className = 'btn btn-sm btn-danger';
                    removeBtn.textContent = 'Remove';
                    removeBtn.addEventListener('click', function() {
                        passingCriteria.splice(idx, 1);
                        renderCriteria();
                    });
                    actionCell.appendChild(removeBtn);
                });
            }
        }

        // Initialize criteria toggle (no components at start)
        updateCriteriaToggle();
    </script>

    <!-- create course -->
    <script>
        $("#saveCourseBtn").click(function() {

            let payload = {
                course_name: $("#courseName").val().trim(),
                course_code: $("#courseCode").val().trim(),
                category: selectedCategory,
                regulation: selectedRegulation,
                rubric: selectedRubric,
                components: [],
                passing_criteria: passingCriteria
            };

            rubrics.forEach(r => {
                r.components.forEach(c => payload.components.push(c));
            });

            $.ajax({
                url: "api/create_course.php",
                type: "POST",
                contentType: "application/json",
                data: JSON.stringify(payload),
                success: function(res) {
                    if (res.status) {
                        Swal.fire("Success", "Course Created!", "success");
                        setTimeout(() => location.reload(), 1200);
                    } else {
                        Swal.fire("Error", res.message, "error");
                    }
                }
            });

        });
    </script>


</body>

</html>