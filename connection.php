<?php 
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>StayChat - Hotel Website</title>
<style>
/* Basic Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background: #f0f4f8;
}

/* Navbar will stay at the top by default */
nav {
    width: 100%;
}

/* Main content container */
.main-content {
    display: flex;
    flex-direction: column;
    justify-content: center; 
    align-items: center;    
    min-height: calc(100vh - 60px); 
    text-align: center;
    padding: 20px;
}


h1:first-of-type {
    font-size: 3rem;
    font-weight: 700;
    color: #2a7bff;
    margin-bottom: 0.5em;
}


h1:last-of-type {
    font-size: 1.5rem;
    font-weight: 500;
    color: #ffffff;
}
</style>
</head>
<body background-color: #0d0d0d>
<div class="main-content">
    <h1>Thank you!</h1>
    <h1>You're all set to experience the Staychat AI Demo</h1>
</div>



<?php 
include "Footer.php";
?>
</body>
</html>

<?php
// Database connection
$conn = new mysqli("localhost", "root", "Arun@1234", "staychat");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Getting form values
$first_name     = $_GET['first_name'];
$last_name      = $_GET['last_name'];
$email          = $_GET['email'];
$property_name  = $_GET['property_name'];
$pms            = $_GET['pms'];
$message        = $_GET['message'];
$guest_email    = $_GET['guest_email'];

// Insert Query
$sql = "INSERT INTO staychat 
        (first_name, last_name, email, property_name, pms, message, guest_email)
        VALUES 
        ('$first_name', '$last_name', '$email', '$property_name', '$pms', '$message', '$guest_email')";

if ($conn->query($sql) === TRUE) {
    // echo "<h2>✔ Booking Request Submitted Successfully!</h2>";
     echo"";
    // echo "<p>Thank you, $first_name. We will contact you soon.</p>";
     echo"";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>



