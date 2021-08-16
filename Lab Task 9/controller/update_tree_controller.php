<?php
require_once '../model/model.php';


if (isset($_POST['updateTree'])) {

  $id=$name=$stock=$variant=$planted=$image="";

  $flag=1;

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }



 if (empty($_POST["id"])) {
    echo "ID is required";
     $flag=0;
   }
   else {
    $id = test_input($_POST["id"]);

    if (strlen($_POST["id"]) > '3') 
    {
        $idErr = "Id can contain maximun 3 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$id)) 
    {
        $idErr = "Id Must Contain Number!";

   }
  }


   if (empty($_POST["name"])) {
    echo "Name is required";
     $flag=0;
   }
   else {
    $name = test_input($_POST["name"]);

     if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
        echo "Only letters and white space allowed";
         $flag=0;
      }
   }


  
    if (empty($_POST["stock"])) {
    echo "Stock is required";
     $flag=0;
   }
   else {
    $stock = test_input($_POST["stock"]);

    if (strlen($_POST["stock"]) < '1') 
    {
        $stockErr = "Stock must be greater than 0";
    }
    elseif(!preg_match("#[0-9]+#",$stock)) 
    {
        $stockErr = "Stock Must Contain Number!";

   }
  }


  if (empty($_POST["variant"])) {
    echo "Variant is required";
     $flag=0;
   }
   else {
    $variant = test_input($_POST["variant"]);

     if (!preg_match("/^[a-zA-Z-. ]*$/",$variant)) {
        echo "Only letters and white space allowed";
         $flag=0;
      }
   }



 if (empty($_POST["planted"])) {
    echo "Planted is required";
     $flag=0;
   }
   else {
    $planted = test_input($_POST["planted"]);

    if (strlen($_POST["planted"]) < '1') 
    {
        $plantedErr = "Must be greater than 0";
    }
    elseif(!preg_match("#[0-9]+#",$planted)) 
    {
        $plantedErr = "Must Contain Number!";

   }
  }




  
  
  if(isset($_POST['updateTree']) && $flag==1)
  {
    $data['id'] = $_POST['id'];
    $data['name'] = $_POST['name'];
    $data['stock'] = $_POST['stock'];
    $data['variant'] = $_POST['variant'];
    $data['planted'] = $_POST['planted'];
    $data['image'] = basename($_FILES["image"]["name"]);

         $target_dir = "../uploads/";
         $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
  


    if (update_tree($_POST['id'], $data)) {
      echo 'Successfully Updated!!';
      header('Location: ../view/show_tree.php?id=' . $_POST["id"]);
    }
    else {
      echo "Update unsuccessful!!";
    }
  }

} else {
	echo 'You are not allowed to access this page.';
}

?>
