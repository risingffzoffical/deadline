<?php
session_start();

// Hardcoded admin credentials
$admin_username = "Users";
$admin_password = "abhaya";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match the admin credentials
    if ($username == $admin_username && $password == $admin_password) {
        // Authentication successful, redirect to success.php
        $_SESSION["username"] = $username;
        header("Location: success.php");
        exit;
    } else {
        // Authentication failed, redirect back to index.html with error message
        header("Location: index.html?error=1");
        exit;
    }
} else {
    // If someone tries to access login.php directly, redirect to index.html
    header("Location: index.html");
    exit;
}
?>
