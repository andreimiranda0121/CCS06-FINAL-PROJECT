<?php

require "../config.php";

use App\Cart;


session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
}else{
    $product_id = $_GET['id'];
    $user_id = $_SESSION['user']['id'];

    $result = Cart::add($product_id,$user_id);
    if($result){
        header('Location: productpage.php');
        exit();
    }else{
        echo "<h1>There was an error in saving the product.</h1>";
    }
}

?>

