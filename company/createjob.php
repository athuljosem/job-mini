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
          <input type="text" class="form-control  input-lg" id="qualification" name="qualification" placeholder="Qualification Required" required="">
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