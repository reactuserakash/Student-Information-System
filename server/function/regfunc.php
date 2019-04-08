<?php
    if(empty($_POST)===FALSE) {
        $username = mysqli_real_escape_string($conn,$_POST["username"]);
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $name = mysqli_real_escape_string($conn,$_POST["name"]);
        $registration_number = mysqli_real_escape_string($conn,$_POST["registration-number"]);
        $department = mysqli_real_escape_string($conn,$_POST["department"]);
        $father_name = mysqli_real_escape_string($conn,$_POST["father-name"]);
        $mother_name = mysqli_real_escape_string($conn,$_POST["mother-name"]);
        $date_of_birth = mysqli_real_escape_string($conn,$_POST["date-of-birth"]);
        $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
        $religion = mysqli_real_escape_string($conn,$_POST["religion"]);
        $caste = mysqli_real_escape_string($conn,$_POST["caste"]);
        $city = mysqli_real_escape_string($conn,$_POST["city"]);
        $district = mysqli_real_escape_string($conn,$_POST["district"]);
        $state = mysqli_real_escape_string($conn,$_POST["state"]);
        $post_office = mysqli_real_escape_string($conn,$_POST["post-office"]);
        $pincode = mysqli_real_escape_string($conn,$_POST["pincode"]);
        $phone_number = mysqli_real_escape_string($conn,$_POST["phone-number"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $s_question = mysqli_real_escape_string($conn,$_POST["sequrity_question"]);
        $s_answer = mysqli_real_escape_string($conn,$_POST["sequrity_answer"]);

        $full_hobby = mysqli_real_escape_string($conn,$_POST["hobby-full"]);


        if(!empty($_POST['hobby_list'])) {
            $comma_separated = implode(",", $_POST['hobby_list']);
            $full_hobby = $comma_separated . ",". $full_hobby;
        }
        //echo $full_hobby;

        /*echo $username,"\n";
        echo $password,"\n";
        echo $name,"\n";
        echo $registration_number,"\n";
        echo $department,"\n";
        echo $father_name,"\n";
        echo $mother_name,"\n";
        echo $date_of_birth,"\n";
        echo $gender,"\n";
        echo $religion,"\n";
        echo $caste,"\n";
        echo $city,"\n";
        echo $district,"\n";
        echo $state,"\n";
        echo $post_office,"\n";
        echo $pincode,"\n";
        echo $phone_number,"\n";
        echo $email,"\n";
        echo $hobby_1,"\n";
        echo $hobby_2,"\n";*/

        $regNumExists = FALSE;
        $userNameExists = FALSE;

        $query_1 = "SELECT * FROM student WHERE reg_no='$registration_number'";
        $result_1 = mysqli_query($conn,$query_1);
        if($result_1->num_rows > 0){
            #echo "Already user exists";
            $regNumExists = TRUE;
        } else {
            $query_2 = "SELECT * FROM student WHERE username='$username'";
            $result_2 = mysqli_query($conn,$query_2);
            if($result_2->num_rows > 0) {
                #echo "Username alrady exists";
                $userNameExists = TRUE;
            } else {
                $query_3 = "INSERT INTO student(username,password,name,reg_no,department,father,mother,dateofbirth,gender,religion,caste,
                                        city,district,state,postoffice,pincode,phone,email,hobby,s_question,s_answer)
                 VALUES('$username','$password','$name','$registration_number','$department','$father_name','$mother_name',
                        '$date_of_birth','$gender','$religion','$caste','$city','$district','$state','$post_office',
                        '$pincode','$phone_number','$email','$full_hobby','$s_question','$s_answer')";
                if(mysqli_query($conn,$query_3)) {
                    #echo "Registration Done";
                } else  {
                    echo mysqli_error($conn);
                }
            }
        }

        
        /*$query = "INSERT INTO student(username,password,name,reg_no,department,father,mother,dateofbirth,gender,religion,caste,
                                        city,district,state,postoffice,pincode,phone,email,hobby)
                 VALUES('$username','$password','$name','$registration_number','$department','$father_name','$mother_name',
                        '$date_of_birth','$gender','$religion','$caste','$city','$district','$state','$post_office',
                        '$pincode','$phone_number','$email','$hobby_1')";
        if(mysqli_query($conn,$query)) {
            echo "Hello";
        } else  {
            echo mysqli_error($conn);
        }*/
    }
?>