<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../dbcon.php");

//If user clicked register button
if(isset($_POST)) {

	
	$sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]'";
	$result = $conn->query($sql);

                //If Job Post exists then display details of post
	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$id_company=$row['id_company'];
	}
	
	
	
	//FIX: The system should not allow to apply for a job that he is not qualified to.
		//sql new registration insert query
	$sql = "INSERT INTO apply_job(id_jobpost, id_company, id_user) VALUES ('$_GET[id]', '$id_company', $_SESSION[userid])";

	if($conn->query($sql)===TRUE) {

			//If data inserted successfully then Set some session variables for easy reference and redirect to company login
		$_SESSION['jobapplysuccess'] = true;
		if ($_SESSION['leftpanel'] = 'dashboard')
		{
			header("Location: dashboard.php");
		}
		else
		{
			header("Location: view_jobpost.php");
		}
		exit();

	} else {
			//If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
		echo "Error " . $sql . "<br>" . $conn->error;
	}
	
	//Close database connection. Not compulsory but good practice.
	$conn->close();

} else {
	//redirect them back to register page if they didn't click register button
	header("Location: view.php");
	exit();
}