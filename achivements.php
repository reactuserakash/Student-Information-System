<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $result = mysqli_query($conn,"SELECT achievement FROM achievement WHERE username='$user'");
        $data=mysqli_fetch_all($result);
        include("pagelayout/achivementsLayout.php");
    } else {
        header("Location:login.php");
    }
?>