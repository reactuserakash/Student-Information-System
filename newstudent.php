<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $data = NULL;
        $newStudentResult = mysqli_query($conn,"SELECT id,name,reg_no,department FROM student WHERE activated=0");
        $newStudentData=mysqli_fetch_all($newStudentResult);
        if(empty($_POST)===FALSE) {
            $id = $_GET['id'];
            $type = $_GET['type'];
            echo $type;
            if($type=='accept'){
                mysqli_query($conn,"UPDATE student SET activated=1 WHERE id='$id'");
            } else {
                mysqli_query($conn,"UPDATE student SET activated=-1 WHERE id='$id'");
            }
            header("Location:newstudent.php");
        }
        include("pagelayout/newStudentLayout.php");
    } else {
        header("Location:login.php");
    }
?>