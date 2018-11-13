<?php


session_start();

$page = $_SESSION['page'];
$_SESSION['register'] = true;
include($page);


