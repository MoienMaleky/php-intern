<?php

global $con;
include '../config/connect.php';
if (isset($_POST['singup'])) {
    function removeExtraSpaces($input_string)
    {
        // حذف فاصله اول و آخر
        $trimmed_string = trim($input_string);

        // حفظ فاصله‌های بین وسط کلمات و حذف فاصله‌های اضافی
        $result_string = preg_replace('/\s+/', ' ', $trimmed_string);

        // حذف فاصله‌های بیشتر از یکی در وسط کلمات
        $result_string = preg_replace('/(?<=\S)\s+(?=\S)/', ' ', $result_string);

        return $result_string;
    }

    $fullname = removeExtraSpaces($_POST['fullname']);
    $username = removeExtraSpaces($_POST['username']);
    $email = removeExtraSpaces($_POST['email']);
    $password = removeExtraSpaces($_POST['password']);
    echo $username;
    $sql1 = "SELECT * FROM `user` WHERE username = '$username' or email = '$email' or password = '$password'";


    $result = $con->query($sql1);


    if ($result->num_rows == 0) {
        if (!empty($fullname) and strlen($fullname) > 3 and !preg_match('/[0-9]/', $fullname)) {
            if (preg_match('/[a-z]/', $username) && preg_match('/[0-9]/', $username) && preg_match('/[A-Z]/', $username)) {
                // Check if the length of the string is not less than 8
                if (strlen($username) >= 8) {
                    if (preg_match('/[0-9]/', $password) && preg_match('/[A-Z]/', $password)) {
                        if (strlen($password) >= 8) {
                            $password = md5($password);
                            $sql = "insert into `user` (full_name, username, email, password)
                  values('$fullname', '$username', '$email', '$password')";

                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                header('location:../view/dashbord.php');
                            }
                        }
                    } else {
                        header('location:../view/registeration.php?erorrPassword=true');
                    }
                }
            } else {
                header('location:../view/registeration.php?erorrUsername=true');

            }
        } else {
            header('location:../view/registeration.php?erorrFullName=true');

        }
    } else {
        header('location:../view/registeration.php?erorrName=true');

    }
}

?>