<p class="profile-header">Search Result</p>
<div class="profile-box">
    <div class="table">
        <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link" href="#">Id</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Name</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Reg.Number</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Department</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Profile</a></div>
        </div>
        <div class="table-content">	
            <?php foreach($data as $student): ?>
                <div class="table-row">		
                    <div class="table-data"><?php echo $student[0]; ?></div>
                    <div class="table-data"><?php echo $student[3]; ?></div>
                    <div class="table-data"><?php echo $student[4]; ?></div>
                    <div class="table-data"><?php echo $student[5]; ?></div>
                    <div class="table-data"><a href="fullprofile.php?id=<?php echo $student[0]; ?>" class="hero-register-button" target="_blank">View</a></div>
                </div>
            <?php endforeach; ?>
        </div>	
    </div>
</div>