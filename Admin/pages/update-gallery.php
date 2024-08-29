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
$sql = "SELECT * FROM gallery WHERE id = $id";
$query = $con->query($sql);
$resultData = $query->fetch_assoc();

$image = $resultData['image'];
$name = $resultData['name'];

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
        <form action="" method="post" enctype="multipart/form-data">
            <h2>Update Gallery Details</h2>

            <div class="form-group">
                <label for="image">Movie Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
                <img src="<?php echo './uploads/' . $image; ?>" alt="Movie Image" height="100">
            </div>
            <div class="form-group">
                <label for="name">Movie Name:</label>
                <input type="text" id="name" name="name" autocomplete="off" value="<?php echo $name; ?>" required>
            </div>
          
         

            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" class="button1" value="Update" name="gallery_update">
        </form>
    </div>

<?php
if (isset($_POST['gallery_update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
 

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
    $sql = "UPDATE gallery SET image = '$image', name = '$name' WHERE id = $id";

    if ($con->query($sql)) {
        echo '<script type="text/javascript">
                alert("Record Updated!");
                window.location="manage-gallery.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("Record Not Updated!");
                window.location="update-gallery.php";
              </script>';
    }
}
?>
</body>
</html>