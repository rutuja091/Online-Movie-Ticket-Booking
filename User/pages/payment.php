<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if id is set and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Select data associated with this particular id
    $sql = "SELECT * FROM ticket WHERE id = $id";
    $query = $con->query($sql);

    if ($query) {
        $resultData = $query->fetch_assoc();
        $name = $resultData['name'];
        $quantity = $resultData['quantity'];
        $total_price = $resultData['total_price'];

        }    
    }
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
    <div class="container">
        <div class="payment-container">
            <h2 style="color:#ff5500;">Payment Details</h2>
            <form method="POST" action="payment.php">

                <div class="form-group">
                    <label for="customerName">Name </label>
                    <input type="text" class="form-control" id="customerName" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="customerEmail">Email</label>
                    <input type="email" class="form-control" id="customerEmail" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="customerMobile">Mobile No</label>
                    <input type="tel" class="form-control" id="customerMobile" name="mobile_no" placeholder="Enter your mobile number" required>
                </div>

                <h3 style="color:#ff5500;">Payment Details</h3>
                <div class="form-group">
                    <label for="productName">Movie Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>" id="productName" name="movie_name" placeholder="Enter movie name" required readonly>
                </div>

                <div class="form-group">
                    <label for="paymentMode">Select Payment Mode</label>
                    <select class="form-control" id="paymentMode" name="payment_mode" required>
                        <option value="">Select Payment Mode</option>
                        <option value="creditCard">Credit Card</option>
                        <option value="debitCard">Debit Card</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number" placeholder="Enter card number" required>
                </div>
                <div class="form-group">
                    <label for="totalPrice">Total Price</label>
                    <input type="text" class="form-control" value="<?php echo $total_price; ?>" id="totalPrice" name="total_price" placeholder="Enter total price" required readonly>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Make Payment</button>
            </form>
        </div>
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

<?php


if (isset($_POST['submit'])) { 
	$name =  $_POST['name'];
  $email =  $_POST['email'];
 	$mobile_no =  $_POST['mobile_no'];
     $movie_name=  $_POST['movie_name'];
  $payment_mode	=  $_POST['payment_mode'];
  $card_number	 =  $_POST['card_number'];
   $total_price	 =  $_POST['total_price'];
  
     
		$sql = "INSERT INTO payment  (`name`,`email`,`mobile_no`,`movie_name`,`payment_mode`,`card_number`,`total_price`)
    VALUES ('$name','$email',  '$mobile_no','$movie_name', '$payment_mode','$card_number','$total_price')";
		
       if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Your Payment is  Done..👍");
                    window.location="view-ticket.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("payment Not Done...!");
            window.location="payment.php";
            </script>';
        }
      }
      ?>

       
