<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mal De Wear-Login</title>
</head>
<body class="bg">
    <div class="dashboard">
        <div class="dashboard-title">
            <a href="productpage.php">Mal De Wear</a>
          </div>
        <nav class="nav-links">
            <a href="#"><i class="bx bx-cart"></i></a>
            <a href="#"><i class="bx bx-user-circle"></i></a>
            <a href="#"><i class="bx bx-heart"></i></a>
        </nav>
        <a href="#" class="menu-icon"><i class="bx bx-menu-alt-left"></i></a>
    </div>
    <div class="container">
        <div class="title">
            <span class="hover-text">L</span> 
            <span class="hover-text">O</span> 
            <span class="hover-text">G</span>
            <span class="hover-text">I</span>
            <span class="hover-text">N</span>
        </div>
        <form class="form" action="attempt_login.php" method="POST">
            <div class="input-field">
                <input type="text" name="username" class="input" placeholder="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" name="password" class="input" placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Login">
            </div>
        </form>
        <div class="register">
            <p>Don't have an account? <a href="register.php">Sign up!</a></p>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-content">
            <h3>Men</h3>
            <ul>
                <li>New Arrivals</li>
                <li>Best Sellers</li>
                <li>Shop by Collection</li>
            </ul>
            <h3>Women</h3>
            <ul>
                <li>New Arrivals</li>
                <li>Best Sellers</li>
                <li>Shop by Collection</li>
            </ul>
            <h3>Kids</h3>
            <ul>
                <li>New Arrivals</li>
                <li>Best Sellers</li>
                <li>Shop by Collection</li>
            </ul>
        </div>
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
        const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetSection = document.querySelector(link.getAttribute('href'));
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
        });

    </script>
</body>
</html>