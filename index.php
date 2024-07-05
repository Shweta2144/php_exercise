<?php
// Start the session
session_start();

// Store user information in the session
$_SESSION['username'] = 'JohnDoe'; // Example username
$_SESSION['email'] = 'johndoe@example.com'; // Example email

// Redirect to a welcome page
header('Location: welcome.php');
exit();
?>
