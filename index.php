<!DOCTYPE html>
<html>
<head>
	<title>Link Sortner</title>
</head>
<body>
	<h1>Link Sortner</h1>
	<?php
		$a = $_SERVER["REQUEST_URI"];
		$var = preg_split("#/#", $a); 
		// echo $var[1];
		if ($var[1] == "" ) {
			include "./view/create.php";
		}
	?>
</body>
</html>