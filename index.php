<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Management System Login</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <header class="lms-header">
        <div class="header-content">
            <h1>Learning Management System</h1>
            <h2>Empowering Education Through Technology</h2>
        </div>

        <div class="wave-container">
            <div class="absolute bottom-0 left-0 right-0">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"
                    fill="rgba(255,255,255,0.9)" preserveAspectRatio="none">
                    <path
                        d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg>
            </div>
        </div>
    </header>

    <main class="lms-main">
        <div class="login-card">
            <h3>Welcome to SIMATS</h3>

            <!-- ✅ Form updated -->
            <form id="loginForm" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                        <span class="material-icons password-toggle">visibility_off</span>
                    </div>
                </div>

                <button type="submit" class="login-btn">Log In</button>
            </form>

            <p class="portal-info">Institutional Learning Portal</p>
        </div>

        <footer class="lms-footer">
            <p>&copy; 2023 SIMATS - Powered by Viana Soft</p>
        </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        // ✅ Attach submit event to the form (not the button)
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            const email = $('#email').val().trim();
            const password = $('#password').val().trim();

            if (!email || !password) {
                alert("Please enter both email and password.");
                return;
            }

            // Send to backend
            fetch('api/login.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ email, password })
            })
            .then(res => res.json())
            .then(response => {
                if (response.status === 'success') {
                    // alert('Login Successfully ');
                    // Redirect based on backend response
                    window.location.href = response.redirect;
                } else {
                    alert(response.message);
                }
            })
            .catch(err => {
                console.error('Error:', err);
                alert('Server error. Please try again later.');
            });
        });
    </script>
</body>
</html>
