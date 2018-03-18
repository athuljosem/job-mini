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
	$companyid = mysqli_real_escape_string($conn, $_POST['to']);

	//Update Query
	 $sql = "INSERT INTO user_mailbox(id_user,id_company,mail_title,mail_content) VALUES ( '$_SESSION[userid]','$companyid','$subject', '$description')";

	if($conn->query($sql) === TRUE) {
		$session['mailsuccess'] = true;
		header("Location: mailbox.php");
		exit();
	} else {
		echo "Error ". $sql . "<br>" . $conn->error;
	}

	$conn->close();


} 
else 
{
	header("Location: mailbox.php");
	exit();
}