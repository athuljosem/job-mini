<?php session_start(); ?>
 <?php



  $email = "";
  $pass = "";
  $validated = false;

  if($_POST)
  {
    $email = $_POST['email'];
    $pass = $_POST['password'];
  }


  $_SESSION['login'] = "";
  if($email!="" && $pass!="")
  {  //$mysqli = new mysqli("localhost", "my_user", "my_password", "world")
    $conn = mysqli_connect("localhost", "root", "root", "job");// or die ("Sorry - unable to connect to MySQL database.");
    /* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //$rs = @mysql_select_db ($conn, "job") or die ("error");
    $sql = "SELECT * FROM company WHERE email = '$email' AND password = '$pass'";
    //$rs = mysqli_query($sql,$conn);
  
    //$email=$sql(row[5]);
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
       while ($row=$result->fetch_assoc()) {
         $_SESSION['companyid'] = $row['id_company'];
         $_SESSION['companyname'] = $row['companyname'];
         $_SESSION['login'] = "OK";
         $_SESSION['email'] = $email;
         
         header('Location: company/dashboard.php');
         exit();
       }
     }
    else
    {
      $_SESSION['loginerror'] = true;
      header('Location: companylogin.php');
    }
  }
  else $_SESSION['blankfield'] = true;
    header('Location: companylogin.php');
?>
