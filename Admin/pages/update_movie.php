<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

// Database connection
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die($conn->connect_error());

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$sql = "SELECT * FROM movies WHERE id = $id";
$query = $con->query($sql);
$resultData = $query->fetch_assoc();

$image = $resultData['image'];
$name = $resultData['name'];
$description = $resultData['description'];
$time = $resultData['time'];
$price = $resultData['price'];
$category = $resultData['category'];
?>

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
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="./admin-dashboard.php">Home</a></li>
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
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Update Movie Details</h2>

            <div class="form-group">
                <label for="image">Movie Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
                <img src="<?php echo './uploads/' . $image; ?>" alt="Movie Image" height="100">
            </div>
            <div class="form-group">
                <label for="name">Movie Name:</label>
                <input type="text" id="name" name="name" autocomplete="off" value="<?php echo $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Movie Description:</label>
                <textarea id="description" name="description" rows="4" autocomplete="off" required><?php echo $description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="time">Show Time:</label>
                <input type="datetime-local" id="time" name="time" autocomplete="off" value="<?php echo $time; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Ticket Price:</label>
                <input type="number" id="price" name="price" step="0.01" autocomplete="off" value="<?php echo $price; ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" id="category" name="category" autocomplete="off" value="<?php echo $category; ?>" required>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="button1" value="Update" name="movie_update">
        </form>
    </div>

<?php
if (isset($_POST['movie_update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $time = $_POST['time'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    // Handle image upload
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $targetDir = "uploads/";
        $image = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
    } else {
        // If no new image is uploaded, keep the old one
        $image = $resultData['image'];
    }

    // Update query
    $sql = "UPDATE movies SET image = '$image', name = '$name', description = '$description', time = '$time', price = '$price', category = '$category' WHERE id = $id";

    if ($con->query($sql)) {
        echo '<script type="text/javascript">
                alert("Record Updated!");
                window.location="manage-movie.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("Record Not Updated!");
                window.location="update-movie.php";
              </script>';
    }
}
?>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <!-- Footer content -->
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>






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