<!DOCTYPE html>
<html lang="en">

<?php include('fragments/head.php'); ?>

    <body>
    <?php
    require_once 'keys.php';
    session_start();
    $_SESSION[PAGE] = 'pancakes.php';
    ?>
        <!-- Navigation -->
        <?php include('fragments/navigation.php'); ?>

        <!-- Page Content -->
        <?php
        $_SESSION['comment-database'] = 'comments-pancakes.txt';
        $recipe_index = 0;

        include('fragments/recipe-page-content.php'); ?>

        <!-- Footer -->
        <?php include('fragments/footer.php');  ?>

        <!-- Scripts -->
        <script src="scripts/main.js"></script>
    </body>
</html>