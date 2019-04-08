<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
        <div class="student-content">
        <p class="profile-header">Find Students</p>
        <form action ="findstudent.php" method="POST" name="findForm">
            <ul class="syllabus-form">
                <li>
                    <span class="label">Search By</span><br/>
                    <select class="reg-input valid dropdown" name="search-by" id="searchType">
                        <option value="username">Username</option>
                        <option value="studentname">Student Name</option>
                        <option value="reg-no">Registration Number</option>
                    </select>
                </li>
                <li>
                    <span class="label">Input Box</span><br/>
                    <input class="reg-input valid" name="input-data" id="searchinput" required/>
                </li>
                <li>
                    <input class="log-in-btn" type="submit" value="Show"/>
                </li>
                <li>
                    <ul class="example">
                        <li><p><span class="ex-type">Username</span> Ex. akash, prithi</p></li>
                        <li><p><span class="ex-type">Student Name</span> Ex. Shankar Ray</p></li>
                        <li><p><span class="ex-type">Reg. No</span> Ex. 16U10676</p></li>
                    </ul>
                </li>
            </ul>
        </form>
        <?php
            if($data!=NULL) {
                include("components/html/searchlist/searchlist.php") ;
            }
            if($found==FALSE){
                echo "<p style='color:red;font-size:30px;font-weight:bold'>No result found...</p>";
            }
        ?>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
