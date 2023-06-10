<?php

require "../config.php";
use App\Product;
session_start();

$product = Product::list();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/form.css">
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

        /* Modal and Blur styles */
        #blur-container {
            position: relative;
        }

        #blur-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            filter: blur(8px);
            z-index: -1;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
        }

        .modal-content {
            margin: 200px auto;
            padding: 20px;
            background-color: white;
            width: 50%;
        }

        #close-modal {
            margin-top: 20px;
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
                <a href="gender.php?gender=<?php echo "Male"?>"><h3>Men</h3></a>
                <ul>
                    <a href="new_arrival.php?gender=<?php echo "Male"?>"><li>New Arrivals</li></a>
                </ul>
                <a href="gender.php?gender=<?php echo "Female"?>"><h3>Women</h3></a>
                <ul>
                    <a href="new_arrival.php?gender=<?php echo "Female"?>"><li>New Arrivals</li></a>
                </ul>
            </div>
        </div>
    </div>

    <div class="product-container-wrapper">
        <?php foreach($product as $prod): ?>
            <div class="product-container">
                <h2><?php echo $prod->getProdName(); ?></h2>
                <img class="prod-image" src="../images/<?php echo $prod->getImage(); ?>">
                <p class="price">Price: Php <?php echo $prod->getPrice(); ?></p>
                
                <!-- "Add to Cart" button -->
                
                <div id="blur-container-<?php echo $prod->getProdID(); ?>">
                    <div class="content">
                        <a class="button" class="button-remove" id="open-modal-<?php echo $prod->getProdID(); ?>">Add to Cart</a>
                    </div>
                </div>
                <div id="myModal-<?php echo $prod->getProdID(); ?>" class="modal">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h2>Successfully added to cart</h2>
                        </div>
                        <div class="modal-body">
                        <img src="../images/check.png" alt="Green Check Logo" class="success-icon">
                        <p>Your item has been added to the cart.</p>
                        </div>
                        <a href="save_to_cart.php?id=<?php echo $prod->getProdID();?>" class="button" class="modal-close" id="close-modal-<?php echo $prod->getProdID(); ?>">Okay</a>
                    </div>
                </div>
                <!-- "Buy Now" button -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#open-modal-<?php echo $prod->getProdID(); ?>").click(function() {
                            $("#blur-container-<?php echo $prod->getProdID(); ?>").addClass("blur");
                            $("#myModal-<?php echo $prod->getProdID(); ?>").fadeIn();
                        });

                        $("#close-modal-<?php echo $prod->getProdID(); ?>").click(function() {
                            $("#myModal-<?php echo $prod->getProdID(); ?>").fadeOut(function() {
                                $("#blur-container-<?php echo $prod->getProdID(); ?>").removeClass("blur");
                            });
                        });
                    });
                </script>
            </div>
        <?php endforeach; ?>
    </div>


    <script src="../scripts/sidebar.js"></script>
</body>

</html>
