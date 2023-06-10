<?php

require "../config.php";


use App\Order;
use app\Product;

$product_id = $_GET['id'];
$prod = Product::getById($product_id);

$user_id = $cart['user_id'];
$product_id = $cart['product_id'];
$quantity = $cart['product_quantity'] - $cart['cart_quantity'];
$shipping_address = $_POST['shipping_address'] .','. $_POST['shipping_city'] .','. $_POST['shipping_state'] .','. $_POST['shipping_zip'];
$total_amount = $cart['price'] * $cart['cart_quantity'];
$order_status = "Delivered";
$order_date = date('Y-m-d H:i:s');
$payment_information = $_POST['card_number'] . ',' .$_POST['cardholder_name'] .','. $_POST['expires']  .','. $_POST['cvc'];
$billingAddress = $_POST['billing_address'] .','. $_POST['billing_city'] .','. $_POST['billing_state'] .','. $_POST['billing_zip'];

$result = Order::add($product_id,$user_id,$shipping_address,$total_amount,$order_status,$order_date,$billingAddress,$payment_information);

if($result){
    $update = Order::updateAndDel($cart_id,$quantity,$product_id);
    if($update){
        header("Location: orders.php");
    }else{
        echo '<h1>There was an error creating the order. Please try again.</h1>';
    }
} else {
    echo '<h1>There was an error creating the order. Please try again.</h1>';
}

?>