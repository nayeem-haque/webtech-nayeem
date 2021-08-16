<?php  
    session_start();
    if(!isset($_SESSION["username"])){
        header("Location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript" src="../js/add_tree.js"></script>
    <style>
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="box" style="border:2px;  padding: 1em;" method="post" method="POST" enctype="multipart/form-data"  action="../controller/add_tree_controller.php" style="text-align: center;">
      <fieldset style="text-align: center;">
      <h1>Plant a tree</h1>
        <input type="text" placeholder="ID" id="id" name="id" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
        <span class="error" id="idErr"><?php if(!empty($_GET['idErr'])){echo $_GET['idErr'];} ?></span>
        <br><br>
        <input type="text" placeholder="Name" id="name" name="name" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
        <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
        <br><br>
        <input type="text" placeholder="Stock" id="stock" name="stock" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
        <span class="error" id="stockErr"><?php if(!empty($_GET['stockErr'])){echo $_GET['stockErr'];} ?></span>
        <br><br>
        <input type="text" placeholder="Variant" id="variant" name="variant" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
        <span class="error" id="variantErr"><?php if(!empty($_GET['variantErr'])){echo $_GET['variantErr'];} ?></span>
        <br><br>
        <input type="text" placeholder="Planted" id="planted" name="planted" onfocus="change(this)" onkeyup="change(this)" onblur="revert(this)">
        <span class="error" id="plantedErr"><?php if(!empty($_GET['plantedErr'])){echo $_GET['plantedErr'];} ?></span>
        <br><br>
        
        <input type="file" name="image" placeholder="Image">
        <br><br>
        <input type="submit" name="addTree" value="Add" class="btn btn-info">
        </fieldset>
    </form>
  </body>
</html>
