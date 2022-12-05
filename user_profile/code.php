<?php
    require("../dbconfig.php");
    ob_start();
    if(isset($_POST['update_pass']))
        {

            $newpass=$_POST["newpass"];
            $confirmpass=$_POST["confirmpass"];
            $employe_Id=$_POST["ID"];
           
           
            if ($newpass==$confirmpass) {
                $str_pass=password_hash($confirmpass,PASSWORD_DEFAULT);
                $sql ="UPDATE `employees` SET `Password`='$str_pass'  WHERE ID =$employe_Id";
                $result = mysqli_query($conn,$sql);
                echo $employe_Id;
                
                if($result){
                    $_SESSION['confirm'] = 'Password Changed Successfuly';
                    header('Location: ./'); 
                }
                else{
                    $_SESSION['confirm'] =  'Password Not Changed Successfuly';
                    header('Location: ./');

                }
               
            }
            else{
                $_SESSION['not confirm'] =  'Password not Changed Successfuly';
                header('Location: ./');

            }
        }


        if(isset($_POST["uphoto_upload"])){
            $photo=$_FILES["photo"];
            $id=$_POST["ID"];
            $filename = $photo['name'];
            $filepath = $photo['tmp_name'];
            $fileerror =$photo['error'];
            if ($photo > "0") {
                    if($fileerror == 0)
                {
                    $destfile = '../photo/'.$filename;
                    move_uploaded_file( $filepath, $destfile);
                    $sql ="UPDATE `employees` SET `profile_pic`='$destfile'  WHERE ID =$id";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        echo" uploaded";
                        header('Location: ./');
                        ob_end_flush();

                    }
                    else{
                        echo "not uploaded";
                        header('Location: ./');
                        ob_end_flush();
                    }
                }
                else{
                    echo "$fileerror";
                    header('Location: ./');
                    ob_end_flush();
                }
            }
            else{

                    echo "not uploaded";
                    header('Location: ./');
                    ob_end_flush();
                
            }
            
        
        }
        else{
            header('Location: ./');
            ob_end_flush();
            
        }
 
      
        if (isset($_POST["delete"])) {
            $id=$_POST["ID"];
            $sql ="SELECT * FROM `employees` WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($result);
            $gender=''.$row['Gender'].'';
            echo "$id";

            if($gender=="Male"){
                $sql ="UPDATE `employees` SET `profile_pic`='../photo/male profile.png'  WHERE ID =$id";
                $query =mysqli_query($conn, $sql);
                header('Location:./');
                ob_end_flush();
                echo"deleted";
            }
            else{
                $sql ="UPDATE `employees` SET `profile_pic`='../photo/female profile.png'  WHERE ID =$id";
                $query =mysqli_query($conn, $sql);
                header('Location:./');
                ob_end_flush();
            }
           
        }
        else{
            header('Location:./');
            ob_end_flush();
        }
  

?>