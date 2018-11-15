<?php

require_once 'keys.php';
require_once 'Entry.php';

session_start();
$page = $_SESSION['page'];
//$page = $current_page;

    $filename = $_SESSION['comment-database'];

    // Check if username and password is set
    if (!isset($_POST[COMMENT_ENTRY])) {
       // echo "Fill in all text areas";
        include($page);
    } else if(!isset($_SESSION[USERNAME])) {
        //echo "Not logged in";
        include($page);
    } else {

        $entry = new Entry($_SESSION[USERNAME], $_POST[COMMENT_ENTRY]);
        file_put_contents($filename, serialize($entry) . COMMENT_ENTRY_DELIMITER, FILE_APPEND);
        include($page);
    }






