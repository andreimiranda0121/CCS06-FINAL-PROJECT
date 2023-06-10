<?php

require "../config.php";

use App\Cart;
session_start();

$cart_id = $_GET['id'];
$item = Cart::getById($cart_id);

if(isset($_GET['id'])){
    $cart_id = $_GET['id'];
    $item = Cart::getById($cart_id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../styles/payment.css">
    <title>Make a Payment</title>
</head>
<body>
<button onclick="history.back()">Return</button>
<div class="container">
    <div class="row m-0">
        <div class="col-lg-7 pb-5 pe-lg-5">
            <div class="row">
                <div class="col-12 p-5">

                    <img src="../images/<?php echo $item['gender'];?>/<?php echo $item['image_path']; ?>"

                    <img src="../images/<?php echo $item['image_path']; ?>"

                         alt="">
                </div>
                <div class="row m-0 bg-light">
                    <div class="col-md-4 col-6 ps-30 pe-0 my-4">
                        <p class="text-muted">Size</p>
                        <p class="h5"><?php echo $item['size'] ?></p>
                    </div>
                    <div class="col-md-4 col-6  ps-30 my-4">
                        <p class="text-muted">Color</p>
                        <p class="h5 m-0"><?php echo $item['color'] ?></p>
                    </div>
                    <div class="col-md-4 col-6 ps-30 my-4">
                        <p class="text-muted">Gender</p>
                        <p class="h5 m-0"><?php echo $item['gender'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 p-0 ps-lg-4">
            <div class="row m-0">
                <div class="col-12 px-4">
                    <div class="d-flex align-items-end mt-4 mb-2">
                        <p class="h4 m-0"><span class="pe-1"><?php echo $item['product_name']; ?></span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted">Qty</p>
                        <p class="fs-14 fw-bold"><?php echo $item['cart_quantity']; ?></p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted">Price</p>
                        <p class="fs-14 fw-bold"><span>Php <?php echo $item['price']; ?></span></p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted">Shipping</p>
                        <p class="fs-14 fw-bold">Free</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="text-muted fw-bold">Total</p>
                        <div class="d-flex align-text-top ">
                            <span></span><span class="h4">Php <?php echo $item['cart_quantity'] * $item['price']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="row bg-light m-0">
                        <div class="col-12 px-4 my-4">
                            <p class="fw-bold">Payment detail</p>
                        </div>
                        <div class="col-12 px-4">
                            <form method="post" action="save_orders.php?id=<?php echo $item['cart_id'] ?>">
                                <div class="d-flex  mb-4">
                                    <span class="">
                                        <p class="text-muted">Card number</p>
                                        <input class="form-control" type="text" name="card_number" placeholder="1234 5678 9012 3456">
                                    </span>
                                    <div class=" w-100 d-flex flex-column align-items-end">
                                        <p class="text-muted">Expires</p>
                                        <input class="form-control2" type="text" name="expires" placeholder="MM/YYYY">
                                    </div>
                                </div>
                                <div class="d-flex mb-5">
                                    <span class="me-5">
                                        <p class="text-muted">Cardholder name</p>
                                        <input class="form-control" type="text" name="cardholder_name" placeholder="Name">
                                    </span>
                                    <div class="w-100 d-flex flex-column align-items-end">
                                        <p class="text-muted">CVC</p>
                                        <input class="form-control3" type="text" name="cvc" placeholder="XXX">
                                    </div>
                                </div>
                                <div class="row bg-light m-0">
                                    <div class="col-12 px-4 my-4">
                                        <p class="fw-bold">Shipping Address</p>
                                    </div>
                                    <div class="col-12 px-4">
                                        <div class="mb-3">
                                            <label for="shipping-address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="shipping-address" name="shipping_address" placeholder="Enter shipping address">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="shipping-city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="shipping-city" name="shipping_city" placeholder="Enter city">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="shipping-state" class="form-label">State</label>
                                                <input type="text" class="form-control" id="shipping-state" name="shipping_state" placeholder="Enter state">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="shipping-zip" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="shipping-zip" name="shipping_zip" placeholder="Enter ZIP code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-light m-0">
                                    <div class="col-12 px-4 my-4">
                                        <p class="fw-bold">Billing Address</p>
                                    </div>
                                    <div class="col-12 px-4">
                                        <div class="mb-3">
                                            <label for="billing-address" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="billing-address" name="billing_address" placeholder="Enter billing address">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="billing-city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="billing-city" name="billing_city" placeholder="Enter city">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="billing-state" class="form-label">State</label>
                                                <input type="text" class="form-control" id="billing-state" name="billing_state" placeholder="Enter state">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="billing-zip" class="form-label">ZIP</label>
                                                <input type="text" class="form-control" id="billing-zip" name="billing_zip" placeholder="Enter ZIP code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-0">
                                    <div class="col-12  mb-4 p-0">
                                        <div class="btn btn-primary">
                                            <input type="submit" value="Purchase" class="btn-link">
                                            <span class="fas fa-arrow-right ps-2"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>