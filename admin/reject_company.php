<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../dbcon.php");

if(isset($_GET)) {

	//Delete Company using id and redirect
	$sql = "UPDATE company SET active='3' WHERE id_company='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: pending-company.php");
		exit();
	} else {
		echo "Error";
	}
}