<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        if(isset($_POST['submit'])){
            $achivement = mysqli_real_escape_string($conn,$_POST["achivement"]);
            if(strlen($achivement)>0){
                $query = "INSERT INTO achievement(username,achievement) VALUES('$user','$achivement')";
                if(mysqli_query($conn,$query)){
                    header("Location:achivements.php");
                }
            }
        }
        include("pagelayout/newachivemetLayout.php");
    } else {
        header("Location:login.php");
    }
?>