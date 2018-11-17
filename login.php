<?php

include 'classes/Integration/userDAO.php';
require_once 'keys.php';
require_once 'classes/Model/User.php';

use Model\User;
use Integration\userDAO;

$userDAO = new UserDAO();

session_start();
$page = $_SESSION['page'];

if(!empty($_POST)){
    // Check if username and password is set
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $users = $userDAO->getAllUsers();
        foreach ($users as $user) {
            if ($user instanceof User and $_POST['username'] == $user->getName()) {
                $current_user = $user;
                $current_username = $_POST['username'];
                $current_pass = $user->getPassword();
            }
        }

        // user is not in db
        if ($current_username == NULL) {
            $_SESSION['alert'] = 'Please register';
            $_SESSION['invalidUser'] = true;
            include($page);
        } else {
            // Check password
            if (($current_pass == $_POST['password'])) {

                $_SESSION['username'] = $current_username;
                include($page);
            } else {
                // incorrect password
                $_SESSION['alert'] = 'Wrong password';
                $_SESSION['invalidPass'] = true;
                include($page);
            }
        }
    }
}

$userDAO->__destruct();