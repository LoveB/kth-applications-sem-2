
<?php

session_start();

if (isset($_SESSION['username'])) {
    include ("logout-form.php");
    } else if (isset($_SESSION['invalidUser'])){
        include("login-form.php");
        unset($_SESSION["invalidUser"]);
    } else if(isset($_SESSION['invalidPass'])){
        include("login-form.php");
        unset($_SESSION["invalidPass"]);

    } else {
        include("login-form.php");
    }


