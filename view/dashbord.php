<?php
include '../config/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registeration Form</title>
    <style>
        .bg-custom-dashbord {
            background-color: #071823;
        }
        .border-custom {
            padding-bottom: 5px;
            border-bottom: #4f4f57 1px solid;
        }
    </style>
</head>
<body class="bg-custom-dashbord">
<div class="container-fluid">
    <div class="container">
        <h1 class="text-light d-flex justify-content-around mt-5 border-custom">Sining</h1>
        <div class="d-flex justify-content-around row align-items-center ">
            <div class="rounded border border-light col-6 row align-items-center mt-5 bg-light text-dark">
                <form class="mt-3" method="post" action="../controler/php_login.php">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter your username" name="username">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Enter your password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary mb-4" name="Login">Login</button>
                    <a href="registeration.php" class=" text-decoration-none btn btn-dark mb-4">
                        SingUp
                    </a>
                    <?php
                    if (isset($_GET['notlogin'])) {
                        echo '<div class="container alert alert-danger" role="alert">نام کاربری یا رمز عبور معتبر نیست</div>';

                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>