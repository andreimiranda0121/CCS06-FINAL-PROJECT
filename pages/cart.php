<?php

require "../config.php";

use App\Cart;
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
}else{
    $cart = Cart::list();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>My Cart</title>
    <style>
        .product-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
            margin-right: 30px;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
        }

        /* Styles for the buttons */
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button-remove{
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: red;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }

        .button-remove:hover{
            background-color: darkred;
        }

        .prod-image{
            min-width: 100px;
            max-width: 100px;
        }

        .product-container-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="productpage.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
                <a href="cart.php"><i class="bx bx-cart"></i></a>
                <a href="user_panel.php"><i class="bx bx-user-circle"></i></a>
                <a href="#"><i class="bx bx-heart"></i></a>
            </nav>
            <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
        </div>

        <div class="sidebar">
            <div class="sidebar-content">
                <h3>Men</h3>
                <ul>
                    <li>New Arrivals</li>
                    <li>Best Sellers</li>
                    <li>Shop by Collection</li>
                </ul>
            </div>
        </div>
    </div>

     <div class="product-container-wrapper">
        <?php foreach ($cart as $item) : ?>
            <div class="product-container">
                <h2><?php echo $item->getProdName(); ?></h2>
                <img class="prod-image" src="../images/<?php echo $item->getImage(); ?>">
                <p>Price: Php <?php echo $item->getPrice(); ?></p>

                <!-- "Buy Now" button -->
                <a class="button">Buy Now</a><br>
                <a class="button-remove" href="delete_cart.php?id=<?php echo $item->getCartID(); ?>">Remove</a>
            </div>
        <?php endforeach ?>
    </div>

</body>
</html>