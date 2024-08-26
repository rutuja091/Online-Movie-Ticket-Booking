<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get id from URL parameter
$id=$_GET['id'];

// Select data associated with this particular id
$sql = "SELECT * FROM user_registration WHERE id = $id";
$query = $con->query($sql);

// Fetch the next row of a result set as an associative array
$resultData = $query->fetch_assoc();

$user_name = $resultData['user_name'];
$email = $resultData['email'];
$password = $resultData['password'];
$confirm_password = $resultData['confirm_password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Registration</title>
    <link rel="stylesheet" href="./../css/registration.css">
    <link rel="stylesheet" href="./../css/addmovie.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="./admin-dashboard.php" style="margin-right:50px; font-size:30px;">Home</a></li>
                <div class="d-flex align-items-center">
                    <a href="./login.php" class="btn btn-outline-primary">
                        <i class="bi bi-person"></i><img src=".\\..\\..\\Images\\login.png" style="height:40px;">
                    </a>
                </div>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            <form class="registration-form" action="Update_registration.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <h2>Edit Registration</h2>
                <div class="form-group">
                    <label for="user_name" class="form-label">Username</label>
                    <input type="text" id="user_name" class="form-control" name="user_name" value="<?php echo $user_name; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password" value="<?php echo $password; ?>" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" id="confirm_password" class="form-control" name="confirm_password" value="<?php echo $confirm_password; ?>" required>
                </div>
                <div class="mt-4 pt-2">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="submit" value="Update" class="bg-info py-2 px-3 border-0" name="user_register">
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['user_register'])) {
            $id = $_POST['id'];
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            $sql = "UPDATE user_registration SET user_name = '$user_name', email = '$email', password = '$password', confirm_password = '$confirm_password' WHERE id = $id";

            if ($con->query($sql)) {
                echo '<script type="text/javascript">
                        alert("Record Updated!!");
                        window.location="manage-registration.php";
                      </script>';
            } else {
                echo '<script type="text/javascript">
                        alert("Record Not Updated");
                        window.location="update-registration.php?id=$id";
                      </script>';
            }
        }
        ?>
    </main>

    <!-- Footer -->
    <div class="footer">
        <div class="container" style="background-color:black;">
            <div class="row">
                <!-- Footer content here -->
            </div>
            <div class="text-center mt-4">
                <p>&copy;Copyright 2023 by Ovatheme.com</p>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
