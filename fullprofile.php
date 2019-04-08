<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $id = $_GET['id'];
        //$user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $data = NULL;
        $result = mysqli_query($conn,"SELECT * FROM student WHERE id='$id'"); 
        $data=mysqli_fetch_assoc($result);
        //include("pagelayout/profileLayout.php");
        if(empty($_POST)===FALSE){
            $id = $_GET['id'];
            echo $id;
            mysqli_query($conn,"DELETE FROM student WHERE id='$id'");
            echo "<script>window.close();</script>";
        }

        include("pagelayout/fullprofileLayout.php");
    } else {
        header("Location:login.php");
    }
?>