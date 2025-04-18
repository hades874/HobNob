<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow bg-white p-3 m-auto border border-dark mt-5">

                <form action="login1.php" method="post">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Login</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name:</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" name="userpassword" class="form-control" placeholder="Enter Password">
                    </div>

                    <button class="bg-danger text-center fs-4 fw-bold my-3 form-control text-white">Login</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>