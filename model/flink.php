<?php
	include './content/config.php';
	$id = $var[1];
	$sql = "select * from link where id = '{$id}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$thelink = $row['link'];
	echo "<a href='{$thelink}'></a>";
?>