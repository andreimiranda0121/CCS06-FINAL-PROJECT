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
                    <li><a href='men_accessories.php?category=<?php echo urlencode("Accessory"); ?>'>Accessories</a></li>
                </ul>
                <h3><a href='women.php'>Women</a></h3>
                <ul>
                    <li><a href='women.php'>New Arrivals</a></li>
                    <li><a href='women.php'>Best Sellers</a></li>
                    <li><a href='women.php'>Shop by Collection</a></li>
                    <li><a href='women_top.php?category=<?php echo urlencode("Tops"); ?>'>Tops</a></li>
                    <li><a href='women_bottoms.php?category=<?php echo urlencode("Bottoms"); ?>'>Bottoms</a></li>
                    <li><a href='women_footwear.php?category=<?php echo urlencode("Footwear"); ?>'>Footwear</a></li>
                    <li><a href='women_accessories.php?category=<?php echo urlencode("Accessory"); ?>'>Accessories</a></li>
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

<!-- content start-->
<main>
    <div class="container">
      <span>spring collection</span>
      <h1 class="hovermal">mal de wear</h1>
    
      <hr>
      <p>Beauty and mystery are hidden under the sea. Explore with our application to know about Aquatic Animals.</p>
      <a href="productpage.php">shop now</a>
    </div>
    <div class="swiper"> <!-- carousel -->
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide--one">
          <div>
            <h2>Jellyfish</h2>
            <p>Jellyfish and sea jellies are the informal common names given to the medusa-phase of certain gelatinous members of the subphylum Medusozoa, a major part of the phylum Cnidaria.</p>
            <a href="https://en.wikipedia.org/wiki/Jellyfish" target="_blank">explore</a>
          </div>
        </div>
        <div class="swiper-slide swiper-slide--two">
          <div>
            <h2>Seahorse</h2>
            <p>
              Seahorses are mainly found in shallow tropical and temperate salt water throughout the world. They live in sheltered areas such as seagrass beds, estuaries, coral reefs, and mangroves. Four species are found in Pacific waters from North America to South America.
            </p>
            <a href="https://en.wikipedia.org/wiki/Seahorse" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--three">
  
          <div>
            <h2>octopus</h2>
            <p>
              Octopuses inhabit various regions of the ocean, including coral reefs, pelagic waters, and the seabed; some live in the intertidal zone and others at abyssal depths. Most species grow quickly, mature early, and are short-lived.
            </p>
            <a href="https://en.wikipedia.org/wiki/Octopus" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--four">
  
          <div>
            <h2>Shark</h2>
            <p>
              Sharks are a group of elasmobranch fish characterized by a cartilaginous skeleton, five to seven gill slits on the sides of the head, and pectoral fins that are not fused to the head.
            </p>
            <a href="https://en.wikipedia.org/wiki/Shark" target="_blank">explore</a>
          </div>
        </div>
  
        <div class="swiper-slide swiper-slide--five">
  
          <div>
            <h2>Dolphin</h2>
            <p>
              Dolphins are widespread. Most species prefer the warm waters of the tropic zones, but some, such as the right whale dolphin, prefer colder climates. Dolphins feed largely on fish and squid, but a few, such as the orca, feed on large mammals such as seals.
            </p>
            <a href="https://en.wikipedia.org/wiki/Dolphin" target="_blank">explore</a>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
    <img src="https://cdn.pixabay.com/photo/2021/11/04/19/39/jellyfish-6769173_960_720.png" alt="" class="bg">
    <img src="https://cdn.pixabay.com/photo/2012/04/13/13/57/scallop-32506_960_720.png" alt="" class="bg2">
  </main>





    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
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
 

   <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" direction="vertical" space-between="30" mousewheel="true">
   

    <swiper-slide class="image15">  
        <a class="image14" href="productpage.php"> SHOP NOW </a>
    </swiper-slide>
    <swiper-slide class="image16">
      <a class="image14" href="productpage.php"> SHOP NOW </a>

    </swiper-slide>
    <swiper-slide class="image17">
      <a class="image14" href="productpage.php"> SHOP NOW </a>

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

          <a href="index.html" class="exclusive"><i class="bx bx-purchase-tag"></i></a>
          <h1 class="deals"> Exclusive Deals </h1>
          
          <a href="#" class="order"><i class="bx bx-car"></i></a>
          <h1 class="tracking"> Order Tracking </h1>

          <a href="index.html" class="add"><i class="bx bx-cart"></i></a>
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

  </swiper-container>
  
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>




 
</body>

</html>