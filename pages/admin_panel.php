<?php

require '../config.php';
use App\Product;

session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$result = Product::list();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            position: absolute;
            top: 70px;
            left: 30px;
        }

        h1 {
            margin-top: 0px;
            right: 0px;
            left: 40px;
            position: absolute;        
        }

        .logout-button {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            right: 40px;
            top: 25px;
            position: absolute;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
        }

        .product-card {
            width: 200px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .product-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
        }

        .product-details {
            margin-top: 10px;
        }

        .product-name {
            font-weight: bold;
        }

        .product-price {
            color: #888;
        }

        .product-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .button {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button.edit {
            background-color: #428bca;
            color: #fff;
        }

        .button.delete {
            background-color: #d9534f;
            color: #fff;
        }

        .button.add {
            background-color: #4CAF50;
            color: #fff;
            left: 50px;
            top: 20px;
            position: absolute;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
        }

        .titlepage {
            right: 90px;
        }
    </style>
</head>
<body>
    <div class="titlepage"><h1>Product Management</h1></div>
    <a href="logout.php" class="logout-button">Logout</a>

    <div class="container">
        <div class="button-container">
            <a href="add_product.php" class="button add">Add Product</a>
        </div>

        <div class="product-container">
            <?php foreach($result as $res): ?>
            <div class="product-card">
                <img src='../images/<?php echo $res->getImage();?>' alt="Product 1" class="product-image">
                <div class="product-details">
                    <div class="product-name">
                        <label>Name: </label>
                        <?=$res->getProdName(); ?>
                    </div>
                    <div class="product-price">
                        <label>Price: Php</label>
                        <?=$res->getPrice();?>
                    </div>
                    <div>
                        <label>Description: </label>
                        <?php echo $res->getDescription();?>
                    </div>
                    <div>
                        <label>Quantity: </label>
                        <?php echo $res->getQuantity();?>
                    </div>
                    <div>
                        <label>Size: </label>
                        <?php echo $res->getSize();?>
                    </div>
                    <div>
                        <label>Color: </label>
                        <?php echo $res->getColor();?>
                    </div>
                    <div>
                        <label>Gender: </label>
                        <?php echo $res->getGender();?>
                    </div>
                    <div class="product-actions">
                        <a href="edit_product.php?id=<?php echo $res->getProdID();?>" class="button edit">Edit</a>
                        <a href="delete_product.php?id=<?php echo $res->getProdID();?>" class="button delete">Delete</a>
                    </div>
                </div>
            </div>
            <?php endforeach?>
        </div>
    </div>
</body>
</html>
