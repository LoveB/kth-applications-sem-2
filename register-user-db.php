
<?php

include 'classes/Integration/userDAO.php';

use Integration\userDAO;

function connectUserDb() {
    return new UserDAO();
}

function createUserDb(UserDAO $userDAO) {
    $userDAO->createTableStmt();
    $userDAO->deleteAllUsers();
}

$userDAO = connectUserDb();

if(!empty($_POST)){
// Check if username and password is set
if (isset($_POST['username']) && isset($_POST['password'])) {
$userDAO->createUser($_POST['username'],$_POST['password']);
    include('register-confirmation.php');
}
}

$userDAO->__destruct();










