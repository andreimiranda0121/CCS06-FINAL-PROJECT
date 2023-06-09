<?php

require '../config.php';
use App\User;
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
} else {
    $user_id = $_SESSION['user']['id'];
    $user = User::getById($user_id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME USER</h1>
    <button class="button" onclick="history.back()">Back</button><br><br>
    <a href="logout.php">LOGOUT</a>
    <div class="container">
        <form action="save_user.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $user->getID(); ?>">
            <div>
                <label>Username: </label>
                <input type="text" class="box" value="<?php echo $user->getUsername(); ?>" name="username" required><br>
            </div>
            <div>
                <label>Email: </label>
                <input type="email" value="<?php echo $user->getEmail(); ?>" name="email" class="box" required><br>
            </div>
            <div>
                <label>Shipping Address: </label>
                <input type="text" value="<?php echo $user->getShipping(); ?>" name="shipping" class="box" required><br>
            </div>
            <div>
                <label>Billing Address:</label>
                <input type="text" value="<?php echo $user->getBilling(); ?>" name="billing" class="box" required><br>
            </div>
            <input type="submit" value="Save" class="btn">
        </form>
    </div>
    
</body>
</html>
