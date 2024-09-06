<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";


//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());
$query = "SELECT MAX(id) AS max_id FROM ticket";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$maxId = $row['max_id'];

// Close the database connection
mysqli_close($con);

// Pass the value to the button on the next page


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/payment.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
 .payment-success {
  text-align: center;
  font-family: Arial, sans-serif;
  padding: 20px;
  max-width: 500px;
  margin: auto;
}

header h1 {
  color: #4CAF50;
  font-size: 24px;
  font-weight:bold;
  margin-bottom: 10px;
}

header p {
  color: #666;
  font-size: 18px;
}

.confirmation-icon img {
  width: 80px;
  margin: 20px 0;
}

.summary-box {
  background-color: #f8f8f8;
  border-radius: 10px;
  padding: 15px;
  margin: 20px 0;
}

.summary-box h2 {
  color: #333;
  font-size: 20px;
}

.summary-box p {
  color: #444;
  font-size: 16px;
  margin: 5px 0;
}

.additional-info {
  font-size: 16px;
  color: #777;
  margin: 10px 0;
}

.get-ticket-btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
  margin-bottom:40px;
}

.get-ticket-btn:hover {
  background-color: #45a049;
}

footer a {
  color: blue;
  font-size: 14px;
  margin: 0 10px;
 
  text-decoration: none;
}

footer a:hover {
  text-decoration: none;
  font-weight:bold;

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


   <!-- Main Content -->
<main>

<div class="payment-success">
  <header>
    <h1>Your Payment is Successful!</h1>
    <p>Thank you for your purchase.</p>
  </header>
  
  <div class="confirmation-icon">
    <!-- Icon could be an image or an SVG -->
    <img src="./../../Images/checked.png" alt="Success">
  </div>

  <!-- <div class="summary-box">
    <h2>Transaction Summary</h2>
    <p><strong>Movie:</strong> Starlight Cinema</p>
    <p><strong>Date & Time:</strong> 10th September, 7:00 PM</p>
    <p><strong>Theater:</strong> Galaxy Cinema, Screen 2</p>
    <p><strong>Seats:</strong> A12, A13</p>
    <p><strong>Amount Paid:</strong> $25.00</p>
  </div> -->
  
  <div class="additional-info">
    <!-- <p>Your ticket has been sent to your email.</p> -->
    <p>You can also download your ticket below.</p>
  </div>
  
  <div class="action-section">

  <div class="action-section">
  <a href="ticket.php?id=<?php echo $maxId; ?>" style="color:white;text-decoration:none;">
    <button class="get-ticket-btn">
   Get Your Ticket
       </button>
       </a>
  </div>

   
   
  </div>
  
  <footer>
    <a href="home.html">Back to Home</a> | 
    <a href="contact-support.html">Contact Support</a>
  </footer>
</div>



</main>
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