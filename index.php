<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: pages/home.php");
    
}else if($_SESSION['users']['role'] == 'admin'){
    header("Location: pages/admin_panel.php");
}else{
    header('Location: pages/user_panel.php');
}
?>