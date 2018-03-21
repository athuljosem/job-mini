<?php include 'header.php' ?>
<?php $_SESSION['approved'] = "false"; ?>
  <?php $_SESSION['rejected'] = "false"; ?>
        <!-- page content -->
        <div class="right_col" role="main">


<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong>Pending Jobpost</strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                      <th>Job Name</th>
                      <th>Company Name</th>
                      <th>Date Created</th>
                      <th>View</th>
                      <th>Status</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT job_post.*, company.companyname FROM job_post INNER JOIN company ON job_post.id_company=company.id_company WHERE job_post.active='0'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                        <td><?php echo $row['jobtitle']; ?></td>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></td>
                        <td><a href="view-jobpost.php?id=<?php echo $row['id_jobpost']; ?>"><i class="fa fa-arrow-right"></i></a></td>
                        <td>
                          <?php
                          if($row['active'] == '0') {
                           
                            ?>
                            <a class="btn btn-default bg-red" href="reject_jobpost.php?id=<?php echo $row['id_jobpost']; ?>">Reject</a> <a class="btn btn-default bg-green" href="add-jobpost.php?id=<?php echo $row['id_jobpost']; ?>">Approve</a>
                            <?php
                          } 
                        ?>    
                          
                        </td>
                        <td><a href="delete-job-post.php?id=<?php echo $row['id_jobpost']; ?> <?php $_SESSION['pending'] = "true" ?> "><i class="fa fa-trash"></i></a></td>

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
          
     


           <!-- /page content -->

        <?php include 'footer.php' ?>
