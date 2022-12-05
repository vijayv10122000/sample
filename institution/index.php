<?php
    include("../dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.css">
    <link rel="icon" href="../logo.png" type="image/icon type">
    
 
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5011ec83e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="maincontainer" id="containermain">
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
                    <h1 class="text-dark">Manage Institutes</h1>
                    <div class="panel-body">
                        <ul class="list-unstyled list-inline showcase-btn">
                            <li style="margin-bottom:0;">
                                <a href="" class="btn btn-primary btn-flat">
                                <i class="fa-solid fa-building-columns"></i> Institutes
                                </a>
                            </li>
                            <li style="margin-bottom:0;">
                                <div class="btn-group">
                                    <button data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle btn-flat" type="button"><i class="fa fa-gear"></i> Settings <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <!-- <li ><a class="dropdown-item" href="">Designations</a></li> -->
                                        <!-- <li><a class="dropdown-item" href="">Departments</a></li> -->
                                        <!-- <li><a class="dropdown-item"href="">Qualification</a></li> -->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="vertical-spacing"></div>
                        <hr class="no-margn">
                        <div class="row-enroll-filter">
                            <div role="toolbar" class="btn-toolbar showcase-btn ">
                                <button class="btn btn-primary btn-flat" type="button" data-bs-toggle="modal" data-bs-target="#enroll-employee" >Enroll Institutes</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card shadow mb-4" style="margin:25px 0px">
                        <div class="card-header py-3" >
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa-solid fa-building-columns"></i> Institutes</h6>
                            <?php 
                                if(isset($_SESSION['delsuccess']) && $_SESSION['delsuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-success bg-opacity-50 p-2 h6 m-2">'.$_SESSION['delsuccess'].'</div>';
                                    unset($_SESSION['delsuccess']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['delnotsuccess']) && $_SESSION['delnotsuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-danger bg-opacity-50 p-2 h6 m-2">'.$_SESSION['delnotsuccess'].'</div>';
                                    unset($_SESSION['delnotsuccess']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['inssuccess']) && $_SESSION['inssuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-success  bg-opacity-50 p-2 h6 m-2">'.$_SESSION['inssuccess'].'</div>';
                                    unset($_SESSION['inssuccess']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['insnotsuccess']) && $_SESSION['insnotsuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-danger bg-opacity-50 p-2 h6 m-2">'.$_SESSION['insnotsuccess'].'</div>';
                                    unset($_SESSION['insnotsuccess']);
                                }
                            ?>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="no-more-tables">
                                <table class="table table-bordered employee-table" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="bg-dark text-white ">
                                            <th>School Name</th>
                                            <th>School Link</th>
                                            <th>Location</th>
                                            <th>Password</th>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">option</th>';
                                                }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>School Name</th>
                                            <th>School Link</th>
                                            <th>Location</th>
                                            <th>Password</th>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">option</th>';
                                                }
                                            ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql="SELECT * FROM `institutes`";
                                        $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                echo '<tr>';
                                                echo '<td data-title="School Name" class="overflow-hidden"style="width:20%;" >'.$row['school_name'].'</td>';
                                                echo '<td data-title="School Link"><a href="'.$row['school_link'].'" target="_blank">School link <i class="fa-solid fa-link"></i> </a></td>';
                                                echo '<td data-title="Location">'.$row['district'].'</td>';
                                                echo '<td data-title="password"> '.$row['password'].'</td>';
                                                if($_SESSION['user_role']=="admin"){
                                                    echo '<td data-title="option">
                                                            <a class="btn btn-primary tooltip-btn" href="../institution_profile/?id='.$row['id'].'"id="edit"><i class="fa-solid fa-pen-to-square icon"></i></a>
                                                            <button class="btn btn-danger tooltip-btn" data-bs-toggle="modal" data-bs-target="#delete" onclick="deleteemployee(this.value)" value="'.$row['id'].'"><i class="fa-solid fa-minus icon"></i></button>
                                                            </td>';
                                                }
                                                echo'</tr>';
                                                }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- delete model start -->
                    <div style="width:100%" class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" >
                            <div class="modal-content" >
                                <form action="./code.php" method="post">
                                    <div class="modal-header p-2  ">
                                        
                                        <h5 class="modal-title text-black" id="exampleModalLabel">Delete Institute</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                                    </div>
                                    <div class="modal-body p-2" >
                                        <input type="hidden" id="delete_emplyee_id" name="delete_emplyee_id" >
                                        Are you sure you want to delete this Institute?...
                                    </div>
                                    <div class="modal-footer p-1">
                                        <button type="button" class="btn btn-warning btn-flat text-white p-1" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger btn-flat p-1" name="delsubmit">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--delete model ends  -->

                    <!-- enroll model starts -->
                   <?php  
                   require("enroll_model.php");
                   ?>
                    <!-- enroll model ends -->

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
        const formcontrol= document.getElementById("institution");
            formcontrol.className ='active';
            // console.log('hi');
            var form = document.getElementById("add_institute");
            var password =document.getElementById("password");
            var confpassword =document.getElementById("confpassword");
            var small = document.getElementsByName("small")

            form.addEventListener('submit', (e) =>
            {
                if(password.value==confpassword.value){
                    
                }
                else{
                    password.className="form-control form-control-flat error";
                    confpassword.className="form-control form-control-flat error";
                   
                    e.preventDefault();
                }
            }
             
            
           
            
            
            )
            
            </script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>



</body>
</html>