<?php
    $con = mysqli_connect('localhost','root','','hobnob');

    $Name = $_POST['name'];
    $Password = $_POST['password']; 

    $result = mysqli_query($con, "SELECT * FROM `tbluser` WHERE (UserName='$Name' OR Email='$Name')");
    session_start();

    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['Password'];
    
        if (password_verify($Password, $hashedPassword)) {
            $_SESSION['user'] = $Name;
    
            echo "
            <script>
                alert('Login Successful');
                window.location.href='../index.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Invalid Password');
                window.location.href='login.php';
            </script>";
        }
    } else {
        echo "
        <script>
            alert('Invalid Username or Email');
            window.location.href='login.php';
        </script>";
    }
    ?>