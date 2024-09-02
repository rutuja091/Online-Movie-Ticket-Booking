<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch data in descending order (latest entry first)
$sql = "SELECT * FROM movies ORDER BY id DESC";
$query = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/addmovie.css">
    <link rel="stylesheet" href="./../css/manage-movie.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
        <ul>
            <li><a href="./admin-dashboard.php" style="margin-right:50px; font-size:30px;">Home</a></li>
            <div class="d-flex align-items-center">
                <a href="./login.php" class="btn btn-outline-primary">
                    <img src=".\..\..\Images\login.png" style="height:40px;"> 
                </a>
            </div>
        </ul>
        </nav>
    </header>

    <div class="containers">
        <h2>Manage Movie Details</h2>
        <div class="header-btn">
            <a href="./report-movie.php"><button >View Report</button></a>
         </div>
        <table class="movie-table">
            <thead>
                <tr>
                    <th>Movie Picture</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Ticket Price</th>
                    <th>Show Time</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through query result and populate table
                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><img src='./../../Images/Movies/" . $row['image'] . "' alt='Movie Image' style='width:100px; height:100px;'></td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td><a href='update_movie.php?id=" . $row['id'] . "'>Edit</a> | ";
                        echo "<a href='delete-movie.php?id=" . $row['id'] . "' onClick=\"return confirm('Are you sure, you want to delete?')\">Delete</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No movies found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container" style="background-color:black;">
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
                    
                    <p>Subscribe to STARLIGHT CINEMA.</p>
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
                <p>&copy; Copyright 2024 by starlightcinema.com &nbsp; &nbsp; &nbsp; &nbsp; Developed By Gaikwad Rutuja & Nimse Nikita</p>
            </div>
        </div>
    </div>

    <!-- Font Awesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>