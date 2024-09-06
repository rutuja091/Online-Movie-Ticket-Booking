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


    <?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM movies WHERE category='Comedy Movie' ORDER BY id DESC ";
$query_run=mysqli_query($con,$sql);
$check_movie=mysqli_num_rows($query_run)>0;

 if($check_movie)
 {
 while($row=mysqli_fetch_array($query_run))
 {
  ?>    
        <div class="movie-card">
            <img src="./../../Images/Movies/<?php echo $row['image'];?>" alt="Movie 2">
         
            <div class="card-content">
                <h3><?php echo $row['name'];?></h3>
                <p><?php echo $row['description'];?></p>
                    <p class="movie-genre"><h6>Time: <?php echo $row['show_time'];?></h6></p>
                    <p class="movie-genre">Date: <?php echo $row['show_date'];?></p>
                    <p class="movie-duration">Rs: <?php echo $row['price'];?></p>
                    <?php  echo "<a href='.\movie-details.php?id=$row[id]' class='book-button'>Book Ticket</a>";?>
            </div>
              </div>
  <?php
}
 }
?>
</div>









    <!-- <div class="centered-content">
        <h3>Comedy Show</h3>
       
    </div>
<div class="card-container">
        
        <div class="movie-card">
            <img src="./../../Images/Movies/double-life.jpg" alt="Movie 2">
            <div class="card-content">
                <h3></h3>
                <p></p>
                    <p class="movie-genre"></p>
                    <p class="movie-duration"></p>
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
       

        
    </div> -->


  <!-- Footer -->
  <div class="footer bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <div class="logo"><img src="./../../Images/logo2.png" class="logo-img" alt="Logo"></div>
               
                <p style="margin-top:10px;">Experience seamless ticket booking with STARLIGHT CINEMA across the nation. Watch the latest movies in comfort and style.</p>
                
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Explore Movies</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">Comedy Shows</a></li>
                    <li><a href="#" class="text-light">Drama</a></li>
                    <li><a href="#" class="text-light">Kids Movies</a></li>
                    <li><a href="#" class="text-light">Marathi Movies</a></li>
                    <li><a href="#" class="text-light">Hindi Movies</a></li>
                    <li><a href="#" class="text-light">English Movies</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light">About Us</a></li>
                    <li><a href="#" class="text-light">Contact Us</a></li>
                    <li><a href="#" class="text-light">Gallery</a></li>
                    <li><a href="#" class="text-light">FAQ</a></li>
                    <li><a href="#" class="text-light">Login</a></li>
                </ul>
            </div>
            <div class="col-md-4">
    <h5 class="footer-title">Rate Us</h5>
    <p>We value your feedback! Please rate your experience with us:</p>
    <div class="rating">
    <p>Rating: ⭐⭐⭐⭐☆</p>
    </div>
    <p>Your rating helps us improve our service!</p>
</div>
       
        </div>
        <div class="row mt-3 text-center">
            <div class="col-12">
                <p>&copy; 2024 STARLIGHT CINEMA.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Developed by Gaikwad Rutuja & Nimse Nikita</p>  
                 
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
