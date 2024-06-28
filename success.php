<?php
session_start();

// Check if user is logged in, if not redirect back to index.php
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

// Display success message and rules and regulations
echo "<h2>Welcome, {$_SESSION['username']}!</h2>";
echo "<p>Here are the rules and regulations:</p>";
echo "<ul>";
echo "<li>Don't be mess.</li>";
echo "<li>Don't use messy words.</li>";
echo "<li>Don't force each other.</li>";
echo "</ul>";

// Provide a logout link
echo '<p><a href="index.html">Logout</a></p>';

// Redirect to index.html after displaying content
header("Refresh: 5; url=index.html"); // Redirect after 5 seconds
?>
