<?php
require("../dbconfig.php");
    ob_start();
    
    if(isset($_POST["submit"]))
    {
    $id = $_POST["id"];
    $school_name = $_POST["school_name"];
    $school_link = $_POST["school_link"];
    $school_address = $_POST["school_address"];
    $district = $_POST["district"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $message = $_POST["message"];
    $query = "UPDATE `institutes` SET `school_name`='$school_name',
    `school_link`='$school_link',
    `school_address`='$school_address'
    ,`district`='$district',
    `username`='$username',
    `password`='$password'    
    WHERE id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
    $_SESSION['insupdated']="Institution Information Updated Successfly";
    ob_end_flush();
    header('Location: ./?id='.$id);
    }
    else{
    $_SESSION['insnotupdated']="Institution Information not Updated Successfly";
    ob_end_flush();
    header('Location: ./?id='.$id);
    }
    }

    ?>
