<?php


session_start();

//$page = $_SESSION['page'];
$page = $current_page;

if(!empty($_POST)){
    // Check if username and password is set
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $fp = fopen('db.txt', 'a+');
        fwrite($fp, $_POST['username'] . " " . $_POST['password'] . "\n" );
        fclose($fp);
        include('register-confirmation.php');
    }
}




