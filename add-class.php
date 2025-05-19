<?php
$conn = new mysqli('localhost', 'root', '', 'gym_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$classname = $_POST['classname'];
$trainername = $_POST['trainername'];
$classtime = $_POST['classtime'];

$sql = "INSERT INTO classes (classname, trainername, classtime) VALUES ('$classname', '$trainername', '$classtime')";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
