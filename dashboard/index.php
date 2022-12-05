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
    <div class="maincontainer" id="containermain" style="width:100%">
        <!-- navigation bar starts -->
        <?php 
        require("../nav.php");
        ?>
        <div class="containermain">
            <?php 
            require("../header.php");
            ?>
            <!-- dashboard section starts -->
            <main>
                   <div class="container-fluid ">
                        <div class="row mt-5 d-flex justify-content-center gap-sm-5 gap-3">
                            <div class="col-sm-5 d-flex justify-content-sm-end justify-content-center">
                                <div class=" d-flex  flex-row row dashboard-cards border border-secondary p-2 rounded-pill " style="--bs-border-opacity: .5;">
                                <div class="" style="width:fit-content;">
                                    <i class="fa-solid fa-user bg-info text-white p-4 rounded-circle" style="font-size:25px;"></i>
                                </div>
                                <div class="text-center d-flex  flex-column justify-content-center align-items-center" style="width:fit-content;">
                                    <p class="m-0 mb-1">Employees</p>
                                    <h4>
                                        <?php
                                        $query = "SELECT * FROM `employees`";
                                        $empployee_run= mysqli_query($conn, $query);
                                        
                                        if($emp_total= mysqli_num_rows($empployee_run)){
                                            echo ''.$emp_total.'';
                                        }
                                        else{
                                            echo'0';
                                        }
                                        ?>
                                    </h4>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-5 d-flex justify-content-sm-start justify-content-center">
                                <div class=" d-flex  flex-row row dashboard-cards border border-secondary p-2 rounded-pill " style="--bs-border-opacity: .5;">
                                <div class="" style="width:fit-content;">
                                    <i class="fa-solid fa-building-columns bg-success text-white p-4 rounded-circle bg-opacity-75" style="font-size:25px;"></i>
                                </div>
                                <div class="text-center d-flex  flex-column justify-content-center align-items-center" style="width:fit-content;">
                                    <p class="m-0 mb-1">Institution</p>
                                    <h4>
                                        <?php
                                        $query = "SELECT * FROM `institutes`";
                                        $institute_run= mysqli_query($conn, $query);
                                        
                                        if($inst_total= mysqli_num_rows($institute_run)){
                                            echo ''.$inst_total.'';
                                        }
                                        else{
                                            echo'0';
                                        }
                                        ?>
                                    </h4>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 d-flex justify-content-center gap-sm-5 gap-3">
                           
                            <div class="col-sm-5 d-flex justify-content-sm-start justify-content-center bg-secondary bg-opacity-25">
                                <div class="row d-flex  p-4 justify-content-center mx-auto">
                                    <div class="col-md-4 bg-white d-flex justify-content-center border boder-secondary align-items-center">
                                        <div class="row d-flex m-3 justify-content-center">
                                            <a href="" class="text-center text-decoration-none">
                                                <i class="fa-solid fa-building-columns text-success" style="font-size:30px"></i>
                                                <p class="text-success m-0">Institution</p>
                                            </a>
                                        </div>  
                                    </div>
                                    <div class="col-md-4 bg-white d-flex justify-content-center border boder-secondary align-items-center">
                                        <div class="row d-flex m-3 justify-content-center">
                                            <a href="" class="text-center text-decoration-none">
                                                <i class="fa-solid fa-user text-info" style="font-size:30px"></i>
                                                <p class="text-info m-0">Employee</p>
                                            </a>
                                        </div>  
                                    </div>
                                    <div class="col-md-4 bg-white d-flex justify-content-center border boder-secondary align-items-center">
                                        <div class="row d-flex m-3 justify-content-center">
                                            <a href="" class="text-center text-decoration-none">
                                                <i class="fa-solid fa-address-card text-warning" style="font-size:30px"></i>
                                                <p class="text-warning m-0">Payrol</p>
                                            </a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5 d-flex justify-content-sm-end justify-content-center">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr class="table-primary ">
                                            <th colspan="3" class="text-center">Institution by District</th>
                                        </tr>
                                        <tr class="table-info">
                                            <th scope="col">#</th>
                                            <th scope="col">District</th>
                                            <th scope="col">Total Institutions</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr class="table-light">
                                            <th scope="col">1</th>
                                            <td>Bangalore</td>
                                            <td>
                                            <?php
                                                $query = "SELECT COUNT(id) AS  count FROM  `institutes` WHERE  `district` ='Bangalore'";
                                                $institute_bng_run= mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($institute_bng_run)){
                                                    $output = ''.$row['count'].'';
                                                }
                                                echo $output;
                                            ?>
                                            </td>
                                        </tr>
                                        <tr class="table-light">
                                            <th scope="col">2</th>
                                            <td>Tumkur</td>
                                            <td>
                                            <?php
                                                $query = "SELECT COUNT(id) AS  count FROM  `institutes` WHERE  `district` ='Tumkur'";
                                                $institute_bng_run= mysqli_query($conn, $query);
                                                while($row = mysqli_fetch_assoc($institute_bng_run)){
                                                    $output = ''.$row['count'].'';
                                                }
                                                echo $output;
                                            ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                   </div> 

            </main>
            <!-- dashboard section ends -->
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