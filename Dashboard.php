<?php
include 'server.php';
?>


<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Anam</title>
    
    <style>
        body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    /background: linear-gradient(to bottom right, #70c1ff, #498ffc);/
    background-image:url('Gym1.jpg');
    background-repeat:no-repeat;
      background-position:center;
        background-size: cover;
        background-repeat: no-repeat;
        width: 100vw;
        height: 90vh;
    display: flex;
  
    min-height: 100vh;
  }
  
  
  .card{
       background: #ffffffcc;
       
        border-radius: 10px;
      /background:transparent;/
  }
    </style>
  </head>
  <body>
  
  
  
  <div class="container" style="margin-top:100px;">
     
     <div class="card">
     <div class="card-header">
         <h4 class="text-center">Contact Details</h1>
     </div>
     
     <div class="card-body">
      <table class="table table-bordered" id="example">
  <thead>
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">User</th>
      <th scope="col">Email</th>
      <th scope="col">what's on your mind</th>
    </tr>
  </thead>
  <tbody>
      
      
     <?php
                                    $result = mysqli_query($conn,"SELECT * FROM createcontact");
                                    $i=1;
                                    while($row = mysqli_fetch_array($result)) {
                            ?>
                             <tr id="rowname<?php echo $row["id"]; ?>">

                                <td><?php echo $i; ?></td>
                            
                                <td><?php echo $row['user']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                               
                                <td><?php echo $row['des']; ?></td>
                               
                             
                                      
                                    
                            </tr>

                            <?php
                            $i++;
                            }
                            ?>

   
  </tbody>
</table>
</div>
</div>

  </div>

    
    
    
    
    
     <!--<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>-->
     <!--   <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>-->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    
    $('#example').dataTable({
                // 'iDisplayLength': 10;
            })
</script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>