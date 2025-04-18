<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home Page</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- LINE AWESOME -->
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


</head>

<?php
  session_start();
  if(!$_SESSION['admin']){
    header("location: form/login.php");
  }
?>

<body>

  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white">
        <h1>HobNob</h1>
      </a>
      <span>
        <i class="fas fa-users-cog"></i>
        Welcome, <?php echo $_SESSION['admin']; ?> |
        <i class="fas fa-sign-out-alt"></i>
        <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
        <a href="" class="text-decoration-none text-white">User Panel</a>


      </span>
    </div>
  </nav>


  <div>
    <h2 class="text-center">Dashboard</h1>
  </div>

  <div class="col-md-8 bg-primary text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-1">Add Products</a>
    <a class="text-white text-decoration-none fs-4 fw-bold">||</a>
    <a href="" class="text-white text-decoration-none fs-4 fw-bold px-1">Users</a>
  </div>



</body>

</html>