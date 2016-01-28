<?php

	session_start();
	include("connection.php");

	if($_POST['submit']=="sign up"){

		if(!$_POST['email']) $error .= "<br />Bitte eine E-Mail Adresse eingeben.";
			else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error .= "<br />Bitte eine g&uuml;ltige E-Mail Adresse eingeben.";

		if(!$_POST['password']) $error .= "<br />Bitte ein Passwort eingeben";
			else {

				if(strlen($_POST['password'])<6) $error .= "<br />Das Passwort muss mindestens 6 Zeichen lang sein";
				if(!preg_match('`[A-Z]`', $_POST['password'])) $error .= "<br />Das Passwort muss mindestens einen Gro&szlig;buchstaben beinhalten";

			}

		if($error) $error = "Es gab einen Fehler bei der Registrierung:".$error;
			else{

				$query = "SELECT * FROM `users` WHERE `email` LIKE '".mysqli_real_escape_string($link, $_POST['email'])."'";

 				$result = mysqli_query($link, $query);

 				$results = mysqli_num_rows($result);

 				if($results) $error = "Es gab einen Fehler bei der Registrierung:<br />Die E-Mail Adresse ist bereits registriert";
 					else {

 					$query = "INSERT INTO `users` (`email`,`password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";

 					mysqli_query($link,$query);

 					$message = "Registrierung abgeschlossen";

 					$_SESSION['id'] = mysqli_insert_id($link);

 					print_r($_SESSION);

 					//redirect
 					}

 				}
	}

	if($_POST['submit']=="Sign in"){

			$query = "SELECT * FROM `users` WHERE `email` LIKE '".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND `password` LIKE '".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

 			$result = mysqli_query($link,$query);

 			$row = mysqli_fetch_array($result);

 			if($row){

 				$_SESSION['id'] = $row['id'];

 			} else $error = "Benutzername und Passwort stimmen nicht überein";

	}
?>
