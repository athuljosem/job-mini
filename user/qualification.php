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
				<div class="col-md-4">
					<ul class="list-group">
					  <li class="list-group-item">First item</li>
					  <li class="list-group-item">Second item</li>
					  <li class="list-group-item">Third item</li>
					</ul>
				</div>
				<div class="col-md-7">
					<div class="well">
						<form method="post" action="uploadQ.php" enctype="multipart/form-data">
							<?php foreach ($fields as $value): ?>
								<div class="form-group">
								  <label for="fname"><?= $value ?></label>
								  <input type="text" class="form-control" id="fname" name="fname" value="" required="">
								</div>
							<?php endforeach ?>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php' ?>


