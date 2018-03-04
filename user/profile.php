<?<?php include 'header.php' ?>
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
                      <h3><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $row['designation']; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $row['email']; ?></a>
                        </li>
                      </ul>

                      <!-- <a href="#editprofile" class="to_register" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->
                      <a href="#editprofile">edit profile </a>
                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                        <li>
                          <p>Website Design</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                          </div>
                        </li>
                        <li>
                          <p>Automation & Testing</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                          </div>
                        </li>
                        <li>
                          <p>UI / UX</p>
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                          </div>
                        </li>
                      </ul>
                      <!-- end of skills -->

                    </div>
                    <!-- edit profile -->
                    <div class="col-md-8 col-sm-8 col-xs-11">
        

    <div id="editprofile">                                   
     <section class="login_content">
      <div class="container">
        <div class="">
          <div class="col-md-8 col-md-offset-2 well">
          
            <form method="post" action="updateprofile.php" enctype="multipart/form-data">
            
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="<?php echo $row['fname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="<?php echo $row['lname']; ?>" required="">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" readonly>
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
                <label>image</label>
                <input type="file" name="image" id="image" class="form-control input-lg" >
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