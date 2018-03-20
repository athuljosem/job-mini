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
              <?php foreach ($fields as $index => $value): ?>
                <div class="form-group">
                  <label for=<?= $index ?> > <?= $value ?></label>
                  <input type="text" class="form-control" id=<?= $index ?> name=<?= $value ?> >
                </div>
              <?php endforeach ?>
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

