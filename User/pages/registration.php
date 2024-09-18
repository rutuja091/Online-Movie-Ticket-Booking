 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/registration.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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



    <div class="carousel-item active" style="background-image:url('./../../Images/User-images/login-bg.jpg');">
    <div class="containers2">
        <form class="registration-form" action="" method="post" enctype="multipart/form-data" onsubmit="return.validate()">
            <h2>Register</h2>
            <div class="form-group">
            <label for="user_name" class="form-label">Username</label>
                    <input type="text"id="user_name" class="form-control" 
                    placeholder="enter your user name" style="color:black"autocomplete="off" required="required"
                    name="user_name">
            </div>
            <div class="form-group">
            <label for="email" class="form-label">Email</label>
                    <input type="email"id="email"  style="color:black"class="form-control" 
                    placeholder="enter your user email" autocomplete="off"
                     required="required" name="email">
            </div>
          
            <div class="form-group">
            <label for="password" class="form-label">Enter Your password</label>
                    <input type="password"id="password"  style="color:black"class="form-control" 
                    placeholder="enter your user password" autocomplete="off"
                     required="required" name="password">
            </div>
            <div class="form-group">
            <input type="password"id="confirm_password" class="form-control" 
                    placeholder=" confirm_password" style="color:black" autocomplete="off"
                     required="required" name="confirm_password" onkeyup="check(this)">
                     <error id="alert" class="text-danger"></error>
            </div>
            <button type="submit" type="submit"  name="user_registration">Register</button>
           <!-- <h6 style="color: #f3f1f1; margin-top:10px;">if you apready have an account? </h6><a href="./login.php"> login </a> -->

           <h6 style="color: #f3f1f1; margin-top: 20px; display: inline;">
             if you already have an account? &nbsp;
           </h6>
          <a href="./login.php" style="color: white; text-decoration: none; display: inline; margin-left: 5px;">
            login
            </a>
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

include("dbcon.php");

if (isset($_POST['user_registration'])) {
	
	$user_name =  $_POST['user_name'];
  $email =  $_POST['email'];
  $password =  $_POST['password'];
	$confirm_password =  $_POST['confirm_password'];

  /* New code

  $duplicate=mysqli_query($con,"select * from user_register where user_username='$user_username'or user_email='$user_email'");
  if(mysquli_num_rows( $duplicate>0)){
 echo"<script>alert('Username and email already taken')</script>";
  }
  else{
    if( $user_password ==$conf_user_password ){
      $sql="imsert into user_register values('','$user_username','$user_email','$user_password','$conf_user_password','$user_address','$user_contact')";
      mysqli_query($con,$sql);
      echo"<script>alert('Registration Successful');</script>";
    }
    else{
      echo"<script>alert('Password does not match');</script>";
    }
  }*/
         
		$sql= "INSERT INTO user_registration (`user_name`,`email`, `password`, `confirm_password`)VALUES ('$user_name','$email', '$password', '$confirm_password')";
		
         if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Registration Successfully Complete..👍");
                    window.location="login.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("Registration Unsuccessful...!");
            window.location="registration.php";
            </script>';
        }
}



?>

