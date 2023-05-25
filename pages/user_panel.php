<?php

require '../config.php';
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
}
?>


<h1>WELCOME USER</h1>
<a href="logout.php">LOGOUT</a>