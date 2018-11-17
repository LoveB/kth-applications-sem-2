<?php

include 'classes/Integration/commentDAO.php';

use Integration\commentDAO;

if($page == 'pancakes.php'){
    $commentDAO =  new CommentDAO('pc');
}

if($page == 'meatballs.php'){
    $commentDAO = new CommentDAO('mb');
}

