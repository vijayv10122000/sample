
<div class="sidenavbar " id="sidenavbar">
     <?php
          $username= $_SESSION['username'];
               $sql = "SELECT * FROM `employees` WHERE  username= '$username'";
               ob_start();
               if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){
                              $username = mysqli_fetch_array($result);
                              // echo ''.$username['Full Name'].'';
                              ob_end_flush();

                    }
                    else{
                    header('Location: ../');
                    ob_end_flush();

                    }
               }
               else{
                    header('Location: ../');
               ob_end_flush();
               }
          
                    
     ?>
   <div class="user text-center ">
        <img src="<?php echo ''.$username['profile_pic'].''; ?>" alt="" >
        <h4 class="user-name text-light">
          <?php echo ''.$username['Full Name'].''; ?>
        </h4>
   </div>
   <nav class="navigation">
        <ul class="list-unstyled collased">
            <li ><a id="dashboard" href="../dashboard/" class=""><i class="fa-regular fa-bookmark"></i><span>DASHBOARD</span></a></li>
            <li><a id="employees" class="" href="../employee_manager/"><i class="fa-regular fa-user"></i><span>EMPLOYEE</span></a></li>
            <li class=""><a id="institution"href="../institution/"><i class="fa-solid fa-building-columns"></i><span>INSTITUTES</span></a></li>
        </ul>
   </nav>
</div>