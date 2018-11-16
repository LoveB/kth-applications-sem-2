<?php
require_once 'keys.php';
require_once 'classes/Model/User.php';


use Model\User;

session_start();
$page = $_SESSION['page'];
$filename = 'usersDB.txt';


if(!empty($_POST)){
    // Check if username and password is set
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $user = new User($_POST[USERNAME], $_POST[PASSWORD]);
        file_put_contents($filename, serialize($user) . COMMENT_ENTRY_DELIMITER, FILE_APPEND);

        include('register-confirmation.php');
    }
}




