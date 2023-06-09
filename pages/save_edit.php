<?php
require '../config.php';
use App\Product;

try{
    $product_id = $_POST['id'];
    $prod_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $product_description = $_POST['description'];
    $product_quantity = $_POST['quantity'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    $gender = $_POST['gender'];
    $result = Product::edit($product_id,$prod_name,$price,$product_description,$product_quantity,$size,$color,$gender);

    if($result){
        header('Location: admin_panel.php');
    }else {
        echo "<h1>There was an error in saving the product.</h1>";
    }

}catch(PDOException $e){
    error_log($e->getMessage());
}
?>

