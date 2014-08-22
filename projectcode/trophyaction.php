<?php
	require_once "bootstrap.php";
	include("trophys.php");
	
	$crud = $_POST['crud'];
	$trophy_id = $_POST['trophy_id'];
	$trophyname = $_POST['trophyname'];
	$description = $_POST['description'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
	
		case 'display': include("displaytrophy.php");
						break;
		case 'update' : include("updatetrophy.php");
						break;
		case 'create' : include("createtrophy.php");
						break;
		case 'delete' : include("deletetrophy.php");
						break;
		default:
				echo "Undefined options";
	
	
	}
	
	$tablepage = "trophy.php";
	include ("footer.php");
	
?>
