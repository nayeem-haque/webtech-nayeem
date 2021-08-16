<?php
require_once '../controller/tree_info_controller.php';
 session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
$tree = fetch_all_tree();

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <fieldset>
    <form method="post" action="../controller/find_tree_controller.php" >
      <h2>SEARCH TREE</h2>
      <input type="text" name="name" required/>
      <input type="submit" name="find_tree" value="Search" class='btn btn-info'/>
    </form>
<table>
    <thead>
        <div class="card-body">
        <table class="table table-bordered">
        <tr>
            <th>Tree Name</th>
            <th>Stock</th>
            <th>Variant</th>
            <th>Planted</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tree as $i => $tree): ?>
            <tr>
                <td><a href="show_tree.php?id=<?php echo $tree['id'] ?>"><?php echo $tree['name'] ?></a></td>
                <td><?php echo $tree['stock'] ?></td>
                <td><?php echo $tree['variant'] ?></td>
                <td><?php echo $tree['planted'] ?></td>
                <td><img width="100px" src="../uploads/<?php echo $tree['image'] ?>"></td>
                <td><a href="../view/edit_tree.php?id=<?php echo $tree['id'] ?>"class='btn btn-info'>Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="../view/delete_tree.php?id=<?php echo $tree['id'] ?>" class='btn btn-danger'>Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

    </tbody>


</table>

</fieldset>
</body>
</html>
