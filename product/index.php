<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-dark mt-5">

                <form action="insert.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Product Details:</p>
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
                            <option value="Health and Personal Care">Health and Personal Care</option>
                        </select>

                    </div>
                    <button name="submit" class="bg-danger text-center fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>

        </div>
    </div>

    <!-- FETCH DATA -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">

                <table class="table table-striped table-hover border border-dark my-5">
                    <thead class="bg-dark text-white fs-5 text-center">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Delete</th>
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
                                    <td><a href='' class='btn btn-danger'> Delete </a></td>
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