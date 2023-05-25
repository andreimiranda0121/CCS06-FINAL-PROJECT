<?php

require "../config.php";
use App\Product;

try{
    $prod_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $result = Product::add($prod_name,$price,$image);

    if($result){
        header('Location: admin_panel.php');
    }else{
        echo "<h1>Theres an error in message</h1>";
    }

} catch (PDOException $e){
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

?>