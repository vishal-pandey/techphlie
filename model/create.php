<?php
	include "../content/config.php";
	function genid()
	{
		$id = "";
		for ($i=0; $i <6 ; $i++) { 
			$id .= chr(rand(97,(97+25)));
		}
		return $id;
	}
	$id = genid();
	$link = $_POST['link'];
	$sql = "insert into link values ('{$id}', '{$link}')";
	if($conn->query($sql)){
		echo $id;
	}

?>