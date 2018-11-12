<?php

require_once 'keys.php';
require_once 'Entry.php';

session_start();
$page = $_SESSION['page'];


$filename = 'comments-db.txt';

    // Check if username and password is set
    if (!isset($_POST[COMMENTER_NAME]) && isset($_POST[COMMENT_ENTRY])) {
        echo "Fill in all text areas";
        include($page);
    } else if(!isset($_SESSION[USERNAME])) {
        echo "Not logged in";
        include($page);
    } else {

        $_SESSION['commenter-name'] = $_POST[COMMENTER_NAME];
        $_SESSION['comment'] = $_POST[COMMENT_ENTRY];

        $entry = new Entry($_POST[COMMENTER_NAME], $_POST[COMMENT_ENTRY]);
        file_put_contents($filename, serialize($entry) . COMMENT_ENTRY_DELIMITER, FILE_APPEND);


        include($page);


    }






