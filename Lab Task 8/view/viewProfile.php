<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../javascript/viewprofile.js"></script>
    <meta charset="utf-8">
    <title></title>
  


  </head>
  <body>

<fieldset style="text-align: center;"> 
     


  <?php

  require_once '../controller/Info.php';

  if(isset($_SESSION['username']))
  {
  $data = fetch($_SESSION['username']);


    if($data!=NULL)
    {
      foreach ($data as $i => $planter):

           $name= $planter['NAME'] ;
           $email=$planter['EMAIL'];
           $username= $planter['USERNAME'];
      endforeach;

      ?>
      <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <label for="name">Name: </label><?php echo $name ?><br>
    <label for="email">Email: </label><?php echo $email ?><br>
    <label for="username">Username: </label><?php echo $username ?><br>
<br><br><br>
    <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
    <a href="planterDashboard.php">Go back to dashboard</a><br>
     <a href="logout.php">Logout</a><br>
</fieldset>
  </body>
</html>
    
      <?php


    }
  }
}

  else {
    header("location:../view/login.php");
  }
   ?>

</div>



</div>



  </body>
</html>

