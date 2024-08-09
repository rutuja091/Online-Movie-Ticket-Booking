<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./index1.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
 <!--nav -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="logo"><img src="./Images/logo2.png" class="logo-img" alt="Logo"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".\index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=".\User\pages\movies.php">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href=".\User\pages\about.php">About Us</a></li>
            <li><a class="dropdown-item" href=".\User\pages\contact.php">Contact Us</a></li>
            <li><a class="dropdown-item " href=".\User\pages\gallery.php">Gallery</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-outline-primary">
        <i class="bi bi-person"></i> <img src =".\Images\login.png" style="height:40px;">
      </a>
    </div>
  </div>
</nav>





    <!--- Main Content --->
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
                <h5>Behind the Mask</h5>
                <p style="color:white">The next great killer and psychopath has given a documentary
                 film crew exclusive access to his life as he plans his reign of terror over the quiet town of Glen Echo.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner5.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Alis Keep Walking</h5>
                <p>A man's life changes after he sustains an injury in a terrorist attack.</p>
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
    <div class="movie-card">
        <img src=".\homepage\kill.jpg" alt="Auron Mein Kahan Dum Tha">
        <div class="card-content">
            <h3>Kill</h3>
            <p>Army commando Amrit (Lakshya) finds out his true love Tulika (Tanya Maniktala) is en-route, he boards a New Delhi-bound train in a daring quest to derail the their eventual seperation.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 15, 2024</p>
                <p><strong>Duration:</strong> 120 min</p>
                
                <p><strong>Showtimes:</strong> 2:00 PM, 5:00 PM, 8:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\golmal.jpg" alt="Maidan">
        <div class="card-content">
            <h3>Golmal</h3>
            <p>Gopal`s life hits choppy waters when he gets stuck on a boat one night after saving a woman from goons. Now his wife suspects he`s having an affair and a policeman is on his tail.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 22, 2024</p>
                <p><strong>Duration:</strong> 150 min</p>
                
                <p><strong>Showtimes:</strong> 1:00 PM, 4:00 PM, 7:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\sarfira.jpg" alt="Do Aur Do Pyaar">
        <div class="card-content">
            <h3>Safira</h3>
            <p>An incredible story, set in the world of startups and aviation, Sarfira will inspire the common man to dream big and to chase your dreams even if the world calls you crazy.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 29, 2024</p>
                <p><strong>Duration:</strong> 100 min</p>
              
                <p><strong>Showtimes:</strong> 3:00 PM, 6:00 PM, 9:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\babu.jpg" alt="Sharmajee ki Beti">
        <div class="card-content">
            <h3>Babu</h3>
            <p>Babu is a Marathi movie starring Ankit Mohan, Ruchira Jadhav, Neha Mahajan and Smita Tambe in prominent roles. It is a drama directed by Mayur Madhukar Shinde.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> September 5, 2024</p>
                <p><strong>Duration:</strong> 110 min</p>
              
                <p><strong>Showtimes:</strong> 4:00 PM, 7:00 PM, 10:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>
    <!-- Add more movie cards as needed -->
</div>





    <div class="centered-content">
        <h5>New upcoming movies</h5>
        <h2>Movies Coming Soon</h2>
    </div>
    <div class="card-container">
    <div class="movie-card">
        <img src=".\homepage\auro-me-kaha-dum-tha.jpg" alt="Auron Mein Kahan Dum Tha">
        <div class="card-content">
            <h3>Auron Mein Kahan Dum Tha</h3>
            <p>Auron Mein Kaha Dum Tha', is an epic love story that chronicles the life of Krishna and Vasudha as their fledgling relationship faces a lot of hardship and eventually...</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 15, 2024</p>
                <p><strong>Duration:</strong> 120 min</p>
                
                <p><strong>Showtimes:</strong> 2:00 PM, 5:00 PM, 8:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\maidan.jpeg" alt="Maidan">
        <div class="card-content">
            <h3>Maidan</h3>
            <p>Inspired by the Indian national football team coach and manager Syed Abdul Rahim, who is regarded as the architect of Indian football...</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 22, 2024</p>
                <p><strong>Duration:</strong> 150 min</p>
                
                <p><strong>Showtimes:</strong> 1:00 PM, 4:00 PM, 7:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\do-aur-do-pyar.jpg" alt="Do Aur Do Pyaar">
        <div class="card-content">
            <h3>Do Aur Do Pyaar</h3>
            <p>A couple on the brink of a breakup are cheating on each other with two outsiders. Whilst they're waiting to reveal their secret and go their separate ways, life has other plans for them.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> August 29, 2024</p>
                <p><strong>Duration:</strong> 100 min</p>
              
                <p><strong>Showtimes:</strong> 3:00 PM, 6:00 PM, 9:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>

    <div class="movie-card">
        <img src=".\homepage\Sharmajee-ki-Beti.jpg" alt="Sharmajee ki Beti">
        <div class="card-content">
            <h3>Sharmajee ki Beti</h3>
            <p>Multi-generational ensemble about the modern, middle-class female experience and the lives of urban women, all with the common surname of Sharma.</p>
            <div class="movie-details">
                <p><strong>Release Date:</strong> September 5, 2024</p>
                <p><strong>Duration:</strong> 110 min</p>
              
                <p><strong>Showtimes:</strong> 4:00 PM, 7:00 PM, 10:00 PM</p>
            </div>
            <a href="#" class="book-button">Book Ticket</a>
        </div>
    </div>
    <!-- Add more movie cards as needed -->
</div>

    <div class="cards-container">
        <h2 class="section-title">Top Featured Movies</h2>
        <div class="movie-card-container">
            <div class="movie-cards movie-card-1">
                <img src=".\Images\cardimg1.jpg" alt="The Way of Water" class="movie-image">
                <div class="movie-info">
                    <h3 class="movie-title">The Way of Water</h3>
                    <p class="movie-genre">Adventure, Crime</p>
                    <p class="movie-duration">190 Mins</p>
                    <div class="movie-buttons">
                        <button class="movie-button">Watch Trailer</button>
                        <button class="movie-button">Get Ticket</button>
                    </div>
                </div>
            </div>
            <div class="movie-cards movie-card-2">
                <img src=".\Images\cardimg2.jpg" alt="The Witcher Season 2" class="movie-image">
                <div class="movie-info">
                    <h3 class="movie-title">The Witcher Season 2</h3>
                    <p class="movie-genre">Action, Thriller</p>
                    <p class="movie-duration">180 Mins</p>
                    <div class="movie-buttons">
                        <button class="movie-button">Watch Trailer</button>
                        <button class="movie-button">Get Ticket</button>
                    </div>
                </div>
            </div>
            <div class="movie-cards movie-card-3">
                <img src=".\Images\cardimg3.jpg" alt="Wrong Turns Part 2" class="movie-image">
                <div class="movie-info">
                    <h3 class="movie-title">Wrong Turns Part 2</h3>
                    <p class="movie-genre">Thriller</p>
                    <p class="movie-duration">180 Mins</p>
                    <div class="movie-buttons">
                        <button class="movie-button">Watch Trailer</button>
                        <button class="movie-button">Get Ticket</button>
                    </div>
                </div>
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

