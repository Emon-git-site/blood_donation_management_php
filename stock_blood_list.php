<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stock bllod list</title>
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
                            <h5 class="text-center">Admin Home</h5>
                        </div>
                        <div class="card-body">
                          stock blood list
                        
                          <table class="table table-bordered">
                            <thead>
                                <th>Blood group</th>
                                <th>Quantity</th>
                               
                            </thead>

                            <?php
                            global $ap, $an, $bp, $bn, $op, $on, $abp, $abn;
                            $ap = 0;
                            $an = 0;
                            $bp = 0;
                            $bn = 0;
                            $op = 0;
                            $on = 0;
                            $abp = 0;
                            $abn = 0;
                            
                            $select_query = "SELECT * FROM `blood_doner`" ;
                            $result_query = mysqli_query($con, $select_query);
                            if(mysqli_num_rows($result_query) > 0){
                                while($row = mysqli_fetch_assoc($result_query)){
                                 $blood_group = $row['blood_group'];

                                 switch ($blood_group) {
                                   case "A+":
                                    $ap++;
                                     break;
                                   
                                   case "A-":
                                    $an++;
                                     break;
                                   
                                   case "B+":
                                    $bp++;
                                     break;
                                   
                                   case "B-":
                                    $bn++;
                                     break;
                                   
                                   case "O+":
                                    $op++;
                                     break;
                                   
                                   case "O-":
                                    $on++;
                                     break;
                                   
                                   case "AB+":
                                    $abp++;
                                     break;
                                   
                                   case "AB-":
                                    $abn++;
                                     break;
                                   
                                 
                                 }
                               }
                            echo " <tbody>
                                  <tr>
                                      <td>A+</td>
                                      <td>$ap</td>
                                  </tr>
                                  <tr>
                                      <td>A-</td>
                                      <td>$an</td>
                                  </tr>
                                  <tr>
                                      <td>B+</td>
                                      <td>$bp</td>
                                  </tr>
                                  <tr>
                                      <td>B-</td>
                                      <td>$bn</td>
                                  </tr>
                                  <tr>
                                      <td>O+</td>
                                      <td>$op</td>
                                  </tr>
                                  <tr>
                                      <td>O-</td>
                                      <td>$on</td>
                                  </tr>
                                  <tr>
                                      <td>AB+</td>
                                      <td>$abp</td>
                                  </tr>
                                  <tr>
                                      <td>AB-</td>
                                      <td>$abn</td>
                                  </tr>
                              </tbody> ";
                              
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