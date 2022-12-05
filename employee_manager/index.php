<?php
    include("../dbconfig.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Manager</title>
    <link rel="stylesheet" href="../vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../vendor/DataTables/datatables.css">
    <link rel="icon" href="../logo.png" type="image/icon type">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c5011ec83e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="maincontainer">
        <!-- navigation bar starts -->
        <?php 
        require("../nav.php");
        ?>
        <div class="containermain" id="containermain">
            <?php 
            require("../header.php");
            ?>
            <main>
                <div class="warper container-fluid">
                    <h1 class="text-dark">Manage Employees</h1>
                    <div class="panel-body">
                        <ul class="list-unstyled list-inline showcase-btn">
                            <li style="margin-bottom:0;">
                                <a href="" class="btn btn-primary btn-flat">
                                <i class="fa-regular fa-user"></i> Employees
                                </a>
                            </li>
                            <li style="margin-bottom:0;">
                                <div class="btn-group">
                                    <button data-bs-toggle="dropdown" class="btn btn-default dropdown-toggle btn-flat" type="button"><i class="fa fa-gear"></i> Settings <span class="caret"></span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li ><a class="dropdown-item" href="">Designations</a></li>
                                        <li><a class="dropdown-item" href="">Departments</a></li>
                                        <li><a class="dropdown-item"href="">Qualification</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="vertical-spacing"></div>
                        <hr class="no-margn">
                        <div class="row-enroll-filter">
                            <div role="toolbar" class="btn-toolbar showcase-btn ">
                                <button class="btn btn-primary btn-flat" type="button" data-bs-toggle="modal" data-bs-target="#enroll-employee" >Enroll Employees</button>
                            </div>
                            <?php include("./enroll_model.php"); ?>
                        </div>
                    </div>
</div>
                    
                    <div class="card shadow mb-4" style="margin:25px 0px">
                        <div class="card-header py-3" >
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fa-regular fauser"></i>  Employees</h6>
                            <?php 
                                if(isset($_SESSION['delsuccess']) && $_SESSION['delsuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-success h6">'.$_SESSION['delsuccess'].'</div>';
                                    unset($_SESSION['delsuccess']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['delnotsuccess']) && $_SESSION['delnotsuccess'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-danger h6">'.$_SESSION['delnotsuccess'].'</div>';
                                    unset($_SESSION['delnotsuccess']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['employecreated']) && $_SESSION['employecreated'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-success h6">'.$_SESSION['employecreated'].'</div>';
                                    unset($_SESSION['employecreated']);
                                    
                                }
                            ?>
                            <?php 
                                if(isset($_SESSION['employenotcreated']) && $_SESSION['employenotcreated'] !='')
                                { 
                                    echo '<div class="text-center text-white bg-danger h6">'.$_SESSION['employenotcreated'].'</div>';
                                    unset($_SESSION['employenotcreated']);
                                }
                            ?>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="no-more-tables">
                                <table class="table table-bordered employee-table" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="bg-dark text-white ">
                                            <th>User Name</th>
                                            <th>Full Name</th>
                                            <th>Designation</th>
                                            <th>Education</th>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">Access</th>';
                                                }
                                                echo $_SESSION['user_role']
                                            ?>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">option</th>';
                                                }
                                            ?>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Full Name</th>
                                            <th>Designation</th>
                                            <th>Education</th>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">Access</th>';
                                                }
                                            ?>
                                            <?php
                                                if($_SESSION['user_role']=="admin"){
                                                    echo'<th class="text-center">option</th>';
                                                }
                                            ?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $sql="SELECT * FROM `employees`";
                                        $result = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_assoc($result)){
                                                echo '<tr>';
                                                echo '<td data-title="User Name" class="overflow-hidden" >'.$row['username'].'</td>';
                                                echo '<td data-title="Full Name">'.$row['Full Name'].'</td>';
                                                echo '<td data-title="Designation">'.$row['Designation'].'</td>';
                                                echo '<td data-title="Education"> '.$row['Highest Qualification'].'</td>';
                                                if($_SESSION['user_role']=="admin"){
                                                    echo '<td data-title="Access">'.$row['role'].'</td>';
                                                }
                                                if($_SESSION['user_role']=="admin"){
                                                    echo '<td data-title="option">
                                                    <a class="btn btn-primary tooltip-btn" href="../employee_profile/?id='.$row['ID'].'"id="edit"><i class="fa-solid fa-pen-to-square icon"></i></a>
                                                    <button class="btn btn-danger tooltip-btn" data-bs-toggle="modal" data-bs-target="#delete" onclick="deleteemployee(this.value)" value="'.$row['ID'].'"><i class="fa-solid fa-minus icon"></i></button>
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
                    <!-- <button class="btn btn-danger tooltip-btn" data-bs-toggle="modal" data-bs-target="#delete" onclick=" deleteemployee(this.value)"><i class="fa-solid fa-minus icon"></i></button> -->

                    <!-- delete model start -->
                    <div style="width:100%" class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" >
                            <div class="modal-content" >
                                <form action="./code.php" method="post">
                                    <div class="modal-header p-2  ">
                                        
                                        <h5 class="modal-title text-black" id="exampleModalLabel">Delete Employee</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size:10px"></button>
                                    </div>
                                    <div class="modal-body p-2" >
                                        <input type="hidden" id="delete_emplyee_id" name="delete_emplyee_id" >
                                        Are you sure you want to delete this employee?...
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
                    

                    <!-- enroll model ends -->

                </div>
            </main>
            <?php 
            require("../footer.php");
            ?>

        </div>
    </div>
  
    <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>

        const formcontrol= document.getElementById("employees");
            formcontrol.className ='active';
            console.log('hi');
            
            var password= document.getElementById("password");
            var confirmpassword= document.getElementById("confirm_password");
            var form=document.getElementById("add-employee");
            var error=document.getElementById("error");
            var gender=document.getElementById("gender");
            var profile_pic=document.getElementById("profile_pic");
            var mstatus=document.getElementById("mstatus")
            var msingle=document.getElementById("msingle")
            var mmarried=document.getElementById("mmarried")


    form.addEventListener('submit',(e)=>
        {
        let messages=[]
        // e.preventDefault();
        
        if(password.value != confirmpassword.value){
            console.log(password.value);
            error.innerHTML="password not matching"
            messages.push("*password not matching")
        }
        if(messages.length >0){
        e.preventDefault();
        error.innerHTML=messages.join(',')
        error.style.color="red"
        }
        console.log(password.value);
        if(male.checked==true)
        {
            gender.value=male.value
            console.log(gender.value)
        }
        if(female.checked==true)
        {
            gender.value=female.value
            console.log(gender.value)
        }
        if(gender.value=="Male"){
            profile_pic.value="../photo/male profile.png";
            console.log(profile_pic.value);
        }
        if(gender.value=="Female"){
            profile_pic.value="../photo/female profile.png";
            console.log(profile_pic.value);
        }
        if(msingle.checked==true)
        {
            mstatus.value=msingle.value
            console.log(mstatus.value)
        }
        if(mmarried.checked==true)
        {
            mstatus.value=mmarried.value
            console.log(mstatus.value)
        }
        console.log(messages.length)
        if(messages.length > 0){
            e.preventDefault();
        }

        
        
        })
    </script>
    <script src="../JS/myscript.js">
        
    </script>
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>



</body>
</html>