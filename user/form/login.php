<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-image: url('user_bg.jpg');
            background-size: 1600px 900px;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 750px;
            margin: 0;
        }
    </style>

</head>


<body>
    <div class="container">

        <div class="row">


            <div class="col-md-6 mt-5 m-auto bg-white" style="border-radius: 15px; background-color: rgba(255, 255, 255, 0.8); padding: 20px;">


                <p class="text-secondary text-center fs-2 fw-bold my-3">User Login</p>
                <form action="login1.php" method="post">

                    <div class="mb-3">
                        <label for="">Username:</label>
                        <input type="text" name="name" placeholder="Enter Your Username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                    </div>

                    <div class="mb-3 text-center">
                    <button class="w-50 btn btn-success fs-5 fw-bold text-white">LOGIN</button>
                </div>

                <div class="mb-3 text-center">
                    <a href="register.php" class="w-50 btn btn-primary fs-5 fw-bold text-white text-decoration-none">New User Registration</a>
                </div>

                </form>

            </div>

        </div>

    </div>


</body>

</html>