<?php include 'header.php' ?>

<?php $fields = array("qualification", "subject", "institution", "university", "percentage", "grade", "passout", "register_number"); ?>

<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Qualification</h2>
        <div class="clearfix"></div>        
      </div>

      <div class="container-fluid">
        
        <!-- list of the added qualifications -->
        <div class="col-md-4">
          <div class="panel-group">

            <div class="panel panel-default">
              <div class="panel-heading">hello</div>
              <div class="panel-body">
                
              </div> 
              <div class="panel-footer"></div>
            </div>

          </div>
        </div>

        <!-- form to enter the qualifications -->
        <div class="col-md-7">
          <div class="well">
            <form id="qual_form">

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

              <button id="qual_submit" class="btn btn-success">submit</button>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>

</div>

<?php include 'footer.php' ?>

<script>
  $(function () {

    $('#qual_submit').on('click', function (event) {

      event.preventDefault();

      $.post('uploadQ.php',  $('#qual_form').serialize(), 
        function(response) {
          // Log the response to the console
          console.log("Response: " + response);
          console.log('success');
        }
      );

      console.log('hello');
    });

  });
</script>

