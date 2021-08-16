<!DOCTYPE html>
<html>
<head>
  <link href="bootstrap.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/style.css">
  <script type="text/javascript" src="../js/adminsignup.js"></script>
	<title>Planter Registration</title>
	<style>
.error {color: #FF0000;}
</style>
</head>
<body>
  <h1>Planter Registration</h1>
  <form class="box" method="post" action="<?php echo htmlspecialchars('../controller/planterSignupController.php');?>">
  <label>ID</label>
  <input type="text" placeholder="ID" id="id" name="id" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="idErr"><?php if(!empty($_GET['idErr'])){echo $_GET['idErr'];} ?></span>
<br><br>
<label>NAME</label>
  <input type="text" placeholder="Name" id="name" name="name" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><br>
 <label>EMAIL</label>
  <input type="text" placeholder="Email" id="email" name="email" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
  <br><br>
  <label>Username</label>
  <input type="text" placeholder="Username" id="username" name="username" onkeyup="checkUsername(this.value)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
  <br><br>
  <label>Password</label>
  <input type="Password" placeholder="Password" id="Password" name="Password" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="PasswordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  <br><br>
<label>Confirm Password</label>
  <input type="Password" placeholder="Confirmpassword" id="confirmpass" name="confirmpass" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="ConfirmpassErr"><?php if(!empty($_GET['confirmpassErr'])){echo $_GET['confirmpassErr'];}?></span>
<br><br>

  <fieldset style="width:30%;margin-left: 505;">
  <legend >Gender</legend>
  <input type="radio" name="gender" id="gender" value="Female" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Female
  <input type="radio" name="gender" id="gender" value="Male" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Male
  <input type="radio" name="gender" id="gender" value="Other" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)">Other
  <span class="error" id="genderErr"><?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
  </fieldset>
  <fieldset style="width:30%;margin-left: 505;">
  <legend >Date Of Birth</legend>
  <input type="date" id="birthday" name="birthday" onchange="dobValidate(this)" onblur="dobValidate(this)">
  <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
  <br></fieldset>
  <input type="submit" name="submit" value="SignUp">
</form>
</body>
</html>
