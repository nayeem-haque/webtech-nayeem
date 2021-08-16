<?php
$mysqli = new mysqli("localhost", "root", "", "lab6");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id FROM volunteer WHERE username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();
echo $id;
?>