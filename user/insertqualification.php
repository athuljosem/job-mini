<?php
session_start();
require_once("../dbcon.php");

//if user clicked update profile button
if(isset($_POST["submit"])) {

	$q_level= mysqli_real_escape_string($conn, $_POST['q_level']);
	$qualification= mysqli_real_escape_string($conn, $_POST['qualification']);
	$subject= mysqli_real_escape_string($conn, $_POST['subject']);
	$institution= mysqli_real_escape_string($conn, $_POST['institution']);
	$university= mysqli_real_escape_string($conn, $_POST['university']);
	$percentage= mysqli_real_escape_string($conn, $_POST['percentage']);
	$grade= mysqli_real_escape_string($conn, $_POST['grade']);
	$passout= mysqli_real_escape_string($conn, $_POST['passout']);
	$register_number= mysqli_real_escape_string($conn, $_POST['register_number']);

	//Update Query
	$sql = "INSERT INTO user_qualification(user_id,q_level,qualification,subject,institution,university,percentage,grade,passout,register_number) VALUES ( '$_SESSION[userid]','$q_level','$qualification','$subject','$institution','$university','$percentage','$grade','$passout','$register_number')";

	if($conn->query($sql) === TRUE) {
		$session['qualificationsuccess'] = true;
		header("Location: qualification.php");
		exit();
	} else {
		echo "Error ". $sql . "<br>" . $conn->error;
	}

	$conn->close();


} 
else 
{
	header("Location: dashboard.php");
	exit();
}