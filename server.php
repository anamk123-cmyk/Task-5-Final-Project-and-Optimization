<?php
$servername = "localhost";
$username   = "u678856498_anam";
$password   = "Brainz1@123";
$db_name    = "u678856498_anam";
$port       = 8000; // Specify the port number if MySQL is running on a different port

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: you can also echo a success message to confirm the connection
echo "Connected successfully";

$con = $conn;
?>
