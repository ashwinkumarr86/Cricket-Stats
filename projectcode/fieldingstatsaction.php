<?php
	require_once "bootstrap.php";
	include("fieldingstatsclass.php");
	
	$crud = $_POST['crud'];
	$fieldingstatid = $_POST['fieldingstatid'];
	$fieldername = $_POST['fieldername'];
	$country = $_POST['country'];
	$span = $_POST['span'];
	$matches = $_POST['matches'];
	$innings = $_POST['innings'];
	$dismissals = $_POST['dismissals'];
	$catches = $_POST['catches'];
	$stumpings = $_POST['stumpings'];
	$catchesaswktkpr = $_POST['catchesaswktkpr'];
	$catchesasfielder = $_POST['catchesasfielder'];
	$maxdismissalsinng = $_POST['maxdismissalsinng'];
	$dismissalsperinng = $_POST['dismissalsperinng'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
	
		case 'display': include("displayfieldingstats.php");
						break;
		case 'update' : include("updatefieldingstats.php");
						break;
		case 'create' : include("createfieldingstats.php");
						break;
		case 'delete' : include("deletefieldingstats.php");
						break;
		default:
				echo "Undefined options";
	
	
	}
	
	
?>
<a href = "fieldingstats.php"> Click here for FieldingStats page</a><br/>
<a href = "CricketStats.php"> Click here for mainpage</a>