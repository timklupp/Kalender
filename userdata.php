<?php
session_start();
include("connection.php");

$data           = array();

	$sql = "SELECT * FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result);

	if($row){
		$data['fname'] 	= $row['fname'];
		$data['lname'] 	= $row['lname'];
		$data['email'] 	= $row['email'];
	}else
		$data['success'] = false;

echo json_encode($data);
?>
