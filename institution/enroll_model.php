                   
 <div style="width:100%" class="modal fade" id="enroll-employee">
                        <div class="modal-dialog" >
                            <div class="modal-content">
                            <div class="modal-header p-3  ">
                                <h5 class="modal-title text-sm">Enroll Institutes</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                            </div>
                            <div class="modal-body p-1" >
                            <div class="modal-body">
                                <form action="code.php" method="post" id="add_institute">
                                    <h5>Institutes Information</h5>
                                    <hr class="dotted">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat" name="school_name" id="school_name" placeholder="School Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat" name="school_link" id="school_link" placeholder="School Link" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat" name="district" id="district" placeholder="District" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat" name="school_address" id="school_address" placeholder="School Address" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat" name="username" id="username" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat " name="password" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-flat " name="confpassword" id="confpassword" placeholder=" Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control form-control-flat" name="regdate" id="regdate">
                                        <small class="text-danger ps-2">Password not matching</small>
                                    </div>

                                
                            </div>
                            </div>
                            <div class="modal-footer p-3">
                                <button name="submit" type="submit" class="btn btn-primary btn-flat pull-left" >Submit</button>
                                
                </div>
                </form>
                </div>
            </div>
                    