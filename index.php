<?php 

require_once 'Controller.php';

?>

<!DOCTYPE HTML>

<html>
	
	<head>
		<meta charset="utf-8">
		<title>Test</title>
	</head>

	<body>

	<?php $codrin = new Controller(); ?>

	<?= $codrin->actionHelloWorld() ?>
		
		<div>
			<h1>Lorem Ipsum Dolor</h1>
		</div>

	</body>

</html>