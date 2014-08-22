<?php
	require_once "bootstrap.php";
	include("umpiresclass.php");
	
	$crud = $_POST['crud'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$span = $_POST['span'];
	$nomasump = $_POST['nomasump'];
	$nomastvump = $_POST['nomastvump'];
	$nomasref = $_POST['nomasref'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
	
		case 'display': include("displayumpires.php");
						break;
		case 'update' : include("updateumpires.php");
						break;
		case 'create' : include("createumpires.php");
						break;
		case 'delete' : include("deleteumpires.php");
						break;
		default:
				echo "Undefined options";
	
	
	}
	$tablepage = "umpires.php";
	include ("footer.php");
	
?>
