<?php include 'header.php' ?>
<!-- page content -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>QUALIFIED JOB POST</h2>
      
      <div class="clearfix"></div>
    </div>
    <div class="row">
      
      <?php

      $ug_course="*";
      $pg_course="*";
      $ug_branch="*";
      $pg_branch="*";
                        //FIX:There is a more easier way to do this Should fix it!!

      $sql_ug = "SELECT qualification,percentage,subject FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='UG'";
      $result_ug = $conn->query($sql_ug);

                      //If Job Post exists then display details of post
      if($result_ug->num_rows > 0) {
        while($row_ug = $result_ug->fetch_assoc()) 
        {
          $ug_course=$row_ug["qualification"];
          $ug_percentage=$row_ug["percentage"];
          $ug_branch=$row_ug["subject"];
        }
      }

      $sql_pg = "SELECT percentage,qualification,subject FROM user_qualification WHERE user_id='$_SESSION[userid]' AND q_level='PG'";
      $result_pg = $conn->query($sql_pg);

                      //If Job Post exists then display details of post
      if($result_pg->num_rows > 0) {
        while($row_pg = $result_pg->fetch_assoc()) 
        {
          $pg_course=$row_pg["qualification"];
          $pg_percentage=$row_pg["percentage"];
          $pg_branch=$row_pg["subject"];
        }
      }

      $_SESSION['leftpanel'] = 'dashboard';

    $sql = "SELECT * FROM job_post WHERE pg_course LIKE '%$pg_course-$pg_branch%' AND ug_course LIKE '%$ug_course-$ug_branch%' and active='1' ";
    //$result = $conn->query($sql);


      // $sql = "SELECT * FROM job_post WHERE active='1' ";
      $result = $conn->query($sql);

                      //If Job Post exists then display details of post
      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        {
        // echo $pg_percentage.$row['pg_mark'].$ug_percentage.$row['ug_mark'];
          if(($pg_percentage>$row['pg_mark']) && ($ug_percentage>$row['ug_mark']))
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

             <div class="col-md-6 col-sm-4 col-xs-12 profile_details">
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
                    <img src="../images/user.png" alt="" class="img-circle img-responsive">
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
                      <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><button class="btn btn_success bg-blue" >Apply Now </button></a></td>
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
      }
      else
        echo "Update your qualifications to list your qualified jobs here.";
      ?>
    </div>
  </div>
</div>
</div>



<!-- /page content -->

<?php include 'footer.php' ?>







