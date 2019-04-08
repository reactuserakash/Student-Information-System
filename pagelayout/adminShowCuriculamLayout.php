<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
        <div class="student-content">
        <p class="profile-header">Curriculm</p>
        <form action ="admincurriculam.php" method="POST">
            <ul class="syllabus-form">
                <li>
                    <span class="label">Search By</span><br/>
                    <select class="reg-input valid dropdown" name="search-by">
                        <option value="code">Subject Code</option>
                        <option value="name">Subject Name</option>
                        <option value="department">Department</option>
                        <option value="faculty">Faculty</option>
                    </select>
                </li>
                <li>
                    <span class="label">Input Box</span><br/>
                    <input class="reg-input valid" name="input-data"/>
                </li>
                <li>
                    <input class="log-in-btn" type="submit" value="Show"/>
                </li>
            </ul>
        </form>
        <?php
            if($data!=NULL) {
                include("components/html/syllabusTable/adminsyllabusTable.php") ;
            }
            if($found==FALSE){
                echo "<p style='color:red;font-size:30px;font-weight:bold'>No result found...</p>";
            }
        ?>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
