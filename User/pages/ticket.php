<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if id is set and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare SQL statement
    $sql = "SELECT * FROM ticket WHERE id = ?";
    $stmt = $con->prepare($sql);
    
    if ($stmt === false) {
        die("Prepare failed: " . $con->error);
    }

    // Bind parameters and execute statement
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $resultData = $result->fetch_assoc();
        $name = $resultData['name'] ?? 'N/A';
        $quantity = $resultData['quantity'] ?? 'N/A';
        $name= $resultData['name'] ?? 'N/A';
        $total_price = $resultData['total_price'] ?? 'N/A';
        $show_time = $resultData['show_time'] ?? 'N/A';
        $show_date = $resultData['show_date'] ?? 'N/A';
    } else {
        echo "No record found with ID $id.";
        exit; // Exit if no record is found
    }

    $stmt->close();
} else {
    echo "Invalid ID.";
    exit; // Exit if ID is not valid
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/ticket.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
 .center {
    text-align: center;
    padding: 20px;
    font-family: 'Arial', sans-serif;
}

.center .movie-name {
    font-size: 24px;
    font-weight: bold;
    font-family: 'PT Serif', serif; /* PT Serif font */
    color: #000000; /* Black color */
    margin-bottom: 10px;
}
.center {
    text-align: center;
    padding: 20px;
    font-family: 'Arial', sans-serif;
}

.center .movie-title {
    font-size: 28px;
    font-weight: bold;
   
}
.center .details {
    font-size: 20px;
    font-weight: bold;
    color: #000000; /* Black color */
    margin-bottom: 8px;
}

.center .details.price {
    color: #000000; /* Black color for total price */
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




    <!--- Main Content --->
    <main>
        <div class="main-ticket">
    <div class="ticket"style="height:auto; padding: 5px;">
        <div class="left">
            <div class="logo">
                <img src="./../../Images/logo2.png" style="height:90px;"alt="Starlight Cinema Logo">
            </div>
            <div class="cinema">STARLIGHT CINEMA</div>
            <div class="details">THEATER: 03</div>
            
            
           
        </div>
        <div class="center">
            <div class="movie-title" style="font-size:20px; margin-bottom:10px; color:black; text-decoration: underline;">MOVIE TICKET</div>
          
            
            <div class="details movie-name" style="font-weight:bold;font-size:40px; color:red;">&quot;<?php echo htmlspecialchars($name); ?>&quot;</div>
            <div class="details">Total Tickets: &nbsp;&nbsp;<?php echo htmlspecialchars($quantity); ?></div>
            <div class="details">Total Price:&nbsp;&nbsp;<?php echo htmlspecialchars($total_price); ?></div>
            
        </div>
        <div class="right">
    <div class="details">
        <strong>Show Date:</strong> <?php echo date('F j, Y', strtotime($show_date)); ?>
    </div>
    <div class="details">
        <strong>Show Time:&nbsp;&nbsp;&nbsp;&nbsp;</strong> <?php echo date('h:i A', strtotime($show_time)); ?>

    </div>
    <div class="details"style="font-weight:bold;color:#e041b1;">STANDARD 3D MOVIES</div>
</div>

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
