<?php
include('recipe-template.php');
?>

<div class="recipe-cont">
    <h2><span class="divider-line">| </span><?php echo $title ?></h2>
    <div class="section group ">

        <!-- Left side -->
        <div class="col span_2_of_3 left-content">
            <img id="front-image-recipe" src=<?php echo $imageURL ?> alt="Pancakes with banana and syrup">
            <h3>INSTRUCTIONS</h3>
            <?php
            echo "<ol>";
            foreach ($instructions as $instruction) {
                echo "<li>";
                echo $instruction;
                echo "</li>";
            }
            echo "</ol>";
            ?>
        </div>
        <!-- Right side -->
        <div class="col span_1_of_3 right-content">
            <div id="ingredients">
                <h3>INGREDIENTS</h3>
                <?php
                echo "<ul>";
                foreach ($ingredients as $ingredient) {
                    echo "<li>";
                    echo $ingredient;
                    echo "</li>";
                }
                echo "</ul>";
                ?>
            </div>
            <div class="cooking-info">
                <div id="box-left">
                    <div class="flaticon-clock"></div>
                    <p><?php echo $cooktime ?></p>
                </div>
                <div id="box-middle">
                    <div class="flaticon-user"></div>
                    <p><?php echo $servings ?></p>
                </div>
                <div id="box-right">
                    <div class="flaticon-money-1"></div>
                    <p><?php echo $cost ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Comment section -->

<div class="container">
    <h2>Please leave a comment!</h2>
    <form action="comments.php" method="post">
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

            $filename = $_SESSION['comment-database'];
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