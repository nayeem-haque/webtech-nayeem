<?php
require_once '../controller/tree_info_controller.php';
session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
$tree = fetch_tree($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<div class="card-body">
        <table class="table table-bordered">
	<tr>
		
		   
			<th>Tree Name</th>
			<th>Stock</th>
			<th>Variant</th>
			<th>Planted</th>
			<th>Image</th>

	</tr>
	<tr>
		<td><a href="show_tree.php?id=<?php echo $tree['id'] ?>"><?php echo $tree['name'] ?></a></td>
          <td><?php echo $tree['stock'] ?></td>
			
		<td><?php echo $tree['variant'] ?></td>
		<td><?php echo $tree['planted'] ?></td>
		<td><img width="100px" src="../uploads/<?php echo $tree['image'] ?>"></td>
        <td><a href="../view/edit_tree.php?id=<?php echo $tree['id'] ?>"class='btn btn-info'>Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../view/delete_tree.php?id=<?php echo $tree['id'] ?>" class='btn btn-danger'>Delete</a></td>
	</tr>
	</table>
</div>
</table>


</body>
</html>
