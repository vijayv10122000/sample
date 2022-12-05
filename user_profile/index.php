<?php
    include("../dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.css">
    <link rel="icon" href="icon_path" type="../logo.png">
    <link rel="icon" href="../logo.png" type="image/icon type">
    
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5011ec83e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="maincontainer" id="containermain" style="width:100%">
        <!-- navigation bar starts -->
        <?php 
        require("../nav.php");
        ?>
        <div class="containermain">
            <?php 
            require("../header.php");
            ?>
            <main>
                <div class="wraper container-fluid pt-3 pb-3">
                    <h1 class="text-dark" style="font-size:32px; font-weight:400;">User Profile</h1>
                    <div class="panel-body p-3">
                        <div class=" d-md-flex flex-row">
                            <div class=" col-md-6 mx-2">
                                <div class="panel-body p-2 ps-3" style="background-color: #f2f2f4 !important;">
                                     <h4 class="m-0" style="background-color: #f2f2f4 !important;">Employee Details</h4>
                                </div>
                                <div class="panel-body">
                                    <dt>Full Name</dt>
                                    <dd><?php echo ''.$username['Full Name'].'';?></dd>
                                    <hr class="dotter">
                                    <h5>Contact Information</h5>
                                    <hr class="dotter">
                                    <dt>Mobile Primary</dt>
                                    <dd><?php echo ''.$username['Mobile Primary'].'';?></dd>
                                    <dt>Email</dt>
                                    <dd><?php echo ''.$username['Email'].'';?></dd>
                                    <dt>Present Address</dt>
                                    <dd><?php echo ''.$username['Present Address'].'';?></dd>
                                    <dt>Permanent Address</dt>
                                    <dd><?php echo ''.$username['Permanent Address'].'';?></dd>
                                    <hr class="dotter">
                                    <h5>Personal Information</h5>
                                    <hr class="dotter">
                                    <dt>Blood Group</dt>
                                    <dd><?php echo ''.$username['Blood Group'].'';?></dd>
                                    <dt>Nationality</dt>
                                    <dd><?php echo ''.$username['Nationality'].'';?></dd>
                                    <dt>Mother Tongue</dt>
                                    <dd><?php echo ''.$username['Mother Tongue'].'';?></dd>
                                    <dt>Date of Birth</dt>
                                    <dd><?php echo ''.$username['Date of Birth'].'';?></dd>
                                    <dt>Gender</dt>
                                    <dd><?php echo ''.$username['Gender'].'';?></dd>
                                    <dt>Father name</dt>
                                    <dd><?php echo ''.$username['Father name'].'';?></dd>
                                    <dt>Mother name</dt>
                                    <dd><?php echo ''.$username['Mother name'].'';?></dd>
                                    <dt>Email</dt>
                                    <dd><?php echo ''.$username['Marital Status'].'';?></dd>
                                    <hr class="dotter">
                                    <h5>Position and Department</h5>
                                    <hr class="dotter">
                                    <dt>Designation</dt>
                                    <dd><?php echo ''.$username['Designation'].'';?></dd>
                                    <dt>Date of Joining</dt>
                                    <dd><?php echo ''.$username['Date of Joining'].'';?></dd>
                                    <dt>Employee Status</dt>
                                    <dd><?php echo ''.$username['Employee Status'].'';?></dd>
                                    <dt>Highest Qualification</dt>
                                    <dd><?php echo ''.$username['Highest Qualification'].'';?></dd>
                                    <hr class="dotter">
                                    <h5>Login Details</h5>
                                    <hr class="dotter">
                                    <dt>Username</dt>
                                    <dd><?php echo ''.$username['username'].'';?></dd>
                                    <h5>Access & Control</h5>
                                    <hr class="dotter">
                                    <dt>Access</dt>
                                    <dd><?php echo ''.$username['role'].'';?></dd>
                                    
                                </div>  
                            </div>                               
                            <div class=" col-md-6 p-3 border two-one-mt" >
                                <div class="panel-body text-center">
                                     <img src="<?php echo ''.$username['profile_pic'].'';?>" alt="" style="width:80px; height:80px" class="border border-3 rounded">
                                    <dd class="mt-3 h6"><?php echo ''.$username['Full Name'].'';?></dd>
                                    <form action="./code.php" method="post" enctype="multipart/form-data">
                                        <div class="d-flex text-center justify-content-center form-group">
                                            <input type="file" class="form-control" style="width:80%" name="photo">
                                            <input type="hidden" value="<?php echo ''.$username['ID'].'';?>" name="ID">
                                        </div>
                                        <div class="  pt-4 justify-content-center">
                                            <button class="btn btn-info btn-flat" type="sbmit" name="uphoto_upload"> Upload</button>
                                        </div>
                                    </form>
                                    
                                        <div class="pt-2">
                                            <button class="btn btn-danger btn-flat" data-bs-toggle="modal" data-bs-target="#delete"> Remove</button>
                                            <!-- <button class="btn btn-success btn-flat">Snapshot</button> -->
                                        </div>
                                    
                                    <div style="width:100%" class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" >
                                            <div class="modal-content" >
                                            <div class="modal-header p-2  ">
                                                <h5 class="modal-title text-black" id="exampleModalLabel">Delete Photo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                                            </div>
                                            <div class="modal-body p-2" >
                                                Are you sure you want to delete this photo?...
                                            </div>
                                            <div class="modal-footer p-1">
                                                <button type="button" class="btn btn-warning btn-flat text-white p-1" data-bs-dismiss="modal">Close</button>
                                                
                                                    <div class="">
                                                    <form action="./code.php" method ="post">
                                                         <input type="hidden" value="<?php echo ''.$username['ID'].'';?>" name="ID">
                                                        <button type="submit" class="btn btn-danger btn-flat text-white p-1" name="delete"> Delete</button>
                                                    </form>
                                                    </div>
                                                   
                                              
                                            
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                                <div class="panel-body text-center mt-3">
                                    <div class="panel-body p-2 ps-3" style="background-color: #f2f2f4 !important;">
                                        <h4 class="m-0" style="background-color: #f2f2f4 !important;">Employee Details</h4>
                                    </div>
                                    <div class="panel-body">
                                        <form action="./code.php" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-2" placeholder="New Password" name="newpass" required>
                                                <input type="text" class="form-control mb-2" placeholder="Confirm Password" name="confirmpass" required>
                                                <button class="btn btn-primary btn-flat" name ="update_pass" type="submit"id="update_pass">Update Password</button>
                                                <input type="hidden" value="<?php echo ''.$username['ID'].'';?>" name="ID">
                                            </div>
                                            <?php
                                            
                                             if(isset($_SESSION['not confirm']) && $_SESSION['not confirm'] !='')
                                             { 
                                                 echo '<div class="bg-danger m-3 p-2"><h5 class="text-light m-0">'.$_SESSION['not confirm'].'</h5> </div>';
                                                 unset($_SESSION['not confirm']);
                                                 
                                             }
                                             if(isset($_SESSION['confirm']) && $_SESSION['confirm'] !='')
                                             { 
                                                 echo '<div class="bg-success m-3 p-2"><h5 class="text-light m-0">'.$_SESSION['confirm'].'</h5> </div>';
                                                 unset($_SESSION['confirm']);
                                                 
                                             }?>
                                             
                                          
                                        </form>
                                        <?php
                                            
                                        ?>  
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </main>
            <?php 
            require("../footer.php");
            ?>
    </div>
 </div>
  
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../JS/myscript.js"></script>
    <script>
        const formcontrol= document.getElementById("dashboard");
            formcontrol.className ='active';
            
    </script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>




</body>
</html>