<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <title>Home</title>
  </head>

  <body id="body-start">
<!-- header -->   
<div class="dashboard">
    <div class="dashboard-title">
        <a href="home.php">Mal De Wear</a>
      </div>
    <div class="nav"> 
    <nav class="nav-links">
        <a href="cart.php"><i class="bx bx-cart"></i></a>
        <a href="user_panel.php"><i class="bx bx-user-circle"></i></a>
        <a href="#"><i class="bx bx-heart"></i></a>
    </nav>
    </div>
    <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
</div>
<!-- header -->

<!-- sidebar -->
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
            
        </div>
    </div>
<!-- sidebar -->

<!-- content start-->
  <!-- JS FOR CAROUSEL -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- JS FOR CAROUSEL -->




  <swiper-container class="mySwiper" speed="1000" pagination="true" pagination-clickable="true" direction="vertical" space-between="30" mousewheel="true">
  <main>
    <div class="container">
      <span>spring collection</span>
      <h1 class="hovermal">mal de wear</h1>
      <hr>
      <p>Embrace the Bold. Elevate Your Style.</p>
      <p>Mal De Wear is a transformative clothing brand empowering individuals to express their unique identities through fashion. With meticulously crafted designs blending cutting-edge trends and timeless elegance, they create garments that make a bold statement. Embracing inclusivity and quality craftsmanship, Mal De Wear invites everyone to join their movement and redefine fashion, unleashing the power of personal style.</p>
      <a href="productpage.php">shop now</a>
    </div>
    <div class="swiper"> <!-- carousel -->
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">
          <div>
            <h2>Bucket Hat</h2>
            <p>a soft cotton hat with a wide and downwards sloping brim</p>
            <a href="women_accessories.php?category=<?php echo "Accesory"?>">explore</a>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <div>
            <h2>Cropped Shirt</h2>
            <p>
            Semi-fit Cropped T-shirt, a short upper-body garment that does not cover the midriff
            </p>
            <a href="women_top.php?category=<?php echo "Tops"?>" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--three">
  
          <div>
            <h2>Closure Sandals</h2>
            <p>
            Women's All Rubber Two Band Strap with Closure Sandals
            </p>
            <a href="women_footwear.php?category=<?php echo "Footwear"?>" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--four">
          <div>
            <h2>BTS Regular Fit Shorts</h2>
            <p>
            Mal De Wear BTS Dynamite Regular Fit Shorts with Raw Edge Hem
            </p>
            <a href="women_bottoms.php?category=<?php echo "Bottoms"?>" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--five">

          <div>
            <h2>Oversized Grey Shirt</h2>
            <p>
            Oversized Fit Textured T-shirt
            </p>
            <a href="men_top.php?category=<?php echo "Tops"?>" target="_blank">explore</a>
          </div>
        </div>
  </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
    <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
  </main>
    
   <swiper-slide class="image15" >  
      <a class="image14" href="productpage.php"><button class="btn-2"> SHOP NOW </button></a>
    </swiper-slide>
    <swiper-slide class="image16" >
      <a class="image14" href="men.php"><button class="btn-3"> SHOP NOW </button></a>

    </swiper-slide>
    <swiper-slide class="image17" >
      <a class="image14" href="women_top.php?category=<?php echo "Tops"?>"><button class="btn-4"> SHOP NOW </button></a>

    </swiper-slide>
    <swiper-slide>
    <img src="" >
      <div class="name">
        <h1>
          Join the Mal De Wear Club!
        </h1>
        <h1 class="perks">
          Perks of signing up:
        </h1>
        <nav>
          <a href="#" class="gift"><i class="bx bx-gift"></i></a>
          <h1 class="welcome"> Welcome Offer </h1>

          <a href="productpage.php" class="exclusive"><i class="bx bx-purchase-tag"></i></a>
          <h1 class="deals"> Exclusive Deals </h1>
          
          <a href="orders.php" class="order"><i class="bx bx-car"></i></a>
          <h1 class="tracking"> Order Tracking </h1>

          <a href="cart.php" class="add"><i class="bx bx-cart"></i></a>
          <h1 class="cart"> ADD TO YOUR CART </h1>
        </nav>
        
        <div>
        <a href="productpage.php">shop now</a>
        

      </div>
      <a class="fb" href="#"> Facebook </a>
      <a class="ig" href="#"> Instgram </a> 
      <a class="tk" href="#"> Tiktok </a>
      <a class="tt" href="#"> Twitter </a>
      <a class="con" href="#"> Contact </a>

      <a class="about" href="#"> About Us |</a>
      <a class="faq" href="#"> FAQs |</a>
      <a class="pp" href="#"> Privacy Policy |</a>
      <a class="tos" href="#"> Terms of Service </a>
      <a class="list" href="#"> Store List </a>
      </div>
</swiper-slide>
    <swiper-slide>
      
    </swiper-slide>

  </swiper-container>
  <script>
        var swiper = new Swiper(".swiper", {
              effect: "coverflow",
              grabCursor: true,
              centeredSlides: true,
              coverflowEffect: {
                  rotate: 0,
                  stretch: 0,
                  depth: 100,
                  modifier: 3,
                  slideShadows: true
              },
          loop: true,
          pagination: {
              el: ".swiper-pagination",
              clickable: true
          },
          breakpoints: {
              640: {
              slidesPerView: 1
              },
              768: {
              slidesPerView: 2
              },
              1024: {
              slidesPerView: 2
              },
            
          }
          }); 
      </script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
   <!-- SIDEBAR -->
   <script>
    const menuIcon = document.querySelector('.menu-icon');
    const sidebar = document.querySelector('.sidebar');
    const container = document.querySelector('.container');
    const dashboard = document.querySelector('.dashboard');
    menuIcon.addEventListener('click', () => {
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
    const navLinks = document.querySelectorAll('.nav-links a');
  </script>
  <!-- SIDEBAR -->
</body>

</html>