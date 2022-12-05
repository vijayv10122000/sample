<div style="width:100%" class="modal fade" id="edit_employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
    <div class="modal-content">
    <div class="modal-header p-3  ">
        <h5 class="modal-title text-sm" id="exampleModalLabel">Enroll Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
    </div>
    <div class="modal-body p-1" >
    <div class="modal-body">
    <form action="./code.php" role="form" class="needs-validation" onsubmit="return vlidation()";  
    id="add-employee" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <h4>User Information</h4>
        <hr class="dotter">
        <input type="hidden" name="id" value="<?php echo ''.$row['ID'].'';?>">
        <div class="form-group">
            <h5>Full Name:</h5>
            <input type="text" name="full_name" value="<?php echo ''.$row['Full Name'].'';?>" class="form-control form-control-flat" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <h5>Mobile Primary:</h5>
            <input type="number" name="mobile_primary" value="<?php echo ''.$row['Mobile Primary'].'';?>" class="form-control form-control-flat" placeholder="Mobile Primary" required>
        </div>
        <div class="form-group">
            <h5>Mobile Secondary:</h5>
            <input type="number" name="mobile_secondary" value="<?php echo ''.$row['Mobile Secondary'].'';?>" class="form-control form-control-flat" placeholder="Mobile Secondary">
        </div>
        <div class="form-group">
            <h5>Email:</h5>
            <input type="email" name="email" value="<?php echo ''.$row['Email'].'';?>" class="form-control form-control-flat" placeholder="Email" required>
        </div>
            
        <div class="form-group">
            <h5>Present Address:</h5>
            <input type="text" name="present_address" value="<?php echo ''.$row['Present Address'].'';?>" class="form-control form-control-flat" placeholder="Present Address" id="address">
        </div>  
        <div class="form-group">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="addcheckbox" value="" onclick="sameaddress()" >
                <label>: Check this if the permanent is same as above</label>
            </div>
        <div class="form-group">
            <h5>Permanent Address</h5>
            <input type="text" name="permanent_address" value="<?php echo ''.$row['Permanent Address'].'';?>" class="form-control form-control-flat" placeholder="Permanent Address" id="peraddress">
        </div>
        <hr class="dotted">
        <h4>Personal Information</h4>
        <hr class="dotted">
        <div class="form-group">
            <h5>Blood Group:</h5>
            <?php
                $selected= ''.$row['Blood Group'].'';
                $options = array( 'Choose Blood Group','O+','O-','A+','A-','B+','B-','AB+','AB-');

                echo '<select name="blood_group" class="form-control form-control-flat" value= required>';
                foreach($options as $option){
                    if($selected==$option){
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else{
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo '</select>';

            ?>
            
        </div>
        <div class="form-group">
            <h5>Nationality:</h5>
            <input type="text" name="nationality" value="<?php echo ''.$row['Nationality'].'';?>" class="form-control form-control-flat" placeholder="Nationality">
        </div>
        <div class="form-group">
             <h5>Mother Tongue</h5>
            <input type="text" name="mother_tongue" value="<?php echo ''.$row['Mother Tongue'].'';?>" class="form-control form-control-flat" placeholder="Mother Tongue">
        </div>
        <div class="form-group date-fields">
             <h5>Date of Birth:</h5>
            <input type="date" name="dob" value="<?php echo ''.$row['Date of Birth'].'';?>" class="form-control form-control-flat" placeholder="Date of Birth" data-date-format="DD-MM-YYYY" required>
        </div>
        <div class="vertical-spacing"></div>
        <div class="form-group">
            <label for="gender">Gender : </label>
            <div class="clear"></div>
            <div class="form-check form-switch">
                <input type="hidden" id="gender" name="gender" value="<?php echo ''.$row['Gender'].'';?>">
                <input class="form-check-input" type="checkbox" role="switch" id="male" value="Male" onclick="malegenderdata()" checked="checked" >
                <label class="form-check-label" for="">:Male</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" value="Female" id="female" onclick="femalegenderdata()">
                <label class="form-check-label" for="">:Female</label>
            </div>
        <div class="clear"></div>
        <div class="form-group">
            <h5>Father Name:</h5>
            <input type="text" name="father_name" value="<?php echo ''.$row['Father name'].'';?>" class="form-control form-control-flat" placeholder="Father Name">
        </div>
        <div class="form-group">
            <h5>Mother Name:</h5>
            <input type="text" name="mother_name" value="<?php echo ''.$row['Mother name'].'';?>" class="form-control form-control-flat" placeholder="Mother Name">
        </div>
        <div class="form-group">
            <label for="mstatus">Marital Status : </label>
            <div class="clear"></div>
            <div class="form-check form-switch">
                <input type="hidden" id="mstatus" name="mstatus" value="<?php echo ''.$row['Marital Status'].'';?>">
                <input class="form-check-input" type="checkbox" role="switch" id="msingle" value="Single" onclick="smarriedstatus()" checked="checked" >
                <label class="form-check-label" for="">:Single</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" value="Married" id="mmarried" onclick="mmarriedstatus()">
                <label class="form-check-label" for="">:Married</label>
            </div>

        </div>
        <hr class="dotted">
        <h4>Position and Department</h4> 
        <hr class="dotted">
        <div class="form-group">
            <h5>Designation</h5>
            <?php
                $selected= ''.$row['Designation'].'';
                $options = array( 'Choose Designation','Trainer','HR','Developer','Manager','CEO');

                echo '<select name="id_designation" class="form-control form-control-flat" required>';
                foreach($options as $option){
                    if($selected==$option){
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else{
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo '</select>';

            ?>
            
        </div>
        <div class="form-group date-fields">
            <h5>Date of Joining:</h5>
            <div class="input-group date" id="datepicker-2">
                
                <input type="date" name="doj" value="<?php echo ''.$row['Date of Joining'].'';?>" class="form-control form-control-flat" placeholder="Date of Joining" data-date-format="DD-MM-YYYY" required>
        </div>
        </div>
        <div class="vertical-spacing"></div>
        <div class="form-group dropdown-fields">
            <h5>Employee Status:</h5>
            <?php
                $selected= ''.$row['Employee Status'].'';
                $options = array( 'Employee Status','Probation Period','Permanent');

                echo '<select name="probation_period" class="form-control form-control-flat" value= required>';
                foreach($options as $option){
                    if($selected==$option){
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else{
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo '</select>';

            ?>
            
        </div>
        <div class="form-group">
            <h5>Qualification:</h5>
            <?php
                $selected= ''.$row['Highest Qualification'].'';
                $options = array( 'Choose Highest Qualification','10th Exam','12th Exam','Diploma','Degree','Engineering');

                echo '<select name="qualification" class="form-control form-control-flat" value= required>';
                foreach($options as $option){
                    if($selected==$option){
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else{
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo '</select>';

            ?>
        </div>
        <input type="hidden" id="regdate"name="regdate">
        <input type="hidden" id="profile_pic" name="profile_pic">
        <div class="form-group">
            <h5>Qualification:</h5>
            <?php
                $selected= ''.$row['role'].'';
                $options = array( 'Choose Access and Control','admin','user');

                echo '<select name="role" class="form-control form-control-flat" value= required>';
                foreach($options as $option){
                    if($selected==$option){
                        echo "<option selected='selected' value='$option'>$option</option>";
                    }
                    else{
                        echo "<option value='$option'>$option</option>";
                    }
                }
                echo '</select>';

            ?>
        </div>
        <button name="edit_employee" type="submit" id="edit_employee" class="btn btn-primary btn-flat pull-left" >Submit</button>
        
    </div>
    </form>      
    </div>
    </div>
    
    </div>
</div>
</div>
</div>
