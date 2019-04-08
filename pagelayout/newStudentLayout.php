<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
        <div class="student-content">
            <p class="profile-header">New Student Request</p>
            <ul class="new-student-list">
                <?php foreach($newStudentData as $eachStudent):?>
                <li>
                    <div class="request-card">
                        <p class="request-card-name"><?php echo $eachStudent[1]; ?></p>
                        <p class="request-card-reg-number"><?php echo $eachStudent[2]; ?></p>
                        <p class="request-card-department"><?php echo $eachStudent[3]; ?></p>
                        <ul class="accept-reject">
                            <li><form action="newstudent.php?id=<?php echo $eachStudent[0]?>&type=<?php echo 'accept';?> " method="POST">
                            <input type="submit" class="add-new-btn" name="btn" value="ACCEPT"/>
                            </form></li>
                            <li><form action="newstudent.php?id=<?php echo $eachStudent[0];?>&type=<?php echo 'reject';?>" method="POST">
                            <input type="submit" class="add-new-btn" name="btn" value="REJECT"/>
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