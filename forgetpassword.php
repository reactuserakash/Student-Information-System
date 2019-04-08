<?php include("components/html/header/header.php"); ?>
<?php 
    $user_exits = TRUE;
    $reg = TRUE;
    $reg_dob = TRUE;
    $question = TRUE;
    $reset = FALSE;
    include("server/init.php");
    include("server/function/studentLogin.php");
    if(empty($_POST)===FALSE) {
        $regno = mysqli_real_escape_string($conn,$_POST["reg_number"]);
        $dob = mysqli_real_escape_string($conn,$_POST["date-of-birth"]);
        $sQuestion = mysqli_real_escape_string($conn,$_POST["sequrity_question"]);
        $sAnswer = mysqli_real_escape_string($conn,$_POST["sequrity_answer"]);
        $newpassword = mysqli_real_escape_string($conn,$_POST["new_password"]);

        if(is_reg_exists($conn,$regno)==0){
            $reg = FALSE;
        } else if(is_reg_dob_exists($conn,$regno,$dob)==0){
            $reg_dob = FALSE;
        } else if(is_sQuestion($conn,$regno,$dob,$sQuestion,$sAnswer)==0){
            $question = FALSE;
        } else {
            $result = mysqli_query($conn,"UPDATE student SET password='$newpassword' WHERE reg_no='$regno'");
            $reset = TRUE;
            header("Location:login.php");
        }
        

        /*$result = mysqli_query($conn,"SELECT COUNT('id') as total FROM student WHERE reg_no='$regno' AND dateofbirth='$dob' AND s_question='$sQuestion' AND s_answer='$sAnswer'"); 
        $data = mysqli_fetch_assoc($result);
        if($data['total']==0){
            $user_exits=FALSE;
            //echo "no user";
        } else {
            $result = mysqli_query($conn,"UPDATE student SET password='$newpassword' WHERE reg_no='$regno'");
            $reset = TRUE;
            header("Location:login.php");
        }*/
    }

?>
<div class="forget-password-page">
<?php include("components/html/navbar/navbar.php"); ?>

    <div class="forget-form">
        <p class="p-1">Trouble Logging In?</p>
        <p class="p-2">Try to reset your password</p>
        <form action="forgetpassword.php" method="POST">
        <ul>
            <li>
                <span class="label">Registraion Number</span><br/>
                <input class="reg-input valid" name="reg_number" type="text" id="userReg" onblur="userRegNumberValidate()" autocomplete="off"/>
            </li>
            <li>
                <span class="label">Date of birth</span><br/>
                <input class="reg-input valid" name="date-of-birth" type="date" id="DOB"  required/>
            </li>
            <li>
                <span class="label">Type new password</span><br/>
                <input class="reg-input valid" name="new_password" type="text" id="pass-1" onblur="userPasswordValidate(1)" autocomplete="off"/>
            </li>
            <li><ul class="each-row aaaa" style="padding-left: 0px;">
                <li>
                    <span class="label">Sequrity Question</span><br/>
                    <div class="tooltip">
                    <select class="reg-input valid email" name="sequrity_question">
                        <option value="pet">What is the name of your favourive pet?</option>
                        <option value="book">What is the name of your favourive book?</option>
                        <option value="actor">What is the name of your favourive actor?</option>
                        <option value="movie">What is the name of your favourive movie?</option>
                    </select>
                    <span class="tooltiptext valid">Sequrity Question</span>
                    </div>
                </li>
                <li>
                    <span class="label">Your Answer</span><br/>
                    <div class="tooltip">
                        <input class="reg-input valid" name="sequrity_answer" type="text"  id="answer" onblur="answerValidate()" autocomplete="off" required/>
                        <span class="tooltiptext">Write your answer here</span>
                    </div>
                </li>
            </ul></li>
            <li>
                <input class="log-in-btn" type="submit" value="Reset"/>
            </li>
        </ul>
        </form>
        <?php if($reg==FALSE): ?>
        <div class="result-box">
            <p class="p-1">This registration number does not exist.</p>
            <p class="p-2">Did you register yoursef?</p>
        </div>
        <?php elseif($reg_dob==FALSE): ?>
        <div class="result-box">
            <p class="p-1">Please enter your date of birth correctly.</p>
        </div>
        <?php elseif($question==FALSE): ?>
        <div class="result-box">
            <p class="p-1">Incorrent sequrity question and answer.</p>
        </div>
    <?php endif; ?>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>