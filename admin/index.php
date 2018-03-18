 <?php session_start();
 var_dump($_POST);
 if(isset($_SESSION['id_admin'])) 
 {
 header('Location: dashboard.php');
 exit();
 } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job4u | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
        
          <section class="login_content">
            <form role="form" method="post" action="admincheck.php"?flag=1234321>

              <h1>Admin Login Form</h1>
              
                
             <div>
              <input size=\"20\" type="text" size="20" class="form-control" maxlength="30" placeholder="Username" name="username" autofocus>
                <!-- <input type="text" class="form-control" placeholder="Username" autofocus /> -->
              </div>
              <div>
                <input size=\"20\" type="password" size="20" class="form-control" maxlength="30" placeholder="Password" name="password">
                <!-- <input type="password" class="form-control" placeholder="Password" /> -->
              </div>
              <div>
                <input type="submit" class="btn btn-success  " value="login" name="submit">
                <!-- <a class="btn btn-default submit" href="login.php">Login</a> -->
                
              </div> 

              <div class="clearfix"></div>

              <div class="separator">
                
                <div class="clearfix"></div>
                <br />

                <div>
                  
                  <h1><i class="fa fa-paw"></i> jobs4u!</h1>

                    
                    
                    
                      <?php
                      if(isset($_SESSION['loginerror']))
                      {
                        ?>
                    <div>
                         <h2 class="text-center"> Invalid Email/password  ..!!</h2>  
                    </div>

                    <?php
                       unset($_SESSION['loginerror']); }
                    ?>
                     <?php
                      if(isset($_SESSION['blankfield']))
                      {
                        ?>
                    <div>
                         <h2 class="text-center"> field is empty ..!!</h2>  
                    </div>

                    <?php
                       unset($_SESSION['blankfield']); }
                    ?>
                  <!-- <p>©2018 All Rights Reserved. Privacy and Terms</p> -->
                </div>
              </div>
            </form>
          </section>
        </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>





