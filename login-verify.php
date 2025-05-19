<?php
include 'server.php';

session_start();

$data = [];

if(isset($_POST['email'])) {

   $name = $_POST['email'];
   $pass = $_POST['password'];

   if (!empty($name) && !empty($pass) && !is_numeric($name)) {
       $query = "SELECT * FROM admin WHERE email='$name' limit 1";
          
      $result = mysqli_query($conn,$query);

      if ($result){

         if ($result && mysqli_num_rows($result) > 0) {
               
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $pass) {
                  
                $_SESSION['admin_id'] = $user_data['id'];
                $_SESSION['admin_email'] = $user_data['email'];
                $_SESSION['admin_name'] = $user_data['name'];
                  
                $data['rank'] = 1;
            }else {
                $data['rank'] = "Password Is Wrong";
            }
         }else {
            $data['rank'] = "User ID not Verified";
         }
      }
   }else {
      $data['rank'] = "All Field is Required";
   }
   
   echo json_encode($data);
}
?>