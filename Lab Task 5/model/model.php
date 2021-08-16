<?php

require_once 'dbconnect.php';


function show_all_volunteer(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `volunteer` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function show_volunteer($v_id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `volunteer` where V_ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$v_id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function search_volunteer($v_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `volunteer` WHERE V_NAME LIKE '%$v_name%'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function add_volunteer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into volunteer (v_id, v_name, v_uname, v_email, a_id)
VALUES (:v_id, :v_name, :v_uname, :v_email, :a_id)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':v_id' => $data['v_id'],
            ':v_name' => $data['v_name'],
        	':v_uname' => $data['v_uname'],
        	':v_email' => $data['v_email'],
        	':a_id' => $data['a_id']
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function update_volunteer($v_id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE volunteer set v_name = ?, v_uname = ?, v_email = ?, a_id = ? where V_ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([ $data['v_name'], $data['v_uname'], $data['v_email'], $data['a_id'], $v_id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function delete_volunteer($v_id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `volunteer` WHERE `v_id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$v_id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}