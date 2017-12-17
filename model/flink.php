<?php
	include './content/config.php';
	$id = $var[1];
	$sql = "select * from link where id = '{$id}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$thelink = $row['link'];
	if ($thelink != "") {
		echo "<a href='{$thelink}'></a>";
	}else{
		echo '<script type="text/javascript">window.location.href = "http://script.techphlie.com";</script>';
	}
?>
