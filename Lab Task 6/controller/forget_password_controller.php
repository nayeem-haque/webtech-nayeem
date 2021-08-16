<?php
require_once '../model/model.php';

if (isset($_POST['submit'])) {
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

$username=$usernameErr="";
$msg=$msg1=$msg2="";
$flag=1;

    if (empty($_POST["username"])) {
      echo "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            echo "Name must contains at least two character ";
            $flag=0;
         }

       }
    }

  

if($flag==1)
  {
    try {

      $data = searchUsername($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $usernameFromDB= $user['USERNAME'] ;
        endforeach;
        if($username==$usernameFromDB){
          if (findPassword($username)) {
            $msg1= $user['PASSWORD'];

             echo "Your password is $msg1";

        }
 
          }

          }
        }
        catch(PDOException $e){
        echo $e->getMessage();
    }

        }
        else{
         echo $msg="No such email is available";
          

        }
      }
      

?>
