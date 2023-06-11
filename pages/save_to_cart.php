<?php

require "../config.php";

use App\Cart;
use App\Product;
session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
} else {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user']['id'];
    $quantity = $_POST['quantity'];
    $size = $_POST['size'];

    // Check if the total cart quantity exceeds the product quantity
    $totalQuantity = $quantity + Cart::getCartQuantity($product_id, $user_id);
    $product_quantity = Product::getById($product_id);
    if ($totalQuantity > $product_quantity->getQuantity()) {
        echo "<script>alert('Cannot add the product to the cart. Quantity exceeds available stock.');</script>";
        echo "<script>window.history.back();</script>";
        exit;
    }
    

    $result = Cart::add($product_id, $user_id, $quantity, $size);
    if ($result) {
        header("Location: productpage.php");
    } else {
        echo "<h1>There was an error in saving the product.</h1>";
    }
}

?>
