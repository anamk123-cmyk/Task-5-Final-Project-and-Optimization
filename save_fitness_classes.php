<?php
$className = $_POST['class_name'];
$classTime = $_POST['class_time'];

if ($className && $classTime) {
    $file = 'fitness_classes.json';
    $data = json_decode(file_get_contents($file), true);
    $data['classes'][] = ['name' => $className, 'time' => $classTime];
    file_put_contents($file, json_encode($data));
    echo 'success';
} else {
    echo 'error';
}
?>
