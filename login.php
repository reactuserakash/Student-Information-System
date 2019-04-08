<?php include("components/html/header/header.php"); ?>

<?php
    include("server/init.php");
    include("server/function/studentLogin.php");
    $user_exits = TRUE;
    $find_user = TRUE;
    $active_user = TRUE;
    if(empty($_POST)===FALSE) {
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $usertype = mysqli_real_escape_string($conn,$_POST["usertype"]);

        #echo $username, $password , $usertype;

        if($usertype=="student") {
            if(user_exists($conn,'student',$username)==0){
                $user_exits = FALSE;
            } else if(find_user($conn,'student',$username,$password)==0){
                $find_user = FALSE;
            } else if(is_user_active($conn,'student',$username,$password)==0){
                $active_user = FALSE;
            } else {
                $header="Location:student.php?username=$username";
                header($header);                
            }
        } else {
            if(user_exists($conn,'admin',$username)==0){
                $user_exits = FALSE;
            } else if(find_user($conn,'admin',$username,$password)==0){
                $find_user = FALSE;
            } else {
                header("Location:admin.php?username=$username");
            }
        }
    }
?>



<div class="login-page">
    <?php include("components/html/navbar/navbar.php"); ?>
    <div class="main-block">
        <form action="login.php" method="POST">
            <ul class="login-form">
                <li>
                    <span class="label">Username</span><br/>
                    <select class="reg-input dropdown" name="usertype">
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>
                </li>
                <li>
                    <span class="label">Username</span><br/>
                    <input class="login-input-box" name="username" type="text" required/>
                </li>
                <li>
                    <span class="label">Password</span><br/>
                    <input class="login-input-box" name="password" type="password" required/>
                </li>
                <li>
                    <input class="log-in-btn" type="submit" value="Log In"/>
                </li>
                <li>
                    <a href="forgetpassword.php">Forget Password?</a>
                </li>
            </ul>
        </form>
        <?php if($user_exits==FALSE): ?>
        <div class="result-box">
            <p class="p-1">This Username does not exist.</p>
            <p class="p-2">Did you register yoursef?</p>
        </div>
        <?php elseif($find_user==FALSE): ?>
        <div class="result-box">
            <p class="p-1">Please enter your password correctly.</p>
        </div>
        <?php elseif($active_user==FALSE): ?>
        <div class="result-box">
            <p class="p-1">This account is still not activated.</p>
            <p class="p-2">Try another time</p>
        </div>
    <?php endif; ?>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
