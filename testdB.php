<!DOCTYPE html>
<?php
include 'classes/Integration/userDAO.php';

use Integration\userDAO;

function createUserDb() {
    return new UserDAO();
}



function listAllPersons(UserDAO $userDAO) {
    echo '<p>All persons:</p>';
    echo '<table><tr><th>name</th><th>pass</th></tr>';
    $users = $userDAO->getAllUsers();
    foreach ($users as $user) {
        echo '<tr><td>' . $user->getName() . '</td><td>' . $user->getPassword() . '</td></tr>';
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

$userDAO = createUserDb();
echo 'test2';

listAllPersons($userDAO);

?>

<h2>Inserting Persons</h2>
<?php




$userDAO->createUser('stina','8742398');
$userDAO->createUser('nisse','5672532');
listAllPersons($userDAO);
?>

<h2>Updating a Person</h2>
<?php
$userDAO->updateUser('stina', '8742398');
listAllPersons($userDAO);
?>

<h2>Deleting a Person</h2>
<?php
$userDAO->deleteUserByName('stina');
listAllPersons($userDAO);
?>
</body>
</html>
