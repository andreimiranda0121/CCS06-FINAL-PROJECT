<?php

require "../config.php";

use App\Cart;

session_start();

if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code
} else {
    $product_id = $_GET['id'];
    $user_id = $_SESSION['user']['id'];

    $result = Cart::add($product_id, $user_id);
    if ($result) {
        echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Product added to cart',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'productpage.php';
                });
            </script>";
        exit();
    } else {
        echo "<h1>There was an error in saving the product.</h1>";
    }
}

?>
