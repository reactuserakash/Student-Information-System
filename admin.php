<?php
    include("server/init.php");
    session_start();
    $username = $_GET['username'];

    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        //echo $user,$pass;
        #$result = mysqli_query($conn,"SELECT * FROM student WHERE username='$user' AND password='$pass'"); 
        #$data=mysqli_fetch_assoc($result);
        include("pagelayout/adminLayout.php");
    } else {
        if($username){
            $_SESSION["username"]=$username;
            $header="Location:admin.php?username=$username";
            header($header);
        }
        else {
            header("Location:login.php");
        }      
    }
?>