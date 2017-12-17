<!DOCTYPE html>
<html>
<head>
	<title>Link Sortner</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Link Sortner</h1>
	<?php
		$a = $_SERVER["REQUEST_URI"];
		$var = preg_split("#/#", $a); 
		// echo $var[1];
		if ($var[1] == "" ) {
			include "./view/create.php";
		}else{
			include "./view/short.php";
		}
		
		// include "./view/create.php";
	?>
</body>
</html>
<script type="text/javascript" src="./control/create.js"></script>