<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./index.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><img src=".\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Movies</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
      
<div id="movieCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#movieCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#movieCarousel" data-slide-to="1"></li>
        <li data-target="#movieCarousel" data-slide-to="2"></li>
        <li data-target="#movieCarousel" data-slide-to="3"></li>
        <li data-target="#movieCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image:url('Images/banner1.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 1</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner2.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 2</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner3.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 3</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner4.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 4</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner5.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 5</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#movieCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#movieCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="centered-content">
        <h5>Watch new movies</h5>
        <h2>Movie Now Playing</h2>
    </div>
<div class="card-container">

        <!-- <div class="movie-card">
            <img src=".\Images\movie1.jpg" alt="Movie 1">
             <div class="card-content">
                <h3>Movie Title 1</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div> 
        </div> --->
        <div class="movie-card">
            <img src=".\Images\movie2.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 2</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>

        <!-- <div class="movie-card">
            <img src=".\Images\movie3.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 3</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div> -->

        <div class="movie-card">
            <img src=".\Images\movie4.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 4</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie5.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 5</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie6.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 6</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <!-- Add more movie cards as needed -->
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


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

