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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../styles/product.css">
    <title>Mal De Wear</title>
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="dashboard-title">
                <a href="home.php">Mal De Wear</a>
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
                <h3><a href='men.php'>Men</a></h3>
                <ul>
                    <li><a href='men.php'>New Arrivals</a></li>
                    <li><a href='men.php'>Best Sellers</a></li>
                    <li><a href='men.php'>Shop by Collection</a></li>
                    <li><a href='men_top.php'>Tops</a></li>
                    <li><a href='men_bottoms.php'>Bottoms</a></li>
                    <li><a href='men_footwear.php'>Footwear</a></li>
                    <li><a href='men_accessories.php'>Accessories</a></li>
                </ul>
                <h3><a href='productpage.php'>Women</a></h3>
                <ul>
                    <li><a href='productpage.php'>New Arrivals</a></li>
                    <li><a href='productpage.php'>Best Sellers</a></li>
                    <li><a href='productpage.php'>Shop by Collection</a></li>
                    <li><a href='women_top.php'>Tops</a></li>
                    <li><a href='women_bottoms.php'>Bottoms</a></li>
                    <li><a href='women_footwear.php'>Footwear</a></li>
                    <li><a href='women_accessories.php'>Accessories</a></li>
                </ul>
            </div>
            <div class="sidebar-content2"> 
                <h3><a href='all_items.php'>All Items</a></h3>
            </div>
            <div class="sidebar-content3"> 
                <h3><a href='login.php'>Login</a></h3>
            </div>
        </div>
    </div>
<section class="products-container container">
  <a href="#" class="shop-item">
    <img src="../images/womenpage/accessories1.png" alt="Clothing item" class="lazy shop-item__img" id="BucketHatImg">
    <div class="quickview">
      <span class="quickview__icon" id="Bucket Hat">Overview</span>
      <span class="quickview__info">Bucket Hat<br><span class="quickview__info--price" id="BucketHatPrice">₱210.00</span></span>
    </div>
  </a>
  <a href="#" class="shop-item">
          <img src="../images/womenpage/accessories2.png" alt="Clothing item" class="lazy shop-item__img" id="CanvasToteBagImg">
          <div class="quickview">
            <span class="quickview__icon" id="Canvas Tote Bag">Overview</span>
            <span class="quickview__info">Canvas Tote Bag<br><span class="quickview__info--price" id="CanvasToteBagPrice">₱218.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/womenpage/accessories3.png" alt="Clothing item" class="lazy shop-item__img" id="SunBucketImg">
          <div class="quickview">
            <span class="quickview__icon" id="Sun Bucket">Overview</span>
            <span class="quickview__info">Sun Bucket Hat<br><span class="quickview__info--price" id="SunBucketPrice">₱298.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/womenpage/accessories5.png" alt="Semi Cropped" class="lazy shop-item__img" id="LongWalletImg">
          <div class="quickview">
            <span class="quickview__icon" id="Long Wallet">Overview</span>
            <span class="quickview__info">Long Wallet<br><span class="quickview__info--price" id="LongWalletPrice">₱125.00</span></span>
          </div>
        </a>
</section>

<div class="overlay">
  <div class="popup-item">
    <div class="clothing-item-flex">
      <div class="clothing-item-flex__img-wrapper">
        <img src="" alt="Clothing item" class="clothing-item-flex__img zoom-normal" id="clothingImg">
      </div>
      <div class="product-info">
        <h2 class="heading-secondary" id="clothingName"></h2>
        <span class="product-info__price" id="clothingPrice"></span>
        <p class="product-info__text">Relaxed Fit T-shirt with Branding and Patch Pocket</p>
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
          <input class="detail-group__quantity" max="9999" min="1" value="1" type="number">
        </div>
        <button type="button" class="btn btn--form btn--form--shop">Add to cart</button>
        <a href="" class="btn-view">Go Back</a>
      </div>
    </div>
    <span class="popup__close-icon-clothing" id="closeIcon">&times;</span>
  </div>
</div>

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
<script>
  // Open popup shop item
  $('.quickview__icon').click(function() {
    $('.overlay').css({'opacity': '1', 'visibility': 'visible'});

    // Change popup clothing-item: img, name, price
    var imgid = "#"+$(this).attr('id').replace(/\s/g,'') + "Img";
    var imgsrc = $(imgid).prop('src');
    var price = document.getElementById($(this).attr('id').replace(/\s/g,'') + "Price").innerHTML;
    $('#clothingImg').prop('src', imgsrc);
    document.getElementById('clothingName').innerHTML = $(this).attr('id');
    document.getElementById("clothingPrice").innerHTML = price;
  });

  // Popup close
  $('#closeIcon').click(function() {
    $('.popup, .overlay').css({
      'opacity': '0',
      'visibility': 'hidden'});
      $('body').css('overflow', 'visible');

  })
  </script>


</body>
</html>
