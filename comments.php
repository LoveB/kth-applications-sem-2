<?php
require_once 'keys.php';
require_once 'classes/Model/Entry.php';
use Model\Entry;

session_start();
$page = $_SESSION[PAGE];
$filename = $_SESSION['comment-database'];
// Check if username is set
if(!isset($_SESSION[USERNAME])) {
    $_SESSION['alert'] = "Not logged in";
    include($page);
    // store entry in db
}  else {
    $entry = new Entry($_SESSION[USERNAME], $_POST[COMMENT_ENTRY]);
    file_put_contents($filename, serialize($entry) . COMMENT_ENTRY_DELIMITER, FILE_APPEND);
    include($page);
}