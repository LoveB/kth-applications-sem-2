
<?php

include 'classes/Integration/userDAO.php';

use Integration\userDAO;

$userDAO = new UserDAO();

if(!empty($_POST)){
// Check if username and password is set
    if (isset($_POST[USERNAME]) && isset($_POST[PASSWORD])) {
    $userDAO->createUser($_POST[USERNAME],$_POST[PASSWORD]);
        include('register-confirmation.php');
    }
}

$userDAO->__destruct();










