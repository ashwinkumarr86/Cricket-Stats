<?php
	require_once "bootstrap.php";
	include("captainsclass.php");
	
	$crud = $_POST['crud'];
	$captainrecid = $_POST['captainrecid'];
	$name = $_POST['name'];
	$ctryname = $_POST['ctryname'];
	$span = $_POST['span'];
	$matches = $_POST['matches'];
	$won = $_POST['won'];
	$lost = $_POST['lost'];
	$tied = $_POST['tied'];
	$noresult = $_POST['noresult'];
	$draw = $_POST['draw'];
	//$win_loss_ratio = $_POST['win_loss_ratio'];
	//$win_percent = $_POST['win_percent'];
	//$loss_percent = $_POST['loss_percent'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
	
		case 'display': include("displaycaptains.php");
						break;
		case 'update' : include("updatecaptains.php");
						break;
		case 'create' : include("createcaptains.php");
						break;
		case 'delete' : include("deletecaptains.php");
						break;
		default:
				echo "Undefined options";
	
	
	}
	
	$tablepage = "captains.php";
	include ("footer.php");
	
?>
