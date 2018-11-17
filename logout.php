<?php
   session_start();
   $page = $_SESSION['page'];
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   session_unset();
   include($page);


