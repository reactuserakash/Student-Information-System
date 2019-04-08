<?php 
    include("components/html/header/header.php");
?>
<div class="register-page">
    <?php include("components/html/navbar/navbar.php"); ?>
    <div class="main-div">
        <div class="reg-box">
            <p class="reg-intro">Welcome to Student Information System</p>
            <p class="reg-intro-sub">Let's get you all set up so we can verify your profile<br/> and you can get started.</p>
            <p class="already-account">Already have an account?<span><a href="login.php">Log In</a></span></p>
            <form action="confirm.php" method="POST">
                <ul class="reg-form">
                    <!--row-1--->
                    <li><ul class="each-row">
                        <li>
                            <span class="label">Username</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="username" type="text"  id="username" onblur="userNameValidate()" autocomplete="off"/>
                                <span class="tooltiptext">Only lowercase letters</br>Minimum length 5</span>
                            </div>
                        </li>
                        <li>
                        <span class="label">Password</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="password" id="pass-1" onblur="userPasswordValidate(1)" type="text" autocomplete="off"/>
                                <span class="tooltiptext valid">One Uppercase</br>One Number</br>One Special Sign</br>Minimun lenght 8</span>
                            </div>
                        </li>
                        <li>
                        <span class="label">Confirm Password</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="password2" id="pass-2" onblur="userPasswordValidate(2)" autocomplete="off"/>
                                <span class="tooltiptext valid">Type the same password</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-2--->
                    <li><ul class="each-row">
                        <li>
                            <span class="label">Name</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="name" type="text" id="userRealName" onblur="userFullNameValidate()" autocomplete="off"/>
                                <span class="tooltiptext valid">Student full name</span>
                            </div>
                        </li>
                        <li>
                        <span class="label">Registration Number</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="registration-number" type="text" id="userReg" onblur="userRegNumberValidate()" autocomplete="off"/>
                                <span class="tooltiptext valid">Enter like</br>16U10649</span>
                            </div>
                        </li>
                        <li>
                        <span class="label">Department</span><br/>
                        <div class="tooltip">

                        <select class="reg-input valid dropdown" name="department">
                            <option value="Computer Science and Engineering">CSE</option>
                            <option value="Electonics and Communication Engineering">ECE</option>
                            <option value="Information Technology">IT</option>
                            <option value="Electrical Engineering">ELECTRICAL</option>
                            <option value="Civil Engineering">CIVIL</option>
                            <option value="Mechalical Engineering">MECHANICAL</option>
                            <option value="Metallurgical & Materials Engineering">MME</option>
                            <option value="Chemical Engineering">CHEMICAL</option>
                            <option value="Bio Technology">BT</option>
                        </select>
                        <span class="tooltiptext valid">Select from dropdown</span>
                        </div>
                        </li>
                    </ul></li>
                    <!--row-3--->
                    <li><ul class="each-row">
                        <li>
                        <span class="label">Father's Name</span><br/>
                        <div class="tooltip">
                            <input class="reg-input valid" name="father-name" type="text" id="fatherName" autocomplete="off" onblur="fatherFullNameValidate()" required/>
                            <span class="tooltiptext valid">Father's full name</span>
                        </div>
                        </li>
                        <li>
                        <span class="label">Mother's Name</span><br/>
                        <div class="tooltip">
                            <input class="reg-input valid" name="mother-name" type="text" id="motherName" autocomplete="off" onblur="motherFullNameValidate()" required/>
                            <span class="tooltiptext valid">Mother's full name</span>
                        </div>
                        </li>
                        <li>
                            <span class="label">Date of Birth</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="date-of-birth" type="date" id="DOB" onchange="ageCalculate()" required/>
                            <span class="tooltiptext valid">Select your date</br>of birth</span>
                            </div>
                        </li>
                        <li>
                            <span class="label">Age</span><br/>
                            <div class="tooltip">
                                <p class="age-input" name="age" type="text" id="age">Null</p>
                                <span class="tooltiptext valid">Your age</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-4--->
                    <li><ul class="each-row">
                        <li>
                        <span class="label">Gender</span><br/>
                        <div class="tooltip">
                        <select class="reg-input dropdown" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                        <span class="tooltiptext valid">Select from dropdown</span>

                        </div>
                        </li>
                        <li>
                        <span class="label">Religion</span><br/>
                            <div class="tooltip">
                                <input class="reg-input valid" name="religion" type="text" id="userReligion" autocomplete="off" onblur="religionValidate()" required/>
                                <span class="tooltiptext valid">Enter your religion</span>
                            </div>
                        </li>
                        <li>
                            <span class="label">Caste</span><br/>
                            <div class="tooltip">
                            <select class="reg-input dropdown" name="caste">
                                <option value="General">General</option>
                                <option value="OBC">OBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                            </select>
                            <span class="tooltiptext valid">Select form dropdown</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-5--->
                    <li><ul class="each-row">
                        <li>
                            <span class="label">City/Village</span><br/>
                            <div class="tooltip">
                            <textarea class="textarea" rows="2" name="city" type="textarea" id="userCity" autocomplete="nope" onblur="cityValidate()" required></textarea>
                            <span class="tooltiptext valid">Enter city or village</span>
                            </div>
                        </li>
                        <li>
                            <span class="label">District</span><br/>
                            <div class="tooltip">
                            <input class="reg-input valid" name="district" type="text" id="userDistrict" onblur="districtValidate()" required/>
                            <span class="tooltiptext valid">Enter district</span>
                            </div>
                        </li>
                        <li>
                            <span class="label">State</span><br/>
                            <div class="tooltip">
                            <select class="reg-input dropdown" name="state">
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                            <span class="tooltiptext valid">Select State</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-6--->
                    <li><ul class="each-row">
                        <li>
                            <span class="label">Post Office</span><br/>
                            <div class="tooltip">
                            <input class="reg-input valid" name="post-office" type="text" id="postOffice" onblur="postValidate()" required/>
                            <span class="tooltiptext valid">Enter post office</span>
                            </div>
                        </li>
                        <li>
                            <span class="label">Pincode</span><br/>
                            <div class="tooltip">
                            <input class="reg-input valid" name="pincode" type="number" id="pincode" onblur="pincodeValidate()" required/>
                            <span class="tooltiptext valid">Enter pincode </br>of 6 digits </span>
                            </div>
                        </li>
                        <li>
                            <span class="label">Phone Number</span><br/>
                            <div class="tooltip">                            
                            <input class="reg-input valid" name="phone-number" type="text" id="phoneNumber" onblur="phoneValidate()" required/>
                            <span class="tooltiptext valid">Enter phone number</br>of 10 digits</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-7--->
                    <li><ul class="each-row">
                        <li>
                            <span class="label">E-Mail Address</span><br/>
                            <div class="tooltip">
                            <input class="reg-input valid email" name="email" type="email" id="email" onblur="emailValidate()" required/>
                            <span class="tooltiptext valid">Enter email</span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-8-->
                    <!--row-7--->
                    <li><ul class="each-row">
                        <li>
                        <span class="label">Hobby</span><br/>
                        <div class="tooltip">
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Sports">Sports
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Painting">Painting
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Dance">Dance
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Writing">Writing
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Drawing">Drawing
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Reading">Reading
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Music">Music
                            <input class="ckeckbox" type="checkbox" name="hobby_list[]" value="Photography">Photography
                            <input class="ckeckbox" type="checkbox" name="others" value="others" id="hobby" onchange="hobbySelect()">Others
                            <span class="tooltiptext valid">Select hobby </span>
                            </div>
                        </li>
                        <li class="hobby-text" id ="specificHobby">
                            <span class="label">Specify your hobby</span><br/>
                            <div class="tooltip">
                            <textarea class="textarea" id="hobbyText" name="hobby-full" onblur="hobbyValidate()"></textarea>
                            <span class="tooltiptext valid" >Specify hobby </span>
                            </div>
                        </li>
                    </ul></li>
                    <!--row-8-->
                    <li><ul class="each-row">
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
                    <!--row-9-->
                    <p class="already-account"><input type="checkbox" id="regCheck" onclick="myCheck()"/> Yes, all the given details are correct</p>
                    <!--row-10-->
                        <input class="reg-btn" type="submit" value="Register" id="regBtn"/>
                    <!--<li>
                        <input type="submit" name="submit" value="submit"/>
                    </li>--->
                </ul>
            </form>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
