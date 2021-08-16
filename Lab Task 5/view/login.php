<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="../js/login.js"></script>
    <title>Login</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<form class="box" method="post" action="../controller/login_controller.php">
  <fieldset>
  <h1>Login</h1>
  <br>
  <label for="username" ></label>
  <input type="text" placeholder="Username" id="username" name="username" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
  <br> <br>
  <input type="password" placeholder="Password" id="password" name="password" onkeyup="change(this)" onblur="revert(this)">
  <span class="error" id="passErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
  <br> <br>
  <input type="checkbox" id="reme" name="remember" value="remember">
  <label for="reme"> Remember Me</label><br>
  <input type="submit" id="submit" name="submit" value="Login">
  <a href="forget_password.php">Forgot Password?</a>
  </fieldset>
</form>
</body>
</html>
