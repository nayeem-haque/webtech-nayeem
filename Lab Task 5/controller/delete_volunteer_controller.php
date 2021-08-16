<?php

require_once '../model/model.php';

if (delete_volunteer($_POST['v_id'])) {
    header('Location: ../view/show_all_volunteer.php');

}

 ?>