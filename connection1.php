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

//  $conn = new mysqli("localhost", "root", "Arun@1234", "staychat");

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Receive form data
// $fullname   = $_POST['fullname'];
// $email      = $_POST['email'];
// $hotel_name = $_POST['hotel_name'];

// Insert query
// $sql = "INSERT INTO trialnow (fullname, email, hotel_name)
//         VALUES ('$fullname', '$email', '$hotel_name')";

//  if ($conn->query($sql) === TRUE) {
    // echo "<h2>✔ Trial Started Successfully!</h2>";
    // echo"";
    // echo "<p>Thanks $fullname! We will contact you soon.</p>";
//      echo"";
// } else {
//     echo "Error: " . $conn->error;
// }

//  $conn->close();
?>
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit("Invalid Request");
}

$conn = new mysqli("localhost", "root", "Arun@1234", "staychat");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// POST se data lo
$fullname   = $_POST['fullname'];
$email      = $_POST['email'];
$hotel_name = $_POST['hotel_name'];

$sql = "INSERT INTO trialnow (fullname, email, hotel_name)
        VALUES ('$fullname', '$email', '$hotel_name')";

if ($conn->query($sql)) {
    // header("Location: thankyou.php");
    exit();
} else {
    echo "SQL Error: " . $conn->error;
}

$conn->close();
?>