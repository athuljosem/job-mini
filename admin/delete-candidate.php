<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../dbcon.php");

if(isset($_GET)) {

	//Delete candidate using id and redirect
	$sql = "DELETE FROM users WHERE user_id='$_GET[id]'";
	if($conn->query($sql)) {
		$sql1 = "DELETE FROM apply_job_post WHERE id_user='$_GET[id]'";
		if($conn->query($sql1)) {
		}
		header("Location: dashboard.php");
		exit();
	} else {
		echo "Error";
	}
}