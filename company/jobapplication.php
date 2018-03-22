<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
 
  <h3>Overview</h3>
  <div class="alert alert-info alert-dismissible " >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
    <!-- <i class="icon fa fa-info"></i> In this dashboard you are able to change your account settings, post and manage your jobs. Got a question? Do not hesitate to drop us a mail. -->
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
            <!-- <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span> -->
            <div class="info-box-content">
              
             
              <li class="media event bg-green">
                <a class="pull-left border-green profile_thumb">
                  <i class="glyphicon glyphicon-briefcase yellow"></i>
                </a>
                <div class="media-body ">
                  <a class="title" href="viewusers.php?id=<?php echo $row['id_jobpost']; ?>"><h2><?php echo $row3['jobtitle']; ?></h2></a>
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
<?php include 'footer.php' ?>