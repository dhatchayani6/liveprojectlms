<?php

// 🟩 Helper function to get cookie safely
function get_cookie($name) {
    return isset($_COOKIE[$name]) ? $_COOKIE[$name] : null;
}

// 🟩 Helper function to set new access token
function set_cookie($name, $value, $minutes) {
    $expire = time() + ($minutes * 60);
    setcookie($name, $value, $expire, "/", "", true, true); // Secure + HttpOnly
}

// 🟩 FastAPI backend base URL
$API_BASE = "http://127.0.0.1:8000"; // change if needed

// 🟩 Read access + refresh tokens
$access_token = get_cookie("access_token");
$refresh_token = get_cookie("refresh_token");

// 🟩 If both missing → force login
if (!$access_token && !$refresh_token) {
    echo "<script>alert('Session expired. Please log in again.'); window.location.href='../index.php';</script>";
    exit;
}

// 🟩 If access token is missing but refresh token exists → refresh it
if (!$access_token && $refresh_token) {
    $url = "$API_BASE/auth/refresh";
    $data = json_encode(["refresh_token" => $refresh_token]);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode == 200 && $response) {
        $res = json_decode($response, true);

        if ($res["status"] == "success" && isset($res["data"]["access_token"])) {
            // 🟩 Store the new access token in cookies for next use
            set_cookie("access_token", $res["data"]["access_token"], 15);
        } else {
            echo "<script>alert('Token refresh failed. Please log in again.'); window.location.href='../index.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Session refresh failed. Please log in again.'); window.location.href='../index.php';</script>";
        exit;
    }
}


?>
