<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINE AWESOME -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding: 10px;
        }

        .navbar-brand img {
            max-width: 125px;
            height: auto;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 0.5rem;
        }

        .bg-info ul {
            list-style: none;
            display: flex;
            justify-content: space-around;
            padding: 7px 0;
            margin: center;
        }

        .bg-info ul li a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $count= 0;
    if(isset($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
    }
    ?>

    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">

            <a class="navbar-brand pb-2"><img src="logo.png" alt=""width="125" height="30"></a>


            <div class="d-flex">

                <a href="index.php" class="text-white text-decoration-none pe-2"><i class="las la-home"></i>Home</a>

                <a href="viewcart.php" class="text-white text-decoration-none pe-2"><i class="las la-shopping-cart"></i>Cart (<?php echo $count?>) |</a>

                <span class="text-white pe-2">
                    <i class="lar la-user"></i>Hello,


                    <?php
                    
                    if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                    echo " | <a href='form/logout.php' class='text-white text-decoration-none pe-2'><i class='las la-sign-in-alt'></i>Logout</a> |
                    ";
                    }
                    else{
                        echo "| <a href='form/login.php' class='text-white text-decoration-none pe-2'><i class='las la-sign-in-alt'></i>Login</a> |
                        ";    
                    }


                    ?>

                    <a href="../admin/hobnob.php" class="text-white text-decoration-none pe-2">Admin</a>
                </span>
            </div>
        </div>
    </nav>

    <div class="bg-info">
        <ul class="list-unstyled">
            <li>
                <a href="fashion.php" class="text-decoration-none text-white fw-bold fs-5">FASHION</a>
            </li>
            <li>
                <a href="electronics.php" class="text-decoration-none text-white fw-bold fs-5">ELECTRONICS</a>
            </li>
            <li>
                <a href="home.php" class="text-decoration-none text-white fw-bold fs-5">HOME</a>
            </li>
            <li>
                <a href="stationery.php" class="text-decoration-none text-white fw-bold fs-5">STATIONERY</a>
            </li>
        </ul>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>