<?php
session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>
<table>
	<thead>
		<div class="card-body">
        <table class="table table-bordered">
		<tr>
		    <th>Tree id</th>
			<th>Tree Name</th>
			<th>Stock</th>
			<th>Variant</th>
			<th>Planted</th>
			<th>Image</th>
		    <th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($all_searched_tree as $i => $name): ?>
			<tr>
				<td><a href="../show_tree.php?id=<?php echo $t_name['id'] ?>"><?php echo $name['id'] ?></a></td>
        <td><?php echo $name['name'] ?></td>
        <td><?php echo $name['stock'] ?></td>
		<td><?php echo $name['variant'] ?></td>
        <td><?php echo $name['planted'] ?></td>
        <td><img width="100px" src="../uploads/<?php echo $name['image'] ?>"></td>
				<td><a href="../view/edit_tree.php?id=<?php echo $tree['id'] ?>"class='btn btn-info'>Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../view/delete_tree.php?id=<?php echo $tree['id'] ?>" class='btn btn-danger'>Delete</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</tbody>
</table>
</body>
</html>
