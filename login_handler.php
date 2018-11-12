
<?php

if (isset($_SESSION['username'])) {
    include ("logout-form.php");
} else {
    if(isset($_SESSION['invalidUser'])) {
        include("login-form.php");
        $invalid_user = 'invalid user';
        unset($_SESSION["invalidUser"]);
    }

    else if(isset($_SESSION['invalidPass'])){
        include("login-form.php");
        $invalid_password = 'invalid password';
        unset($_SESSION["invalidPass"]);
    } else if(isset($_SESSION['register'])){
        include("register-form.php");
        unset($_SESSION["register"]);
    }

    else {
        include("login-form.php");
    }
}

