<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
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
                            <table class="table table-bordered text-center p-3 m-3 ">
                                <tr >
                                    <td class=" bg-danger"><a href="doner_list.php">doner List</a></td>
                                    <td class="bg-warning"><a href="stock_blood_list.php">Stock Blood List</a></td>
                                </tr>
                                <tr>
                                    <td class="bg-warning"><a href="out_stock_bloodlist.php">Out Stock Blood list</a></td>
                                    <td class="bg-danger"><a href="exchange_blood_list.php">Exchange List</a></td>
                                </tr>
                               
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