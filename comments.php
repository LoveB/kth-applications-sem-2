<?php

session_start();

$page = $_SESSION['page'];

    // Check if username and password is set
    if (isset($_POST['name']) && isset($_POST['subject'])) {

        if(isset($_POST['username'])){
            $_SESSION['commenter-name'] = $_POST['name'];
            $_SESSION['comment'] = $_POST['subject'];
            echo $_SESSION['commenter-name'];
            echo $_SESSION['comment'];
            include($page);
        } else {
            echo "Not logged in";
            include($page);
        }

    }else {

        include($page);
        echo $_POST['name'];
        echo $_POST['subject'];
        $_POST['username'];
    }



//test


