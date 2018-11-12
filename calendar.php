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
        <nav class="topnav calendar-nav">
            <a id="logo" href="index.php" class="flaticon-fork"></a>

                <?php
                session_start();
                $_SESSION['page'] = 'calendar.php';
                include('login_handler.php');
                ?>

            <a class="links" href="meatballs.php">VEGETARIAN MEATBALLS</a>
            <a class="links" href="pancakes.php">PANCAKES</a>
            <a id ="active-link" class="links" href="calendar.php">CALENDAR</a>
        </nav>

        <!-- Small screen navigation-->
        <nav class="navbar-small">
            <a href="index.php" class="active flaticon-fork"></a>
            <div id="myLinks">
                <a id="active-link-mobile" href="calendar.php">CALENDAR</a>
                <a href="pancakes.php">PANCAKES</a>
                <a href="meatballs.php">VEGETARIAN MEATBALLS</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>


        <!-- Header -->
        <header>
                <div class="cal-header">
                    <h2>Explore the recipe of the day!</h2>
                    <div class="flaticon-book"></div>
                </div>
        </header>

        <!-- Page content -->
        <div class="calendar">
            <div class="month">
                <div class="month-switch fa fa-angle-double-left"></div>
                <h3>DECEMBER</h3>
                <div class="month-switch fa fa-angle-double-right"></div>
            </div>

            <hr class="thin-hr">

            <!-- Weekday row -->
            <div class="section group weekdays">
                <div class="col span_1_of_7 ">
                    <p>Sun</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Mon</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Tue</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Wen</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Thur</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Fri</p>
                </div>
                <div class="col span_1_of_7 ">
                    <p>Sat</p>
                </div>
            </div>

            <div id="top-group" class="section group">
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>1</p>
                </div>
            </div>

            <div  class="section group">
                <div class="col span_1_of_7 cal-day-box">
                    <p>2</p>
                </div>

                <a href="meatballs.html" class="col span_1_of_7 cal-day-box cal-day-img-mb">
                    <p>3</p>
                </a>

                <div class="col span_1_of_7 cal-day-box">
                    <p>4</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>5</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>6</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>7</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>8</p>
                </div>
            </div>

            <div class="section group">
                <div class="col span_1_of_7 cal-day-box">
                    <p>9</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>10</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>11</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>12</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>13</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>14</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>15</p>
                </div>
            </div>

            <div class="section group">
                <div class="col span_1_of_7 cal-day-box">
                    <p>16</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>17</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>18</p>
                </div>
                <a href="pancakes.html" class="col span_1_of_7 cal-day-box cal-day-img-pc">
                    <p>19</p>
                </a>
                <div class="col span_1_of_7 cal-day-box">
                    <p>20</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>21</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>22</p>
                </div>
            </div>

            <div class="section group">
                <div class="col span_1_of_7 cal-day-box">
                    <p>23</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>24</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>25</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>26</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>27</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>28</p>
                </div>
                <div class="col span_1_of_7 cal-day-box">
                    <p>29</p>
                </div>
            </div>

            <div class="section group">
                <div class="col span_1_of_7 cal-day-box">
                    <p>30</p>
                </div>
                <div class="col span_1_of_7 cal-day-box ">
                    <p>31</p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
                </div>
                <div class="col span_1_of_7 cal-day-box not-month">
                    <p></p>
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

    <!-- Script-->
    <script src="scripts/main.js"></script>
    </body>
</html>