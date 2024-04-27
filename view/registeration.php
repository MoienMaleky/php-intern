<?php
include '../config/connect.php';


if (isset($_GET['erorrName'])) {
    echo '<div class="container alert alert-danger" role="alert">
 این نام کاربری قبلا استفاده شده
</div>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Registeration Form</title>
</head>
<style>
    .bg-custom-dashbord {
        background-color: #071823;
    }

</style>
<body class="bg-custom-dashbord">
<div class="container">
    <div class="d-flex justify-content-around row align-items-center">
        <div class="rounded border border-light col-6 row align-items-center mt-5 bg-light text-dark">
            <form class="mt-3" method="post" action="../controler/register.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="teext" class="form-control mb-2" id="exampleInputEmail1"
                           placeholder="Enter your fullname" name="fullname">
                    <?php
                    if (isset($_GET['erorrFullName'])) {
                        echo '
         <div class="container alert alert-danger" role="alert">
         نام نا معتبر است
         </div>';

                    }
                    ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control mb-2" id="exampleInputEmail1"
                           placeholder="Enter your username" name="username">
                    <?php
                    if (isset($_GET['erorrUsername'])) {
                        echo '<div class="container alert alert-danger" role="alert">
 نام کاربری باید حداقل یک حرف بزرگ و یک عدد داشته باشد و طول آن حداقل 8 کاراکتر باشد                                    
                                 </div>';
                    } ?>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control mb-2" id="exampleInputEmail1" placeholder="Enter your email"
                           name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control mb-2" id="exampleInputPassword1"
                           placeholder="Enter your password" name="password" value="">
                    <?php
                    if (isset($_GET['erorrPassword'])) {
                        echo '<div class="container alert alert-danger" role="alert">
                         رمز عبور باید حداقل یک حرف بزرگ و یک عدد داشته باشد و طول آن حداقل 8 کاراکتر باشد 
                                 </div>';
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-primary mb-4" name="singup">Singup</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>