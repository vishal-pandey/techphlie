<?php
	include "./config.php";
	$sql = "create table link (id varchar(6) primary key , link varchar(500))";
	$conn->query($sql);
?>