<?php

require "../config.php";
use App\Product;


$product = Product::list();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
    <style>
        /* Basic styles for the container */
        .product-container {
            margin-top: 100px;
            margin-right: 30px;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
            
        }

        /* Styles for the buttons */
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .prod-image{
            min-width: 100px;
            max-width: 100px;
        }
    </style>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="productpage.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
                <a href="#"><i class="bx bx-cart"></i></a>
                <a href="index.php"><i class="bx bx-user-circle"></i></a>
                <a href="#"><i class="bx bx-heart"></i></a>
            </nav>
            <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
        </div>

        <div class="sidebar">
            <div class="sidebar-content">
                <h3>Men</h3>
                <ul>
                    <li>New Arrivals</li>
                    <li>Best Sellers</li>
                    <li>Shop by Collection</li>
                </ul>
            </div>
        </div>
    </div>
    
    <?php foreach($product as $prod):?>
    <div class="product-container">
        <h2><?php echo $prod->getProdName();?></h2>
        <img class ="prod-image" src="../images/<?php echo $prod->getImage();?>">
        <p>Price: Php <?php echo $prod->getPrice();?></p>

        <!-- "Add to Cart" button -->
        <button class="button">Add to Cart</button>

        <!-- "Buy Now" button -->
        <button class="button" >Buy Now</button>
    </div>
    <?php endforeach?>
</body>
<script>
    const menuIcon = document.querySelector('.menu-icon');
        const sidebar = document.querySelector('.sidebar');
        const container = document.querySelector('.container');
        const dashboard = document.querySelector('.dashboard');

        menuIcon.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-active');
            container.classList.toggle('container-active');
        });

        container.addEventListener('click', (event) => {
            if (event.target === container || event.target === dashboard) {
                sidebar.classList.remove('sidebar-active');
                container.classList.remove('container-active');
            }
        });

</script>

</html>