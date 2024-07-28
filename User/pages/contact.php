<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/contact.css">
   
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Movies</a></li>
            </ul>
        </nav>
    </header>
  
    <div class="container">
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form action="#" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</div>

<div class="contact-card">
        <img src="./../../Images/banner3.jpg" alt="Profile Picture">
        <h2>jon doe</h2>
        <p>frontend and backend<br>developer</p>
        <a href="mailto:john.doe@example.com">Email Me</a>
    </div>

    <div class="contact-card">
        <img src="./../../Images/User-images/about.png" alt="Company Logo">
        <h2>About Us</h2>
        <p>Welcome to MovieTickets , <br>one place destination.</p>
        <a href="/contact">Contact Us</a>
</div>

    <div class="contact-card">
        <img src="./../../Images/User-images/gmap.png" alt="Company Logo">
        <h2>Our Address</h2>
        <p>123 Movie Street<br>Film City, 414001<br></p>
        <a href="https://www.google.com/maps?q=123+Movie+Street,+Film+City,+FC+12345" target="_blank">View on Map</a>
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