<?php

require_once 'dbconnect.php';


function show_all_tree(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `tree` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function show_tree($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `tree` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function search_tree($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `tree` WHERE name LIKE '%$name%'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function add_tree($data){
	$conn = db_conn();
    $selectQuery = "INSERT into tree (id, name, stock, variant, planted, image)
VALUES (:id, :name, :stock, :variant, :planted, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data['id'],
            ':name' => $data['name'],
        	':stock' => $data['stock'],
        	':variant' => $data['variant'],
        	':planted' => $data['planted'],
            ':image' => $data['image']
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function update_tree($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE tree set name = ?, stock = ?, variant = ?, planted = ?, image = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([ $data['name'], $data['stock'], $data['variant'], $data['planted'], $data['image'], $id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function delete_tree($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `tree` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function findPassword($username){
    $conn = db_conn();
    $selectQuery = "SELECT PASSWORD FROM `users` WHERE USERNAME = '$username'";
    try{
        $stmt = $conn->query($selectQuery);
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function addSignupInfo($data){
    $conn = db_conn();
    $selectQuery = "INSERT into users (ID, NAME, EMAIL, BIRTH, USERNAME, PASSWORD, GENDER)
VALUES (:id, :name, :email, :birthday, :username, :password, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data['id'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':birthday' => $data['birthday'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender']
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function updatePasswordAdmin($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE users set PASSWORD = '$password' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function loginCheck($tableName, $username, $password){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM ".$tableName." where username = ? AND password = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username, $password]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function show($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function update($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE users set NAME = ?, EMAIL = ?, USERNAME = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
