<?php include 'header.php' ?>
<?php

$sql = "SELECT * FROM users WHERE user_id='$_SESSION[userid]'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    ?>
    <!-- page content -->

    
    <div class="right_col" role="main">
      <div class="">


        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>User profile </h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  
                </ul>
                
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                  <div class="profile_img">
                    <div id="crop-avatar">
                      <!-- Current avatar -->
                      <img class="img-responsive avatar-view" src= "../uploads/user/<?php echo $row['photo']; ?>" alt="Avatar" title="Change the avatar">
                    </div>
                  </div>
                  <h3><?php echo ucwords($row['fname']); ?> <?php echo ucwords($row['lname']); ?></h3>

                  <ul class="list-unstyled user_data">
                    <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo ucwords($row['city']); ?>, <?php echo ucwords($row['state']); ?>, <?php echo ucwords($row['country']); ?>
                    </li>

                    <li>
                      <i class="fa fa-briefcase user-profile-icon"></i> <?php echo ucwords($row['designation']); ?>
                    </li>

                    <li class="m-top-xs">
                      <i class="fa fa-external-link user-profile-icon"></i>
                      <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $row['email']; ?></a>
                    </li>
                  </ul>

                  <!-- <a href="uploadresume.php"  class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Upload Resume</a><br> -->

                  <!-- <a href="#editprofile">edit profile </a> -->
                  <br />

                  <!-- start skills -->
                  <?php
                  $ug_course="";
                  $ug_branch="";
                  $ug_percentage="";
                  $pg_course="";
                  $pg_branch="";
                  $pg_percentage="";
                  $sslc_course="";
                  $sslc_percentage="";
                  $plustwo_subject="";
                  $plustwo_percentage="";
                  $sql1 = "SELECT * FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='UG'";
                  $result1 = $conn->query($sql1);

                      //If Job Post exists then display details of post
                  if($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) 
                    {
                      $ug_course=$row1["qualification"];
                      $ug_branch=$row1["subject"];
                      $ug_percentage=$row1["percentage"];
                    }
                  }
                  ?>

                  <?php
                  $sql2 = "SELECT * FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='PG'";
                  $result2 = $conn->query($sql2);

                      //If Job Post exists then display details of post
                  if($result2->num_rows > 0) 
                  {
                    while($row2 = $result2->fetch_assoc()) 
                    {
                      $pg_course=$row2["qualification"];
                      $pg_branch=$row2["subject"];
                      $pg_percentage=$row2["percentage"];
                    }
                  }
                  ?>

                <?php
                  $sql3 = "SELECT * FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='SSLC'";
                  $result3 = $conn->query($sql3);

                      //If Job Post exists then display details of post
                  if($result3->num_rows > 0) 
                  {
                    while($row3 = $result3->fetch_assoc()) 
                    {
                      $sslc_course=$row3["qualification"];
                      $sslc_percentage=$row3["percentage"];
                    }
                  }
                  ?>

                  <?php
                  $sql4 = "SELECT * FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='+2'";
                  $result4 = $conn->query($sql4);

                      //If Job Post exists then display details of post
                  if($result4->num_rows > 0) 
                  {
                    while($row4 = $result4->fetch_assoc()) 
                    {
                      $plustwo_subject=$row4["subject"];
                      $plustwo_percentage=$row4["percentage"];
                    }
                  }
                  ?>
                  <h4>Skills</h4>
                  <ul class="list-unstyled user_data">
                    <li>
                      <p><b>SSLC-</b><?php echo $sslc_percentage; ?>%</p>
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                      </div>
                    </li>
                    <li>
                      <p><b>Plus Two-</b><?php echo $plustwo_subject."-".$plustwo_percentage; ?>%</p>
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="0"></div>
                      </div>
                    </li>
                    <li>
                      <p><b>UG-</b><?php echo $ug_course." ".$ug_branch."-".$ug_percentage; ?>%</p>
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $ug_percentage; ?>"></div>
                      </div>
                    </li>
                    <li>
                      <p><b>PG-</b><?php echo $pg_course." ".$pg_branch."-".$pg_percentage; ?>%</p>
                      <div class="progress progress_sm">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $pg_percentage; ?>"></div>
                      </div>
                    </li>
                  </ul>
                  <!-- end of skills -->

                </div>
                <!-- edit profile -->
                <div class="col-md-9 col-sm-9 col-xs-8">


                  <div id="editprofile">                                   
                   <section class="login_content">
                    <div class="container">
                      <div class="">
                        <div class="col-md-8 col-md-offset-2 well">

                          <form method="post" action="updateprofile.php" enctype="multipart/form-data" class="form-horizontal form-label-left input_mask">

                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                              <label for="fname">First Name</label>
                              <input type="text" class="form-control has-feedback-left" id="fname" name="fname" placeholder="First Name" value="<?php echo $row['fname']; ?>" required="">
                              <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                              <label for="lname">Last Name</label>
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $row['lname']; ?>" required="">
                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-12 form-group has-feedback">
                              <label for="email">Email address</label>
                              <input type="email" class="form-control has-feedback-left" id="email" disabled="disabled" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
                              <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <textarea id="address" name="address" class="form-control" rows="5" placeholder="Address"><?php echo $row['address']; ?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="city">City</label>
                              <input type="text" class="form-control" id="city" name="city" value="<?php echo $row['city']; ?>" placeholder="city">
                            </div>
                            <div class="form-group">
                              <label for="state">State</label>
                              <input type="text" class="form-control" id="state" name="state" placeholder="state" value="<?php echo $row['state']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="contactno">Contact Number</label>
                              <input type="text" class="form-control" id="contactno" name="contactno" placeholder="Contact Number" value="<?php echo $row['contactno']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="qualification">Highest Qualification</label>
                              <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Highest Qualification" value="<?php echo $row['qualification']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="stream">Stream</label>
                              <input type="text" class="form-control" id="stream" name="stream" placeholder="stream" value="<?php echo $row['stream']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="passingyear">Passing Year</label>
                              <input type="date" class="form-control" id="passingyear" name="passingyear" placeholder="Passing Year" value="<?php echo $row['passingyear']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="dob">Date of Birth</label>
                              <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="age">Age</label>
                              <input type="text" class="form-control" id="age" name="age" placeholder="Age" value="<?php echo $row['age']; ?>">
                            </div>
                            <div class="form-group">
                              <label for="designation">Designation</label>
                              <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation" value="<?php echo $row['designation']; ?>">
                            </div>
                            <div class="form-group">
                              <label>Profile Image</label>
                              <input type="file" name="image" id="image" class=" input" >
                            </div>
                            <div class="text-center">
                              <input type="submit" name="submit" class="btn btn-success" value="update">
                            </div>
                            <?php
                          }
                        }
                        ?>                   
                      </form>
                    </div>
                  </div>
                </div>
              </section>
              <!-- end recent activity -->

              
              
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
</div>




<!-- /page content -->

<!-- footer content -->
<?php include 'footer.php' ?>