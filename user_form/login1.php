<?php
    $con = mysqli_connect('localhost','root','','hobnob');

    $Name = $_POST['name'];
    $Password = $_POST['password'];

    $result= mysqli_query($con,"SELECT * FROM `tbluser` where (UserName='$Name' or Email='$Name') and Password = '$Password'");

    if(mysqli_num_rows($result)){
        echo"
        <script>
            alert('Login Successful')
            window.location.href='../index.php';
        </script>
    ";
    }
    else{
        echo"
        <script>
            alert('Invalid Username or Password')
            window.location.href='login.php';
        </script>
    ";

    }



?>