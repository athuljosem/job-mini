   

<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
 
  <div class="col-md-9 bg-white padding-2">
    <div class="row margin-top-20">
      <div class="col-md-12">
        <?php
        $sql = "SELECT * FROM job_post WHERE id_jobpost='$_GET[id]'";
        $result = $conn->query($sql);

                //If Job Post exists then display details of post
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) 
          {
            ?>
            <div class="pull-left">
              <h1><b><i><?php echo $row['jobtitle']; ?></i></b></h1>
            </div>
            <div class="pull-right">
              <a href="view_jobpost.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div>
              <p><span class="margin-right-10"><i class="fa fa-location-arrow "></i> <?php echo $row['experience']; ?> Years Experience</span>  <i class="fa fa-calendar" ></i> <?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></p>              
            </div>
            <div>
              <?php echo stripcslashes($row['description']); ?>
            </div>
            <div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>
    
  </div>
</div>


<!-- /page content -->

<!-- footer content -->
<?php include 'footer.php' ?>