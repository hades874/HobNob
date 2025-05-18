<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <?php
    echo $id = $_GET['ID'];
    include 'config.php';
    $stmt = mysqli_prepare($con, "SELECT * FROM `tblproduct` WHERE Id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $Record = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_array($Record);
    mysqli_stmt_close($stmt);

    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-dark mt-5">

                <form action="update.php" method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-danger">Product Update</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="Pimage" class="form-control"><br>
                        <img src="<?php echo $data['PImage'] ?>" alt="" style="height: 100px">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Product Category</label>
                        <select class="form-select" name="Category">
                            <option value="Home">Home</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Stationery">Stationary</option>
                        </select>

                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
                    <button name="update" class="bg-danger text-center fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>

        </div>
    </div>

    <!-- php update code -->
    <?php
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
        $img_des = "Uploadimage/" . $image_name;
        move_uploaded_file($image_loc, "Uploadimage/" . $image_name);

        $product_category = $_POST['Category'];

        include 'config.php';
        $stmt = mysqli_prepare($con, "UPDATE `tblproduct` SET `PName`=?, `PPrice`=?, `PImage`=?, `PCategory`=? WHERE Id = ?");
        mysqli_stmt_bind_param($stmt, "ssssi", $product_name, $product_price, $img_des, $product_category, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: index.php");
    }
    ?>


</body>

</html>