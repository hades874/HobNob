<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINE AWESOME -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <!-- Other meta tags, links, and styles -->

    <style>
        /* Additional custom styles if needed */
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


    <main>
        <section class="container mt-5">
            <h1 class="text-center">Contact Us</h1>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="phone" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <?php
      include'footer.php';

    ?>

    <!-- Bootstrap JS scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Other scripts if needed -->
</body>
</html>
