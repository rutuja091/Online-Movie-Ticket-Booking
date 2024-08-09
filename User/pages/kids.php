<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/kids.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="logo"><img src="./../../Images/logo2.png" class="logo-img" alt="Logo"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Contact Us</a></li>
            <li><a class="dropdown-item" href="#">Gallery</a></li>
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



   <div class="centered-content">
        <h3>Kids Show</h3>
       
    </div>
<div class="card-container">
        
        <div class="movie-card">
            <img src="./../../Images/Movies/stargirl.jpg" alt="Movie 2">
            <div class="card-content">
                <h3> Star Girl</h3>
                <p>  The plot is decent about a coming of age story. Involving a teenage boy who is struggling from a loss. Who meets .
                    </p>
                    <p class="movie-genre">Show-time:9:00 to 12:00</p>
                    <p class="movie-duration">price: ₹500</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
              </div>

        <div class="movie-card">
            <img src="./../../Images/Movies/Frozen.jpg" alt="Movie 2">
            <div class="card-content">
                <h3> Frozen</h3>
                <p>"Frozen," the latest Disney musical extravaganza, preaches the importance of embracing your true nature.
            </p>

                <p class="movie-genre">Show-time: 7:00 to 9:00</p>
                    <p class="movie-duration">price: ₹500</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/Dora.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Dora</h3>
                <p>The film is a blast for kids, and probably suitable for emotionally robust kids of all ages. Nobody actually dies.

                </p>
                <p class="movie-genre">Show-time:2:00 to 5:00</p>
                    <p class="movie-duration">price: ₹250</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/childrenparty.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Chillar Party</h3>
                <p>Chillar Party is a small film with a big heart where a kiddo gang shows more maturity than the adult</p>
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
              <div class="logo" style="width:10px; margin-left:5px;">
              <img src="./../../Images/logo2.png" class="logo-img" alt="Logo">
              </div>
                <h3 class="footer-title">STARLIGHT CINEMA</h3>
                <p>Buy movie tickets easily with starlight system nationwide</p>
                <a href="#" class="btn btn-warning">visit now</a>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Movies</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Crime</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">My gallery</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Latest Events</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                </div>
                
            <div class="col-md-4">
                <h5 class="footer-title">Newsletter</h5>
                <p>Subscribe to starlight channel.</p>
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
            <p>&copy; Copyright 2023 by Ovatheme.com</p>
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