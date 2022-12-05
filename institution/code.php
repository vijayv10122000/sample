<?php
require("../dbconfig.php");
ob_start();
if(isset($_POST["submit"]))
{
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $school_name = $_POST["school_name"];
    $school_link = $_POST["school_link"];
    $district = $_POST["district"];
    $school_address = $_POST["school_address"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo $school_name;
    
    $insert_employee= "INSERT INTO `institutes` (`id`, `school_name`, `district`, `school_address`, `school_link`, `username`, `password`) VALUES (NULL, '$school_name', '$district', '$school_address', '$school_link', '$username', '$password')";
    $insert_query=mysqli_query($conn,$insert_employee);

    if($insert_query){
        $_SESSION['inssuccess']='Institute created successfly';
        header('Location:./');
        // echo "updated";
        ob_end_flush();
    }
    else{
        $_SESSION['insnotsuccess']='Institute not created successfly';
        header('Location:./');
        // echo "Not updated";
        ob_end_flush();
    }
}
if (isset($_POST['delsubmit'])) {
    $employ_id = $_POST["delete_emplyee_id"];;
    echo "$employ_id";
    $sql = "DELETE FROM `institutes` WHERE id='$employ_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "deleted";
       header('Location: ./');
       ob_end_flush();
       $_SESSION['delsuccess'] = 'Institute deleted successfully';     
       

    }
    else{
        echo"not delted";
       header('Location: ./');
       $_SESSION['delnotsuccess'] = 'Institute data not deleted ';
       ob_end_flush();
    }
}
?>

