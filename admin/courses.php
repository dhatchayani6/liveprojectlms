<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Course Creator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Course Creator</h1>
        <!-- Course Details -->
        <div class="mb-4">
            <h2>Course Details</h2>
            <div class="mb-3">
                <label for="courseName" class="form-label">Course Name</label>
                <input type="text" id="courseName" class="form-control" placeholder="Enter course name">
            </div>
            <div class="mb-3">
                <label for="courseCode" class="form-label">Course Code</label>
                <input type="text" id="courseCode" class="form-control" placeholder="Enter course code">
            </div>
        </div>

        <!-- Category Selector -->
        <div class="mb-4">
            <h2>Course Category</h2>
            <div id="categoryGroup" class="btn-group" role="group" aria-label="Category">
                <button type="button" class="btn btn-outline-primary">University Core</button>
                <button type="button" class="btn btn-outline-primary">University Elective</button>
                <button type="button" class="btn btn-outline-primary">Program Core</button>
                <button type="button" class="btn btn-outline-primary">Program Elective</button>
            </div>
        </div>

        <!-- Regulation Selector -->
        <div class="mb-4">
            <h2>Select Regulation</h2>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="regBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Regulation
                </button>
                <ul class="dropdown-menu" id="regMenu">
                    <li><a class="dropdown-item" href="#" data-value="Regulation 2020">Regulation 2020</a></li>
                    <li><a class="dropdown-item" href="#" data-value="Regulation 2019">Regulation 2019</a></li>
                    <li><a class="dropdown-item" href="#" data-value="Regulation 2018">Regulation 2018</a></li>
                    <li><a class="dropdown-item" href="#" data-value="Regulation 2017">Regulation 2017</a></li>
                </ul>
            </div>
        </div>

        <!-- Rubrics Selector -->
        <div class="mb-4">
            <h2>Select Exam Rubrics</h2>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="rubricBtn" data-bs-toggle="dropdown" aria-expanded="false">
                    Select Rubric
                </button>
                <ul class="dropdown-menu" id="rubricMenu">
                    <!-- Default rubric options -->
                    <li><a class="dropdown-item" href="#" data-value="Final Exam">Final Exam</a></li>
                    <li><a class="dropdown-item" href="#" data-value="Mid-term Exam">Mid-term Exam</a></li>
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
                <h2 id="rubricTitle"></h2>
                <button class="btn btn-sm btn-primary" id="saveRubricBtn">Save</button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="rubricTable">
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
            <button class="btn btn-sm btn-secondary" id="addComponentBtn">+ Add Component</button>
        </div>

        <!-- Passing Criteria Section -->
        <div class="mb-4">
            <h2>Passing Criteria</h2>
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
            <p id="noComponentsNote" class="text-muted" style="display:none;">Add components to rubrics first before creating passing criteria.</p>
            <button class="btn btn-sm btn-secondary" id="toggleCriteriaForm">+ Add Passing Criteria</button>
            <div class="mt-3" id="criteriaForm" style="display:none;">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h3>Select Components</h3>
                    <button class="btn btn-sm btn-outline-secondary" id="selectAllComponents">Select All</button>
                </div>
                <div id="componentCheckboxList" class="mb-3">
                    <!-- Checkboxes for components inserted here -->
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="requiredMarks" class="form-label">Required Marks</label>
                        <input type="number" id="requiredMarks" class="form-control" placeholder="Required marks">
                    </div>
                    <div class="col">
                        <label for="maximumMarks" class="form-label">Out of (Maximum)</label>
                        <input type="number" id="maximumMarks" class="form-control" placeholder="Maximum marks">
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
                    <input type="text" class="form-control mb-2" id="newRubricName" placeholder="Enter rubric name">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" id="saveNewRubricBtn">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (for dropdowns and modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <script>
        // Save course to FastAPI backend
        document.getElementById('saveCourseBtn').addEventListener('click', function() {
            const courseName = document.getElementById('courseName').value.trim();
            const courseCode = document.getElementById('courseCode').value.trim();

            if (!courseName || !courseCode) {
                alert("Please fill in all course details!");
                return;
            }

            // 🟩 Prepare payload
            const courseData = {
                course_code: courseCode,
                course_name: courseName,
                course_category: selectedCategory || "",
                regulation: selectedRegulation || "",
                rubric: selectedRubric || "",
                status: "draft",
                components: [],
                passing_criteria: {}
            };

            // 🟩 Add rubric components
            rubrics.forEach(r => {
                r.components.forEach(c => {
                    courseData.components.push({
                        component_name: c.name,
                        max_marks: c.maxMarks,
                        passing_marks: c.passingMarks
                    });
                });
            });

            // 🟩 Add passing criteria
            if (passingCriteria.length > 0) {
                const pc = passingCriteria[0];
                const compList = {};
                pc.components.forEach(c => {
                    compList[c.component] = c.maxMarks;
                });
                courseData.passing_criteria = {
                    component_list: compList,
                    required_marks: pc.requiredMarks,
                    total_marks: pc.maximumMarks
                };
            }

            // 🟩 Get token (adjust this part to how you store it)
            // const token = localStorage.getItem("access_token") || sessionStorage.getItem("access_token");

            const token = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjoxNywiZW1haWwiOiJha0BnbWFpbC5jb20iLCJ1c2VyX3R5cGUiOiJhZG1pbiIsInJlZ19ubyI6IjIxNjE3IiwidHlwZSI6ImFjY2VzcyIsImlhdCI6MTc2MTE0NTk0NywiZXhwIjoxNzYxMTQ2ODQ3LCJqdGkiOiJjMjgyNzg0Yjk4NWI0NmVkODBhMTdiY2FjYTFhNzU0ZCJ9.Mui08hF_mij1ZkZviwfw3QRmBx-sjDiX3S-gxhI8INE";

            if (!token) {
                alert("⚠️ Authorization token not found. Please log in first.");
                return;
            }

            // 🟩 AJAX call with Bearer token
            $.ajax({
                url: "http://127.0.0.1:8000/admin/courses", // your API endpoint
                type: "POST",
                contentType: "application/json",
                headers: {
                    "Authorization": "Bearer " + token // 👈 Important line
                },
                data: JSON.stringify(courseData),
                success: function(response) {
                    console.log(response);
                    alert("✅ Course saved successfully!");
                    location.reload(); 
                },
                error: function(xhr, status, error) {
                    console.error("Error:", xhr.responseText);
                    alert("❌ Failed to save course.", "Error:", xhr.responseText);
                }
            });
        });
    </script>
</body>

</html>