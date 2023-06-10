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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/dropdown.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="home.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
            <div class="menu-btn">
                <a href="#"><i class="bx bx-cart"></i></a>
                <div class="dropdown-menu">
                    <a class="links" href="cart.php">My Cart</a>
                    <a class="links" href="logout.php">My Order</a>
                </div>
            </div>
            <div class="menu-btn">
                <a href="#"><i class="bx bx-user-circle"></i></a>
                <div class="dropdown-menu">
                    <a class="links" href="user_panel.php">My Profile</a>
                    <a class="links" href="logout.php">Logout</a>
                </div>
            </div>
            <a href="#"><i class="bx bx-heart"></i></a>
        </nav>
        <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
    </div>

    <div class="sidebar">
        <div class="sidebar-content">
            <a href="gender.php?gender=<?php echo "Male"?>"><h3>Male</h3></a>
            <ul>
                <a href="new_arrival.php?gender=<?php echo "Male"?>"><li>New Arrivals</li></a>
            </ul>
            <a href="gender.php?gender=<?php echo "Female"?>"><h3>Male</h3></a>
            <ul>
                <a href="new_arrival.php?gender=<?php echo "Female"?>"><li>New Arrivals</li></a>
            </ul>
        </div>
    </div>
    </div>
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
    <script src="../scripts/login_sidebar.js"></script>
</body>
</html>
