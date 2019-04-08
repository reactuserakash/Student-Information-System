<?php
    include("server/init.php");
    include("server/function/regfunc.php");
?>
<?php include("components/html/header/header.php"); ?>
<div class="confirm-page">
    <?php include("components/html/navbar/navbar.php"); ?>
    <?php if($regNumExists==TRUE): ?>
        <div class="result-box-1">
            <p class="p-1">This registration number is already in the database.</p>
            <p class="p-2">Please try to log in with your Username and Password.</p>
            <a href="login.php" class="hero-register-button">Log In</a>
        </div>
        <?php elseif($userNameExists==TRUE): ?>
        <div class="result-box-1">
            <p class="p-1">This username is already in use.</p>
            <p class="p-2">Please try another Username and fill the form again.</p>
            <a href="register.php" class="hero-register-button">Register</a>
        </div>
        <?php else: ?>
        <div class="result-box-1">
            <p class="p-1">Registration Successful.</p>
            <p class="p-2">Please wait until your account is activated.</p>
            <a href="home.php" class="hero-register-button">Home</a>
        </div>
    <?php endif; ?>
</div>
<?php include("components/html/footer/footer.php"); ?>
