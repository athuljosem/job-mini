<?php include 'header.php' ?>
        <!-- page content -->
        <div class="right_col" role="main">
         
          <h3>Overview</h3>
            <div class="alert alert-info alert-dismissible " >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="icon fa fa-info"></i> In this dashboard you are able to change your account settings, post and manage your jobs. Got a question? Do not hesitate to drop us a mail.
            </div>
             
            <div class="row">
              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
                  <div class="info-box-content">
                    
                    <?php
                    $sql = "SELECT * FROM job_post WHERE id_company='$_SESSION[companyid]'";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                      $total = $result->num_rows; 
                    } else {
                      $total = 0;
                    }

                    ?>
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="glyphicon glyphicon-briefcase yellow"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="#"><strong>JOB POSTED</strong></a>
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
                    $sql = "SELECT * FROM apply_job WHERE id_company='$_SESSION[companyid]'";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0) {
                      $total1 = $result->num_rows; 
                    } else {
                      $total1 = 0;
                    }
                  ?>
                    <li class="media event bg-blue">
                            <a class="pull-left border-green profile_thumb">
                              <i class="glyphicon glyphicon-briefcase yellow"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="#"><span>JOB APPLIED</span></a>
                             <h1><?php echo $total1; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>
              </div>
            </div>
          </div>


           <!-- /page content -->

        <?php include 'footer.php' ?>
