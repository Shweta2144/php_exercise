<?php
session_start(); // Start a new session or resume the existing one

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.html'); // Redirect to login page if not logged in
    exit();
}

// Welcome message
echo "<h2>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</h2>";
echo "<p>You have successfully logged in.</p>";
echo '<a href="logout.php">Logout</a>';
?>
