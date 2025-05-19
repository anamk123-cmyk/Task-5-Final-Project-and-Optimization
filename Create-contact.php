
<?php include 'server.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['des'])) {

        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $des = mysqli_real_escape_string($conn, $_POST['des']);
      

        
        $id_query = mysqli_query($conn, "SELECT `id` FROM `createcontact` ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_assoc($id_query);
        $i = $row ? $row['id'] + 1 : 1;
        $unique_id = "contact_id" . $i;

     
        $sql = "INSERT INTO `createcontact`(`unique_id`, `user`, `email`,`des`) 
                VALUES ('$unique_id', '$user', '$email', '$des')";

        if (mysqli_query($conn, $sql)) {
            echo 1;
            exit();
        } else {
            echo 'Network error: ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo 'All fields are required!';
    }
}

?>