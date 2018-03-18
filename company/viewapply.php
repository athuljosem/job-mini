<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">
 <div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>APPLIED CANDIDATES</h2>
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
        Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
      </p>
      
      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
          <tr>
            
            <th>name</th>
            <th>view</th> 
                          <!-- <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th>-->
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php
                        $sql = "SELECT * FROM apply_job WHERE id_jobpost='$_GET[id]'";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0) {
                         while($row = $result->fetch_assoc()) 
                         {
                          $sql1 = "SELECT * FROM users WHERE user_id='$row[id_user]'";
                          $result1 = $conn->query($sql1);
                          $row1 = $result1->fetch_assoc();
                          
                          
                          ?>
                          <tr>
                           
                            <td><?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                            <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><i class="fa fa-arrow-circle-right"></i></a></td>
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