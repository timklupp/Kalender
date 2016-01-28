<?php
session_start();
include("connection.php");

$data           = array();

	$email 		= mysqli_real_escape_string($db, $_POST["loginemail"]);
	$password 	= mysqli_real_escape_string($db,md5(md5($_POST['loginemail']).$_POST['loginpassword']));

	$sql = "SELECT * FROM users WHERE(email LIKE '$email' AND password LIKE '$password')";

	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($result);

	if($row){
		$_SESSION['id'] = $row['id'];
		$data['success'] = true;
	}else
		$data['success'] 	= false;
		$data['errors']		= "Es gab einen Fehler bei deiner Anmeldung. Bitte probiere es erneut.";

echo json_encode($data);
?>
