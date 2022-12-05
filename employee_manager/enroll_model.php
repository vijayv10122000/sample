<div style="width:100%" class="modal fade" id="enroll-employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" >
                            <div class="modal-content">
                            <div class="modal-header p-3  ">
                                <h5 class="modal-title text-sm" id="exampleModalLabel">Enroll Employee</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                            </div>
                            <div class="modal-body p-1" >
                            <div class="modal-body">
                            <form action="./code.php" role="form" class="needs-validation"  
                            id="add-employee" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                <h5>Login Information</h5>
                                <hr class="dotted">
                                <div class="form-group">
                                    <input type="text" name="employ_id" value="" class="form-control form-control-flat" placeholder="Login ID"  required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="full_name" value="" class="form-control form-control-flat" placeholder="Full Name" required>
                                </div>
                                <hr class="dotted">
                                <h4>Set Password</h4>
                                <hr class="dotted">
                                <div class="form-group">
                                    <input type="password" name="password" value="" class="form-control form-control-flat" placeholder="Password" id="password" required>
                                </div>
                                <div class="error" id="error"></div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" value="" class="form-control form-control-flat" placeholder="Confirm Password" id ="confirm_password" required>
                                </div>
                                <hr class="dotted">
                                <h4>Contact Information</h4>
                                <hr class="dotted">
                                <div class="form-group">
                                    <input type="text" name="mobile_primary" value="" class="form-control form-control-flat" placeholder="Mobile Primary" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mobile_secondary" value="" class="form-control form-control-flat" placeholder="Mobile Secondary">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="" class="form-control form-control-flat" placeholder="Email">
                                </div>
                                <div class="form-group"><input type="text" name="present_address" value="" class="form-control form-control-flat" placeholder="Present Address" id="address">
                                </div>  
                                <div class="form-group">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="addcheckbox" value="" onclick="sameaddress()" >
                                        <label>: Check this if the permanent is same as above</label>
                                    </div>
                                <div class="form-group"><input type="text" name="permanent_address" value="" class="form-control form-control-flat" placeholder="Permanent Address" id="peraddress">
                                </div>
                                <hr class="dotted">
                                <h4>Personal Information</h4>
                                <hr class="dotted">
                                <div class="form-group">
                                    <select name="blood_group" class="form-control form-control-flat">
                                        <option value="" selected="selected">Choose Blood Group</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB">AB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nationality" value="" class="form-control form-control-flat" placeholder="Nationality">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mother_tongue" value="" class="form-control form-control-flat" placeholder="Mother Tongue">
                                </div>
                                <div class="form-group date-fields">
                                        <input type="date" name="dob" value="" class="form-control form-control-flat" placeholder="Date of Birth" data-date-format="DD-MM-YYYY" required>
                                </div>
                                <div class="vertical-spacing"></div>
                                <div class="form-group">
                                    <label for="gender">Gender : </label>
                                    <div class="clear"></div>
                                    <div class="form-check form-switch">
                                        <input type="hidden" id="gender" name="gender">
                                        <input class="form-check-input" type="checkbox" role="switch" id="male" value="Male" onclick="malegenderdata()" checked="checked" >
                                        <label class="form-check-label" for="">:Male</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" value="Female" id="female" onclick="femalegenderdata()">
                                        <label class="form-check-label" for="">:Female</label>
                                    </div>
                                <div class="clear"></div>
                                <div class="form-group">
                                    <input type="text" name="father_name" value="" class="form-control form-control-flat" placeholder="Father Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="mother_name" value="" class="form-control form-control-flat" placeholder="Mother Name">
                                </div>
                                <div class="form-group">
                                    <label for="mstatus">Marital Status : </label>
                                    <div class="clear"></div>
                                    <div class="form-check form-switch">
                                        <input type="hidden" id="mstatus" name="mstatus">
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
                                    <select name="id_designation" class="form-control form-control-flat" required>
                                        <option value="" selected="selected">Choose Designation</option>
                                        <option value="Trainer">Trainer</option>
                                        <option value="HR">HR</option>
                                        <option value="Developer">Developer</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group date-fields">
                                    <div class="input-group date" id="datepicker-2">
                                        <input type="date" name="doj" value="" class="form-control form-control-flat" placeholder="Date of Joining" data-date-format="DD-MM-YYYY" required>
                                </div>
                                </div>
                                <div class="vertical-spacing"></div>
                                <div class="form-group dropdown-fields">
                                    <select name="employee_status" class="form-control form-control-flat" required>
                                        <option value="" selected="selected">Employee Status</option>
                                        <option value="Probation Period">Probation Period</option>
                                        <option value="Permanent
                                        ">Permanent</option>
                                    </select>
                                </div>
                                <div class="form-group" id="probation-period" style="display:none;">
                                    <input type="number" name="probation_period" value="" class="form-control form-control-flat" placeholder="Probation Period in Days">
                                </div>
                                <div class="form-group">
                                    <select name="qualification" class="form-control form-control-flat" required>
                                        <option value="" selected="selected">Choose Highest Qualification</option>
                                        <option value="10th Exam">10th Exam</option>
                                        <option value="12th Exam">12th Exam</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Engineering">Engineering</option>
                                        
                                    </select>
                                </div>
                                <input type="hidden" id="regdate"name="regdate">
                                <input type="hidden" id="profile_pic" name="profile_pic">
                                <h4>Access and Control</h4>
                                <hr class="dotted">
                                <div class="form-group">
                                    <select name="role" class="form-control form-control-flat" required>
                                        <option value="" selected="selected">Choose Access and Control</option>
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                                <hr class="dotted">
                                <button name="submit" type="submit" id="submit" class="btn btn-primary btn-flat pull-left" >Submit</button>
                            </div>
                            </form>      
                            </div>
                            </div>
                            
                            </div>
                        </div>
</div>
