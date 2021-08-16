<?php
session_start();
if(isset($_SESSION['username']))
{
require_once '../controller/Info.php';
$data = fetch($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $planter):

       $name= $planter['NAME'] ;
       $email=$planter['EMAIL'];
       $phone=$planter['USERNAME'];
     

  endforeach;

}
 ?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../javascript/editProfile.php"></script>
	<title></title>
</head>
<body>
   

   <form  class="loginbox" onsubmit="return validation()"action="../controller/update.php" method="POST" enctype="multipart/form-data">
  <fieldset style="text-align: center;">
  <h2>Edit Profile</h2>
   <br>
    <label for="name">Name:</label><br><br>
    <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()">
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br><br>
    <label for="email">Email:</label><br><br>
    <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()">
    <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span><br><br>
    <!-- Tell About Yourself: <input type="text" value="<?php echo "$details"; ?> "name="details" size="75">
    <br><br><br><br> -->

    <input type="submit" name = "update" value="Update">
    <a href="planterDashboard.php">Go back to dashboard</a><br>
     <a href="logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
  </form>
</fieldset>




</body>
</html>


<?php

}
else {
header("location:../view/login.php");
}
 ?>
