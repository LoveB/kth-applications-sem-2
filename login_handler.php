
<?php

session_start();

if (isset($_SESSION['username'])) {
    include("fragments/logout-form.php");
    } else if (isset($_SESSION['invalidUser'])){
        include("fragments/login-form.php");
        unset($_SESSION["invalidUser"]);
    } else if(isset($_SESSION['invalidPass'])){
        include("fragments/login-form.php");
        unset($_SESSION["invalidPass"]);

    } else {
        include("fragments/login-form.php");
    }


