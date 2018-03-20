<?php
session_start();
require_once("../dbcon.php");

//if user clicked update profile button
if(isset($_POST["submit"])) {

	//Escape Special Characters
	/*$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	*/

	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	if($_SESSION['user_id']==NULL)
	{
			$jobid = mysqli_real_escape_string($conn, $_POST['to']);
	}
	
	//Update Query
	if($_SESSION['user_id']!=NULL)
	{
$sql = "INSERT INTO company_mailbox(id_company,id_user,mail_title,mail_content) VALUES ( '$_SESSION[companyid]','$_SESSION[user_id]', '$subject', '$description')";
	}
	else
	{
	$sql = "INSERT INTO company_mailbox(id_company,id_jobpost,mail_title,mail_content) VALUES ( '$_SESSION[companyid]','$jobid', '$subject', '$description')";
}
	if($conn->query($sql) === TRUE) {
		$session['mailsuccess'] = true;
		$_SESSION['user_id']=NULL;
		header("Location: mailbox.php");
		exit();
	} else {
		echo "Error ". $sql . "<br>" . $conn->error;
	}

	$conn->close();


} 
else 
{
	header("Location: createjob.php");
	exit();
}