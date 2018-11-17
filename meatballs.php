<!DOCTYPE html>
<html lang="en">

<?php include('fragments/head.php'); ?>

    <body>
    <?php
    require_once 'keys.php';
    session_start();
    $_SESSION[PAGE] = 'meatballs.php';
    ?>
        <!-- Navigation -->
        <?php include('fragments/navigation.php'); ?>

        <!-- Page Content -->
        <?php
        $_SESSION['comment-database'] = 'comments-meatballs.txt';
        $recipe_index = 1;

        include('fragments/recipe-page-content.php'); ?>

        <!-- Footer -->
        <?php include('fragments/footer.php');  ?>

        <!-- Scripts -->
        <script src="scripts/main.js"></script>
    </body>
</html>