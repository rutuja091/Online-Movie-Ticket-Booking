<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/addmovie.css">
    <link rel="stylesheet" href="./../css/manage-feedback.css">
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



      
    <div class="containers">
        <h2> Manage Payment Details</h2>
        <div class="header-btn">
            <a href="./report-payment.php"><button >View Report</button></a>
         </div>
        <table class="movie-table">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>mobile no</th>
                    <th>product Name</th>
                    <th>card no </th>
                    <th>total price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td>1</td>
                    <td>name</td>
                    <td>abc@gmail.com</td>
                    <td>1234567890</td>
                    <td>ticket</td>
                    <td>1234</td>
                    <td>500</td>
                    <td>
                    <img src=".\..\..\Images\admin-images\edit2.png" alt="Movie 1" class="icon" style="height:40px;">
                    <img src=".\..\..\Images\admin-images\delete.png" alt="Movie 1" class="icon" style="height:40px;">
                    </td>
                </tr>
                <tr>
                    
                    <td>2</td>
                    <td>jon</td>
                    <td>jon@gmail.com</td>
                    <td>1265456780</td>
                    <td>ticket</td>
                    <td>1240</td>
                    <td>300</td>
                    <td>
                    <img src=".\..\..\Images\admin-images\edit2.png" alt="Movie 1" class="icon" style="height:40px;">
                    <img src=".\..\..\Images\admin-images\delete.png" alt="Movie 1" class="icon" style="height:40px;">
                    </td>
                </tr>
                <tr>
                    
                    <td>3</td>
                    <td>jerry</td>
                    <td>abc@gmail.com</td>
                    <td>1289567890</td>
                    <td>ticket</td>
                    <td>1204</td>
                    <td>200</td>
                    <td>
                    <img src=".\..\..\Images\admin-images\edit2.png" alt="Movie 1" class="icon" style="height:40px;">
                    <img src=".\..\..\Images\admin-images\delete.png" alt="Movie 1" class="icon" style="height:40px;">
                    </td>
                </tr>
                <!-- Repeat <tr> for more rows -->
            </tbody>
        </table>
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