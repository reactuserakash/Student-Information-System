<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $department = NULL;
        $semester = NULL;
        $data = NULL;
        if(empty($_POST)===FALSE) {
            $department = mysqli_real_escape_string($conn,$_POST["department"]);
            $semester = mysqli_real_escape_string($conn,$_POST["semester"]);
            //echo $department,$semester;
            $result = mysqli_query($conn,"SELECT * FROM subject WHERE department='$department' AND semester=$semester");
            $data=mysqli_fetch_all($result);
            //var_dump($data);
        }
        include("pagelayout/syllabusLayout.php");
    } else {
        header("Location:login.php");
    }
?>