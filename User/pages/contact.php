<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/contact.css">
   
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</head>
<body>
    <!-- Header -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src=".\..\..\Images\logo2.png" alt="Logo">
        </div>
        <ul class="navbar-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Movies</a></li>
            <li class="nav-item dropdown  ps-5">
                      <a class="dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Subjects
                      </a>
                      <ul class="dropdown-content">
                        <li><a class="dropdown-item" href="./feedback.php" target="_blank">contact</a></li>
                          <li><a class="dropdown-item" href="./contact.php" target="_blank" >feedback </a></li>
                          <li><a class="dropdown-item" href="./gallery.php" target="_blank" >gallery</a></li>
                          <li><a class="dropdown-item" href="./trailer4.php" target="_blank">trailer</a></li>
                          
                        </ul>
                    </li>
        </ul>
        <div class="navbar-login">
        <img src="./../../Images/User-images/login.png" alt="Logo" style="height:50px;cursor:pointer">
        </div>
    </nav>
  
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