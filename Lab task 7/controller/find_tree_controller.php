<?php

require_once '../model/model.php';

if (isset($_POST['find_tree'])) {

		// echo 'Search result for'; 
  //       echo $_POST['name'];

    try {
    	$all_searched_tree = search_tree($_POST['name']);
    	require_once '../view/search_all_tree.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
?>
