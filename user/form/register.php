<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-image: url('reg_bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .bg-transparent {
            background-color: transparent !important;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="col-md-6 m-auto mt-5 bg-white p-4 rounded shadow" style="background-color: rgba(255, 255, 255, 0.8);">

            <p class="text-secondary text-center fs-5 fw-bold my-3">User Registration</p>
            <form action="insert.php" method="post">

                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" name="name" id="username" placeholder="Enter Your Username"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your E-Mail"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="number" id="phoneNumber" placeholder="Enter Your Phone Number"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password"
                        class="form-control">
                </div>

                <div class="mb-3 text-center">
                    <button name="submit" class="w-100 btn btn-success fs-5 fw-bold text-white">REGISTER</button>
                </div>

                <div class="mb-3 text-center">
                    <a href="login.php"
                        class="w-100 btn btn-primary fs-5 fw-bold text-white text-decoration-none">Already Have an Account?</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
