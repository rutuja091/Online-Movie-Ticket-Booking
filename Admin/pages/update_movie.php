<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());


// Get id from URL parameter

$id=$_GET['id'];

// Select data associated with this particular id

	$sql=  "SELECT * FROM movies WHERE id = $id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();


   $image= $resultData['image'];

	$name = $resultData['name'];

	$description = $resultData['description'];
	
	$time = $resultData['time'];
	
	$price = $resultData['price'];

    $category = $resultData['category'];

    $duration = $resultData['duration'];

	
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
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
             
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
    
    <!--<form class="movie-form" action="/submit-movie" method="POST" enctype="multipart/form-data"> -->
    <form action="" method="post" enctype="multipart/form-data">
        <h2> Update Movie Details</h2>
        <div class="form-group">
            <label for="image">Movie Image:</label>
            <input type="file" id="image" name="image" accept="image/*" 
            autocomplete="off" 
            value="<?php  echo $image; ?>" required />
        </div>
        <div class="form-group">
            <label for="name">Movie Name:</label>
            <input type="text" id="name" name="name" 
            autocomplete="off" 
            value="<?php  echo $name; ?>"  required />
        </div>
        <div class="form-group">
            <label for="description">Movie Description:</label>
            <textarea id="description" name="description" rows="4"
            autocomplete="off" 
            value="<?php  echo $description; ?>" required></textarea>
        </div>
        <div class="form-group">
            <label for="time">Show Time:</label>
            <input type="datetime-local" id="time" name="time" 
            autocomplete="off" 
            value="<?php  echo $time; ?>" required/>
        </div>
        <div class="form-group">
            <label for="price">Ticket Price:</label>
            <input type="number" id="price" name="price" step="0.01" 
            autocomplete="off" 
            value="<?php  echo $price; ?>" required />
        </div>
        <div class="form-group">
              <label for="category">Product Category</label>
              <input type="text"id="category"
              autocomplete="off"
              required="required" name="category" value="<?php echo $category; ?>">
       </div>

     
      
        <button type="submit" class="button1" value="updaye" name="movie_update">Update Movie</button>
    </form>
</div>


<?php
// Include the database connection file



if (isset($_POST['product_update'])) 
{

	// Escape special characters in a string for use in an SQL statement

  $id = $_POST['id'];
	$image= $_POST['image'];

	$name =$_POST['name'];

	$description = $_POST['description'];
	
	$time = $_POST['time'];
	
	$price= $_POST['price'];
	
	$sql = "UPDATE add_product SET  `image` = '$image',  `name` = '$name', 
	`description` = '$description',`time` = '$time',
	`price` = '$price', `category` = '$category', `duration`='$duration',  WHERE `id` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="manage-movie.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="update-movie.php"; ;
            </script>';
        }
}

?>






</div>



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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>
</html>