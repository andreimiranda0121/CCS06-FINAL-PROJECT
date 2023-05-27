<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <ul>
        <li><a href="products.php">Manage Products</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>