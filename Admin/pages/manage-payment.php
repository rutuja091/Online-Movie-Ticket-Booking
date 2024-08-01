<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/manage-payment.css">
   
   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

   
    <div class="container">
        <h2> Manage User Details</h2>
        <table class="movie-table">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td>1</td>
                    <td>name</td>
                    <td>abc@gmail.com</td>
                    <td>pass123</td>
                    <td>Nagar</td>
                    <td>1234567890</td>
                    <td>
                    <img src=".\..\..\Images\admin-images\edit2.png" alt="Movie 1" class="icon" style="height:40px;">
                    <img src=".\..\..\Images\admin-images\delete.png" alt="Movie 1" class="icon" style="height:40px;">
                    </td>
                </tr>
                <!-- Repeat <tr> for more rows -->
            </tbody>
        </table>
    </div>

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