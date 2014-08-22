<?php
	$con = mysqli_connect('localhost','root','database','cricketstats');
	if (mysqli_connect_error()){
		die("database connection failed" . mysqli_connect_error() . mysqli_connect_errno());
	}	
?>