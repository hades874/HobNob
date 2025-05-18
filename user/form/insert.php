<?php
    $con = mysqli_connect('localhost','root','','hobnob');

    if(isset($_POST['submit'])){
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Number = $_POST['number'];
        $Password = $_POST['password'];
        $hash = password_hash("$Password", PASSWORD_BCRYPT);
    }



        //insert user data


        $Dup_Email = mysqli_query($con, "SELECT `Id`, `UserName`, `Email`, `Number`, `Password` FROM `tbluser` WHERE Email= '$Email'");
        $Dup_username = mysqli_query($con, "SELECT `Id`, `UserName`, `Email`, `Number`, `Password` FROM `tbluser` WHERE UserName= '$Name'");

        if(mysqli_num_rows($Dup_Email)){
            echo"
                <script>
                    alert('This Email is already taken')
                    window.location.href='register.php';
                </script>
            ";
        }

        if(mysqli_num_rows($Dup_username)){
            echo"
                <script>
                    alert('This Username is already taken')
                    window.location.href='register.php';
                </script>
            ";
        }
        else{
            mysqli_query($con,"INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
            VALUES ('$Name','$Email','$Number','$hash')");

                echo"
                    <script>
                        alert('User Registration Successful')
                        window.location.href='login.php';
                    </script>
                ";
        }

        


?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>