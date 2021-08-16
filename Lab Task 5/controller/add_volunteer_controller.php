<?php
require_once '../model/model.php';



if (isset($_POST['addVolunteer'])) {
	$v_id=$v_name=$v_uname=$v_email=$a_id="";

	$flag=1;

	function test_input($data) {
	 $data = trim($data);
	 $data = stripslashes($data);
	 $data = htmlspecialchars($data);
	 return $data;
	}


 if (empty($_POST["v_id"])) {
		echo "ID is required";
		 $flag=0;
	 }
	 else {
		$v_id = test_input($_POST["v_id"]);

		if (strlen($_POST["v_id"]) > '3') 
    {
        $idErr = "Your id can contain maximun 3 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$v_id)) 
    {
        $idErr = "Your id Must Contain Number!";

	 }
	}


	 if (empty($_POST["v_name"])) {
		echo "Name is required";
		 $flag=0;
	 }
	 else {
		$v_name = test_input($_POST["v_name"]);

		 if (!preg_match("/^[a-zA-Z-. ]*$/",$v_name)) {
				echo "Only letters and white space allowed";
				 $flag=0;
			}

	 }


	
    if (empty($_POST["v_uname"])) {
      $unameErr = "User Name is required";
      $flag=0;
    }
    else {
     $v_uname = test_input($_POST["v_uname"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$v_uname)) {
         $unameErr = "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($v_uname)<2)
         {
            $unameErr = "Name must contains at least two character ";
            $flag=0;
         }
       }
    }


    if (empty($_POST["v_email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $v_email = test_input($_POST["v_email"]);
    if (!filter_var($v_email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
  }


 if (empty($_POST["a_id"])) {
		echo "Admin ID is required";
		 $flag=0;
	 }
	 else {
		$a_id = test_input($_POST["a_id"]);

		if (strlen($_POST["a_id"]) > '1') 
    {
        $adminIdErr = "Admin id can contain maximun 1 Character!";
    }
    elseif(!preg_match("#[0-9]+#",$a_id)) 
    {
        $adminIdErr = "Admin id Must Contain Number!";

	 }
	}




	
	
	if(isset($_POST['addVolunteer']) && $flag==1)
	{
		$data['v_id'] = $_POST['v_id'];
		$data['v_name'] = $_POST['v_name'];
		$data['v_uname'] = $_POST['v_uname'];
		$data['v_email'] = $_POST['v_email'];
		$data['a_id'] = $_POST['a_id'];
	


		if (add_volunteer($data)) {
			echo 'Successfully added!!';
		}

		else {
			echo 'Could not add!!';
		}

	}




} 

else {
	echo 'You are not allowed to access this page.';
}

?>