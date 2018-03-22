<?php include 'header.php' ?>
<div class="right_col" role="main">

  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>APPLIED CANDIDATES</h2>
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
          This is the list of candidates who have applied for the job.
        </p>
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Highest Qualification</th>
              <th>Passing Year</th>
              <!-- <th>More</th> -->
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

                <td>
                  <span class="fa fa-plus-circle text-primary fa-lg" data-toggle="modal" data-target="#<?php echo $row1['user_id'] ; ?>"></span>


                  <?php echo $row1['fname'] ; ?> <?php echo $row1['lname']; ?></td>
                  <td><?php echo $row1['email'] ; ?> </td>
                  <td><?php echo $row1['contactno'] ; ?></td>
                  <td><?php echo $row1['qualification'] ; ?> </td>
                  <td><?php echo $row1['passingyear'] ; ?> </td>
                  <!-- <td><a href="view.php?id=<?php echo $row['id_jobpost']; ?>"><i class="fa fa-arrow-circle-right"></i></a></td> -->
                </tr>
                <?php

              }
            }
            ?>
            

          </tbody>
        </table>

        <?php
        $sql2 = "SELECT * FROM apply_job WHERE id_jobpost='$_GET[id]'";
        $result2 = $conn->query($sql2);

        if($result2->num_rows > 0) 
        {
         while($row2 = $result2->fetch_assoc()) 
         {

          ?>
          <div id="<?php echo $row2['id_user'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Qualifications</h4>
                </div>

                <div class="modal-body">
                  <!-- athul put your qualifictions here -->
                  <ui class="list-group">
                    <?php
                    $sql3 = "SELECT * FROM user_qualification WHERE user_id='$row2[id_user]'";
                    $result3 = $conn->query($sql3);
                    if($result3->num_rows > 0) 
                    {
                      while($row3 = $result3->fetch_assoc())
                      {
                        ?>

                        <li class="list-group-item"><b><?php echo $row3['q_level']."-".$row3['qualification']."(".$row3['subject']."):";?>
                      </b><?php echo $row3['institution']."(".$row3['university'].")-";?><b><?php echo $row3['percentage']; ?>% </b>
<?php echo $row3['passout'];?> Passout
                    </li>
                       <!--  <li class="list-group-item">M.tech</li>
                        <li class="list-group-item">N.tech</li>
                        <li class="list-group-item">L.tech</li>
                        <li class="list-group-item">O.tech</li> -->
                        <?php
                      }
                    }
                    ?>
                  </ui>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>


            </div>
          </div>

          <?php
        }
      }
      ?>
    </div>
  </div>
</div>
</div>


<?php include 'footer.php' ?>


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