<!-- Topbar -->
<div class="topbar d-flex justify-content-between justify-content-md-end align-items-center shadow p-3 shadow-sm">

    <!-- Brand (for mobile) -->
    <div class="brand d-lg-none d-flex align-items-center">
        <img src="../images/logo1.png" alt="College Logo" class="me-2" style="width:35px; height:35px;">
    </div>

    <!-- Nav links for larger screens -->
    <div class="nav-links d-none d-md-flex gap-3">
        <li class="nav-item navbar-dropdown dropdown-user dropdown list-unstyled">
            <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                <div class="avatar">
                    <img src="../images/logo1.png" alt="User" class="w-px-40 h-auto rounded-circle" />
                </div>
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar avatar-online">
                                    <img src="../images/logo1.png" alt="User" class="w-px-40 h-auto rounded-circle" />
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <span class="fw-semibold d-block"><?php echo $_SESSION["name"]; ?></span>
                                <small class="text-muted">Admin</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="profile.php">
                        <i class="bi bi-person me-2"></i>
                        <span class="align-middle">My Profile</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="#" id="logoutBtn">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </li>
    </div>

    <!-- Mobile Toggle Button -->
    <div class="d-md-none">
        <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas">
            ☰
        </button>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {

        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        $("#logoutBtn").on("click", async function(e) {
            e.preventDefault();

            const token = getCookie("access_token");
            if (!token) {
                alert("⚠️ No token found. Redirecting to login...");
                window.location.href = "../index.php";
                return;
            }

            try {
                const res = await fetch("http://127.0.0.1:8000/auth/logout", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer " + token
                    },
                    body: JSON.stringify({
                        token: token,
                        reason: "user_logout"
                    })
                });

                const data = await res.json();
                console.log("Logout response:", data);
            } catch (err) {
                console.error("Logout failed:", err);
            }

            // 🧹 Clear cookies safely
            document.cookie = "access_token=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
            document.cookie = "refresh_token=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC;";

            alert("✅ Logged out successfully!");
            window.location.href = "../index.php";
        });

    });
</script>