<?php 
session_start();
var_dump($_POST);
require_once("dbcon.php");
// if user click register
if (isset($_POST['register'])) 
{
	// escape special characters from string 
	$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 
	$sql = "SELECT email FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    

    if ($result->num_rows == 0)
     {

	    $sql = "INSERT INTO users(fname,lname,email,password) VALUES ('$fname', '$lname', '$email', '$password')";
 
     
          if($conn->query($sql)===TRUE)
           {
    	       $_SESSION['registercompleted']=true;
    	       header('location:login.php');
    	       exit();


            }
            else
            {
               echo "error" . $sql . "<br>" .$conn->error;
    
            }
     }
     else
     {
     	 $_SESSION['emailerror']=true;
     	 header('location:login.php#signup');
     }
 }
else 
{
	header('location:login.php#signup');
}