<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
   
    <link rel="stylesheet" href="./../css/contact.css">

   
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
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
          <a class="nav-link" href=".\..\..\User\pages\movies.php">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href=".\..\..\User\pages\about.php">About Us</a></li>
            <li><a class="dropdown-item" href=".\contact.php">Contact Us</a></li>
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
  
   <div class="bodycontent">

   <div class="feedback-form">
        <h2>Feedback Form</h2>
        <!-- Updated form with action and method POST -->
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>


<div class="contact-card">
        <img src="./../../Images/banner3.jpg" alt="Profile Picture">
        <h2>Nikita & Rutuja</h2>
        <p>Fullstack developer</p>
        <a href="mailto:abc.doe@example.com">Email Me</a>
    </div>

    <div class="contact-card">
        <img src="./../../Images/User-images/about.png" alt="Company Logo">
        <h2>About Us</h2>
        <p>Welcome to MovieTickets , <br>one place destination.</p>
        <a href="tel:+91 000 000 0000">
        <p> call: +91 123 698 537</p></a>
</div>

    <div class="contact-card">
        <img src="./../../Images/User-images/gmap.png" alt="Company Logo">
        <h2>Our Address</h2>
        <p>123 Movie Street<br>Film City, 414001<br></p>
        <a href="https://www.google.com/maps/search/starlight+cinema/@18.9602201,72.6499553,10.09z?entry=ttuF" target="_blank">View on Map</a>
    </div>
      <img src="./../../Images/User-images/starmap.png" class="map" >

</div>
  
    
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


<?php
    include("dbcon.php");

    if (isset($_POST['submit'])) {
        // Use isset() to check if the variables are set
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        // Use a prepared statement to avoid SQL injection
        $stmt = $con->prepare("INSERT INTO user_feedback (`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
                    alert("Feedback sent successfully! 👍");
                    window.location="feedback.php";
                  </script>';
        } else {
            echo '<script type="text/javascript">
                    alert("Failed to send feedback.");
                    window.location="feedback.php";
                  </script>';
        }

        // Close the statement
        $stmt->close();
    }
    ?>




</body>
</html>
