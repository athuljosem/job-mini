<?php require_once("../dbcon.php");
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM `user_qualification` WHERE q_id = '$id'";

	if($conn->query($sql) === TRUE) {
		echo 1;
	} else {
		echo 0;
	}

	$conn->close();

?>