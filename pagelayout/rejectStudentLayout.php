<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
        <div class="student-content">
            <p class="profile-header">Rejected Students</p>
            <ul class="new-student-list">
                <?php foreach($newStudentData as $eachStudent):?>
                <li>
                    <div class="request-card">
                        <p class="request-card-name"><?php echo $eachStudent[1]; ?></p>
                        <p class="request-card-reg-number"><?php echo $eachStudent[2]; ?></p>
                        <p class="request-card-department"><?php echo $eachStudent[3]; ?></p>
                        <ul class="accept-reject">
                            <li><form action="rejectstudent.php?id=<?php echo $eachStudent[0]?>" method="POST">
                            <input type="submit" class="add-new-btn" name="btn" value="ACCEPT"/>
                            </form></li>
                        </ul>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>