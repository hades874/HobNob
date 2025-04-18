<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow border border-dark">
                <p class="text-secondary text-center fs-3 fw-bold my-3">User Register</p>
                <form action="insert.php" method="post">
                    <div class="mb-3">
                        <label for="">Username:</label>
                        <input type="text" name="name" placeholder="Enter Your Username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">E-Mail:</label>
                        <input type="email" name="email" placeholder="Enter Your E-Mail" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Phone Number:</label>
                        <input type="number" name="number" placeholder="Enter Your Phone Number" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                    </div>

                    <div class="mb-3 text-center">
                        <button name="submit" class="w-50 bg-success fs-5 fw-bold text-white">REGISTER</button>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="w-100 bg-primary fs-5 fw-bold text-white"><a href="login.php" class="text-white text-decoration-none">Already Have an Account?</a></button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>