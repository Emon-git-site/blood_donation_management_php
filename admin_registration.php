<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- bootstrap css link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- css file -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 mx-auto">
        <div class="card ">
  <div class="card-header text-center">
    <h2>Admin Registration</h2>
  </div>
  <div class="card-body">
  <form action="" method="post"  >

  <!-- data insert -->
    <?php
    if(isset($_POST['registration'])){
        $admin_name = $_POST['admin_name'];
        $admin_email = $_POST['Admin_email'];
        $admin_phone = $_POST['admin_phone'];
        $admin_password = $_POST['admin_password'];
        $admin_status = 1;

        $select_sql = "SELECT * FROM `admin` WHERE `email`= '$admin_email'  " ;
        $get_row = mysqli_query($con, $select_sql);
        $row_number = mysqli_num_rows($get_row);

        if ($row_number > 0) {  ?>

            <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <?= "Duplicate data can't insert"; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        
    <?php } else {
    $insert_sql = "INSERT INTO `admin` (`name`, `email`, `phone`, `password`, `status`) VALUES ('$admin_name', '$admin_email', '$admin_phone', '$admin_password', '$admin_status')";
    $result = mysqli_query($con, $insert_sql);
    if ($result) { ?>
       <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <?= " Data Inserted Successfully"; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     
   <?php
   header('location: index.php');

    }
   }
  }

 ?>

    
    <!--  -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="user_name" class="form-label">Admin name:</label>
        <input type="text" name="admin_name" id="admin_name" class="form-control" placeholder="Enter  Name" autocomplete="off" required>
    </div>
   
    <!-- Admin Email -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="Admin_email" class="form-label">Admin Email:</label>
        <input type="email" name="Admin_email" id="Admin_email" class="form-control" placeholder="Enter email" autocomplete="off" required>
    </div>
    
    
    
    <!-- phone -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="admin_phone" class="form-label">Admin Phone:</label>
        <input type="text" name="admin_phone" id="admin_phone" class="form-control" placeholder="Enter phone number" autocomplete="off" required>
    </div>
    
    <!-- password -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="password" class="form-label">Admin password:</label>
        <input type="password" name="admin_password" id="password" class="form-control" placeholder="Enter Password" autocomplete="off" required>
    </div>

     <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="registration"  class="btn btn-info mb-3 px-3" value="Registration">
    </div>


   </form>
  </div>
 
</div>

        </div>
    </div>
</div>

 <!-- bootstrap js link -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>