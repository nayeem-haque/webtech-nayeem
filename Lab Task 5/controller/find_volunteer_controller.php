<?php

require_once '../model/model.php';

if (isset($_POST['find_volunteer'])) {

		echo 'Search result for '; echo $_POST['v_name'];

    try {

    	$all_searched_volunteer = search_volunteer($_POST['v_name']);
    	require_once '../view/search_all_volunteer.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
 ?>