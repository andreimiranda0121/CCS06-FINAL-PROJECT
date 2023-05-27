<?php
require "../config.php";
use App\Product;

try {
    $prod_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    
    // Specify the directory to save the uploaded images
    $uploadDir = "../images/";

    // Generate a unique filename for the uploaded image
    $imageFileName = uniqid() . '_' . $image["name"];
    $targetFilePath = $uploadDir . $imageFileName;
    
    $result = Product::add($prod_name, $price, $imageFileName);

    if ($result) {
        move_uploaded_file($image["tmp_name"], $targetFilePath);
        header('Location: admin_panel.php');
    } else {
        echo "<h1>There was an error in saving the product.</h1>";
    }

} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
?>
