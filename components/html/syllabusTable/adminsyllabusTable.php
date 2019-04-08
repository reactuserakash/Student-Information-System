<p class="profile-header">Search Results...</p>
<div class="profile-box">
    <div class="table">
        <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link" href="#">Code</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Name</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Department</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Semester</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Credit</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Faculty</a></div>
        </div>
        <div class="table-content">	
            <?php foreach($data as $subject): ?>
                <div class="table-row">		
                    <div class="table-data"><?php echo $subject[1]; ?></div>
                    <div class="table-data"><?php echo $subject[2]; ?></div>
                    <div class="table-data"><?php echo $subject[3]; ?></div>
                    <div class="table-data"><?php echo $subject[4]; ?></div>
                    <div class="table-data"><?php echo $subject[5]; ?></div>
                    <div class="table-data"><?php echo $subject[6]; ?></div>
                </div>
            <?php endforeach; ?>
        </div>	
    </div>
</div>