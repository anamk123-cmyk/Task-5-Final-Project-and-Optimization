<?php
$conn = new mysqli('localhost', 'root', '', 'gym_db');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}

$sql = "SELECT * FROM timeslots";
$result = $conn->query($sql);

$output = '';
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $output .= '<div class="timeslot-item">' . $row['timeslot'] . ' - ' . $row['classtype'] . '</div>';
    }
} else {
    $output = 'No Time Slots Available';
}

echo $output;

$conn->close();
?>
