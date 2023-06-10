<?php

require "../config.php";

use App\Order;

$orders = Order::listOrders();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Mal De Wear</title>
    <style>
        /* Basic styles for the container */
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

        a {
            text-decoration: none;
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

        .button:hover {
            background-color: #0056b3;
        }

        .prod-image {
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

        .menu-btn {
            position: relative;
            display: inline-block;
            margin-left: 18px;
        }

        .menu-btn:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 25%;
            min-width: 160px;
            background-color: black;
            z-index: 1;
        }

        .links {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px solid black;
        }

        .links:hover {
            background-color: rgb(8, 107, 46);
        }

        /* Updated styling for dashboard */
        .dashboard {
            position: relative;
            display: flex;
        }
        
        .dashboard-title {
            margin-right: auto;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .menu-icon {
            margin-left: 10px;
            color: #fff;
            font-size: 24px;
        }
    </style>
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
                    <a class="links" href="orders.php">My Order</a>
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
                <h3><a href='men.php'>Men</a></h3>
                <ul>
                    <li><a href='men.php'>New Arrivals</a></li>
                    <li><a href='men.php'>Best Sellers</a></li>
                    <li><a href='men.php'>Shop by Collection</a></li>
                    <li><a href='men_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='men_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='men_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='men_accessories.php?category=<?php echo urlencode("Accesory"); ?>'>Accessories</a></li>
                </ul>
                <h3><a href='women.php'>Women</a></h3>
                <ul>
                    <li><a href='women.php'>New Arrivals</a></li>
                    <li><a href='women.php'>Best Sellers</a></li>
                    <li><a href='women.php'>Shop by Collection</a></li>
                    <li><a href='women_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='women_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='women_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='women_accessories.php?category=<?php echo urlencode("Accesory"); ?>'>Accessories</a></li>
                </ul>
            </div>
            <div class="sidebar-content2">
                <h3><a href='productpage.php'>All Items</a></h3>
            </div>
            <div class="sidebar-content3">
                <h3><a href='#'>Login</a></h3>
            </div>
        </div>
    </div>
<div class="product-container-wrapper">
    <?php foreach ($orders as $order): ?>
        <div class="product-container">
            <h2><?php echo $order->getProdName();?></h2>
            <img class="prod-image" src="../images/<?php echo $order->getGender()?>/<?php echo $order->getImage(); ?>">
            <p><?php echo $order->getDescription(); ?></p>
            <p><?php echo $order->getOrderID(); ?></p>
            <p><?php echo $order->getBilling(); ?></p>
            <p><?php echo $order->getAddress(); ?></p>
            <p><?php echo $order->getDate(); ?></p>
            <p><?php echo $order->getStatus(); ?></p>
            <p class="price">Total: Php <?php echo $order->getTotalAmount(); ?></p>
        </div>
    <?php endforeach; ?>
    <script src="../scripts/sidebar.js"></script>
</body>
</html>
