<?php
require "../config.php";
use App\Product;

try {
    $product_name = $_POST['prod_name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $product_description = $_POST['description'];
    $product_quantity = $_POST['quantity'];
    $gender = $_POST['gender'];
    $category = $_POST['category'];
    // Specify the directory to save the uploaded images
    $uploadDir = "../images/".$gender.'/';

    // Generate a unique filename for the uploaded image
    $imageFileName = $category . '_' . $image["name"];
    $targetFilePath = $uploadDir . $imageFileName;

    $result = Product::add($product_name, $price, $imageFileName, $product_description, $product_quantity,$gender,$category);

    if ($result) {
        move_uploaded_file($image["tmp_name"], $targetFilePath);
        header('Location: admin_panel.php');
        exit(); // Add this line to prevent further code execution
    } else {
        echo "<h1>There was an error in saving the product.</h1>";
    }
} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
?>
