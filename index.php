<?php include 'functions.php' ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf8"/>
	<link rel="stylesheet" href="style.css" />
	<title></title>
</head>

<body>
	<?php
	$year = (int)(isset($_GET['year']) ? $_GET['year'] : date('Y'));
	$start = new DateTime();
	for ($m = 1; $m <= 12; $m++) {
		$start->setDate($year,$m,1);
		$classes = strtolower($start->format('M D-\s \d-t'));
		include 'month.php';
	}
	?>
</body>
</html>
