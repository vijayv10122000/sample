<?php
require("../dbconfig.php");
ob_start();
    if (isset($_POST['edit_employee'])) {
       $employ_id= $_POST["id"];
       $full_name = $_POST["full_name"];
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
       $doj=$_POST["doj"];
       $probation_period = $_POST["probation_period"];
       $qualification = $_POST["qualification"];
       $regdate= $_POST["regdate"];
       $profile_pic= $_POST["profile_pic"];
       $role_name = $_POST["role"];
      

$sql="UPDATE `employees` SET `Full Name`='$full_name',
`Mobile Primary`='$mobile_primary',`Mobile Secondary`='$mobile_secondary',
`Email`='$email',`Present Address`='$present_address',`Permanent Address`='$permanent_address',
`Blood Group`='$blood_group',`Nationality`='$nationality',`Mother Tongue`='$mother_tongue',
`Date of Birth`='$dob',`Gender`='$gender',`Father name`='$father_name',
`Mother name`='$mother_name',`Marital Status`='$mstatus',`Designation`='$id_designation',
`Date of Joining`='$doj',`Employee Status`='$probation_period',
`Highest Qualification`='$qualification', `role`='$role_name',
`profile_pic`='$profile_pic' WHERE ID =$employ_id";

echo $employ_id;
$query=mysqli_query($conn,$sql);
if($query){
    $_SESSION['empupdated']="Employee Information Updated Successfly";
    header('Location: ./?id='.$employ_id);
    // echo "updated";
    ob_end_flush();
    
    
}
else{
    $_SESSION['empnotupdated']="Employee Information Not Updated Successfly";
     header('Location: ./?id='.$employ_id);
    // echo "updated";
    ob_end_flush();
   
}
    
}
else{
    header('Location: ./');
    ob_end_flush(); 
}
?>
