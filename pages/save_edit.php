<?php
require '../config.php';
use App\Product;

try{
    $prod_id = $_POST['id'];
    $prod_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $result = Product::edit($prod_id,$prod_name,$price);

    if($result){
        header('Location: admin_panel.php');
        exit();
    }else {
        echo "<h1>There was an error in saving the product.</h1>";
    }

}catch(PDOException $e){
    error_log($e->getMessage());
}
?>

