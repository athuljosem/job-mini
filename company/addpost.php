<?php
session_start();
require_once("../dbcon.php");

//if user clicked update profile button
if(isset($_POST["submit"])) {

	//Escape Special Characters
	$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

	//Update Query
	$sql = "INSERT INTO job_post(id_company,jobtitle,description,minimumsalary,maximumsalary,experience,qualification) VALUES ( '$_SESSION[companyid]', '$jobtitle', '$description', '$minimumsalary', '$maximumsalary', '$experience', '$qualification')";

	if($conn->query($sql) === TRUE) {
		$session['jobpostsuccess'] = true;
		header("Location: dashboard.php");
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