<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Orders</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .order-card {
            margin: 20px auto;
            padding: 20px;
            border-radius: 4px;
            width: 100%;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .order-card .card-body {
            height: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        Mal De Ware
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-2">
            <li class="nav-item active">
                <a class="nav-link" href="productpage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="orders.php">My Orders</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ordinary</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Nike</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <h3>My Orders</h3>
    <div class="order-card">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">ORDER:</h5>
                        <p class="card-text">Status: <b></b></p>
                        <p class="card-text">Shipping Address:</p>
                        <p class="card-text">Payment Information:</p>
                        <p class="card-text">Date:</p>
                        <p class="card-text">Total: $</p>
                    </div>
                </div>
    </div>
</div>

</body>
</html>
