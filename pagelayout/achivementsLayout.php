<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/studentmenu/studentmenu.php") ?>
        <div class="student-content">
            <a href="newachivement.php" class="log-in-btn">Add Achievements</a>
            <p class="profile-header">Achievements</p>
            <div class="achivement-list">
                <ul>
                    <?php
                        if(sizeof($data) > 0) {
                            foreach($data as $subject):
                                echo "<li>$subject[0]</li>";
                            endforeach;
                        } 
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
