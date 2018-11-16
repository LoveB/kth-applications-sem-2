<?php
session_start();
require_once 'classes/Model/Entry.php';
require_once 'keys.php';

$page = $_SESSION['page'];
//$page = $current_page;

$filename = $_SESSION['comment-database'];

if (!empty($_GET['timestamp'])) {

    $entries = explode(";\n", file_get_contents($filename));
    for ($i = count($entries) - 1; $i >= 0; $i--) {
        $entry = unserialize($entries[$i]);

        if ($entry instanceof Entry and $entry->getTimestamp() == $_GET['timestamp']) {
            $entry->setDeleted(true);
            $entries[$i] = serialize($entry);
            break;
        }
    }
    file_put_contents($filename, implode(COMMENT_ENTRY_DELIMITER, $entries));
}

include($page);