<?php include 'header.php' ?>

        <!-- page content -->
        <div class="right_col" role="main">
         
          <h3>Overview</h3>
            <div class="alert alert-info alert-dismissible " >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="icon fa fa-info"></i> In this dashboard you are able to change your account settings, post and manage your jobs. Got a question? Do not hesitate to drop us a mail.
            </div>
            <div class="row">
              <?php
                    $sql = "SELECT DISTINCT id_jobpost FROM apply_job WHERE id_company='$_SESSION[companyid]'";
                    $result = $conn->query($sql);
                   while($row= $result->fetch_assoc()){


                    if($result->num_rows > 0) {
                     
                        
                          $sql2 = "SELECT * FROM apply_job WHERE id_jobpost='$row[id_jobpost]'"; 
                          $result2 = $conn->query($sql2);
                         
                          
                              if($result2->num_rows > 0) 
                                 {
                                     $total1 = $result2->num_rows; 
                                 } 
                              else 
                                 {
                                      $total1 = 0;
                                  }
                  
                  if($result2->num_rows > 0) {
                        
                           $sql3 = "SELECT * FROM job_post WHERE id_jobpost='$row[id_jobpost]'";
                    $result3 = $conn->query($sql3);

                    if($result3->num_rows > 0) {
                    $row3 = $result3->fetch_assoc();
                        
                    

                    ?>
            
              <div class="col-md-6">
                <div class="info-box bg-c-yellow">
                  <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
                  <div class="info-box-content">
                    
                   
                    <li class="media event bg-green">
                            <a class="pull-left border-green profile_thumb">
                              <i class="glyphicon glyphicon-briefcase yellow"></i>
                            </a>
                            <div class="media-body ">
                              <a class="title" href="viewapply.php?id=<?php echo $row['id_jobpost']; ?>"><strong><?php echo $row3['jobtitle']; ?></strong></a>
                             <h1><?php echo $total1; ?></h1> 
                              
                            </div>
                          </li> 
                  </div>
                </div>                
              </div>
              <?php
            
                    }
       }
        }
      }
    
      ?>
             
            </div>
          </div>


           <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
   

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
