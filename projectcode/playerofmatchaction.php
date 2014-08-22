<?php
	require_once "bootstrap.php";
	include("playerofmatchclass.php");
	
	$crud = $_POST['crud'];
	$plyrofmtchid = $_POST['plyrofmtchid'];
	$name = $_POST['name'];
	$ctryname = $_POST['ctryname'];
	$span = $_POST['span'];
	$matches = $_POST['matches'];
	$awards = $_POST['awards'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
	
		case 'display': include("displayplayerofmatch.php");
						break;
		case 'update' : include("updateplayerofmatch.php");
						break;
		case 'create' : include("createplayerofmatch.php");
						break;
		case 'delete' : include("deleteplayerofmatch.php");
						break;
		default:
				echo "Undefined options";
	
	}
	
	$tablepage = "playerofmatch.php";
	include("footer.php");
	
?>
