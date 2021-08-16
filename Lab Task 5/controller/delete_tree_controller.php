<?php

require_once '../model/model.php';

if (delete_tree($_POST['id'])) {
    header('Location: ../view/show_all_tree.php');
}
?>
