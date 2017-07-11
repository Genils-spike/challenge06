<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/style.css">
	<title>PHP99 - LELVEL 1</title>
</head>
<body>
	<h1>Exercice 1</h1>
	<?php
	include "exercices.php";
	echo list_of_numbers(1, 20);
	?>

	<h1>Exercie 2</h1>
	<?php
	$numbs = [1, 5, 20, 10, 3, 100, 500];
	echo numbers_gap($numbs);
	?>

	<h1>Exercice 3</h1>
</body>
</html>