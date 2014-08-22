<?php
	require_once "bootstrap.php";
	include("trophyrecordclass.php");
	
	$crud = $_POST['crud'];
	$trophyrec_id = $_POST['trophyrec_id'];
	$season = $_POST['season'];
	$winner = $_POST['winner'];
	$margin = $_POST['margin'];
	$trpyid = $_POST['trpyid'];
	
	switch($crud){
	
		case 'display': include("displaytrophyrecords.php");
						break;
		case 'update' : include("updatetrophyrecords.php");
						break;
		case 'create' : include("createtrophyrecords.php");
						break;
		case 'delete' : include("deletetrophyrecords.php");
						break;
		default:
				echo "Undefined options";
	
	
	}
	
	$tablepage = "trophyrecords.php";
	include ("footer.php");
	
?>
