<?php
require_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blod_doner Registration</title>
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
                    <div class="card-header text-center bg-info text-white">
                        <h2> BLood Doner Registration</h2>
                    </div>
                    <div class="card-body">

                        <!-- data insert -->
                      <?php 
                     if(isset($_POST['registration'])){
                     $doner_name = $_POST['doner_name'];
                     $doner_father_name = $_POST['doner_father_name'];
                     $doner_address = $_POST['doner_address'];
                     $doner_email = $_POST['doner_email'];
                     $password = $_POST['password'];
                     $doner_phone = $_POST['doner_phone'];
                     $bg_group = $_POST['bg_group'];
                     $doner_status = 0;
                   
                     $select_sql = " SELECT *  FROM `blood_doner`  WHERE `email` = '$doner_email' ";
                     $get_row = mysqli_query($con, $select_sql);
                     $row_number = mysqli_num_rows($get_row);

                     if ($row_number > 0) {  ?>

                       <div class="alert alert-primary alert-dismissible fade show" role="alert">
                         <?= "Duplicate data can't insert"; ?>
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   
                         </button>
                       </div>

                   
                          <?php } else {
                      $insert_sql = "INSERT INTO `blood_doner`(`name`, `father_name`, `address`, `email`, `password`, `phone`, `blood_group`, `status`) VALUES
                      ('$doner_name','$doner_father_name','$doner_address','$doner_email','$password','$doner_phone','$bg_group', '$doner_status')";    
                         $result = mysqli_query($con, $insert_sql);
                          if ($result) { ?>
                             <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= " Data Inserted Successfully"; ?>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           
                           </button>
                          </div>
           
                         <?php
                         }
                        }
                    }
                        ?>

                        <!-- form    -->
                        <form action="" method="post">


                             
                            <div class="row">

                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="name" class="form-label">Doner name:</label>
                                    <input type="text" name="doner_name" id="name" class="form-control" placeholder="Enter  Name" autocomplete="off" required>
                                </div>

                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="father_name" class="form-label">Father name:</label>
                                    <input type="text" name="doner_father_name" id="afather_name" class="form-control" placeholder="Enter father Name" autocomplete="off" required>
                                </div>

                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="doner_address" class="form-label">Doner address:</label>
                                    <input type="text" name="doner_address" id="adoner_address" class="form-control" placeholder="Enter address" autocomplete="off" required>
                                </div>

                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="doner_" class="form-label">Doner Email:</label>
                                    <input type="email" name="doner_email" id="doner_" class="form-control" placeholder="Enter email" autocomplete="off" required>
                                </div>


                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Enter Password" autocomplete="off" required>
                                </div>



                                <div class="from-group mb-3 col-md-6 ">
                                    <label for="doner_phone" class="form-label">Doner Phone:</label>
                                    <input type="text" name="doner_phone" id="doner_phone" class="form-control" placeholder="Enter phone number" autocomplete="off" required>
                                </div>
                                <div class="from-group mb-3">
                                    <label for="bg_group">Select Blood Group:</label>
                                    <select name="bg_group" class="form-control" >
                                        <option value="">Select Blood group</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                                 <button  class="btn btn-success w-50 mx-auto" name="registration"> Registration </button>
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