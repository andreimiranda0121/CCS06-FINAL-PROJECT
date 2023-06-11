<?php

require "../config.php";

use App\Cart;
use App\User;

session_start();
$user_id = $_SESSION['user']['id'];
$cart_id = $_GET['id'];
$item = Cart::getById($cart_id);

if (isset($_GET['id'])) {
    $cart_id = $_GET['id'];
    $item = Cart::getById($cart_id);
}
$user = User::getById($user_id);

// Assuming you have retrieved the address from the database into the $address variable
$address = $user->getShipping(); // Replace $row['address'] with your actual variable or value
$billing = $user->getBilling();
// Define an array of special characters to split the address
$specialChars = array(',', '.', ';', ':', '-');

// Split the address using the special characters
$addressParts = preg_split('/[' . preg_quote(implode($specialChars), '/') . ']/', $address, -1, PREG_SPLIT_NO_EMPTY);
$billingAddress = preg_split('/[' . preg_quote(implode($specialChars), '/') . ']/', $billing, -1, PREG_SPLIT_NO_EMPTY);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../styles/payment.css">
    <title>Make a Payment</title>
    <style>
        .btn-black-bg {
            background-color: black;
            color: white;
            border: none !important;
        }

        .return-btn {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">    
        <div class="col-12 px-0">
                <div class="col-12 mb-4 p-0">
                    <a href="javascript:history.back()" class="btn btn-primary return-btn">
                        <span class="fas fa-arrow-left pe-2"></span>Return
                    </a>
                </div>
            </div>
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row">
                    <div class="col-12 p-5">
                        <img src="../images/<?php echo $item['gender']; ?>/<?php echo $item['image_path']; ?>" alt="">
                    </div>
                    <div class="row m-0 bg-light">
                        <div class="col-md-4 col-6 ps-30 pe-0 my-4">

                        </div>
                        <div class="col-md-4 col-6  ps-30 my-4">

                        </div>
                        <div class="col-md-4 col-6 ps-30 my-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <form action="save_orders.php?id=<?php echo $cart_id?>" method="POST">
                    <div class="row m-0">
                        <div class="col-12 px-4">
                            <div class="d-flex align-items-end mt-4 mb-2">
                                <p class="h4 m-0"><span class="pe-1"><?php echo $item['product_name']; ?></span></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted">Gender</p>
                                <p class="fs-14 fw-bold"><?php echo $item['gender']; ?></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted">Qty</p>
                                <p class="fs-14 fw-bold"><?php echo $item['cart_quantity']; ?></p>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted">Size</p>
                                <p class="fs-14 fw-bold"><?php echo $item['size']; ?></p>
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
                                <div class="d-flex align-text-top">
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
                                    <div class="d-flex  mb-4">
                                        <span class="">
                                            <p class="text-muted">Card number</p>
                                            <input class="form-control" type="text" name="card_number" placeholder="1234 5678 9012 3456" required>
                                        </span>
                                        <div class=" w-100 d-flex flex-column align-items-end">
                                            <p class="text-muted">Expires</p>
                                            <input class="form-control2" type="text" name="expires" placeholder="MM/YYYY" required>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-5">
                                        <span class="me-5">
                                            <p class="text-muted">Cardholder name</p>
                                            <input class="form-control" type="text" name="cardholder_name" placeholder="Name" required>
                                        </span>
                                        <div class="w-100 d-flex flex-column align-items-end">
                                            <p class="text-muted">CVC</p>
                                            <input class="form-control3" type="text" name="cvc" placeholder="XXX" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <div class="row bg-light m-0">
                                <div class="col-12 px-4 my-4">
                                    <p class="fw-bold">Shipping Address</p>
                                </div>
                                <div class="col-12 px-4">
                                    <div class="mb-3">
                                        <label for="shipping-address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="shipping-address" value="<?php echo $addressParts[0]; ?>" name="shipping_address" placeholder="Enter shipping address" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="shipping-city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="shipping-city" value="<?php echo $addressParts[1]; ?>" name="shipping_city" placeholder="Enter city" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="shipping-state" class="form-label">State</label>
                                            <input type="text" class="form-control" id="shipping-state" value="<?php echo $addressParts[2]; ?>" name="shipping_state" placeholder="Enter state" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="shipping-zip" class="form-label">ZIP</label>
                                            <input type="text" class="form-control" id="shipping-zip" value="<?php echo $addressParts[3]; ?>" name="shipping_zip" placeholder="Enter ZIP code" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <div class="row bg-light m-0">
                                <div class="col-12 px-4 my-4">
                                    <p class="fw-bold">Billing Address</p>
                                </div>
                                <div class="col-12 px-4">
                                    <div class="mb-3">
                                        <label for="billing-address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="billing-address" value="<?php echo $billingAddress[0]; ?>" name="billing_address" placeholder="Enter billing address" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="billing-city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="billing-city" value="<?php echo $billingAddress[1]; ?>" name="billing_city" placeholder="Enter city" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="billing-state" class="form-label">State</label>
                                            <input type="text" class="form-control" id="billing-state" value="<?php echo $billingAddress[2]; ?>" name="billing_state" placeholder="Enter state" required>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="billing-zip" class="form-label">ZIP</label>
                                            <input type="text" class="form-control" id="billing-zip" value="<?php echo $billingAddress[3]; ?>" name="billing_zip" placeholder="Enter ZIP code" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0">
                            <div class="col-12  mb-4 p-0">
                                <div class="btn btn-primary">
                                    <input type="submit" value="Purchase" class="btn-black-bg">
                                    <span class="fas fa-arrow-right ps-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
