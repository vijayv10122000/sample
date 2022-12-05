<?php  session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="../logo.png" type="image/icon type">


    <link rel="stylesheet" href="./vendor/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>
    <div class=" d-flex justify-content-center form-group p-0 text-center mt-5 main_form " style="width:100%">
    <div class=" login-form p-3">
            <img class="mb-3" src="img/logo.png" alt="" style="width:120px;">
     
            <div class=" border  form-heading p-2" style="background-color: #f2f2f4 !important;">
                <h5>Employee Login</h5>
            </div>
            <div class="from-group border p-3">
        <form action="database.php" method="post">
                <?php 
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                        { 
                            echo '<div class="bg-danger"><h5 class="text-light">'.$_SESSION['status'].'</h5> </div>';
                            // echo ''.$_SESSION['status'].'';
                            unset($_SESSION['status']);
                            
                        }?>
            <div class="wrong">
                <!-- <h3><?php echo ''.$_SESSION['status'].''; ?> </h3> --> 
            </div>
            <input class="form-control" type="text" placeholder="Employee ID" name="username" style="width:100%"required><br>
            <input class="form-control" type="Password" placeholder="Password" name="password" required>
            <button class=" form-control text-white btn btn_primary bg-primary btn-flat mt-3" type="submit" name="login_btn"
            style="background-color: #03718c !important;">Sign in</button>
            <div class="unable_login mt-2">
                <h6><a href="">Unable to Login ?</a></h6>
            </div>
        </form>
        </div>
        
    </div>
    </div>
    <script src="./vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
