<?php require 'header.php'; 
session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
  <body>
    <link rel="stylesheet" href="../CSS/general.css">
    <form method="post" action="../controller/find_tree_controller.php" style="text-align: center;">
      <h1>SEARCH TREE</h1>
      <input type="text" name="name" required/>
      <input type="submit" name="find_tree" value="Search By Name"/>
    </form>
  </body>
</html>
