<?php include("components/html/header/header.php"); ?>
<div class="student-page">
    <div class="student_page_full">
        <?php include("components/html/adminmenu/adminmenu.php") ?>
            <div class="full">
                <form action="fullprofile.php?id=<?php echo $id; ?>" method="POST">
                    <input type="submit" class="add-new-btn-delete" name="btn" value="Delete Profile"/>
                </form>
                <?php
                if($data!=NULL) {
                    include("components/html/studentdetail/studentdetail.php") ;
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php include("components/html/footer/footer.php"); ?>
