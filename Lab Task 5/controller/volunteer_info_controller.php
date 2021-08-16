<?php

require_once ('../model/model.php');

function fetch_all_volunteer(){
	return show_all_volunteer();

}
function fetch_volunteer($v_id){
	return show_volunteer($v_id);

}
?>