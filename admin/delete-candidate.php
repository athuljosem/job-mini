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
	if($conn->query($sql)) 
	{
		        $sql2 = "DELETE FROM apply_job_post WHERE id_user='$_GET[id]'";
		        if($conn->query($sql)) 
		        {
		
		             if($_SESSION['approved'] == "true")
		             {
                        $_SESSION['approved'] = "false";
		                header("Location: approved-candidates.php");
		                exit();
		              }
		              elseif($_SESSION['rejected'] == "true")
		              {
		              	$_SESSION['rejected'] = "false";
		              	header("Location: rejected-candidates.php");
		                exit();
		              }
		              elseif($_SESSION['pending'] == "true")
		              {
		              	$_SESSION['pending'] = "false";
		              	header("Location: pending-candidates.php");
		                exit();
		              }


		        }
	} 
	else 
	{
		echo "Error";
	}
}