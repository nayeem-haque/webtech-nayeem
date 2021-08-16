<?php 
    include_once 'adminHead.php';
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Planter Dashboard</title>
</head>
<body>
    <fieldset style="text-align: center;">
    Welcome to <?php echo $_SESSION["username"]; ?> dashboard 
    <br> <br>
    <a href="viewProfile.php">View Profile</a>
    <br> <br>
    <a href="show_all_Tree.php">Trees</a>
    <br> <br>
    <a href="add_Tree.php">Update Planted Tree</a>
    <br> <br>
    
    <a href="logout.php">Logout</a>
    <br>
    </fieldset>
</body>
</html>

