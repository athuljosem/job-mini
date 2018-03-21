<?php

session_start();

if(empty($_SESSION['id_admin'])) {
	header("Location: index.php");
	exit();
}


require_once("../dbcon.php");

if(isset($_GET)) {

	//Delete Company using id and redirect
	$sql = "DELETE FROM company WHERE id_company='$_GET[id]'";
	if($conn->query($sql)) 
	{
		$sql2 = "DELETE FROM job_post WHERE id_company='$_GET[id]'";
	if($conn->query($sql2))
	 {
		$sql3 = "DELETE FROM apply_job_post WHERE id_company='$_GET[id]'";
		if($conn->query($sql)) 
		{                  

			if($_SESSION['approved'] == "true")
		             {
                        $_SESSION['approved'] = "false";
		                header("Location: approved-company.php");
		                exit();
		              }
		              elseif($_SESSION['rejected'] == "true")
		              {
		              	$_SESSION['rejected'] = "false";
		              	header("Location: rejected-company.php");
		                exit();
		              }
		              elseif($_SESSION['pending'] == "true")
		              {
		              	$_SESSION['pending'] = "false";
		              	header("Location: pending-company.php");
		                exit();
		              }

	    } 
	 }
    }
}else {
		echo "Error";
}