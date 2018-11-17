<!DOCTYPE html>
<html lang="en">

<?php include('fragments/head.php'); ?>
    <body>
        <div class="register-area">
            <h2>Please fill in form</h2>
            <form action="register-user-db.php" method="post" class="register-form">
                <input id="register-text" type="text" name="username" placeholder="Username..." required>
                <input id="register-password" type="password" name="password" placeholder="Password..." required>
                <div class="login-reg">
                    <input id="register-submit" type="submit" value="Register">
                    <p>Have an account?</p><a id="register" href="index.php">Log in</a>
                </div>
            </form>
        </div>
    </body>
</html>