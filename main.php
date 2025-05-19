<?php
include 'server.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');
body {
    font-family: 'Poppins', sans-serif;
 
    background-image:url('Gym1.jpg');
    background-repeat:no-repeat;
      background-position:center;
        background-size: cover;
        background-repeat: no-repeat;
      
   
     
        width: 100vw;
        height: 90vh;
 
  }
  
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
  }
  
  .card {
    width: 350px;
    background-color: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }
  
  h2 {
    color: black;
    text-align: center;
    margin-bottom: 20px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    color:black;
    margin-bottom: 5px;
  }
  
  input {
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8);
  }
  
  button {
    padding: 10px;
    background-color: #fff;
    color: #498ffc;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #70c1ff;
  }
  
  @media (max-width: 480px) {
    .card {
      width: 100%;
      max-width: 350px;
    }
  }
  
        </style>
    </head>
    <body>
        <div class="container">
  <div class="card">
    <h2>Login Form</h2>
    <form>
      <label for="username">Email</label>
      <input type="text" id="email" name="email" placeholder="Enter your email" autocomplete="off">

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off">

      <button type="submit"  onclick="login()" name="submit">Login</button>
    </form>
  </div>
</div>

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<script>
    
     function login(){
            var email = $("#email").val().trim();
            var password = $("#password").val().trim();
            
            if(email=="" || password==""){
                return false;
            }
            
            $.ajax({
                url: 'login-verify.php',
                method: 'get',
                dataType: 'json',
                data: {
                    email:email,
                    password:password
                },
                success: function(data){
                    if(data.rank==1){
                        window.location="Dashboard.php";
                        
                        
                    }else{
                        Swal.fire({
                          position: 'center',
                          icon: 'warning',
                          title: data.rank,
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                    
                }
            });
        }
        
        $(document).on('keypress', function(event) {
          let keycode = (event.keyCode ? event.keyCode : event.which);
          if(keycode == '13') {
            var email = $("#email").val().trim();
            var password = $("#password").val().trim();
            
            if(email=="" || password==""){
                return false;
            }
            
            $.ajax({
                url: 'login-verify.php',
                method: 'post',
                dataType: 'json',
                data: {
                    email:email,
                    password:password
                },
                success: function(data){
                    if(data.rank==1){
                        window.location="Dashboard.php";
                    }else{
                        Swal.fire({
                          position: 'center',
                          icon: 'warning',
                          title: data.rank,
                          showConfirmButton: false,
                          timer: 1500
                        })
                    }
                    
                }
            });
          }
        });
</script>



    </body>
</html>