<?php

require_once 'db.php';

session_start();

$page = $_SESSION['page'];
$_SESSION['register'] = true;
include($page);


