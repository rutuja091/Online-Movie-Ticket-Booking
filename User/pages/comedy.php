<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/comedy.css">
    <link rel="stylesheet" href="./../css/contact.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
      <!-- Header -->
    
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="logo"><img src="./../../Images/logo2.png" class="logo-img" alt="Logo"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".\..\..\index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=".\..\..\User\pages\movies.php">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href=".\..\..\User\pages\about.php">About Us</a></li>
            <li><a class="dropdown-item" href=".\..\..\User\pages\contact.php">Contact Us</a></li>
            <li><a class="dropdown-item" href=".\..\..\User\pages\gallery.php">Gallery</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-outline-primary">
      <i class="bi bi-person"></i> <img src =".\..\..\Images\login.png" style="height:40px;">
      </a>
    </div>
  </div>
</nav>

<!-- end nav -->


    <div class="centered-content">
        <h3>Comedy Show</h3>
       
    </div>
<div class="card-container">
        
        <div class="movie-card">
            <img src="./../../Images/Movies/double-life.jpg" alt="Movie 2">
            <div class="card-content">
                <h3> Double Life</h3>
                <p>  Convoluted, clunky and increasingly implausible with waning suspense and poor use of exposition.
                    </p>
                    <p class="movie-genre">Show-time:9:00 to 12:00</p>
                    <p class="movie-duration">price: ₹500</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
              </div>

        <div class="movie-card">
            <img src="./../../Images/Movies/bhabhiji.jpg" alt="Movie 2">
            <div class="card-content">
                <h3> Bhabhi ji Ghar pr hai</h3>
                <p>This tv serial are really entertaining acting and comedy timing really good Aasif Sheikh and other acter performance well.
            </p>

                <p class="movie-genre">Show-time: 7:00 to 9:00</p>
                    <p class="movie-duration">price: ₹500</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/balnatya.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Algabtya Galbatya</h3>
                <p>Drama released in Marathi language in theatre near you. Know about Film reviews, 
                    lead cast & crew, photos & video.
                </p>
                <p class="movie-genre">Show-time:2:00 to 5:00</p>
                    <p class="movie-duration">price: ₹250</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/hashyajatra.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Hashya Jatra</h3>
                <p>"Pathetic scripts and overacting by the talented actors. Loud comedy with no timing at all.
                     Biggest let down is Sai.</p>
                     <p class="movie-genre">Show-time:9:00 to 12:00</p>
                    <p class="movie-duration">price: ₹300</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <!-- Add more movie cards as needed -->

        
    </div>



 <!-- Footer -->
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-title">STARLIGHT CINEMA</h3>
                <p>Buy movie tickets easily with Starlight Cinema system nationwide</p>
                <a href="#" class="btn btn-warning">Get Your Ticket</a>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Movies</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Comedy Shows</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Kids Movie</a></li>
                    <li><a href="#">Marathi Movies</a></li>
                    <li><a href="#">Hindi Movies</a></li>
                    <li><a href="#">English Movies</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                </div>
                
            <div class="col-md-4">
                <h5 class="footer-title">Newsletter</h5>
                <p>Subscribe to STARLIGHT CINEMA .</p>
                <div class="newsletter">
                    <input type="email" class="form-control" placeholder="Email Address">
                    <button class="btn btn-warning mt-2">Subscribe</button>
                </div>
                <div class="mt-2">
                    <input type="checkbox" id="terms">
                    <label for="terms">I agree to all terms and policies of the company</label>
                </div>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; Copyright 2024 by starlightcinema.com  &nbsp; &nbsp; &nbsp; &nbsp;  Developed By Gaikwad Rutuja & Nimse Nikita</p>
          
        </div>
    </div>
</div>




<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>