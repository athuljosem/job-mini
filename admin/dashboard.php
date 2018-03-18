<?php include 'header.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
         
          <h3>Overview</h3>
           
             
            <div class="row">
               <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql = "SELECT * FROM users WHERE active='1' ";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                      $total = $result->num_rows; 
                    } else {
                      $total = 0;
                    }
                  ?>
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-users"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="jobapplication.php"><span>Registered Candidates</span></a>
                             <h1><?php echo $total; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql1 = "SELECT * FROM users WHERE active='0' ";
                    $result1 = $conn->query($sql1);

                    if($result1->num_rows > 0) {
                      $total1 = $result1->num_rows; 
                    } else {
                      $total1 = 0;
                    }
                  ?>
                    <li class="media event bg-blue">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-users"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="jobapplication.php"><span>Pending Candidate Approvals </span></a>
                             <h1><?php echo $total1; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql2 = "SELECT * FROM company WHERE active='1' ";
                    $result2 = $conn->query($sql2);

                    if($result2->num_rows > 0) {
                      $total2 = $result2->num_rows; 
                    } else {
                      $total2 = 0;
                    }
                  ?>
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-building"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="jobapplication.php"><span>Registered Companies</span></a>
                             <h1><?php echo $total2; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>

               <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql3 = "SELECT * FROM company WHERE active='0' ";
                    $result3 = $conn->query($sql3);

                    if($result3->num_rows > 0) {
                      $total3 = $result3->num_rows; 
                    } else {
                      $total3 = 0;
                    }
                  ?>
                    <li class="media event bg-blue">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-building"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="jobapplication.php"><span>Pending company Approvals </span></a>
                             <h1><?php echo $total3; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql4 = "SELECT * FROM job_post ";
                    $result4 = $conn->query($sql4);

                    if($result4->num_rows > 0) {
                      $total4 = $result4->num_rows; 
                    } else {
                      $total4 = 0;
                    }

                    ?>
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="glyphicon glyphicon-briefcase yellow"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title"  href="#"><strong>JOB POSTED</strong></a>
                             <h1><?php echo $total4; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>                
              </div>
              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-green"><i class="ion ion-ios-browsers"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql5 = "SELECT * FROM apply_job ";
                    $result5 = $conn->query($sql5);

                    if($result5->num_rows > 0) {
                      $total5 = $result5->num_rows; 
                    } else {
                      $total5 = 0;
                    }
                  ?>
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-users"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="jobapplication.php"><span>JOB APPLIED</span></a>
                             <h1><?php echo $total5; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>
             

             

            </div>
          </div>


           <!-- /page content -->

        <?php include 'footer.php' ?>
