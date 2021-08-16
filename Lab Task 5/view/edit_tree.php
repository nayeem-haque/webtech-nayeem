<?php

require_once '../controller/tree_info_controller.php';
 session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
$tpc = fetch_tree($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
    
	<title></title>
</head>
<body>
<link rel="stylesheet" href="../CSS/style.css">
 <form class="box" style="border:2px;  padding: 1em;" action="../controller/update_tree_controller.php" method="POST" enctype="multipart/form-data">
   <fieldset>
   <h1>Edit Tree</h1>
  <input value="<?php echo $tpc['id'] ?>" type="text" id="id" name="id" class="form-control">
  <br> <br>
  <input value="<?php echo $tpc['name'] ?>" type="text" id="name" name="name" class="form-control">
  <br> <br>
  <input value="<?php echo $tpc['stock'] ?>" type="text" id="stock" name="stock" class="form-control">
  <br> <br>
  <input value="<?php echo $tpc['variant'] ?>" type="text" id="variant" name="variant" class="form-control">
  <br> <br>
  <input value="<?php echo $tpc['planted'] ?>" type="text" id="planted" name="planted" class="form-control">
  <br> <br>
  <input type="file" name="image">
  <br> <br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateTree" value="Update" class="btn btn-info">
  <input type="reset" class="btn btn-primary">
  </fieldset>
</form>

</body>
</html>
