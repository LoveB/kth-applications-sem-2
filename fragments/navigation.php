<nav class="topnav recipe-nav <?php if($_SESSION['page'] =='index.php'){echo 'index-nav';}?>">
    <a id="logo" href="index.php" class="flaticon-fork"></a>

    <?php include('login_handler.php'); ?>

    <a id="<?php if($_SESSION['page'] =='meatballs.php'){echo 'active-link';}?>" class="links" href="meatballs.php">VEGETARIAN MEATBALLS</a>
    <a id="<?php if($_SESSION['page'] =='pancakes.php'){echo 'active-link';}?>" class="links" href="pancakes.php">PANCAKES</a>
    <a id="<?php if($_SESSION['page'] =='calendar.php'){echo 'active-link';}?>" class="links" href="calendar.php">CALENDAR</a>
</nav>

<!-- Small screen navigation-->
<nav class="navbar-small">
    <a href="index.php" class="active flaticon-fork"></a>
    <div id="myLinks">
        <a id="<?php if($_SESSION['page'] =='calendar.php'){echo 'active-link-mobile';}?>" href="calendar.php">CALENDAR</a>
        <a id="<?php if($_SESSION['page'] =='pancakes.php'){echo 'active-link-mobile';}?>" href="pancakes.php">PANCAKES</a>
        <a id="<?php if($_SESSION['page'] =='meatballs.php'){echo 'active-link-mobile';}?>" href="meatballs.php">VEGETARIAN MEATBALLS</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</nav>