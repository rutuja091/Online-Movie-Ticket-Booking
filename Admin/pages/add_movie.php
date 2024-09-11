<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/addmovie.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
            <li><a href="./admin-dashboard.php" style="margin-right:50px; font-size:30px;" >Home</a></li>
            
            <div class="d-flex align-items-center">
            <a href="./login.php" class="btn btn-outline-primary">
        <i class="bi bi-person"></i><img src =".\..\..\Images\login.png" style="height:40px;"> 
      </a>
    </div>
            </ul>
        </nav>
    </header>

      <!-- Main Content -->
       <div class="container1">
    
    <form class="movie-form" action="add_movie.php" method="POST" enctype="multipart/form-data">
        <h2> Add Movie Details</h2>
        <div class="form-group">
            <label for="image">Movie Image:</label>
            <input type="file" id="image" name="image" accept="image/*" >
        </div>
        <div class="form-group">
            <label for="name">Movie Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Movie Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
        </div>
       <div class="form-group">
            <label for="date">Release Date</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="number" id="duration" name="duration" >
        </div>

        <div class="form-group">
            <label for="price">Ticket Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
    <label for="show_date">Show Date:</label>
    <input type="date" id="show_date" name="show_date" required>
</div>

<div class="form-group">
    <label for="show_time">Show Time:</label>
    <input type="time" id="show_time" name="show_time" required>
</div>
         
        <div class="form-group">
                    <label for="category" class="form-label">Movie Category</label>
                    <select type="text"id="category" class="form-control" 
                    placeholder="Movie category" autocomplete="off"
                     required="required" name="category"  >
                     <option></option>
                     <option>Marathi Movie</option>
                     <option>Hindi Movie</option>
                     <option>English Movie</option>
                     <option>Comedy Movie</option>
                     <option>Kids Movie</option>
                     <option>Drama</option>
                     <option>Now Playing</option>
                     <option>Comming Soon</option>
                    
                     </select>
                        
                    
                </div>

        <button type="submit" name="submit" class="button1">Add Movie</button>
    </form>
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
</body>
</html>
<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

// Database connection 
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$msg = "";
if (isset($_POST["submit"])) {
    $image = $_FILES['image']['name'];
    $target = "Images/" . basename($image);

    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $category = $_POST["category"];
    $duration = $_POST["duration"];
    $date = $_POST["date"];
    $show_date = $_POST["show_date"];
    $show_time = $_POST["show_time"];

    // Prepared statement to avoid SQL injection and syntax errors
    $stmt = $con->prepare("INSERT INTO movies (`image`, `name`, `description`, `price`, `category`, `duration`, `date`, `show_date`, `show_time`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $image, $name, $description, $price, $category, $duration, $date, $show_date, $show_time);

    if ($stmt->execute()) {
        $msg = "Movie added successfully.";
        
        // Move the uploaded image
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg .= " Image uploaded successfully.";
        } else {
            $msg .= " Failed to upload image.";
        }
    } else {
        $msg = "Error: " . $stmt->error;
    }

    $stmt->close();
}

$con->close();
echo $msg; // Display the success or error message
?>
