<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $input_data = NULL;
        $search_by = NULL;
        $data = NULL;
        $result = NULL;
        $found = TRUE;
        if(empty($_POST)===FALSE) {
            $input_data = mysqli_real_escape_string($conn,$_POST["input-data"]);
            $search_by = mysqli_real_escape_string($conn,$_POST["search-by"]);
            if($search_by == "username") {
                $result = mysqli_query($conn,"SELECT * FROM student WHERE username REGEXP '$input_data'"); 
            } else if($search_by == "studentname") {
                $result = mysqli_query($conn,"SELECT * FROM student WHERE name REGEXP'$input_data'"); 
            } else {
                $result = mysqli_query($conn,"SELECT * FROM student WHERE reg_no REGEXP'$input_data'");
            }
            $data=mysqli_fetch_all($result);
            //var_dump($data);
            if(sizeof($data)==0){
                $found = FALSE;
            } else {
                $found = TRUE;
            }
        }
        include("pagelayout/findstudentLayout.php");
    } else {
        header("Location:login.php");
    }
?>