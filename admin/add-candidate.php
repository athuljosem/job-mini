<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../dbcon.php");

if(isset($_GET)) {

	//Update user using id and redirect
	$sql = "UPDATE users SET active='1' WHERE user_id='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: pending-candidates.php");
		exit();
	} else {
		echo "Error";
	}
}