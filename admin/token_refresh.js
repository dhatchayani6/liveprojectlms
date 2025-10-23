function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

// 🔄 Function to refresh access token using refresh token
async function refreshAccessToken() {
    const refreshToken = getCookie("refresh_token");
    if (!refreshToken) {
        console.warn("⚠️ Refresh token not found. Redirecting to login...");
        window.location.href = "../index.php";
        return;
    }

    try {
        const res = await fetch("http://127.0.0.1:8000/auth/refresh", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ refresh_token: refreshToken })
        });

        const data = await res.json();
        if (data.status === "success") {
            const newAccessToken = data.data.access_token;
            document.cookie = `access_token=${newAccessToken}; path=/; Secure; SameSite=Strict`;
            console.log("✅ Access token refreshed at", new Date().toLocaleTimeString());
        } else {
            console.warn("❌ Refresh failed:", data.message);
            alert("Session expired. Please log in again.");
            window.location.href = "../index.php";
        }
    } catch (err) {
        console.error("Error refreshing token:", err);
        alert("Session expired. Please log in again.");
        window.location.href = "../index.php";
    }
}

// 🕒 Auto-refresh every 10 minutes (adjust if needed)
const REFRESH_INTERVAL = 10 * 60 * 1000;

// 🖱️ Detect user activity (mouse, keyboard, scrolling)
let userActive = true;
let lastActivity = Date.now();

["mousemove", "keydown", "scroll", "click"].forEach(event => {
    document.addEventListener(event, () => {
        userActive = true;
        lastActivity = Date.now();
    });
});

// 🔁 Run refresh cycle only if user is active
setInterval(() => {
    const now = Date.now();
    const minutesSinceLastActivity = (now - lastActivity) / 60000;

    // Only refresh if user active in last 10 mins
    if (minutesSinceLastActivity < 10) {
        refreshAccessToken();
    } else {
        console.log("⏸️ User inactive. Skipping token refresh.");
    }
}, REFRESH_INTERVAL);
