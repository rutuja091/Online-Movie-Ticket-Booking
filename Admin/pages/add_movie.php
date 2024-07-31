<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/addmovie.css">
   
   
   
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
        <form class="movie-form" action="/submit-movie" method="POST" enctype="multipart/form-data">
            <h2>Add New Movie</h2>
            <div class="form-group">
                <label for="movie-image">Movie Image:</label>
                <input type="file" id="movie-image" name="movie-image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="movie-name">Movie Name:</label>
                <input type="text" id="movie-name" name="movie-name" required>
            </div>
            <div class="form-group">
                <label for="movie-description">Movie Description:</label>
                <textarea id="movie-description" name="movie-description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="ticket-price">Ticket Price:</label>
                <input type="number" id="ticket-price" name="ticket-price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="show-time">Show Time:</label>
                <input type="datetime-local" id="show-time" name="show-time" required>
            </div>
            <button type="submit">Add Movie</button>
        </form>
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
