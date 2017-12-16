<!DOCTYPE html>
<html>
<head>
	<title>Link Sortner</title>
</head>
<body>
	<h1>Link Sortner</h1>
	<?php
		$a = $_SERVER["REQUEST_URI"];
		echo $a;

		$var = preg_split("#/#", $a); 

		// print_r($var);
		echo $var[1];
	?>
</body>
</html>