<?php
session_start();
require_once 'Entry.php';
require_once 'keys.php';

$filename = 'comments-db.txt';

$entries = explode(";\n", file_get_contents($filename));
for ($i = count($entries) - 1; $i >= 0; $i--) {
    $entry = unserialize($entries[$i]);
    if ($entry instanceof Entry and ! $entry->isDeleted()) {
        echo ("<p class='author'>" . $entry->getNickName() . ":</p>");
        echo("<p class='entry'>");
        echo(nl2br($entry->getMsg()));
        echo ("</p>");
        if ($entry->getNickName() === $_SESSION[CHAT_NICK_KEY]) {
            echo("<form action='delete-entry.php'>");
            echo("<input type='hidden' name='timestamp' value='" .
                $entry->getTimestamp() . "'/>");
            echo("<input type='submit' value='Delete'/>");
            echo("</form>");
        }
    }
}
