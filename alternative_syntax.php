<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php $variable = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9); ?>

	<?php if ($variable % 2 == 0): ?>
		
		<h4>even: <?= $variable ?></h4>

	<?php else: ?>

		<h4>odd: <?= $variable ?></h4>

	<?php endif ?>



	<?php foreach ($variable as $key => $value): ?>
		<h1>loop: <?= $key ?>: <?php $value ?></h1>
	<?php endforeach ?>
	


</body>
</html>