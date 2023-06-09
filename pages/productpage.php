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
    <title>Mal De Wear</title>
    <style>
        /* Basic styles for the container */
        .product-container-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 1200px;
            padding: 20px;
            margin-top: 80px; /* Added margin-top to create space for the navigation bar */
        }

        .product-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            width: 250px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .prod-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .price {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #ff5722;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #f44336;
        }
        
        /* Styles for the navigation bar */
        

        

        
    </style>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="productpage.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
                <a href="cart.php"><i class="bx bx-cart"></i></a>
                <a href="user_panel.php"><i class="bx bx-user-circle"></i></a>
                <a href="#"><i class="bx bx-heart"></i></a>
            </nav>
            <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
        </div>

        <div class="sidebar">
            <div class="sidebar-content">
                <h3>Men</h3>
                <ul>
                    <li><a href='cart.php'>New Arrivals</a></li>
                    <li>Best Sellers</li>
                    <li>Shop by Collection</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-container-wrapper">
    <?php foreach($product as $prod): ?>
        <div class="product-container">
            <h2><?php echo $prod->getProdName(); ?></h2>
            <img class="prod-image" src="../images/<?php echo $prod->getImage(); ?>">
            <p class="price">Price: Php <?php echo $prod->getPrice(); ?></p>
            
            <!-- "Add to Cart" button -->
            <a href="save_to_cart.php?id=<?php echo $prod->getProdID(); ?>" class="button">Add to Cart</a><br>
            
            <!-- "Buy Now" button -->
            <a class="button">Buy Now</a>
        </div>
    <?php endforeach; ?>
</div>

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

</body>
</html>
