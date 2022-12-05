<?php
    include("../dbconfig.php");
    $institute_Id = $_GET["id"];
    $query = "SELECT * FROM `institutes` WHERE id =$institute_Id";
    $data= mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($data);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institution Profile</title>
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
                <div class="warper container-fluid">
                    <h1 class="text-dark"><?php echo ''.$row['school_name'].'';?></h1>
                    <div class="panel_body">
                        <div class="d-md-flex flex-row">
                        <div class="col-md-6 mx-2 institute_profile">
                            <div class="panel-body border rounded text-center ">
                                <img src="../img/institute.png" alt="" style="width:70px; height:70px">
                                <div class="text-center text-dark h5 pt-3">
                                    <?php echo ''.$row['school_name'].'';?>    
                                </div>
                                <div class="text-center">
                                    <h5 class="p-3"><a href="<?php echo ''.$row['school_link'].'';?>" style="text-decoration:none;  color:black ">School Link <i class="fa-solid fa-link"></i></a></h5>
                                    <h5 class="text-black">School Address</h5>
                                    <h6><?php echo ''.$row['school_address'].'';?> </h6>
                                </div>
                                <button class="btn btn-primary btn-flat m-3" data-bs-toggle="modal" data-bs-target="#edit_institute">Edite Institutes</button>
                                <?php 
                                    if(isset($_SESSION['insupdated']) && $_SESSION['insupdated'] !='')
                                    { 
                                        echo '<div class="text-center text-white bg-success h6">'.$_SESSION['insupdated'].'</div>';
                                        unset($_SESSION['insupdated']);
                                        
                                    }
                                ?>
                                <?php 
                                    if(isset($_SESSION['insnotupdated']) && $_SESSION['insnotupdated'] !='')
                                    { 
                                        echo '<div class="text-center text-white bg-success h6">'.$_SESSION['insnotupdated'].'</div>';
                                        unset($_SESSION['insnotupdated']);
                                        
                                    }
                                ?>
                            </div>



                            <!-- Model start -->
                            <div style="width:100%" class="modal fade" id="edit_institute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header p-3">
                                        <h5 class="modal-title text-sm"> Institute Information </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="code.php" method="post" id="edit-institue">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?php echo ''.$row['id'].'';?>">
                                                <dt class="py-2">School Name:</dt>
                                                <input type="text" class="form-control form-control-flat" name="school_name" value="<?php echo ''.$row['school_name'].'';?>">
                                                <dt class="py-2">School Link:</dt>
                                                <input type="text" class="form-control form-control-flat" name="school_link" value="<?php echo ''.$row['school_link'].'';?>">
                                                <dt class="py-2">School District:</dt>
                                                <input type="text" class="form-control form-control-flat" name="district"value="<?php echo ''.$row['district'].'';?>">
                                                <dt class="py-2">School Address:</dt>
                                                <input type="text" class="form-control form-control-flat" name="school_address"value="<?php echo ''.$row['school_address'].'';?>">
                                                <dt class="py-2">Username:</dt>
                                                <input type="text" class="form-control form-control-flat" name="username" value="<?php echo ''.$row['username'].'';?>">
                                                <dt class="py-2">Password:</dt>
                                                <input type="text" class="form-control form-control-flat" name="password" value="<?php echo ''.$row['password'].'';?>">
                                                <hr class="dotted">
                                                <button class="btn btn-primary btn-flat" type="submit" name="submit">Update Info..</button>
                                                <input type="hidden" class="form-control form-control-flat" id="message" name="message">
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>

                           
                            
                            <!-- Model ends -->

                        </div>
                        <div class="col-md-6 mx-2 institute_information">
                            <div class="panel-body border rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Institutes Information</h5>
                                    <hr class="dotted">
                                    <dt>Registration Date</dt>
                                    <dd>10-15-2022</dd>
                                    <dt>SMS Remaining</dt>
                                    <dd>5555</dd>
                                    <dt>Renewal date</dt>
                                    <dd>21-15-2022</dd>
                                    <dt>Next Renewal date</dt>
                                    <dd>21-15-2023</dd>
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

<?php
    
?>

        
    </div>
  
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../JS/myscript.js">
    </script>
    <script>
        const formcontrol= document.getElementById("institution");
            formcontrol.className ='active';
           
    </script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

 



</body>
</html>
