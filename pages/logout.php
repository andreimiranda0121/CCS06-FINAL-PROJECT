<?php

require "../config.php";

// Remove all session variables and redirect the user to the login page
session_start();
$_SESSION = array();
session_destroy();

header('Location: login.php');

?>