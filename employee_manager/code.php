<?php
require("../dbconfig.php");

ob_start();
    if (isset($_POST['submit'])) {
       $employ_id = $_POST["employ_id"];
       $full_name = $_POST["full_name"];
       $password = $_POST["password"];
       $mobile_primary = $_POST["mobile_primary"];
       $mobile_secondary = $_POST["mobile_secondary"];
       $email = $_POST["email"];
       $present_address = $_POST["present_address"];
       $permanent_address = $_POST["permanent_address"];
       $blood_group = $_POST["blood_group"];
       $nationality = $_POST["nationality"];
       $mother_tongue = $_POST["mother_tongue"];
       $gender = $_POST["gender"];
       $dob = $_POST["dob"];
       $father_name = $_POST["father_name"];
       $mother_name = $_POST["mother_name"];
       $mstatus =$_POST["mstatus"];
       $id_designation = $_POST["id_designation"];
       $employee_status = $_POST["employee_status"];
       $probation_period = $_POST["probation_period"];
       $qualification = $_POST["qualification"];
       $regdate= $_POST["regdate"];
       $doj = $_POST["doj"];
       $profile_pic= $_POST["profile_pic"];
       $role = $_POST["role"];
       $str_pass = password_hash($password,PASSWORD_DEFAULT);

      $sql= "INSERT INTO `employees` (`ID`, `username`, `Full Name`, `Password`, `Mobile Primary`, `Mobile Secondary`, `Email`, `Present Address`, `Permanent Address`, `Blood Group`, `Nationality`, 
      `Mother Tongue`, `Date of Birth`, `Gender`, `Father name`, `Mother name`, `Marital Status`, `Designation`, `Date of Joining`, `Employee Status`, `Highest Qualification`, `role`, `profile_pic`, `regdate`) VALUES
      (NULL, '$employ_id', '$full_name', '$str_pass', '$mobile_primary', '$mobile_secondary', '$email', '$present_address', '$permanent_address', '$blood_group', '$nationality', 
      '$mother_tongue', '$dob', '$gender', '$father_name', '$mother_name', '$mstatus', '$id_designation', '$doj','$employee_status', '$qualification', '$role', '$profile_pic', CURRENT_DATE());";      

      echo $employ_id,"<br>";
      echo $full_name,"<br>";
      echo $password,"<br>";
      echo $mobile_primary,"<br>";
      echo $mobile_secondary,"<br>";
      echo $email,"<br>";
      echo $present_address,"<br>";
      echo $permanent_address,"<br>";
      echo $blood_group,"<br>";
      echo $nationality,"<br>";
      echo $mother_tongue,"<br>";
      echo $gender,"<br>";
      echo $dob,"<br>";
      echo $father_name,"<br>";
      echo $mother_name,"<br>";
      echo $mstatus,"<br>";
      echo $id_designation,"<br>";
      echo $employee_status,"<br>";
      echo $probation_period,"<br>";
      echo $qualification,"<br>";
      echo $regdate,"<br>";
      echo $doj,"<br>";
      echo $profile_pic,"<br>";
      echo $role,"<br>";
     
      
         $query = mysqli_query($conn,$sql);
         if($query){
            echo"updated";
            $_SESSION['employecreated']='Employee Id created successfly';
            header('Location: ./');
            ob_end_flush();
         }
         else{
            echo "not updated";
            $_SESSION['employenotcreated']='Employee Id not created successfly';
            // header('Location: ./');
            
            
            ob_end_flush();
         }

    }

   if (isset($_POST['delsubmit'])) {
         $employ_id = $_POST["delete_emplyee_id"];;
         echo "$employ_id";
         $sql = "DELETE FROM `employees` WHERE ID='$employ_id'";
         $result = mysqli_query($conn,$sql);
         if($result){
            header('Location: ./');
            ob_end_flush();
            $_SESSION['delsuccess'] =  'Employee data deleted successfully';

         }
         else{
            header('Location: ./');
            $_SESSION['delnotsuccess'] =  'Employee data deleted failed';
            ob_end_flush();
         }
   }


?>