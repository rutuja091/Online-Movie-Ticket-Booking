<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../../common/header-footer.css">
    <link rel="stylesheet" href="./../css/about.css">
   
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Movies</a></li>
            </ul>
        </nav>
    </header>


  <div class="carousel-inner">
        <div class="carousel-item" style="background-image: url('./../../Images/banner3.jpg');"></div>
        <div class="carousel-caption d-none d-md-block">

                <h5>About Us</h5>
                <p>Welcome to MovieTicket Booking, your number one source for all things movies. We're dedicated to giving you the very best of movie booking experience, with a focus on convenience, customer service, and affordability.</p>
        <p>Founded in 2023, MovieTicket Booking has come a long way from its beginnings. When we first started out, our passion for providing the best online movie ticket booking drove us to do intense research, and gave us the impetus to turn hard work and inspiration into a booming online platform. We now serve customers all over the country and are thrilled to be a part of the fast-growing wing of the movie industry.</p>
        <p>We hope you enjoy our service as much as we enjoy offering it to you. If you have any questions or comments, please don't hesitate to contact us.</p>
        <p>Sincerely,<br>The MovieTicket Booking Team</p>
            </div>
    </div>


    <div class="slider">
    <div class="slides">
        <img src="./../../Images/User-images/partner3.png" alt="partner3">
        <img src="./../../Images/User-images/partner2.jpg" alt="partner4">
        <img src="./../../Images/User-images/partner1.jpg" alt="partner6">
    </div>
    <div class="navigation">
        <button class="prev">&#10094;</button>
        <button class="next">&#10095;</button>
    </div>
</div>



   

    <footer class="footer">
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact Us</a>
        </div>
        <p>&copy; 2024 Movie Ticket Booking System. All rights reserved.</p>
    </footer>


    <script>
    const slides = document.querySelector('.slides');
    const images = document.querySelectorAll('.slides img');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    let currentIndex = 0;

    function showSlide(index) {
        if (index >= images.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = images.length - 1;
        } else {
            currentIndex = index;
        }
        slides.style.transform = `translateX(${-currentIndex * 100}%)`;
    }

    prevButton.addEventListener('click', () => {
        showSlide(currentIndex - 1);
    });

    nextButton.addEventListener('click', () => {
        showSlide(currentIndex + 1);
    });

    setInterval(() => {
        showSlide(currentIndex + 1);
    }, 3000);
</script>  
 


  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>