<?php
require '../config.php';
use App\Product;

if(isset($_GET['id'])){
    $prod_id = $_GET['id'];
}

$product = Product::getById($prod_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/addProduct.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Edit Product</title>
</head>
<body>
    <button class="button" onclick="history.back()">Back</button>
    <div class="container">
        <div>
            <img class ="image" src="../images/<?php echo $product->getImage();?>">
        </div>
        <form action="save_edit.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product->getProdID(); ?>">
            <div>
                <label>Product Name: </label>
                <input type="text" class="box" value="<?php echo $product->getProdName();?>" name="prod_name"  required><br>
            </div>
        
            <div>
                <label>Price: </label>
                <input type="text" class="box" name="price" value="<?php echo $product->getPrice();?>" required><br>
            </div>   
            <input type="submit" value="Save" class="btn" >
        </form>
    </div>
</body>
</html>
