<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/studentmenu/studentmenu.php") ?>
        <div class="student-content">
        <form action ="curriculum.php" method="POST">
            <ul class="syllabus-form">
                <li>
                    <span class="label">Department</span><br/>
                    <select class="reg-input dropdown" name="department">
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
                    <select class="reg-input dropdown" name="semester">
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
                    <input class="log-in-btn" type="submit" value="Show"/>
                </li>
            </ul>
        </form>
        <?php
            if($data!=NULL) {
                include("components/html/syllabusTable/syllabusTable.php") ;
            }
        ?>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
