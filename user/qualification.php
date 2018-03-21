<?php include 'header.php' ?>

<?php $fields = array("q_level","qualification", "subject", "institution", "university", "percentage", "grade", "passout", "register_number"); ?>

<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Qualification</h2>
        <!-- Trigger the modal with a button -->
        <div class="" style="float: right;">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
        </div>
        <div class="clearfix"></div>        
      </div>

      <!-- list of the added qualifications -->

      <div class="col-md-12">

        <?php   
          $sql = "SELECT * FROM user_qualification WHERE user_id='$_SESSION[userid]'";
          $result = $conn->query($sql);
        ?>
        <div class="panel-group ">
          <div class="flex-container">
          <?php if ($result->num_rows > 0): ?> 
            <?php while($row = $result->fetch_assoc()): ?>
              <div class="flex-item">
                <div id=<?php echo $row['q_id']; ?> class="panel panel-primary">
                  <div class="panel-heading">
                    <b><?php echo $row['qualification'];?></b> (<?php echo $row['subject'];?>)
                    <div style="float: right;">
                      <button id="q_edit" class="btn btn-info"><i class="fa fa-edit"></i></button>
                      <button class="btn btn-danger q_delete" data-id="<?php echo $row['q_id'] ?>"><i class="fa fa-trash"></i></button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="panel-body ">
                    <b><?= $row['q_level']?></b>
                    <span class="label label-danger"><?php echo $row['percentage'];?>%</span ><br>
                    <b>Grade: <?php echo $row['grade'];?> </b><br>
                    <b><?php echo $row['institution'];?></b>(<?php echo $row['university'];?>) <br>
                    <i>Passout-<?php echo $row['passout'];?></i> 
                  </div> 
                </div>
              </div>
            <?php endwhile ?>
          <?php endif ?>
          </div>
        </div>
      </div>
      
      
      <!-- form to enter the qualifications -->
    
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <form id="qual_form" method="post" action="insertqualification.php">
                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Add Qualification</h4>
                </div>

                <div class="modal-body">

                  <div class="form-group">
                    <label for="q_level" >Qualification Level</label>
                    <select type="text" class="form-control" id="q_level" name="q_level" >
                      <option> UG</option>
                      <option> PG</option>
                      <option> +2</option>
                      <option> SSLC</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="qualification_id" >qualification</label>
                    <input type="text" class="form-control" id="qualification_id" name="qualification" >
                  </div>
                  <div class="form-group">
                    <label for="subject_id" >subject</label>
                    <input type="text" class="form-control" id="subject_id" name="subject" >
                  </div>
                  <div class="form-group">
                    <label for="institution_id" >institution</label>
                    <input type="text" class="form-control" id="institution_id" name="institution" >
                  </div>
                  <div class="form-group">
                    <label for="university_id" >university</label>
                    <input type="text" class="form-control" id="university_id" name="university" >
                  </div>
                  <div class="form-group">
                    <label for="percentage_id" >percentage</label>
                    <input type="text" class="form-control" id="percentage_id" name="percentage" >
                  </div>
                  <div class="form-group">
                    <label for="grade_id" >grade</label>
                    <input type="text" class="form-control" id="grade_id" name="grade" >
                  </div>
                  <div class="form-group">
                    <label for="passout_id" >passout</label>
                    <input type="text" class="form-control" id="passout_id" name="passout" >
                  </div>
                  <div class="form-group">
                    <label for="register_number_id" >register_number</label>
                    <input type="text" class="form-control" id="register_number_id" name="register_number" >
                  </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="submit">submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

<?php include 'footer.php' ?>

<script>
    $('.q_delete').click(function(){
        var id = $(this).attr('data-id');

        var r = confirm("Press a button!");
      if (r == true) {
          $.ajax({
              url: 'deletequalifictions.php',//make a  file yourself 
              type: 'POST',
              data: {id: id},
              success:function(response){
                  if (response==1) {
                      window.location = location;
                  }else{
                      console.log(response);
                  }
              }
          });
      }
    });    
</script>
