<?php

require "../config.php";

// If the session variable is already set, automatically redirect the user to index page


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mal De Wear</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Mal De Wear</h1>
        </div>
        <form class="form" action="attempt_login.php" method="Post">
            <div class="input-field">
                <input type="text" class="input" name="username" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" name="password" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Login">
            </div>
        </form>
        <div class="register">
            <p>Don't have an account? <a href="">Sign up!</a></p>
        </div>
    </div>
</body>
</html>