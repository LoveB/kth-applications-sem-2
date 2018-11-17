<div class="login-area">
<form action="login.php" method="post" class="login-form">
    <input id="login-text" type="text" name="username" placeholder="Username..." required>
    <input id="login-password" type="password" name="password" placeholder="Password..." required>
    <div class="login-reg">
    <input id="login-submit" type="submit" value="Log in">
    <a id="register" href="register.php">Register</a>
    </div>
    <?php echo"<p class='alert'>" . $_SESSION['alert'] . "</p>"?>
    <?php unset($_SESSION['alert']);?>
</form>
</div>

