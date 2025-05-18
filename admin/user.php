<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- LINE AWESOME -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        body {
            background-image: url('admin_bg.jpg');
            background-size: 1600px 900px;
            /* background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center; */
            height: 100vh;
            margin: 0;
        }
    </style>

    <?php
    session_start();
    if (!$_SESSION['admin']) {
        header("location: form/login.php");
    }
    ?>

</head>

<body>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'hobnob');
    $Record = mysqli_query($con, "SELECT * FROM `tbluser`");
    $row_count = mysqli_num_rows($Record);
    ?>

    <!-- header -->
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="hobnob.php">
                <h1>HobNob</h1>
            </a>
            <span>
                <i class="fas fa-users-cog"></i>
                Welcome, <?php echo $_SESSION['admin']; ?> |
                <i class="fas fa-sign-out-alt"></i>
                <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
                <a href="../../../HobNob/user/form/login.php" class="text-decoration-none text-white">User Panel</a>


            </span>
        </div>
    </nav>


    <div>
        <h1 class="text-center bg-white" style="font-size: 50px; color: #4ea2ec; font-weight: bold;">Users</h1>
    </div>
    <!-- header -->

    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-8">

                <table class="table bg-white table-bordered">
                    <thead class="text-center text-dark">


                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Delete</th>

                    </thead>

                    <tbody class="text-center text-dark">
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($Record)) {
                            echo "
                                    <tr>
                                    <td> "; ?> <?php echo ++$i; ?> <?php echo " </td>
                                    <td>$row[UserName]</td>
                                    <td>$row[Email]</td>
                                    <td>$row[Number]</td>
                                    <td><a href = 'delete.php? ID=$row[Id]' class ='btn btn-danger'>Delete</a></td>
                                    </tr>
                                ";
                                                                }

                                                                    ?>
                    </tbody>
                </table>
            </div>

            <!-- <div class="col-md-2 pr-5 text-center">
                <h3 class="text-danger">Total</h3>
                <h1 class="bg-danger text-white"><?php echo $row_count ?></h1>

            </div> -->
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-3 col-sm-6 pr-5 text-center">
                <h2 class="fw-bold" style="font-size: 50px; color: #4ea2ec; font-weight: bold;">Total</h2>
                <h1 class="bg-secondary text-white"><?php echo $row_count ?></h1>

            </div>
        </div>
    </div>

</body>

</html>