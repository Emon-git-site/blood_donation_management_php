<?php

require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doner list</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">

                    <div class="card ">
                        <div class="card-header">
                            <h2 class="text-center text-primary">Blood Bank Management</h2>
                            <h5 class="text-center">Doner list</h5>
                        </div>
                        <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <th>name</th>
                                <th>Father name</th>
                                <th>address</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>blood group</th>
                            </thead>
                            
                            <?php
                            $select_query = "SELECT * FROM `blood_doner`" ;
                            $result_query = mysqli_query($con, $select_query);
                            if(mysqli_num_rows($result_query) > 0){
                                while($row = mysqli_fetch_assoc($result_query)){
                                    
                                    $name = $row['name'];
                                    $father_name  = $row['father_name'];
                                    $address = $row['address'];
                                    $email = $row['email'];
                                    $phone = $row['phone'];
                                    $blood_group = $row['blood_group'];

                                    echo  
                                    "<tdody><tr>
                                    <td>$name</td>
                                    <td>$father_name</td>
                                    <td>$address</td>
                                    <td>$email</td>
                                    <td>$phone</td>
                                    <td>$blood_group</td>
                                    </tr></tdody>";

                                }
                            }


                          ?>
                        </table>
                          
                        </div>
                        <div class="card-footer text-center">
                            All right Reserved by Admin
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>

</html>