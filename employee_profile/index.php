<?php

    include("../dbconfig.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM `employees` WHERE ID =$id";
    $data= mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($data);
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
                    <h1 class="text-dark" style="font-size:32px; font-weight:400;">Employee Profile</h1>
                    <div class="panel-body p-3">
                        <button class="btn btn-primary btn-flat"><i class="fa-regular fa-user pr-1"></i> Employees </button>
                        <div class="btn-group">
                            <button data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle btn-flat" type="button"><i class="fa fa-gear"></i> Settigs <span class="caret"></span></button>
                            <ul role="menu" class=dropdown-menu>
                                <li><a href="" class="dropdown-item">Designation</a></li>
                                <li><a href="" class="dropdown-item">Department</a></li>
                                <li><a href="" class="dropdown-item">Qualification</a></li>
                             </ul>
                        </div>
                    </div>
                    
                    <div class="panel-body p-3">
                        <div class=" d-md-flex flex-row">
                            <div class=" col-md-6 mx-2">
                            <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Employee Details
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body p-0">
                                                <div class="panel-body">
                                                    <dt>Full Name</dt>
                                                    <dd><?php echo ''.$row['Full Name'].'';?></dd>
                                                    <hr class="dotter">
                                                    <h5>Contact Information</h5>
                                                    <hr class="dotter">
                                                    <dt>Mobile Primary</dt>
                                                    <dd><?php echo ''.$row['Mobile Primary'].'';?></dd>
                                                    <dt>Email</dt>
                                                    <dd><?php echo ''.$row['Email'].'';?></dd>
                                                    <dt>Present Address</dt>
                                                    <dd><?php echo ''.$row['Present Address'].'';?></dd>
                                                    <dt>Permanent Address</dt>
                                                    <dd><?php echo ''.$row['Permanent Address'].'';?></dd>
                                                    <hr class="dotter">
                                                    <h5>Personal Information Information</h5>
                                                    <hr class="dotter">
                                                    <dt>Blood Group</dt>
                                                    <dd><?php echo ''.$row['Blood Group'].'';?></dd>
                                                    <dt>Nationality</dt>
                                                    <dd><?php echo ''.$row['Nationality'].'';?></dd>
                                                    <dt>Mother Tongue</dt>
                                                    <dd><?php echo ''.$row['Mother Tongue'].'';?></dd>
                                                    <dt>Date of Birth</dt>
                                                    <dd><?php echo ''.$row['Date of Birth'].'';?></dd>
                                                    <dt>Gender</dt>
                                                    <dd><?php echo ''.$row['Gender'].'';?></dd>
                                                    <dt>Father name</dt>
                                                    <dd><?php echo ''.$row['Father name'].'';?></dd>
                                                    <dt>Mother name</dt>
                                                    <dd><?php echo ''.$row['Mother name'].'';?></dd>
                                                    <dt>Marital Status </dt>
                                                    <dd><?php echo ''.$row['Marital Status'].'';?></dd>
                                                    <hr class="dotter">
                                                    <h5>Position and Department</h5>
                                                    <hr class="dotter">
                                                    <dt>Designation</dt>
                                                    <dd><?php echo ''.$row['Designation'].'';?></dd>
                                                    <dt>Date of Joining</dt>
                                                    <dd><?php echo ''.$row['Date of Joining'].'';?></dd>
                                                    <dt>Employee Status</dt>
                                                    <dd><?php echo ''.$row['Employee Status'].'';?></dd>
                                                    <dt>Highest Qualification</dt>
                                                    <dd><?php echo ''.$row['Highest Qualification'].'';?></dd>
                                                    <hr class="dotter">
                                                    <h5>Login Details</h5>
                                                    <hr class="dotter">
                                                    <dt>Username</dt>
                                                    <dd><?php echo ''.$row['username'].'';?></dd>
                                                    <hr class="dotted">
                                                    <hr class="dotter">
                                                    <h5>Access & Control</h5>
                                                    <hr class="dotter">
                                                    <dt>Access</dt>
                                                    <dd><?php echo ''.$row['role'].'';?></dd>
                                                    <hr class="dotted">
                                                    <button class="btn btn-primary btn-flat" data-bs-toggle="modal" data-bs-target="#edit_employee">Edit Employee</button>
                                                    <?php
                                                        require("update_modal.php");
                                                    ?>
                                                     <?php 
                                                        if(isset($_SESSION['empupdated']) && $_SESSION['empupdated'] !='')
                                                        { 
                                                            echo '<div class="text-center text-white bg-success h6 p-3 mt-3">'.$_SESSION['empupdated'].'</div>';
                                                            unset($_SESSION['empupdated']);
                                                            
                                                        }
                                                    ?>
                                                    <?php 
                                                        if(isset($_SESSION['empnotupdated']) && $_SESSION['empnotupdated'] !='')
                                                        { 
                                                            echo '<div class="text-center text-white bg-danger h6 p-3 mt-3">'.$_SESSION['empnotupdated'].'</div>';
                                                            unset($_SESSION['empnotupdated']);
                                                            
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Qualification Details
                                        </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Experience Details
                                        </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Documents
                                        </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class=" col-md-6 p-3  border two-one-mt" >
                                <form action="" method="Post">
                                <div class="alert alert-warning mb-3 p-2" role="alert">
                                    <h6>Password Reset</h6>
                                    <p>You can reset the password of the employee here, password will be <b>12345</b> </p>
                                    <button class="btn btn-warning btn-flat pull-left text-white" onclick="reset_pass()" name="reset_password" id="reset_password">Reset Password</button>
                                    </form>
                                    
                                    
                                    <div class="status">
                                        <h6 class="pt-2" id="pass_reset">Password reset to : "12345" </h6>
                                        <?php
                                           if(isset($_POST['reset_password']))
                                                {
                                                    $id = $_GET['id']; 
                                                    $confirmpass="12345";
                                                    $str_pass=password_hash($confirmpass,PASSWORD_DEFAULT);
                                                    $sql ="UPDATE `employees` SET `Password`='$str_pass'  WHERE ID =$id";
                                                    $result = mysqli_query($conn,$sql);
                                                                                                       
                                                }    
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
  
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../JS/myscript.js"></script>
    <script>
        const formcontrol= document.getElementById("employees");
            formcontrol.className ='active';

            var gender=document.getElementById("gender");
            var male=document.getElementById("male");
            var female=document.getElementById("female");
            var present_address=document.getElementById("address");
            var permanent_address=document.getElementById("peraddress");
            var addcheckbox=document.getElementById("addcheckbox");
            var mstatus=document.getElementById("mstatus")
            var msingle=document.getElementById("msingle")
            var mmarried=document.getElementById("mmarried")
            
            if(gender.value=="Male");
            {
                male.checked=true;
                female.checked=false;
            }
            if(gender.value=="Female");
            {
                male.checked=false;
                female.checked=true;
            }
            if(present_address.value==permanent_address.value);
            {
                if(present_address.value=="")
                {
                    addcheckbox.checked=false;
                }
                else{
                    addcheckbox.checked=true;
                }
            }
            form.addEventListener('submit',(e)=>
            {

            
            if(male.checked==true)
            {
                gender.value=male.value
            }
            if(female.checked==true)
            {
                gender.value=female.value
            }
            if(gender.value=="Male"){
                profile_pic.value="../photo/male profile.png";
            }
            if(gender.value=="Female"){
                profile_pic.value="../photo/female profile.png";
            }
            if(msingle.checked==true)
            {
                mstatus.value=msingle.value
            }
            if(mmarried.checked==true)
            {
                mstatus.value=mmarried.value
            }
            
            })
            




            
    </script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>




</body>
</html>