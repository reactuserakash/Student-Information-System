<?php
    function user_exists($conn,$type,$username) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM $type WHERE username='$username'"); 
        $data=mysqli_fetch_assoc($result); 
        return $data['total'];
    }

    function find_user($conn,$type,$username,$password) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM $type WHERE username='$username' AND password='$password'"); 
        $data=mysqli_fetch_assoc($result);
        return $data['total'];
    }
    
    function is_user_active($conn,$type,$username,$password) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM $type WHERE username='$username' AND password='$password' AND activated=1"); 
        $data=mysqli_fetch_assoc($result); 
        return $data['total'];
    }

    function is_reg_exists($conn,$regNo) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM student WHERE reg_no='$regNo'"); 
        $data=mysqli_fetch_assoc($result); 
        return $data['total'];
    }

    function is_reg_dob_exists($conn,$regNo,$dob) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM student WHERE reg_no='$regNo' and dateofbirth='$dob'"); 
        $data=mysqli_fetch_assoc($result); 
        return $data['total'];
    }

    function is_sQuestion($conn,$regNo,$dob,$sQuestion,$sAnswer) {
        $result = mysqli_query($conn,"SELECT COUNT('id') as total FROM student WHERE reg_no='$regNo' AND dateofbirth='$dob' AND s_question='$sQuestion' AND s_answer='$sAnswer'"); 
        $data=mysqli_fetch_assoc($result); 
        return $data['total'];
    }
?>
