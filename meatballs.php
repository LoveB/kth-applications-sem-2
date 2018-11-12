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
                $_SESSION['page'] = 'meatballs.php';
                include('login_handler.php');
                ?>

            <a id="active-link" class="links" href="meatballs.php">VEGETARIAN MEATBALLS</a>
            <a class="links" href="pancakes.php">PANCAKES</a>
            <a class="links" href="calendar.php">CALENDAR</a>
        </nav>

        <!-- Small screen navigation-->
        <nav class="navbar-small">
            <a href="index.php" class="active flaticon-fork"></a>
            <div id="myLinks">
                <a href="calendar.php">CALENDAR</a>
                <a href="pancakes.php">PANCAKES</a>
                <a id ="active-link-mobile" href="meatballs.php">VEGETARIAN MEATBALLS</a>
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

            <h2><span class="divider-line">|</span> Vegetarian Meatballs</h2>
            <div class="section group ">

                <!-- Left side -->
                <div class="col span_2_of_3 left-content">
                    <img id="front-image-recipe" src="https://pinchofyum.com/wp-content/uploads/Cauliflower-Meatballs-2.jpg" alt="Vegetarian meatballs in sauce">
                    <h3>INSTRUCTIONS</h3>
                    <ol>
                        <li>Cauliflower: Cook the cauliflower florets in a pot of boiling water for about 5 minutes, till fork-tender. Drain well.</li>
                        <li>Mix: Pulse the quinoa and cauliflower through a food processor until semi-smooth (see pictures for texture). Transfer mixture to a large mixing bowl and combine with all other ingredients. Stir until everything is incorporated. Roll into small balls (about one heaping tablespoon per ball was best for me).</li>
                        <li>Cook: Heat a thin layer of olive oil in a skillet over medium heat – add the balls and cook for a few minutes on each side – they will need to be gently turned every so often to get browned all the way around. Serve with yummy sauces, salads, bowls, or freeze for later!</li>
                    </ol>
                </div>

                <!-- Right side -->
                <div class="col span_1_of_3 right-content">
                    <div id="ingredients">
                        <h3>INGREDIENTS</h3>
                        <h4>For meatballs</h4>
                        <p>3 cups cauliflower florets (roughly 1 head of cauliflower)</p>
                        <p>3 cups cooked quinoa and/or brown rice (see notes)</p>
                        <p>3/4 cups of a “dry ingredient” like oat flour, almond meal, breadcrumbs, etc.</p>
                        <p>4 eggs</p>
                        <p>1 heaping tablespoon spices (chili powder, paprika, and/or cumin will work)</p>
                        <p>2 teaspoons salt</p>
                        <p>enough olive oil to cover the bottom of a frying pan with a thin coating</p>
                        <h4>For serving</h4>
                        <p>Some parsley to sprinkle over the pot</p>
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
            <form action="/action_page.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">
                <label for="subject">Comment</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">
            </form>
            <div class="comment-area">
                <h3>COMMENTS (2)</h3>
                <div class="comment">
                    <h4>Nancy J. McFarland</h4>
                    <p class="date-time">10 Okt 2018 14:11 PM</p>
                    <p>Nice recipe! I really liked it, very tasty. </p>
                </div>
                <div class="comment">
                    <h4>Walter Brooks</h4>
                    <p class="date-time">8 Okt 2018 09:34 AM</p>
                    <p>Didnt like the taste of these and it was a bit of a pain to cook them... </p>
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