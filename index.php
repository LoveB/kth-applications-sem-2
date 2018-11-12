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

        <link rel="stylesheet" href="css/animate.css" media="all">

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
        <nav class="topnav index-nav">
            <a id="logo" href="index.php" class="flaticon-fork"></a>

                <?php
                session_start();
                $_SESSION['page'] = 'index.php';
                include('login_handler.php');
                ?>

            <a class="links" href="meatballs.php">VEGETARIAN MEATBALLS</a>
            <a class="links" href="pancakes.php">PANCAKES</a>
            <a class="links" href="calendar.php">CALENDAR</a>
        </nav>

        <!-- Small screen navigation-->
        <nav class="navbar-small">
            <a href="index.php" class="active flaticon-fork"></a>
            <div id="myLinks">
                <a href="calendar.php">CALENDAR</a>
                <a href="pancakes.php">PANCAKES</a>
                <a href="meatballs.php">VEGETARIAN MEATBALLS</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>

        <!-- Header -->
        <header>
          <img id="front-image" src="https://images.pexels.com/photos/459469/pexels-photo-459469.jpeg" alt="Vegetables, olives and pasta on wooden table">
          <div id="front-text-area" class="text-box">
            <h1 class="animated jello">Tasty Recipes</h1>
              <p>Explore our collection of tasty recepies for all occations! Also have a look at our calendar to see what the recipe of the day is. </p>
              <div class="button_cont"><a class="button" href="calendar.html" target="_blank" rel="nofollow noopener">See calendar</a></div>
          </div>
        </header>


        <!-- Page Content -->

        <!-- Left side-->
        <div class="section group front-content">
            <div id="fc-left" class="col span_2_of_3">
                <div class="section group">
                    <div class="col span_1_of_4">
                        <div class="flaticon-carrot"></div>
                    </div>
                    <div class="col span_3_of_4">
                        <div class="text-box">
                            <H2>All vegetarian</H2>
                            <p>All our recipes are purely made out of vegetarian ingredients. </p>
                        </div>
                    </div>
                </div>

                <div class="section group">
                    <div class="col span_1_of_4">
                        <div class="flaticon-money"></div>
                    </div>
                    <div class="col span_3_of_4">
                        <div class="text-box">
                            <H2>Cheap ingredients</H2>
                            <p>Food is for everyone, and therefor we try to choose ingredients for our recipes that are affordable.</p>
                        </div>
                    </div>
                </div>

                <div class="section group">
                    <div class="col span_1_of_4">
                        <div class="flaticon-breakfast"></div>
                    </div>
                    <div class="col span_3_of_4">
                        <div class="text-box">
                            <H2>Rich in taste</H2>
                            <p>Taste is our number one priority and we always aim to find new and exciting flavours.
                                Please comment on our recipes and let us know if we are on the right track!</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side-->
            <div id="fc-right" class="col span_1_of_3">
                <div class="text-box contact-box">
                    <H2>Contact us</H2>
                    <p>Tasty Recepies</p>
                    <p>39 Kendell Street</p>
                    <p>SHEFFIELD</p>
                    <p>S1 4AL</p>
                    <div class="phone">
                        <h4>Phone:</h4>
                        <p>202-555-0149</p>
                    </div>
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

        <!-- Script -->
        <script src="scripts/main.js"></script>

    </body>
</html>