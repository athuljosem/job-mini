<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../dbcon.php");

if(isset($_GET)) {

	//Delete Company using id and redirect
	$sql = "UPDATE job_post SET active='1' WHERE id_jobpost='$_GET[id]'";
	if($conn->query($sql)) {
		header("Location: pending-jobpost.php");
		exit();
	} else {
		echo "Error";
	}
}