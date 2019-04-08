<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $found = TRUE;
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $reg_num = NULL;
        $data = NULL;
        if(empty($_POST)===FALSE) {
            $input_data = mysqli_real_escape_string($conn,$_POST["input-data"]);
            $search_by = mysqli_real_escape_string($conn,$_POST["search-by"]);
            $result = NULL;
            //echo $input_data,$search_by;
            if($search_by == "code") {
                $result = mysqli_query($conn,"SELECT * FROM subject WHERE code REGEXP'$input_data'"); 
            } else if($search_by == "name") {
                $result = mysqli_query($conn,"SELECT * FROM subject WHERE name REGEXP '$input_data'"); 
            } else if($search_by == "department") {
                $result = mysqli_query($conn,"SELECT * FROM subject WHERE department='$input_data'");
            } else {
                $result = mysqli_query($conn,"SELECT * FROM subject WHERE faculty REGEXP '$input_data'");
            }
            $data=mysqli_fetch_all($result);
            //var_dump($data);
            if(sizeof($data)==0){
                $found = FALSE;
            } else {
                $found = TRUE;
            }
        }
        include("pagelayout/adminShowCuriculamLayout.php");
    } else {
        header("Location:login.php");
    }
?>