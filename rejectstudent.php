<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $data = NULL;
        $newStudentResult = mysqli_query($conn,"SELECT id,name,reg_no,department FROM student WHERE activated=-1");
        $newStudentData=mysqli_fetch_all($newStudentResult);
        if(empty($_POST)===FALSE) {
            $id = $_GET['id'];
            mysqli_query($conn,"UPDATE student SET activated=1 WHERE id='$id'");
            header("Location:rejectstudent.php");
        }
        include("pagelayout/rejectStudentLayout.php");
    } else {
        header("Location:login.php");
    }
?>