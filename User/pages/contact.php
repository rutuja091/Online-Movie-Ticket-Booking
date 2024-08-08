<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/contact.css">

    <link rel="stylesheet" href="./../css/movies.css">
   
   
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
            <a class="nav-link txt dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Subjects
                      </a>
                      <ul class="dropdown-menu">
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
  
   <div class="bodycontent">

<div class="feedback-form">
        <h2>Feedback Form</h2>
        <form>
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
                <button type="submit">Submit</button>
            </div>
        </form>
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
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              
            <div class="navbar-logo">
            <img src=".\..\..\Images\logo2.png" alt="Logo">
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
                    <li><a href="#">home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#"> movie Gallery</a></li>
                   
                </ul>
                </div>
            <div class="col-md-4">
                <h5 class="footer-title">Address</h5>
                <p class="info">123 movie streat,</p>
                <p class="info">film city 414006</p>
                <div class="newsletter">
                   
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
            <p> &copy;Copyright 2023 by Starlight cinema.com</p>
        </div>
    </div>
</div>

  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>