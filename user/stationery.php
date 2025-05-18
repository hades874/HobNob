<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>

    <?php
    include 'header.php';
    ?>
</head>

<body>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">


                <h1 class="text-dark fw-bold text-center my-3">Stationery</h1>

                <?php
                include 'config.php';
                $Record = mysqli_query($con, "select * from tblproduct");
                while ($row = mysqli_fetch_array($Record)) {
                    $check_page = $row['PCategory'];
                    if($check_page === 'Stationery'){

                    echo "
                    <div class = 'col-md-6 col-lg-3 m-auto mb-3'>
                        <form action = 'insertcart.php' method = 'POST'>
                            <div class='card m-auto' style='width:18rem;'>
                                <img src='../admin/product/$row[PImage]' class='card-img-top'>
                                    <div class='card-body text-center'>
                                        <h5 class='card-title text-dark fs-4'>$row[PName]</h5>
                                        <p class='card-text text-dark fw-bold'>";?>Price: <?php echo number_format($row['PPrice'])?> <?php echo" Taka</p>
                                        
                                        <input type = 'hidden' name = 'PName' value = '$row[PName]'>
                                        <input type = 'hidden' name = 'PPrice' value = '$row[PPrice]'>
                                        
                                        <input type = 'number' name = 'PQuantity' value = 'min = '1' max = '10'' placeholder = 'Quantity'><br><br>
                                        <input type = 'submit' name = 'addCart' class = 'btn btn-primary text-white w-80' value = 'Add To Cart'>
                    
                                        <p></p>
                    
                                </div>
                            </div>
                        </form>
                    </div>
                    ";
                }
            }
                ?>

            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

</html>