<?php
$conn = new mysqli('localhost', 'root', '', 'gym_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$timeslot = $_POST['timeslot'];
$classtype = $_POST['classtype'];

$sql = "INSERT INTO timeslots (timeslot, classtype) VALUES ('$timeslot', '$classtype')";

if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
