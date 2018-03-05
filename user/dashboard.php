<?php include 'header.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
         <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>QUALIFIED JOB POST</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      The jobs posted by different companies but only that are matching to your qualifications gets listed here. Select and apply the jobs in which you are interested to attend.
                  </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>

                          <th>Job Title</th>

                          <th>Status</th>
                          <!-- <th>Position</th> 
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th>-->
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        //FIX:There is a more easier way to do this Should fix it!!

                        $sql = "SELECT qualification FROM users WHERE user_id='$_SESSION[userid]'";
                         $result = $conn->query($sql);

                      //If Job Post exists then display details of post
                      if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) 
                        {
                        	$qualification=$row["qualification"];
                        }
                    }
$_SESSION['leftpanel'] = 'dashboard';

                     $sql = "SELECT * FROM job_post WHERE qualification='$qualification' ";
                      $result = $conn->query($sql);

                      //If Job Post exists then display details of post
                      if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) 
                        {
                          $sql1 = "SELECT * FROM apply_job WHERE id_jobpost='$row[id_jobpost]' AND id_user='$_SESSION[userid]' ";
                           $result1 = $conn->query($sql1);
                      ?>
                      <tr>
                        <td><?php echo $row['jobtitle']; ?></td>
                        <!-- <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><i class="fa fa-arrow-circle-right"></i></a></td> -->
                        <?php  if($result1->num_rows > 0){ ?>
                          <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><button class="btn btn_success bg-green" >Applied </button></td>
                    
                          <?php }
                          else
                          {
                          ?>
                          <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><button class="btn btn_success bg-red" >Not Applied </button></td>
                          <?php }
                        
                          ?>
                      </tr>
                      <?php
                       }
                     }
                     ?>
                        </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

         <!-- /page content -->
          
<?php include 'footer.php' ?>


          


        

        