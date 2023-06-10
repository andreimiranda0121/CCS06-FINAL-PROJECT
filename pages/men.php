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
    <link rel="stylesheet" href="../styles/men.css">
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
                <h3><a href='#'>Login</a></h3>
            </div>
        </div>
    </div>
    <section class="products-container container">
        <a href="#" class="shop-item">
            <img src="../images/menpage/shirt1.png" alt="Clothing item" class="lazy shop-item__img" id="OversizedShirtImg">
            <div class="quickview">
            <span class="quickview__icon" id="Oversized Shirt">Overview</span>
            <span class="quickview__info">Oversized Fit Textured T-shirt<br><span class="quickview__info--price" id="OversizedShirtPrice">₱210.00</span></span>
            </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/shirt2.png" alt="Clothing item" class="lazy shop-item__img" id="OversizedShirtGreyImg">
          <div class="quickview">
            <span class="quickview__icon" id="Oversized Shirt Grey">Overview</span>
            <span class="quickview__info">Oversized Fit Textured T-shirt<br><span class="quickview__info--price" id="OversizedShirtGreyPrice">₱218.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/shirt3.png" alt="Clothing item" class="lazy shop-item__img" id="RelaxedShirtImg">
          <div class="quickview">
            <span class="quickview__icon" id="Relaxed Shirt">Overview</span>
            <span class="quickview__info">Relaxed Fit T-shirt<br><span class="quickview__info--price" id="RelaxedShirtPrice">₱298.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/shirt4.png" alt="Clothing item" class="lazy shop-item__img" id="DenimPocketImg">
          <div class="quickview">
            <span class="quickview__icon" id="Denim Pocket">Overview</span>
            <span class="quickview__info">Faded Denim Pocket T-shirt<br><span class="quickview__info--price" id="DenimPocketPrice">₱125.00</span></span>
          </div>
        </a>
</section>
<section class="products-container container">
  <a href="#" class="shop-item">
    <img src="../images/menpage/pants1.png" alt="Clothing item" class="lazy shop-item__img" id="CargoTrousersImg">
    <div class="quickview">
      <span class="quickview__icon" id="Cargo Trousers">Overview</span>
      <span class="quickview__info">Cargo Trousers<br><span class="quickview__info--price" id="CargoTrousersPrice">₱210.00</span></span>
    </div>
  </a>
  <a href="#" class="shop-item">
          <img src="../images/menpage/pants2.png" alt="Clothing item" class="lazy shop-item__img" id="CargoTrousersImg">
          <div class="quickview">
            <span class="quickview__icon" id="Cargo Trousers">Overview</span>
            <span class="quickview__info">Cargo Trousers<br><span class="quickview__info--price" id="CargoTrousersPrice">₱218.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/pants3.png" alt="Clothing item" class="lazy shop-item__img" id="DressCodeTexturedImg">
          <div class="quickview">
            <span class="quickview__icon" id="Dress Code Textured ">Overview</span>
            <span class="quickview__info">Ankle Length Dapper Trousers<br><span class="quickview__info--price" id="DressCodeTexturedPrice">₱298.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/pants4.png" alt="Clothing item" class="lazy shop-item__img" id="StraightFitImg">
          <div class="quickview">
            <span class="quickview__icon" id="Straight Fit">Overview</span>
            <span class="quickview__info">Straight Fit Linen Trousers<br><span class="quickview__info--price" id="StraightFitPrice">₱125.00</span></span>
          </div>
        </a>
</section>
<section class="products-container container">
  <a href="#" class="shop-item">
    <img src="../images/menpage/footwear1.png" alt="Clothing item" class="lazy shop-item__img" id="FlipFlopsImg">
    <div class="quickview">
      <span class="quickview__icon" id="Flip Flops">Overview</span>
      <span class="quickview__info">Men's Flip Flops with Canvas Strap<br><span class="quickview__info--price" id="FlipFlopsPrice">₱210.00</span></span>
    </div>
  </a>
  <a href="#" class="shop-item">
          <img src="../images/menpage/footwear2.png" alt="Clothing item" class="lazy shop-item__img" id="PlainCombiImg">
          <div class="quickview">
            <span class="quickview__icon" id="Plain Combi">Overview</span>
            <span class="quickview__info">Men's All Day Plain Combi Flip Flops<br><span class="quickview__info--price" id="PlainCombiPrice">₱218.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/footwear3.png" alt="Clothing item" class="lazy shop-item__img" id="MeshSandalsImg">
          <div class="quickview">
            <span class="quickview__icon" id="Mesh Sandals">Overview</span>
            <span class="quickview__info">Men's Mesh Sandals<br><span class="quickview__info--price" id="MeshSandalsPrice">₱298.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/footwear4.png" alt="Clothing item" class="lazy shop-item__img" id="ThreeStrapSandalsImg">
          <div class="quickview">
            <span class="quickview__icon" id="Three Strap Sandals">Overview</span>
            <span class="quickview__info">Men's Three Strap Sandals<br><span class="quickview__info--price" id="ThreeStrapSandalsPrice">₱125.00</span></span>
          </div>
        </a>
</section>
</section>
<section class="products-container container">
  <a href="#" class="shop-item">
    <img src="../images/menpage/accessories2.png" alt="Clothing item" class="lazy shop-item__img" id="NeckCoinPurseImg">
    <div class="quickview">
      <span class="quickview__icon" id="Neck Coin Purse">Overview</span>
      <span class="quickview__info">Neck Coin Purse<br><span class="quickview__info--price" id="NeckCoinPursePrice">₱210.00</span></span>
    </div>
  </a>
  <a href="#" class="shop-item">
          <img src="../images/menpage/accessories1.png" alt="Clothing item" class="lazy shop-item__img" id="CoinPurseImg">
          <div class="quickview">
            <span class="quickview__icon" id="Coin Purse">Overview</span>
            <span class="quickview__info">Coin Purse<br><span class="quickview__info--price" id="CoinPursePrice">₱218.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/accessories3.png" alt="Clothing item" class="lazy shop-item__img" id="BraidedBeltImg">
          <div class="quickview">
            <span class="quickview__icon" id="Braided Belt">Overview</span>
            <span class="quickview__info">Men's Braided Belt<br><span class="quickview__info--price" id="BraidedBeltPrice">₱298.00</span></span>
          </div>
        </a>
        <a href="#" class="shop-item">
          <img src="../images/menpage/accessories4.png" alt="Clothing item" class="lazy shop-item__img" id="ReversibleBucketHatImg">
          <div class="quickview">
            <span class="quickview__icon" id="Reversible Bucket Hat">Overview</span>
            <span class="quickview__info">Reversible Bucket Hat<br><span class="quickview__info--price" id="ReversibleBucketHatPrice">₱125.00</span></span>
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
