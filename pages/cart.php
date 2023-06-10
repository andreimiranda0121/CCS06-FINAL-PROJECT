<?php

require "../config.php";

use App\Cart;
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
} else {
    if (isset($_POST['quantity_plus'])) {
    $cart_id = $_POST['cart_id'];
    $cart = Cart::updateQuantity($cart_id, $_POST['quantity_plus']);
} elseif (isset($_POST['quantity_minus'])) {
    $cart_id = $_POST['cart_id'];
    $cart = Cart::updateQuantity($cart_id, $_POST['quantity_minus']);
}
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
    <link rel="stylesheet" href="../styles/form.css">
    
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
                    <li><a href='men_accessories.php?category=<?php echo urlencode("Accessory"); ?>'>Accessories</a></li>
                </ul>
                <h3><a href='women.php'>Women</a></h3>
                <ul>
                    <li><a href='women.php'>New Arrivals</a></li>
                    <li><a href='women.php'>Best Sellers</a></li>
                    <li><a href='women.php'>Shop by Collection</a></li>
                    <li><a href='women_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='women_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='women_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='women_accessories.php?category=<?php echo urlencode("Accessory"); ?>'>Accessories</a></li>
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
        <?php foreach ($cart as $item) : ?>
            <div class="product-container">
                <h2><?php echo $item->getProdName(); ?></h2>
                <img class="prod-image" src="../images/<?php echo $item->getGender();?>/<?php echo $item->getImage(); ?>">
                <p>Price: Php <?php echo $item->getPrice()*$item->getQuantity(); ?></p>
                <form method="post">
                    <div>
                        <label>Quantity: </label>
                        <button type="submit" name="quantity_plus" value="<?php echo $item->getQuantity() + 1; ?>" <?php echo ($item->getQuantity() == $item->getProdQuantity()) ? 'disabled' : ''; ?>>+</button>
                        <span><?php echo $item->getQuantity();?></span>
                        <button type="submit" name="quantity_minus" value="<?php echo $item->getQuantity() - 1; ?>" <?php echo ($item->getQuantity() == 1) ? 'disabled' : ''; ?>>-</button>
                        <input type="hidden" name="cart_id" value="<?php echo $item->getCartID();?>">
                    </div>
                </form>
                <!-- "Buy Now" button -->
                <br><a class="button" href="buy_now.php?id=<?php echo $item->getCartID();?>">Buy Now</a>
                
                <div id="blur-container">
                    <div class="content">
                        <button class="button-remove" id="open-modal">Remove</button>
                    </div>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <h2>Do you want to remove the item? </h2>
                        <a class="button-remove" href="delete_cart.php?id=<?php echo $item->getCartID();?>">Remove</a>
                        <a class="button" id="close-modal">Cancel</a>
                    </div>
                </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-modal-video@2.6.0/dist/jquery-modal-video.min.js"></script>
        <script>
        $(document).ready(function() {
        $("#open-modal").click(function() {
            $("#blur-container").addClass("blur");
            $("#myModal").fadeIn();
        });

        $("#close-modal").click(function() {
            $("#myModal").fadeOut(function() {
            $("#blur-container").removeClass("blur");
            });
        });
        });
        </script>
            </div>
        <?php endforeach ?>
    </div>
    <script src="../scripts/sidebar.js"></script>
</body>
</html>
