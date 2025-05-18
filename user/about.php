<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINE AWESOME -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

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

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2><b>What is Our Goal?</b></h2>
                <p>There are millions of websites created every day, also, there is much fake content spread on the internet.</p>
                <p>So, Our main goal is to provide you with 100% Original and Safe content that provides you a great and better experience on the world wide web.</p>
                <p>We mainly focus on our service so and improving it regularly to provide a better user experience to all users.</p>
                <p>Basically, we focus on the E-Commerce niche so, our main priority is to search for new content and present it in front of you to learn something new. </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h3><b>What is our Service?</b></h3>
                <p>We are mainly focused on the E-Commerce category so, we provide E-Commerce related content if you are interested in the E-Commerce category then you can visit daily to get more latest information.</p>
                <p>Your one step solution to every household difficulties</p>
                <p>On our website HobNob you get can all E-Commerce related information also, we focus on many other categories and we hope you like also, the content of other categories that are maintained on our website. So, you can visit our website homepage to know all category details here you can visit our homepage Click here --><a href"hobnob.com">HobNob</a>.</p>
                <p>Also, we provide a Notification update service you can join by email and other Social Media Platforms, and all Links you can get on the Homepage visit now. <a href"hobnob.com">HobNob</a></p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h3><b>About HobNob</b></h3>
                <p>As you can see already we mention what is our goal and Service again we repeat that we mainly focus on E-Commerce Category to help people.</p>
                <p>This Website is Created By HobNob to help people because many people are still spending hours of time to get exact information so, this is the only motive to create <a href"hobnob.com">HobNob</a> to help people and provide them a better web experience.</p>
                <p>Now, the time is to know about the Admin Details of this website, so, now we have to go down to know about Admin details.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h3><b>Admin's Statement for HobNob</b></h3>
                <p>As per my point of view, there are many people who visit the internet to get some information but 90% of the time they get wrong information so, the first priority of our website HobNob is to provide 100% legit and accurate information to our users, Also, I hope my dream comes true one day, and our website will provide Original Content to provide a better user experience. So, From my Side thanks for visiting our website.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h3><b>Admin's Contact Information</b></h3>
                <p>Hi, this Hasan Farabi, Syeda Tanjuma Tasnim, in the above paragraph you know about the website properly and now I am going to provide my contact details.</p>
                <p>If you have any problem & suggestions for this website then you can contact me by using following contact details.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <p>"Thanks for visiting our About Us Page"</p>
            </div>
        </div>
    </div>

    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw6f3uW/m4FN7E0F4xV7J16OyOX6g3+5Cb3w8B+a5p10TIbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>

</html>