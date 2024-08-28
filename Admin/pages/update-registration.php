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

	$sql=  "SELECT * FROM user_registration WHERE id = $id";


 	$query= $con->query($sql);
	// Fetch the next row of a result set as an associative array

	$resultData = $query->fetch_assoc();

    $user_name= $resultData['user_name'];

   $email= $resultData['email'];

   $password = $resultData['password'];
	
	$confirm_password = $resultData['confirm_password'];
	


	
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
        <h2> Update Registration Details</h2>
   
        <div class="form-group">
            <label for="user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" 
            autocomplete="off" 
            value="<?php  echo $user_name; ?>" required/>
        </div>
      
        <div class="form-group">
            <label for="email">Show Time:</label>
            <input type="text" id="email" name="email" 
            autocomplete="off" 
            value="<?php  echo $email; ?>" required/>
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" id="password" name="password" 
            autocomplete="off" 
            value="<?php  echo $password; ?>" required />
        </div>
        <div class="form-group">
              <label for="confirm_password">confirm_password</label>
              <input type="confirm_password"id="confirm_password"
              autocomplete="off"
              required="required" name="confirm_password" value="<?php echo $confirm_password; ?>">
       </div>

     
      
        <button type="submit" class="button1" value="update-reg" name="reg_update">Update Registration</button>
    </form>
</div>


<?php
// Include the database connection file



if (isset($_POST['update-reg'])) 
{

	// Escape special characters in a string for use in an SQL statement

  $id = $_POST['id'];
	

	$user_name=$_POST['user_name'];

	$email = $_POST['description'];
	
	$password = $_POST['password'];
	
	$confirm_password= $_POST['confirm_password'];
	
	$sql = "UPDATE add_product SET    `user_name` = '$user_name', 
	`email` = '$email',`password` = '$password',
	`confirm_password` = '$confirm_password'  WHERE `id` = $id";
		
if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Updated!!");
                    window.location="manage-registration.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Record Not Update");
            window.location="update-registration.php"; ;
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