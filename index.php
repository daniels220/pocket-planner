<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8"/>
	<link rel="stylesheet" type="text/css" href="style.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
	<title></title>
</head>

<body>
	<?php
	$year = (int)$_GET['year'];
	$start = new DateTime();
	for ($m = 1; $m <= 12; $m++) {
		$start->setDate($year,$m,1);
		$classes = strtolower($start->format('M D-\s \d-t'));
		include 'month.php';
	}
	?>
</body>
</html>
