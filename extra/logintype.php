<?php
    include("server/init.php");
    include("server/function/studentLogin.php");
    if(empty($_POST)===FALSE) {
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $usertype = mysqli_real_escape_string($conn,$_POST["usertype"]);

        #echo $username, $password , $usertype;
        $user_exits = TRUE;
        $find_user = TRUE;
        $active_user = TRUE;

        if($usertype=="student") {
            if(user_exists($conn,$username)==0){
                $user_exits = FALSE;
            } else if(find_user($conn,$username,$password)==0){
                $find_user = FALSE;
            } else if(is_user_active($conn,$username,$password)==0){
                $active_user = FALSE;
            } else {
                $header="Location:student.php?username=$username&password=$password";
                header($header);                
            }
        } else {
            header("Location:admin.php?username=$username&password=$password");
        }
    }
?>
<?php include("components/html/header/header.php"); ?>
<div class="confirm-page">
    <?php include("components/html/navbar/navbar.php"); ?>
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
<?php include("components/html/footer/footer.php"); ?>
