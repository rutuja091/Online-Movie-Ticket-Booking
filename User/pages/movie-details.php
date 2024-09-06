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

// Ensure ID is passed and is a valid integer
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid or missing movie ID.";
    exit();
}

$id = intval($_GET['id']);

// Fetch data associated with this particular ID using a prepared statement
$stmt = $con->prepare("SELECT * FROM movies WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$query = $stmt->get_result();

if ($query->num_rows > 0) {
    $resultData = $query->fetch_assoc();
    $image = $resultData['image'];
    $name = $resultData['name'];
    $description = $resultData['description'];
    $time = $resultData['time'];
    $price = $resultData['price'];
} else {
    echo "No movie found with ID: $id";
    exit();
}

$stmt->close();
$con->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/movie-details.css">
   
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


<!-- Navbar and other content remain unchanged -->

<!-- Main Content -->

<main>
    <div class="containers">
        <div class="movie-image">
            <img src="./../../Images/movies/<?php echo htmlspecialchars($image); ?>" alt="Movie Image">
        </div>
        <div class="movie-details">
            <h1 id="name"><?php echo htmlspecialchars($name); ?></h1>
            <p>Rating: ⭐⭐⭐⭐☆</p>
            <p id="description"><?php echo htmlspecialchars($description); ?></p>
            <div class="ticket-quantity">
                <button type="button" onclick="decrement()">-</button>
                <input type="text" id="quantity" value="1" readonly>
                <button type="button" onclick="increment()">+</button>
            </div>
            <p style="color: red;">Price: ₹<?php echo htmlspecialchars($price); ?> per ticket</p>
            <p>Total Price: ₹<span id="total_price"><?php echo htmlspecialchars($price); ?></span></p>

            <form action="" method="POST">
                <input type="hidden" name="movie_id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <input type="hidden" name="image" value="./../../Images/movies/<?php echo htmlspecialchars($image); ?>">
                <input type="hidden" name="quantity" id="form_quantity" value="1">
                <input type="hidden" name="total_price" id="form_total_price" value="<?php echo htmlspecialchars($price); ?>">
                <input type="submit" name="submit" value="Book Ticket" class="buy-button">
            </form>
        </div>
    </div>

    <script>
        let quantity = 1;
        const pricePerTicket = <?php echo $price; ?>;

        function increment() {
            quantity++;
            document.getElementById('quantity').value = quantity;
            document.getElementById('form_quantity').value = quantity;
            updatePrice();
        }

        function decrement() {
            if (quantity > 1) {
                quantity--;
                document.getElementById('quantity').value = quantity;
                document.getElementById('form_quantity').value = quantity;
                updatePrice();
            }
        }

        function updatePrice() {
            const totalPrice = quantity * pricePerTicket;
            document.getElementById('total_price').textContent = totalPrice;
            document.getElementById('form_total_price').value = totalPrice;
        }
    </script>
</main>





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

if (isset($_POST['submit'])) {
    // Check the current number of records in the 'ticket' table
    $result = $con->query("SELECT COUNT(*) as count FROM ticket");
    $row = $result->fetch_assoc();
    
    if ($row['count'] < 10) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $quantity = $_POST['quantity'];
        $total_price = $_POST['total_price'];

        // Prepare and bind
        $stmt = $con->prepare("INSERT INTO ticket (`name`, `image`, `quantity`, `total_price`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $name, $image, $quantity, $total_price);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
                  alert("Ticket booked successfully!");
                  window.location.href = "booked-ticket.php";
                  </script>';
        } else {
            echo '<script type="text/javascript">
                  alert("Error booking ticket: ' . $stmt->error . '");
                  </script>';
        }

        // Close the statement
        $stmt->close();
    } else {
        echo '<script type="text/javascript">
              alert("Booking limit reached. Only 10 tickets can be booked.");
              </script>';
    }
}

// Close the database connection
$con->close();
?>
