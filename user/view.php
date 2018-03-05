  <?php include 'header.php' ?>
         <!-- Page Content -->
        <div class="right_col" role="main">
          <div class="col-md-9 bg-white padding-2">
            <div class="row margin-top-20">
              <div class="col-md-12">
                <form method="post" action="applyjob.php">
              <?php

               $sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]'";
                $result = $conn->query($sql);

                //If Job Post exists then display details of post
                if($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) 
                  {
                     $sql1 = "SELECT * FROM apply_job WHERE id_jobpost='$row[id_jobpost]' AND id_user='$_SESSION[userid]' ";
                           $result1 = $conn->query($sql1);
                ?>
                <div class="pull-left">
                  <h1><b><i><?php echo $row['jobtitle']; ?></i></b></h1>
                </div>
                <div class="pull-right">
                  <?php
if($_SESSION['leftpanel'] == 'dashboard')
{
  ?>
  <a href="dashboard.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
  <?php
}
else if($_SESSION['leftpanel'] == 'appliedjobs')
{
  ?>
  <a href="myapplication.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
  <?php
}
else
{
  ?>
  <a href="view_jobpost.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
  <?php
}  
                  
                  ?>
                </div>
                <div class="clearfix"></div>
                <hr>
                <div>
                  <p><span class="margin-right-10"><i class="fa fa-location-arrow "></i> <?php echo $row['experience']; ?> Years Experience</span>  <i class="fa fa-calendar" ></i> <?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></p>              
                </div>
                <div>
                  <?php echo stripcslashes($row['description']); ?>
                </div>

                <div class="text-right">
                  <?php  if($result1->num_rows > 0){ ?>
                          <div class="alert alert-info alert-dismissible " >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <i class="icon fa fa-check"></i> Applied
            </div>
                    
                          <?php }
                          else
                          {
                          ?>
                          <a href="applyjob.php?id=<?php echo $row['id_jobpost'] ?>" class="btn btn-default btn-lg btn-flat margin-bottom-20 bg-green">Apply job </a>
                          <?php }
                        
                          ?>
                  
                 
                </div>
                <div>
                </div>
                <?php
                  }
                }
                ?>
              </form>
              </div>
            </div>
            
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
