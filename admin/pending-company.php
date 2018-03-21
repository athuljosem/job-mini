  <?php include 'header.php' ?>
  <?php $_SESSION['approved'] = "false"; ?>
  <?php $_SESSION['rejected'] = "false"; ?>
        <!-- page content -->
        <div class="right_col" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><strong>Companies</strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                      <th>Company Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th>
                      <th>Status</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT * FROM company WHERE active ='0'";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                      ?>
                      <tr>
                        <td><?php echo $row['companyname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contactno']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td>
                        <?php
                          if($row['active'] == '0') {
                           
                            ?>
                            <a class="btn btn-default bg-red" href="reject_company.php?id=<?php echo $row['id_company']; ?>">Reject</a> <a class="btn btn-default bg-green" href="add-company.php?id=<?php echo $row['id_company']; ?>">Approve</a>
                            <?php
                          } else if ($row['active'] == '2') {
                            ?>
                              <a href="approve-company.php?id=<?php echo $row['id_company']; ?>">Reactivate</a>
                            <?php
                          } else if($row['active'] == '3') {
                            echo "Rejected";
                          }
                        ?>                          
                        </td>
                        <td><a href="delete-company.php?id=<?php echo $row['id_company']; ?> <?php $_SESSION['pending'] = "true" ?> "><i class="fa fa-trash"></i></a></td>
                      </tr>   ?>
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
         

 

          </div>
          <?php include 'footer.php' ?>
