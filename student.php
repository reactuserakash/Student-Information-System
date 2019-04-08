<?php
    include("server/init.php");
    session_start();
    if(isset($_GET['username'])){
        $username = $_GET['username'];
    }

    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        $result = mysqli_query($conn,"SELECT * FROM student WHERE username='$user'"); 
        $data=mysqli_fetch_assoc($result);
        include("pagelayout/profileLayout.php");
    } else {
        if($username){
            $_SESSION["username"]=$username;
            $header="Location:student.php?username=$username";
            header($header);
        }
        else {
            header("Location:login.php");
        }      
    }
?>