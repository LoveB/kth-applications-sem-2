<?php

include 'classes/Integration/commentDAO.php';


use Integration\commentDAO;

echo'test';

function connectCommentDb($type) {
    return new CommentDAO($type);
}

function createCommentDb(CommentDAO $commentDAO) {
    $commentDAO->createTableStmt();
    $commentDAO->deleteAllComments();
}

if($page == 'pancakes.php'){
    $commentDAO =  new CommentDAO('pc');
}

if($page == 'meatballs.php'){
    $commentDAO = new CommentDAO('mb');
}

