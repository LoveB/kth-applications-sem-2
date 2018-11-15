<?php


session_start();

$page = $_SESSION['page'];
//$page = $current_page;


if(!empty($_POST)){
    // Check if username and password is set
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $myFile = "db.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        $assoc_array = array();
        $my_array = explode("\n", $theData);
        foreach($my_array as $line)
        {
            $tmp = explode(" ", $line);
            $assoc_array[$tmp[0]] = $tmp[1];
        }
        fclose($fh);
        // db as array
        $users = $assoc_array;

        // Match username in database
        foreach ($users as $user => $password) {
            if ($_POST['username'] == $user) {
                $current_user = $_POST['username'];
            }
        }
        // user is not in db
        if ($current_user == NULL) {
            $_SESSION['invalidUser'] = true;
            include($page);
        } else {
            // Check password
            if (($users[$current_user] == $_POST['password'])) {
                $_SESSION['username'] = $current_user;
                include($page);
            } else {
                // incorrect password
                $_SESSION['invalidPass'] = true;
                include($page);
            }
        }
    }
}