<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrance Examination</title>
    <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #c5ccd3;
        }

        .gradient-dark {
            background: linear-gradient(to bottom, #374151, #1f2937);
            border-bottom: 4px solid #111827;
        }

        .gradient-blue {
            background: linear-gradient(to bottom, #dbeafe, #bfdbfe);
        }

        .gradient-next {
            background: linear-gradient(to bottom, #60a5fa, #2563eb);
        }

        .gradient-submit {
            background: linear-gradient(to bottom, #4ade80, #16a34a);
        }

        .q-btn {
            font-size: 10px;
            width: 38px;
            height: 42px;
        }

        .active-question-btn {
            /* ADDED */
            background-color: #2563eb !important;
            color: white !important;
            border-color: #1e40af !important;
        }

        .full-height-row {
            display: flex;
            align-items: stretch;
        }

        .sidebar-full-height {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .scroll-box {
            overflow-y: auto;
            flex-grow: 1;
        }

        .header-title {
            font-size: 15px !important;
        }

        .timer-number {
            font-size: 18px !important;
        }

        .question-text {
            font-size: 16px !important;
        }

        .small-icon {
            font-size: 14px !important;
        }

        .option-selected {
            background-color: rgb(59 130 246) !important;
            color: white !important;
            border-color: rgb(37, 99, 235) !important;
        }

        .option-selected .rounded-circle {
            background-color: white !important;
            color: black !important;
            border-color: gray !important;
        }

        .btn {
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }

        .col-lg-10 {
            height: 673px;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="gradient-dark text-white px-3 py-2 d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold mb-1 header-title">Entrance Examination</h4>
            <p class="text-light mb-0" style="font-size:10px !important">Candidate: d</p>
        </div>
        <div class="d-flex gap-2">
            <div class="bg-danger text-white p-2 rounded border border-danger">
                <p class="fw-semibold mb-1" style="font-size: 10px !important;">Warnings</p>
                <p class="fw-bold fs-6 mb-0">39</p>
            </div>

            <div class="px-4 py-2 rounded border border-primary bg-primary shadow">

                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-clock w-5 h-5 text-white" aria-hidden="true" data-id="element-1536">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <div>
                        <p class="text-light  mb-0 fw-semibold" style="font-size:10px !important">Time Remaining</p>
                        <p id="timer" class="text-white fw-bold timer-number mb-0 font-monospace">01:59:47</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN -->
    <div class="container-fluid p-3">
        <div class="row g-3 full-height-row">

            <!-- LEFT PANEL -->
            <div class="col-lg-10">
                <div class="card border shadow-lg h-100">
                    <div class="card-header gradient-blue border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 id="questionCount" class="fw-bold mb-0">Question 1 of 10</h6>

                            <button class="btn btn-light border d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-flag w-4 h-4" aria-hidden="true"
                                    data-id="element-1546">
                                    <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                    <line x1="4" x2="4" y1="22" y2="15"></line>
                                </svg> Mark for Review
                            </button>
                        </div>
                    </div>

                    <div class="card-body question-text">
                        <p class="fw-semibold question-text" id="questionText"></p>
                        <div class="d-grid gap-3" id="optionsBox"></div>
                    </div>

                    <div class="card-footer bg-light d-flex justify-content-between">
                        <button id="prevBtn" class="btn btn-secondary disabled d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-left small-icon"></i> Previous
                        </button>

                        <button id="nextBtn"
                            class="btn text-white d-flex align-items-center gap-2 gradient-next border">
                            Next <i class="bi bi-chevron-right small-icon"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL -->
            <div class="col-lg-2 sidebar-full-height">
                <div class="card border shadow-sm mb-3">
                    <div class="card-body">
                        <h6 class="fw-bold mb-3">Summary</h6>
                        <div class="d-flex justify-content-between mb-2"><span>Answered</span><span
                                class="fw-bold text-success">0</span></div>
                        <div class="d-flex justify-content-between mb-2"><span>Not Answered</span><span
                                class="fw-bold text-danger">10</span></div>
                        <div class="d-flex justify-content-between"><span>Marked</span><span
                                class="fw-bold text-warning">0</span></div>
                    </div>
                </div>

                <div class="card border shadow-sm flex-grow-1 d-flex flex-column">
                    <div class="card-body scroll-box">
                        <h6 class="fw-bold mb-3">Questions</h6>

                        <!-- QUESTION BUTTONS -->
                        <div id="questionButtons" class="d-grid" style="grid-template-columns: repeat(5,1fr); gap:5px;">
                            <!-- Will be filled by JS -->
                        </div>

                    </div>


                </div>
                <div class="py-3">
                    <button class="btn w-100 text-white fw-bold py-3  gradient-submit border">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-5 h-5" aria-hidden="true" data-id="element-1580">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg> Submit Exam
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- TIMER SCRIPT -->
    <script>
        let timeRemaining = 7199;
        function updateTimer() {
            let h = String(Math.floor(timeRemaining / 3600)).padStart(2, '0');
            let m = String(Math.floor((timeRemaining % 3600) / 60)).padStart(2, '0');
            let s = String(timeRemaining % 60).padStart(2, '0');
            document.getElementById("timer").textContent = `${h}:${m}:${s}`;
            if (timeRemaining <= 0) {
                clearInterval(timerInterval);
                alert("Time is up! Submitting exam...");
            }
            timeRemaining--;
        }
        let timerInterval = setInterval(updateTimer, 1000);
    </script>

    <!-- QUESTIONS + SIDE BUTTON HIGHLIGHT SCRIPT -->
    <script>
        const questions = [
            { q: "What is the capital of France?", options: ["London", "Berlin", "Paris", "Madrid"] },
            { q: "Who wrote the Ramayana?", options: ["Valmiki", "Vyasa", "Tulsidas", "Kalidasa"] },
            { q: "Which planet is the Red Planet?", options: ["Earth", "Venus", "Mars", "Jupiter"] },
            { q: "Speed of light is?", options: ["3×10⁸ m/s", "3×10⁶ m/s", "1×10⁸ m/s", "1×10⁶ m/s"] },
            { q: "Which gas is released by plants?", options: ["Oxygen", "Nitrogen", "CO₂", "Hydrogen"] },
            { q: "Father of Computers?", options: ["Charles Babbage", "Turing", "Gates", "Newton"] },
            { q: "Largest continent?", options: ["Asia", "Europe", "Africa", "Australia"] },
            { q: "Longest river?", options: ["Nile", "Amazon", "Ganga", "Yangtze"] },
            { q: "Temperature is measured by?", options: ["Thermometer", "Barometer", "Hygrometer", "Voltmeter"] },
            { q: "Which organ purifies blood?", options: ["Heart", "Liver", "Kidney", "Lungs"] }
        ];

        let index = 0;
        let answers = Array(questions.length).fill(null);

        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        // CREATE QUESTION BUTTONS
        const qButtonsContainer = document.getElementById("questionButtons");
        for (let i = 0; i < questions.length; i++) {
            qButtonsContainer.innerHTML += `<button class="btn btn-light border fw-bold q-btn" data-q="${i}">${i + 1}</button>`;
        }

        // UPDATE HIGHLIGHT ON RIGHT PANEL
        function updateQuestionButtons() {
            document.querySelectorAll(".q-btn").forEach((btn, i) => {
                btn.classList.remove("active-question-btn");
                if (i === index) btn.classList.add("active-question-btn");
            });
        }

        // LOAD QUESTION
        function loadQuestion() {
            document.getElementById("questionText").innerText = questions[index].q;
            document.getElementById("questionCount").innerText = `Question ${index + 1} of 10`;

            let html = "";
            let letters = ["A", "B", "C", "D"];

            questions[index].options.forEach((opt, i) => {
                let selected = answers[index] === i ? "option-selected" : "";
                html += `
                <button class="btn border text-start p-3 bg-light option-btn ${selected}" data-opt="${i}">
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-circle border bg-white d-flex justify-content-center align-items-center"
                            style="width:32px;height:32px;">${letters[i]}</div>
                        <span>${opt}</span>
                    </div>
                </button>`;
            });

            document.getElementById("optionsBox").innerHTML = html;

            // Option click event
            document.querySelectorAll(".option-btn").forEach(btn => {
                btn.addEventListener("click", function () {
                    let selectedOption = parseInt(this.getAttribute("data-opt"));
                    answers[index] = selectedOption;

                    document.querySelectorAll(".option-btn").forEach(b => b.classList.remove("option-selected"));
                    this.classList.add("option-selected");
                });
            });

            updateQuestionButtons(); // ADDED

            prevBtn.classList.toggle("disabled", index === 0);
            nextBtn.classList.toggle("disabled", index === questions.length - 1);
        }

        nextBtn.addEventListener("click", () => {
            if (index < questions.length - 1) index++;
            loadQuestion();
        });

        prevBtn.addEventListener("click", () => {
            if (index > 0) index--;
            loadQuestion();
        });

        // Right panel buttons click → Jump to question
        document.querySelectorAll(".q-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                index = parseInt(this.getAttribute("data-q"));
                loadQuestion();
            });
        });

        loadQuestion();
    </script>

</body>

</html>