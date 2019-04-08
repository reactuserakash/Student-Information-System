<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
        <div class="student-content">
        <p class="profile-header">Add Curriculum</p>
        <form action ="addcurriculam.php" method="POST">
            <ul class="addcurriculam-form">
                <li>
                    <span class="label">Subject Code</span><br/>
                    <input class="reg-input valid" name="subject-code" id="code" onblur="validCode()" required/>
                </li>
                <li>
                    <span class="label">Subject Name</span><br/>
                    <input class="reg-input valid" name="subject-name" id="s_name" onblur="validName()" required/>
                </li>
                <li>
                    <span class="label">Department</span><br/>
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
                </li>
                <li>
                    <span class="label">Semester</span><br/>
                    <select class="reg-input valid dropdown" name="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </li>
                <li>
                    <span class="label">Credit</span><br/>
                    <select class="reg-input valid dropdown" name="credit">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </li>
                <li>
                    <span class="label">Faculty</span><br/>
                    <input class="reg-input valid" name="faculty" id="faculty" onblur="validFaculty()" required/>
                </li>
                <li>
                    <input class="log-in-btn" type="submit" value="Add"/>
                </li>
            </ul>
        </form>
        <?php
            if($subjectExists==TRUE) {
                echo '<p class="p-1" style="color:red;">Subject Aleady Exists....</p>' ;
            } 
            if($showAddMessage==TRUE){
                echo '<p>Subject Added to list....</p>' ;
            }
        ?>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
