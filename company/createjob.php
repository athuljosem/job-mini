<?php include 'header.php' ?>

<!-- page content -->
<div class="right_col" role="main">

  <h3><i>Create Job Post</i></h3>
  <div class="row">
    <form method="post" action="addpost.php">
      <div class="col-md-12 latest-job ">
        <div class="form-group">
          <input class="form-control input-lg" type="text" id="jobtitle" name="jobtitle" placeholder="Job Title">
        </div>
        <div class="form-group">
          <textarea class="form-control input-lg" id="description" name="description" placeholder="Job Description"></textarea>
        </div>
        <div class="form-group">
          <input type="number" class="form-control  input-lg" id="minimumsalary" min="1000" autocomplete="off" name="minimumsalary" placeholder="Minimum Salary" required="">
        </div>
        <div class="form-group">
          <input type="number" class="form-control  input-lg" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="">
        </div>
        <div class="form-group">
          <input type="number" class="form-control  input-lg" id="experience" autocomplete="off" name="experience" placeholder="Experience (in Years) Required" required="">
        </div>
        <div class="form-group">
          <!-- <input type="text" class="form-control  input-lg" id="qualification" name="qualification" placeholder="Qualification Required" required=""> -->
        </div>
        <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->


          <h2>UG Courses</h2>
          <?php
          $sql = "SELECT DISTINCT qualification,subject FROM user_qualification WHERE q_level='UG'";
          $result = $conn->query($sql);

                //If Job Post exists then display details of post
          if($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) 
            {
              ?>
              <div class="checkbox">
                <label>
                  <input type="checkbox" class="flat" name="ugcheck[]" value="<?php echo $row['qualification'];?>-<?php echo $row['subject'];?>"><?php echo $row['qualification'];?>-<?php echo $row['subject'];?><br>
                </label>
              </div>
              <?php
            }
          }
          ?>
          <div class="form-inline">
            <label>
              Minimum Percentage:
            </label>
            <input type="text" style="width: 50px !important;" class="form-control" id="ug_mark" name="ug_mark" placeholder="%" required="1"/>
    
          </div>

          
          <h2>PG Courses</h2>
          <?php
          $sql = "SELECT DISTINCT qualification,subject FROM user_qualification WHERE q_level='PG'";
          $result = $conn->query($sql);

                //If Job Post exists then display details of post
          if($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) 
            {
              ?>
              <!-- <div class="col-md-9 col-sm-9 col-xs-12"> -->
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="flat"  name="pgcheck[]" value="<?php echo $row['qualification'];?>-<?php echo $row['subject'];?>"><?php echo $row['qualification'];?>-<?php echo $row['subject'];?><br>
                  </label>
                </div>
                <?php
              }
            }
            ?>
            <div class="form-inline">
            <label>
              Minimum Percentage:
            </label>
            <input type="text" style="width: 50px !important;" class="form-control" id="pg_mark" name="pg_mark" placeholder="%" required="1" />
    
          </div>
            <!-- </div> -->
          </div>




        <!-- <div class="control-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div> -->
                      <div class="form-group">
                        <input type="submit" class="btn btn-flat btn-success" name="submit" value="Create">
                      </div>
                    </form>
                  </div>
                </div>


                <!-- /page content -->

                <!-- footer content -->
                <?php include 'footer.php' ?>