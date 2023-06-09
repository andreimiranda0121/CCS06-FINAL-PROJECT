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
                <label>Description:</label>
                <input type="text" value="<?php echo $product->getDescription();?>" name="description" class="box" required><br>
            </div>

            <div>
                <label>Price: </label>
                <input type="text" value="<?php echo $product->getPrice();?>" name="price" class="box" required><br>
            </div>
            
            <div>
                <label>Quantity:</label>
                <input type="text" value="<?php echo $product->getQuantity();?>" name="quantity" class="box" required><br>
            </div>

            <div>
                <label>Size:</label>
                <input type="text" value="<?php echo $product->getSize();?>" name="size" class="box" required><br>
            </div>

            <div>
                <label>Gender: </label>
                <input type="radio" name="gender" value="Male" <?php echo ($product->getGender() === 'Male') ? 'checked' : ''; ?> >Male
                <input type="radio" name="gender" value="Female" <?php echo ($product->getGender() === 'Female') ? 'checked' : ''; ?> >Female
            </div>

            <div>
                <label>Color:</label>
                <input type="text" value="<?php echo $product->getColor();?>" name="color" class="box" required><br>
            </div>
            <input type="submit" value="Save" class="btn" >
        </form>
    </div>
</body>
</html>
