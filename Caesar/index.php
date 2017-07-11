<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Caesar</h1>
	<?php
		include "exercice.php";
		$message = "Hellous Wordus<br>";
		$value = 5;
		echo "MESSAGE : ".$message;
		echo "CRYPTAGE : ".caesar($message, $value);
	?>
</body>
</html>