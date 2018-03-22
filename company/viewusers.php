<?php include 'header.php' ?>
<div class="right_col" role="main">

  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Button Example <small>Users</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <p class="text-muted font-13 m-b-30">
          The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
        </p>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
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
                            <td><?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                            <td><?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                            <td><?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                            <td><?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                            <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><i class="fa fa-arrow-circle-right"></i></a></td>
                          </tr>
                          <?php
                          
                        }
                      }
                      ?>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="../vendors/jszip/dist/jszip.min.js"></script>
<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

<?php include 'footer.php' ?>


