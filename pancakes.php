<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tasty Recipes</title>

    <!-- Style sheets-->

    <!-- Reset-->
    <link href="css/reset.css" rel="stylesheet">

    <!-- Responsive grid-->
    <link rel="stylesheet" href="css/responsive_grid/html5reset.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/col.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/2cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/3cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/4cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/5cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/6cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/7cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/8cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/9cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/10cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/11cols.css" media="all">
    <link rel="stylesheet" href="css/responsive_grid/12cols.css" media="all">

    <!-- Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- Flat icon-->
    <link rel="stylesheet" href="css/my-icons-collection/font/flaticon.css" media="all">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/small-screen.css" rel="stylesheet">

    <!-- Fonts-->

    <!-- Google font-->
    <link href="css/fonts.css" rel="stylesheet">
</head>

<body>


<!-- Navigation -->
<nav class="topnav recipe-nav">
    <a id="logo" href="index.php" class="flaticon-fork"></a>

        <?php
        session_start();
        $_SESSION['page'] = 'pancakes.php';
        include('login_handler.php');
        ?>

    <a class="links" href="meatballs.php">VEGETARIAN MEATBALLS</a>
    <a id ="active-link" class="links" href="pancakes.php">PANCAKES</a>
    <a class="links" href="calendar.php">CALENDAR</a>
</nav>

<!-- Small screen navigation-->
<nav class="navbar-small">
    <a href="index.php" class="active flaticon-fork"></a>
    <div id="myLinks">
        <a href="calendar.php">CALENDAR</a>
        <a id="active-link-mobile" href="pancakes.php">PANCAKES</a>
        <a href="meatballs.php">VEGETARIAN MEATBALLS</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</nav>

<!-- Header  -->
<header>

</header>

<!-- Page Content -->
<div class="recipe-cont">
    <h2><span class="divider-line">|</span>  Pancakes</h2>
    <div class="section group ">

        <!-- Left side -->
        <div class="col span_2_of_3 left-content">
            <img id="front-image-recipe" src="https://pinchofyum.com/wp-content/uploads/2013/10/pancakes2.jpg" alt="Pancakes with banana and syrup">
            <h3>INSTRUCTIONS</h3>
            <ol>
                <li>In a large bowl, mix flour, sugar, baking powder and salt. Make a well in the center, and pour in milk, egg and oil. Mix until smooth.</li>
                <li>Heat a lightly oiled griddle or frying pan over medium high heat. Pour or scoop the batter onto the griddle, using approximately 1/4 cup for each pancake. Brown on both sides and serve hot.</li>
                <li>Add bananas and maple syrup</li>
            </ol>
        </div>

        <!-- Right side -->
        <div class="col span_1_of_3 right-content">
            <div id="ingredients">
                <h3>INGREDIENTS</h3>
                <h4>For pancakes</h4>
                <p>1 cup all-purpose flour</p>
                <p>2 tablespoons white sugar</p>
                <p>1 teaspoon salt</p>
                <p>1 egg, beaten</p>
                <p>1 cup milk</p>
                <p>2 tablespoons vegetable oil</p>
                <h4>For serving</h4>
                <p>2 bananas</p>
                <p>3 tablespoons maple syrup</p>
            </div>
            <div class="cooking-info">
                <div id="box-left">
                    <div class="flaticon-clock"></div>
                    <p>1 hour</p>
                </div>
                <div id="box-middle">
                    <div class="flaticon-user"></div>
                    <p>4 servings</p>
                </div>
                <div id="box-right">
                    <div class="flaticon-money-1"></div>
                    <p>Cheap</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Comment section -->

    <div class="container">
        <h2>Please leave a comment!</h2>
        <form action="comments.php" method="post">
            <!--
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">
            -->
            <label for="subject">Comment</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            <input type="submit" value="Submit">
        </form>


        <div id="comments-anchor" class="comment-area">
            <h3>COMMENTS (2)</h3>
            <div class="comment">
                <?php
                    session_start();
                    require_once 'Entry.php';
                    require_once 'keys.php';

                    $filename = 'comments-db.txt';
                    $entries = explode(";\n", file_get_contents($filename));

                    for ($i = count($entries) - 1; $i >= 0; $i--) {
                        $entry = unserialize($entries[$i]);
                        if ($entry instanceof Entry and ! $entry->isDeleted()) {
                            echo ("<h4 class='author'>" . $entry->getCommenterName() . ":</h4>");
                            echo("<p class='date-time'>");
                            echo(nl2br($entry->getFormattedDate()));
                            echo ("</p>");
                            echo("<p >");
                            echo(nl2br($entry->getMsg()));
                            echo ("</p>");
                            if ($entry->getCommenterName() === $_SESSION[USERNAME]) {
                                echo("<form action='delete-comment.php'>");
                                echo("<input type='hidden' name='timestamp' value='" .
                                    $entry->getTimestamp() . "'/>");
                                echo("<input id='delete-button' type='submit' value='Delete'/>");
                                echo("</form>");
                            }
                            echo("<hr class='comment-divider'>");
                        }
                    }
                    ?>

            </div>
    </div>

    </div>

<!-- Footer -->

<footer class="footer">

    <div class="text-box-footer">
        <h3>Follow us:</h3>
        <div class="flaticon-instagram"></div>
        <div class="flaticon-facebook"></div>
    </div>
</footer>

<!-- Scripts -->
<script src="scripts/main.js"></script>

</body>
</html>