<form action="" method="post">

       <input type="text" name="password">
       <button type="submit" name="submit"> submit</button>
</form>

<?php

       if(isset($_POST['submit'])){

              $password = $_POST["password"];
              echo $password;
              $str_pass = password_hash($password, PASSWORD_BCRYPT);

              echo $str_pass;

              if(password_verify($password,$str_pass)){
                     echo "<br>sucess";
              }
              else{
                     echo"not sucess";
              }
       }


?>