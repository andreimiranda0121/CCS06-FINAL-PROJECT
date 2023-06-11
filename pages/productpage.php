<?php
require "../config.php";
use App\Product;
session_start();
$product = Product::list();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/product.css">
    <link rel="stylesheet" href="../styles/dropdown.css">
    <title>Mal De Wear</title>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="home.php">Mal De Wear</a>
            </div>
            <nav class="nav-links">
                <div class="menu-btn">
                    <a href="#"><i class="bx bx-cart"></i></a>
                    <div class="dropdown-menu">
                        <a class="links" href="cart.php">My Cart</a>
                        <a class="links" href="orders.php">My Order</a>
                    </div>
                </div>
                <div class="menu-btn">
                    <a href="#"><i class="bx bx-user-circle"></i></a>
                    <div class="dropdown-menu">
                        <a class="links" href="user_panel.php">My Profile</a>
                        <a class="links" href="logout.php">Logout</a>
                    </div>
                </div>
                <a href="#"><i class="bx bx-heart"></i></a>
            </nav>
            <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
        </div>

        <div class="sidebar">
            <div class="sidebar-content">
                <h3><a href='men.php'>Men</a></h3>
                <ul>
                    <li><a href='men.php'>New Arrivals</a></li>
                    <li><a href='men.php'>Best Sellers</a></li>
                    <li><a href='men.php'>Shop by Collection</a></li>
                    <li><a href='men_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='men_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='men_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='men_accessories.php?category=<?php echo urlencode("Accesory"); ?>'>Accessories</a></li>
                </ul>
                <h3><a href='women.php'>Women</a></h3>
                <ul>
                    <li><a href='women.php'>New Arrivals</a></li>
                    <li><a href='women.php'>Best Sellers</a></li>
                    <li><a href='women.php'>Shop by Collection</a></li>
                    <li><a href='women_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='women_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='women_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='women_accessories.php?category=<?php echo urlencode("Accesory"); ?>'>Accessories</a></li>
                </ul>
            </div>
            <div class="sidebar-content2">
                <h3><a href='productpage.php'>All Items</a></h3>
            </div>
            <div class="sidebar-content3">
                <h3><a href='#'>Login</a></h3>
            </div>
        </div>
    </div>
    <br><br>
    <section class="products-container container">
        <?php
        $counter = 0;
        foreach ($product as $prod):    
            ?>
            <a href="#" class="shop-item" data-product-id="<?php echo $prod->getProdID();?>">
                <img src="../images/<?php echo $prod->getGender(); ?>/<?php echo $prod->getImage(); ?>" alt="Clothing item" class="lazy shop-item__img clothingImg">
                <div class="quickview">
                    <button class="quickview__icon overview-btn" id="<?php echo $prod->getProdName(); ?>">Overview</button>
                    <span class="quickview__info"><?php echo $prod->getDescription(); ?><br><span class="quickview__info--price clothingPrice">₱<?php echo $prod->getPrice(); ?></span></span>
                </div>
            </a>
    
            <?php
            $counter++;
            if ($counter % 4 === 0) {
                echo '</section><section class="products-container container">';
            }
        endforeach;
        ?>
    </section>

    <form method="post" action="save_to_cart.php">
        <input type="hidden" name="product_id" class="popup-productID">
        <div class="overlay">
            <div class="popup-item">
                <div class="clothing-item-flex">
                    <div class="clothing-item-flex__img-wrapper">
                        <img src="" alt="Clothing item" class="clothing-item-flex__img zoom-normal popup-clothingImg">
                    </div>
                    <div class="product-info">
                        <h2 class="heading-secondary popup-clothingName"></h2>
                        <span class="product-info__price popup-clothingPrice"></span>
                        <p class="product-info__text popup-clothingDescription"></p>
                        <div class="detail-group">
                            <p class="detail-group__span">Size:</p>
                            <select class="detail-group__size">
                                <option value="">Select Size</option>
                                <option value="0">XS</option>
                                <option value="2">S</option>
                                <option value="4">M</option>
                                <option value="6">L</option>
                                <option value="8">XL</option>
                            </select>
                        </div>
                        <div class="detail-group">
                            <p class="detail-group__span">Quantity:</p>
                            <input class="detail-group__quantity" max="25" min="1" value="1" type="number">
                        </div>
                        <button type="submit" class="btn btn--form btn--form--shop">Add to cart</button>
                        <a href="" class="btn-view">Go Back</a>
                    </div>
                </div>
                <span class="popup__close-icon-clothing">&times;</span>
            </div>
        </div>
    </form>    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.quickview .overview-btn').click(function() {
            var productId = $(this).closest('.shop-item').attr('data-product-id');

            // Update the value of the hidden input field
            $('.popup-productID').val(productId);

            $('.overlay').css({'opacity': '1', 'visibility': 'visible'});

            var imgsrc = $(this).closest('.shop-item').find('.clothingImg').prop('src');
            var price = $(this).closest('.shop-item').find('.clothingPrice').text();
            var productName = $(this).closest('.shop-item').find('.quickview__icon').attr('id');
            var description = $(this).closest('.shop-item').find('.quickview__info').clone().children().remove().end().text();

            $('.popup-clothingDescription').text(description);
            $('.popup-clothingImg').prop('src', imgsrc);
            $('.popup-clothingName').text(productName);
            $('.popup-clothingPrice').text(price);
        });

        $('.popup__close-icon-clothing').click(function() {
            $('.popup, .overlay').css({'opacity': '0', 'visibility': 'hidden'});
        });
    </script>

<script>
    const menuIcon = document.querySelector('.menu-icon');
    const sidebar = document.querySelector('.sidebar');
    const container = document.querySelector('.container');
    const dashboard = document.querySelector('.dashboard');

    menuIcon.addEventListener('click', (event) => {
        event.preventDefault();
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
