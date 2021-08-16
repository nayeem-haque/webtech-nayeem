<?php
require_once '../model/model.php';

if (isset($_POST['submit'])){

  $birthday =$id= $name = $email = $gender = $comment = $website ="";
  $username=$password="";
  $confirmpass="";
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
   else{
    $id = test_input($_POST["id"]);

    if (strlen($_POST["id"]) > '3') 
    {
        $idErr = "Your id can contain maximun 3 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$id)) 
    {
        $idErr = "Your id Must Contain Number!";
   }
  }

  
  if (empty($_POST["name"])) {
    echo "Name is required";
    $flag=0;
  } else {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($name)<2)
          {
          echo "Name must contains at least two words ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }

   if (empty($_POST["birthday"])) {
    $birthErr = "Date of birth is required";
    $flag=0;
  } else {

    $birthday=test_input($_POST["birthday"]);
  }

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

if(!empty($_POST["Password"]) && ($_POST["Password"] == $_POST["confirmpass"])) 
    {
    $password = test_input($_POST["Password"]);
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strlen($_POST["Password"]) < '8') 
    {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(!empty($_POST["Password"])) 
    {

    $confirmpassErr = "Please Check You've Entered Or Confirmed Your Password!";
     
     } 
}
else {
     $passwordErr = "Please enter password   ";
}


if (empty($_POST["gender"])) {
echo "Gender is required";
$flag=0;
} else {
$gender = test_input($_POST["gender"]);
}

if($flag==1)
{
  $data['id']=$id;
  $data['name']=$name;
  $data['email']=$email;
  $data['birthday']=$birthday;
  $data['username']=$username;
  $data['password']=$password;
  $data['gender']=$gender;

  if (addSignupInfo($data)) {
    //$message = "<label class='text-success'>Registration Successful!</p>";
    header('location:../view/login.php');
  }

  else {
    echo 'Could not add!!';
  }
 }
}

else {
  echo "You can not access this page!!";
}

?>
