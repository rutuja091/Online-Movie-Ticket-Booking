<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/update-reg.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="./admin-dashboard.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Movies</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
    <div class="container">
        <form class="registration-form">
            <h2> Update Registration</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    </main>

    <footer class="footer">
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact Us</a>
        </div>
        <p>&copy; 2024 Movie Ticket Booking System. All rights reserved.</p>
    </footer>
  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>