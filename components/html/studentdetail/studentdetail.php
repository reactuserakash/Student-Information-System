<div class="student-content">
    <div class="profile-box">
        <div class="s-first">
            <p class="first-1"><?php echo $data['name'];?></p>
            <p class="first-2"><?php echo $data['reg_no'];?><span style="padding-left: 15px;"><?php echo $data['department'];?></span></p>
        </div>
        <div class="info-section">
            <p class="info-header">Personal Information</p>
            <div class="info-holder">
                <ul class="info-list">
                    <li><p><span class="field-name">Father's Name</span> : <?php echo $data['father'];?></p></li>
                    <li><p><span class="field-name">Mothers's Name</span> : <?php echo $data['mother'];?></p></li>
                    <li><p><span class="field-name">Date of birth</span> : <?php echo $data['dateofbirth'];?></p></li>
                    <li><p><span class="field-name">Gender</span> : <?php echo $data['gender'];?></p></li>
                    <li><p><span class="field-name">Religion</span> : <?php echo $data['religion'];?></p></li>
                    <li><p><span class="field-name">Caste</span> : <?php echo $data['caste'];?></p></li>
                    <li><p><span class="field-name">Hobby</span> : <?php echo $data['hobby'];?></p></li>
                </ul>
            </div>
        </div>
        <div class="info-section">
            <p class="info-header">Address Information</p>
            <div class="info-holder">
                <ul class="info-list">
                    <li><p><span class="field-name">City/Village</span> : <?php echo $data['city'];?></p></li>
                    <li><p><span class="field-name">District</span> : <?php echo $data['district'];?></p></li>
                    <li><p><span class="field-name">State</span> : <?php echo $data['state'];?></p></li>
                    <li><p><span class="field-name">Post Office</span> : <?php echo $data['postoffice'];?></p></li>
                    <li><p><span class="field-name">Pincode</span> : <?php echo $data['pincode'];?></p></li>
                </ul>
            </div>
        </div>
        <div class="info-section">
            <p class="info-header">Contact Information</p>
            <div class="info-holder">
                <ul class="info-list">
                <li><p><span class="field-name">Phone Number</span> : <?php echo $data['phone'];?></p></li>
                <li><p><span class="field-name">E-mail address</span> : <?php echo $data['email'];?></p></li>
                </ul>
            </div>
        </div>
    </div>
</div>