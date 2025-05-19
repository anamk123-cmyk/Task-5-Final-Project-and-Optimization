<?php
$conn = new mysqli('localhost', 'root', '', 'gym_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$sql = "SELECT * FROM classes";
$result = $conn->query($sql);

$output = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= '<div class="class-item">' . $row['classname'] . ' by ' . $row['trainername'] . ' at ' . $row['classtime'] . '</div>';
    }
} else {
    $output = 'No Classes Available';
}

echo $output;

$conn->close();
?>
