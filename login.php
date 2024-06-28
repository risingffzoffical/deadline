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
        // Authentication failed, redirect back to index.php with error message
        header("Location: index.php?error=1");
        exit;
    }
} else {
    // If someone tries to access login.php directly, redirect to index.php
    header("Location: index.php");
    exit;
}
?>
