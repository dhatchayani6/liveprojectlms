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
            <div class="absolute bottom-0 left-0 right-0"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80"
                    fill="rgba(255,255,255,0.9)" preserveAspectRatio="none">
                    <path
                        d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                    </path>
                </svg></div>
        </div>
    </header>

    <main class="lms-main">
        <div class="login-card">
            <h3>Welcome to SIMATS</h3>
            <form action="#" method="POST">

                <div class="input-group">
                    <label for="name">Email</label>
                    <input type="text" id="name" name="name" placeholder="Enter Your Email"
                        required>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                        <span class="material-icons password-toggle">
                            visibility_off
                        </span>
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
        $(function() {
            $("form").on("submit", function(e) {
                e.preventDefault();

                const email = $("#name").val().trim();
                const password = $("#password").val().trim();

                if (!email || !password) {
                    alert("Please enter both username and password");
                    return;
                }

                $.ajax({
                    url: "http://127.0.0.1:8000/auth/login",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        email: email,
                        password: password
                    }),
                    success: function(res) {
                        console.log(res);

                        const data = res.data;
                        if (data && data.access_token) {
                            // ✅ Set cookies (no Secure flag on localhost)
                            setCookie("access_token", data.access_token, 15); // 15 minutes
                            setCookie("refresh_token", data.refresh_token, 7 * 24 * 60); // 7 days

                            alert("✅ Login successful!");
                            window.location.href = "admin/courses.php";
                        } else {
                            alert("❌ Unexpected response. Check backend.");
                        }
                    },
                    error: function(xhr) {
                        let msg = "❌ Login failed.";
                        try {
                            const err = JSON.parse(xhr.responseText);
                            msg += "\n" + (err.message || err.data?.reason || "");
                        } catch {
                            msg += "\n" + xhr.responseText;
                        }
                        alert(msg);
                    },
                });
            });
        });

        // 🕒 Helper to set cookies (works on localhost)
        function setCookie(name, value, minutes) {
            const d = new Date();
            d.setTime(d.getTime() + minutes * 60 * 1000);
            document.cookie = `${name}=${value}; expires=${d.toUTCString()}; path=/; SameSite=Strict`;
        }
    </script>


</body>

</html>