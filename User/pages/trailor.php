<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/trailor.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>

                <li><a href="#">Offers</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <!--- Main Content --->
    <main>

    <div class="container">
        <h2 class="my-4">Related Movies</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="movie-card">
                    <img src="https://via.placeholder.com/300x450" alt="Movie Image">
                    <div class="movie-card-body">
                        <h5 class="movie-card-title">Clue of the Invisible Hand</h5>
                        <p class="movie-card-meta">Romance, English, 2019</p>
                        <p class="movie-card-time">2 Hr 3 Min</p>
                        <button class="play-btn" data-video="https://youtu.be/SmzvDX91Nbg?si=lAwcOhUqkKH8PEGn">▶</button>
                    </div>
                </div>
            </div>
            <!-- Repeat for other movie cards -->
        </div>
        
    </div>
    <div class="modal-video">
        <button class="close-btn">✖</button>
        <iframe src= "https://youtu.be/SmzvDX91Nbg?si=lAwcOhUqkKH8PEGn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen frameborder="0" allowfullscreen></iframe>
    </div>

    
    </main>

<!-- Footer -->
<div class="footer">
 <div class="container">
     <div class="row">
         <div class="col-md-4">
             <h3 class="footer-title">STARLIGHT CINEMA</h3>
             <p>Buy movie tickets easily with Aovis system nationwide</p>
             <a href="#" class="btn btn-warning">Get Your Ticket</a>
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
                 <li><a href="#">My Account</a></li>
                 <li><a href="#">News</a></li>
                 <li><a href="#">Latest Events</a></li>
                 <li><a href="#">Contact</a></li>
             </ul>
             </div>
         <div class="col-md-4">
             <h5 class="footer-title">Newsletter</h5>
             <p>Subscribe to Leitmotif newsletter this very day.</p>
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
         <p> &copy;Copyright 2023 by Ovatheme.com</p>
     </div>
 </div>
</div>



<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Font Awesome CDN for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
       $(document).ready(function() {
            $('.play-btn').on('click', function() {
                var videoSrc = $(this).data('video');
                $('.modal-video iframe').attr('src', videoSrc);
                $('.modal-video').fadeIn();
            });
            $('.close-btn').on('click', function() {
                $('.modal-video').fadeOut(function() {
                    $('.modal-video iframe').attr('src', '');
                });
            });
        });
    </script>
</body>
</html>

