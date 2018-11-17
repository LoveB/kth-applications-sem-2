<!DOCTYPE html>
<?php
include 'classes/Integration/commentDAO.php';


use Integration\commentDAO;



function connectCommentDb($type) {

    return new CommentDAO($type);
}

function createUserDb(CommentDAO $commentDAO) {
    $commentDAO->createTableStmt();
    $commentDAO->deleteAllComments();
}



function listAllPersons(CommentDAO $commentDAO) {
    echo '<p>All persons:</p>';
    echo '<table><tr><th>name</th><th>comment</th></tr>';
    $comments = $commentDAO->getAllComments();
    foreach ($comments as $comment) {
        echo '<tr><td>' . $comment->getCommenterName() . '</td><td>' . $comment->getMsg() . '</td></tr>';
    }
    echo '</table>';
}





?>

<html>
<head>
    <meta charset="UTF-8">
    <title>The User Database</title>
</head>
<body>
<h1>The User Database</h1>

<h2>Opening Connection</h2>
<?php

$commentDAO = connectCommentDb('mb');

//$commentDAO->createTableStmt();
//$commentDAO->deleteAllComments();




listAllPersons($commentDAO);

?>

<h2>Inserting Persons</h2>
<?php


$commentDAO->createComment(1,'stina','hejsan');
$commentDAO->createComment(2,'Love','Ja');
listAllPersons($commentDAO);
?>

<h2>Updating a Person</h2>
<?php
$commentDAO->updateComment(1,'stina','jadå');
listAllPersons($commentDAO);
?>

<h2>Deleting a Person</h2>
<?php
$commentDAO->deleteCommentById(1);
listAllPersons($commentDAO);
?>


<h2>Inserting Persons</h2>
<?php




$commentDAO->createComment(3,'herbet','dfgerberb');
$commentDAO->createComment(4,'anna','dghtykytkyukyu');
listAllPersons($commentDAO);
?>


</body>
</html>
