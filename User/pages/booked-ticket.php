<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

// Database connection
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check for connection errors
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get the maximum ID from the table
$query = "SELECT MAX(id) AS max_id FROM ticket";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Fetch ticket details (name, quantity, and total_price) for the max ID
$ticketQuery = "SELECT name, quantity, total_price FROM ticket WHERE id = $maxId";
$ticketResult = mysqli_query($con, $ticketQuery);

if (mysqli_num_rows($ticketResult) > 0) {
    // Fetch the data
    $ticketData = mysqli_fetch_assoc($ticketResult);
    $name = $ticketData['name'];
    $quantity = $ticketData['quantity'];
    $totalPrice = $ticketData['total_price'];
} else {
    // If no data found, set default values
    $name = "Unknown";
    $quantity = 0;
    $totalPrice = 0.00;
}

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/movie-details.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
    .card-body{
      font-family: Arial, sans-serif;
    margin: 0;
    padding: 40px 0px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    
    background-color: #f5f5f5;
    }
.ticket-container {
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    width: 400px;
}
.ticket-container:hover{
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.movie-details {
    padding: 20px;
}

.movie-name {
    font-size: 40px;
    font-weight:bold;
    margin: 0;
    color: blue;
}

.ticket-quantity,
.total-price {
    font-size: 1.2em;
    margin: 10px 0;
    color: #666;
    justify-content:center;
}

.make-payment-button {
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s ease;
    decoration:none;
}

.make-payment-button:hover {
    background-color: #218838;
}

.movie-poster {
    max-width: 100%;
    height: auto;
    display: block;
    margin-top: -10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
      </style>
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


<!-- Navbar and other content remain unchanged -->

<!-- Main Content -->


<main>
    <div class="card-body">
        <div class="ticket-container">
            <div class="movie-details">
                <h2 class="movie-name"><?php echo $name; ?></h2>
                <p style="color:red;font-weight:bold" class="ticket-quantity">Booked Tickets: <?php echo $quantity; ?></p>
                <p class="total-price">Pay <b style="color:black;">₹<?php echo number_format($totalPrice, 2); ?></b></p>
                <a href="payment.php?id=<?php echo $maxId; ?>" class="make-payment-button">Make Payment</a>
            </div>
        </div>
    </div>


</main>


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
         <p>&copy; Copyright 2024 by starlightcinema.com  &nbsp; &nbsp; &nbsp; &nbsp;    Developed By Gaikwad Rutuja & Nimse Nikita</p>
       
     </div>
 </div>
</div>



<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Font Awesome CDN for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>  document.querySelector('.nav').addEventListener('click', function() {
         this.querySelector('ul').classList.toggle('show');
     });</script>
</body>
</html>
