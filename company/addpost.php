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
	// $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
	$ugcourse="";
	$pgcourse="";

	if(!empty($_POST['ugcheck']))
	{
// Loop to store and display values of individual checked checkbox.
foreach($_POST['ugcheck'] as $selected)
{
echo $selected."</br>";
$ugcourse=$ugcourse." ".$selected;
}
}

	if(!empty($_POST['pgcheck']))
	{
// Loop to store and display values of individual checked checkbox.
foreach($_POST['pgcheck'] as $selected)
{
echo $selected."</br>";
$pgcourse=$pgcourse." ".$selected;
}
}

	//Update Query
	$sql = "INSERT INTO job_post(id_company,jobtitle,description,minimumsalary,maximumsalary,experience,ug_course,pg_course) VALUES ( '$_SESSION[companyid]', '$jobtitle', '$description', '$minimumsalary', '$maximumsalary', '$experience', '$ugcourse','$pgcourse')";


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