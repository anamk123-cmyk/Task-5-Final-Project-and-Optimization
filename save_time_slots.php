<?php
$timeSlot = $_POST['time_slot'];

if ($timeSlot) {
    $file = 'time_slots.json';
    $data = json_decode(file_get_contents($file), true);
    $data['time_slots'][] = $timeSlot;
    file_put_contents($file, json_encode($data));
    echo 'success';
} else {
    echo 'error';
}
?>
