<?php

require '../config.php';
use App\Product;


session_start();
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // Redirect the user to the login page or display an error message
    header("Location: login.php"); // Redirect to the login page
    exit; // Stop executing the rest of the code


}

$result = Product::list();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
    <style>
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
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Product Management</h1>
    <a href="logout.php">LOGOUT</a>

        <?php foreach($result as $res): ?>
        <div class="product-container">
        <div class="product-card">
            <img src='../images/<?php echo $res->getImage();?>' alt="Product 1" class="product-image">
            <div class="product-details">
                <div class="product-name"><?=$res->getProdName(); ?></div>
                <div class="product-price"><?=$res->getPrice();?></div>
                <div class="product-actions">
                    <a href="edit_product.php?id=<?php echo $res->getProdID();?>" class="button edit">Edit</a>
                    <a href="delete_product.php?id=<?php echo $res->getProdID();?>" class="button delete">Delete</a>
                </div>
            </div>
        </div>
        
        <?php endforeach?>
        <!-- Add more product cards as needed -->
        
    </div>
    <a href="add_product.php" class="button add">Add Product</a>
</body>
</html>
