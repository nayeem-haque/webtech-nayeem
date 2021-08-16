<?php 

require_once '../model/model.php';

if (delete_tree($_GET['id'])) {
    header('Location: ../view/show_all_tree.php');
}
?>
<!-- <?php
// require 'header.php'; 

// require_once '../controller/tree_info_controller.php';
// $tpc = fetch_tree($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/delete_tree_controller.php" method="POST" enctype="multipart/form-data">
   
   <label for="id">Tree ID:</label><br>
  <input value="<?php echo $tpc['id'] ?>" type="text" id="id" name="id"><br>

  <label for="name">Tree Name:</label><br>
  <input value="<?php echo $tpc['name'] ?>" type="text" id="name" name="name"><br>

  <label for="stock">Stock:</label><br>
  <input value="<?php echo $tpc['stock'] ?>" type="text" id="stock" name="stock"><br>

  <label for="variant">Variant:</label><br>
  <input value="<?php echo $tpc['variant'] ?>" type="text" id="variant" name="variant"><br>

  <label for="planted">Planted:</label><br>
  <input value="<?php echo $tpc['planted'] ?>" type="text" id="planted" name="planted"><br>

  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "delete_tree" value="Delete">
  <input type="reset">
</form>

</body>
</html> -->
