<?php
require("dbconfig.php");


if(isset($_POST['login_btn']))
    {
        $username =$_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM `employees` WHERE  username='$username'";
        $query_run = mysqli_query($conn,$sql);
        $result =mysqli_num_rows($query_run);
        if($result > 0){
            while($row=mysqli_fetch_assoc($query_run)){
                if (password_verify($password, $row['Password'])){
                    header('Location: ./dashboard');
                    foreach($query_run as $data){
                        $user_id = $data['ID'];
                        $user_role = $data['role'];
                    }

                    echo $user_role;
                    $_SESSION['username'] =  $username;
                    $_SESSION['user_role'] = $user_role;
                   
                }
                else
                {
                    $_SESSION['status'] =  'Employee Id and Password is not correct';
                    header('Location: ./');
                }
            }
        }
        else{
            $_SESSION['status'] =  'Employee Id and Password is not correct';
            header('Location: ./');

        }
    


}
else
{
    echo'eroor';
    header('Location: ./');
    ob_end_flush();
}



?>


