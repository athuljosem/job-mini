<?php

session_start();

if(empty($_SESSION['id_admin'])) {
  header("Location: index.php");
  exit();
}

require_once("../dbcon.php");

if(isset($_GET)) {

	$sql = "DELETE FROM job_post WHERE id_jobpost='$_GET[id]'";
	if($conn->query($sql)) {
		$sql1 = "DELETE FROM apply_job_post WHERE id_jobpost='$_GET[id]'";
		if($conn->query($sql1)) {

if($_SESSION['approved'] == "true")
		             {
                        $_SESSION['approved'] = "false";
		                header("Location: active-jobs.php");
		                exit();
		              }
		              elseif($_SESSION['rejected'] == "true")
		              {
		              	$_SESSION['rejected'] = "false";
		              	header("Location: rejected-jobpost.php");
		                exit();
		              }
		              elseif($_SESSION['pending'] == "true")
		              {
		              	$_SESSION['pending'] = "false";
		              	header("Location: pending-jobpost.php");
		                exit();
		              }

		}
		
	} 
	}else {
		echo "Error";
}