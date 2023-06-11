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
    <link rel="stylesheet" href="../styles/cart.css">
    <title>My Cart</title>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="home.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
                <a href="cart.php"><i class="bx bx-cart"></i></a>
                <a href="user_panel.php"><i class="bx bx-user-circle"></i></a>
                <a href="#"><i class="bx bx-heart"></i></a>
            </nav>
            <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
        </div>

     
    </div>

     <div class="product-container-wrapper">
        <?php foreach ($cart as $item) : ?>
            <div class="product-container">
                <h2><?php echo $item->getProdName(); ?></h2>
                <img class="prod-image" src="../images/<?php echo $item->getImage(); ?>">
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
                <br><a class="button" href="buy_now.php?id=<?php echo $item->getCartID();?>">Buy Now</a><br>
                <a class="button-remove" href="delete_cart.php?id=<?php echo $item->getCartID(); ?>">Remove</a>
            </div>
        <?php endforeach ?>
    </div>

</body>
</html>
