<?php
    include("server/init.php");
    session_start();

    if(isset($_SESSION["username"])) {
        $user = $_SESSION['username'];
        //$pass = $_SESSION['password'];
        $reg_num = NULL;
        $data = NULL;
        $subjectExists = FALSE;
        $showAddMessage = FALSE;
        if(empty($_POST)===FALSE) {
            $subjectcode = mysqli_real_escape_string($conn,$_POST["subject-code"]);
            $subjectname = mysqli_real_escape_string($conn,$_POST["subject-name"]);
            $department = mysqli_real_escape_string($conn,$_POST["department"]);
            $semester = mysqli_real_escape_string($conn,$_POST["semester"]);
            $credit = mysqli_real_escape_string($conn,$_POST["credit"]);
            $faculty = mysqli_real_escape_string($conn,$_POST["faculty"]);
            //echo $semester,$subjectcode,$subjectname,$department,$credit,$faculty;
            $result = mysqli_query($conn,"SELECT * FROM subject WHERE code='$subjectcode'");
            if($result->num_rows == 0) {
                $query = "INSERT INTO subject(code,name,department,semester,credit,faculty) 
                            VALUES('$subjectcode','$subjectname','$department',$semester,$credit,'$faculty')";
                //$query= "SELECT * FROM subject";
                if(mysqli_query($conn,$query)) {
                    $showAddMessage = TRUE;
                    ///echo "Added to table...";
                }
                ///echo "Added...."; 
            } else {
                $subjectExists = TRUE;
            }
            //var_dump($data);
        }
        include("pagelayout/addCurriculamLayout.php");
    } else {
        header("Location:login.php");
    }
?>