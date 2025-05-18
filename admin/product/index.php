<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

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

</head>

<body>

    <!-- header -->
    <?php
    session_start();
    if (!$_SESSION['admin']) {
        header("location: form/login.php");
    }
    ?>

    <body>
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid text-white">
                <a class="navbar-brand text-white" href="../hobnob.php">
                    <h1>HobNob</h1>
                </a>
                <span>
                    <i class="fas fa-users-cog"></i>
                    Welcome, <?php echo $_SESSION['admin']; ?> |
                    <i class="fas fa-sign-out-alt"></i>
                    <a href="../form/logout.php" class="text-decoration-none text-white">Logout</a> |
                    <a href="../../../HobNob/user/form/login.php" class="text-decoration-none text-white">User Panel</a>


                </span>
            </div>
        </nav>


        <div>
            <h2 class="text-center bg-white" style="font-size: 50px; color: #4ea2ec; font-weight: bold;">Add Product</h1>
        </div>
        <!-- header -->

        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto bg-white border border-dark mt-5">

                    <form action="insert.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3" style="color: #4ea2ec;">Product Details</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Add Product Image</label>
                            <input type="file" name="Pimage" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Product Category</label>
                            <select class="form-select" name="Category">
                                <option value="Home">Home</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Stationery">Stationery</option>
                            </select>

                        </div>
                        <button name="submit" class="text-center fs-4 fw-bold my-3 form-control text-white" style="background-color: #4ea2ec;">Upload</button>
                    </form>
                </div>

            </div>
        </div>

        <!-- FETCH DATA -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 bg-white m-auto">

                    <table class="table table-striped table-hover border border-dark my-5">
                        <thead class="bg-dark text-white fs-5 text-center">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                            <th>Update</th>

                        </thead>


                        <tbody class="text-center">
                            <?php
                            include 'config.php';
                            $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                            while ($row = mysqli_fetch_array($Record))

                                echo "
                                <tr>
                                    <td>$row[Id]</td>
                                    <td>$row[PName]</td>
                                    <td>$row[PPrice]</td>
                                    <td><img src='$row[PImage]' height= '90px' width= '200px'></td>
                                    <td>$row[PCategory]</td>
                                    <td><a href='delete.php? Id= $row[Id]' class='btn btn-danger'> Delete </a></td>
                                    <td><a href='update.php? ID= $row[Id]' class='btn btn-success'> Update </a></td>
                                </tr>
                            ";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </body>

</html>