<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINE AWESOME -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <style>
        body {
            background-image: url('cart_bg.png');
            background-size: 1600px 800px;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            /* This property removes the spacing between table cells */
            border: none;
            /* This property removes the border from the table */
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php
    session_start();
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">

            <a class="navbar-brand pb-2"><img src="logo.png" alt="" width="125" height="30"></a>


            <div class="d-flex">

                <a href="index.php" class="text-white text-decoration-none pe-2"><i class="las la-home"></i>Home</a>

                <a href="viewcart.php" class="text-white text-decoration-none pe-2"><i class="las la-shopping-cart"></i>Cart (<?php echo $count ?>) |</a>

                <span class="text-white pe-2">
                    <i class="lar la-user"></i>Hello,

                    <?php

                    if (isset($_SESSION['user'])) {
                        echo $_SESSION['user'];
                        echo " | <a href='form/logout.php' class='text-white text-decoration-none pe-2'><i class='las la-sign-in-alt'></i>Logout</a> |
                    ";
                    } else {
                        echo "| <a href='form/login.php' class='text-white text-decoration-none pe-2'><i class='las la-sign-in-alt'></i>Login</a> |
                        ";
                    }
                    ?>

                    <a href="../admin/hobnob.php" class="text-white text-decoration-none pe-2">Admin</a>
                </span>
            </div>
        </div>
    </nav>
    <!-- Header -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col-lg-12 text-center text-white mt-3 mb-5">
                    <h1 class="fw-bold text-decoration-underline">My Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-4 col-md-6 col-lg-9">
                <table class="table text-center bg-white">
                    <thead class="bg-secondary text-white fs-5">
                        <th>Serial No.</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th></th>
                    </thead>

                    <tbody>
                        <?php
                        $ptotal = 0;
                        $total = 0;
                        $i = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {

                                $ptotal = $value['productPrice'] * $value['productQuantity'];
                                $total += $value['productPrice'] * $value['productQuantity'];
                                $i = $key + 1;


                                echo "
                                        <form action = 'insertcart.php' method = 'POST'>
                                        <tr>
                                        <td>$i</td>
                                        <td><input type = 'hidden' name='PName' value= '$value[productName]'>$value[productName]</td>
                                        <td><input type = 'hidden' name='PPrice' value= '$value[productPrice]'>$value[productPrice]</td>
                                        <td><input type = '' name='PQuantity' value= '$value[productQuantity]'></td>
                                        <td>$ptotal</td>
                                        <td> <button name='update' class='btn btn-success' style='background-color: green;'> Update </button> </td>
                                        <td> <button name='remove' class='btn btn-danger' style='background-color: red;'> Delete </button> </td>
                                        <td><input type = 'hidden' name = 'item' value='$value[productName]'</td>
                                        </tr>
                                        </form>
                                        ";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>


        </div>
        <br></br>

    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-4">
                <div class="justify-content-center mb-4">
                    <h2 class="bg-primary text-white text-center fw-bold text-decoration-none fs-3">Total: <?php echo number_format($total, 2) ?> Taka</h2>
                </div>

                <div class="d-flex mt-4 justify-content-center">
                    <form action="checkout.php" method="POST" onsubmit="return confirm('Order successful. Thank you for your purchase!');">
                        <button type="submit" name="checkout" class="btn btn-success">Check-Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>