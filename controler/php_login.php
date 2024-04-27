<?php
include '../config/connect.php';

if (isset($_POST['Login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
//echo $username.$password;
    $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";

    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header('location:../view/login.php');

    } else {
        header('location:../view/dashbord.php?notlogin=true');

    }

}


?>