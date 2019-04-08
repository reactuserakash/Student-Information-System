<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/studentmenu/studentmenu.php") ?>
        <div class="student-content">
            <p class="profile-header">Add New Achivements</p>
            <form action="newachivement.php" method="POST">
                <ul class="achi-post">
                    <li><textarea class="textarea achi-text" name="achivement"></textarea></li>
                    <li><input class="reg-btn reg-active" type="submit" name="submit" value="add"/></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
