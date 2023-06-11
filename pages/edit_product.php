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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../styles/addProduct.css">
    
    <title>Edit Product</title>
    <style>
    .b25 {
            background: #252525;
        }

        .b1 {
            background: #1b1b1b;
        }

        .bg {
            position: fixed;
            top: -4rem;
            left: -12rem;
            z-index: -1;
            opacity: 0.7;
        }

        .bg2 {
            position: fixed;
            bottom: -2rem;
            right: -3rem;
            z-index: -1;
            width: 9.375rem;
            opacity: 0.7;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
            left: 20px;
            position: absolute;
            top: 20px;
        }
        .image{
            align-items: center;
            margin-bottom: 20px;
            margin-top: -80px;
            min-width: 300px;
            max-width: 300px;
            background-image: none;
            left: 35%;
            top: 1px;
            position: relative;

}
    </style>
</head>
<body>
<div class="dashboard">
        <button class="button" onclick="history.back()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
        <div class="dashboard-title">
            <a>Mal De Wear</a>
        </div>
    </div>
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
    <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
    <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
</body>
</html>
