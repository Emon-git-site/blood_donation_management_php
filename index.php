<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
<?php


if(isset($_POST['login'])){
     $email = $_POST['email'];
     $password = $_POST['password'];
     $select_admin_query = "SELECT * FROM `admin` WHERE `email`= '$email' AND `password`='$password' ";
     $select_doner_query = "SELECT * FROM  `blood_doner` WHERE `email`= '$email' AND `password`='$password' ";

     $get_admin = mysqli_query($con, $select_admin_query);
     $get_doner = mysqli_query($con, $select_doner_query);

     $row_admin = mysqli_num_rows($get_admin);
     $row_doner = mysqli_num_rows($get_doner);


     
    //    print_r($row_admin);
     if($row_admin > 0){
        $get_data = mysqli_fetch_assoc($get_admin);
            if($get_data['status'] == 1){
                header('location: admin_home.php');
            }
        
     }elseif($row_doner > 0){
        $get_data = mysqli_fetch_assoc($get_doner);
            if($get_data['status'] == 0){
                echo "<script> alert('donner login successful')</script>";

            }
        }else{
            echo "<script> alert('email or password not matched')</script>";


        } 

    }
   ?>
   
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 mx-auto">

                <div class="card ">
                    <div class="card-header">
                        <h2 class="text-center text-primary">Blood Bank Management</h2>
                        <h5 class="text-center">Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group my-4">
                                <label for="exampleInputEmail1">Email address:</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group my-4">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <input type="submit" class="btn btn-primary mt-4" name="login" value="submit">  <br>
                            <div class="text-center my-4">
                                Not Registered ? sign in as a
                            </div>
                            <div class="text-center text-info">
                                <b><a href="admin_registration.php">Admin</a></b> or <b><a href="bd_registration.php">Blood Doner</a></b>or <b><a href="exchange_blood_reg.php">Exchange Blood</a></b>
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