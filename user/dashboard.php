<?php include 'header.php' ?>
<!-- page content -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>QUALIFIED JOB POST</h2>
      
      <div class="clearfix"></div>
    </div>
    
    
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

        <?php 
        $sql3 ="SELECT * FROM company WHERE id_company='$row[id_company]'";
        $result3=$conn->query($sql3);

        if($result->num_rows > 0) {

         $row3=$result3->fetch_assoc();
         ?>

         <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
          <div class="well profile_view">
            <div class="col-sm-12">
              <h1 class="brief"><i><?php echo $row3['companyname']; ?></i></h1>
              <div class="left col-xs-7">
                <h3>post:<?php echo $row['jobtitle']; ?></h3>
                
                <ul class="list-unstyled">
                  <h2><li><i class="fa fa-inr"></i><?php echo $row['minimumsalary']; ?>-<?php echo $row['maximumsalary']; ?>  </li></h2>
                  
                </ul>
              </div>
              <div class="right col-xs-5 text-center">
                <img src="../images/img.jpg" alt="" class="img-circle img-responsive">
              </div>
            </div>
            <div class="col-xs-12 bottom text-center">
              <div class="col-xs-12 col-sm-6 emphasis">
                <p class="ratings">
                  <a>4.0</a>
                  <a href="#"><span class="fa fa-star"></span></a>
                  <a href="#"><span class="fa fa-star"></span></a>
                  <a href="#"><span class="fa fa-star"></span></a>
                  <a href="#"><span class="fa fa-star"></span></a>
                  <a href="#"><span class="fa fa-star-o"></span></a>
                </p>
              </div>
              <div class="col-xs-12 col-sm-6 emphasis">
                
                <?php  if($result1->num_rows > 0){ ?>
                <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><button class="btn btn_success bg-green" >Applied </button></a></td>
                
                <?php }
                else
                {
                  ?>
                  <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><button class="btn btn_success bg-red" >Not Applied </button></a></td>
                  <?php }
                  
                  ?>
                </div>
              </div>
            </div>
          </div>

          
          <?php
        }
      }
    }
    ?>
  </div>
</div>
</div>



<!-- /page content -->

<?php include 'footer.php' ?>







