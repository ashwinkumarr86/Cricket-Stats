<?php
	require_once "bootstrap.php";
	include("matchresultsclass.php");
	
	$crud = $_POST['crud'];
	$matchid = $_POST['matchid'];
	$teamone = $_POST['teamone'];
	$teamtwo = $_POST['teamtwo'];
	$winner = $_POST['winner'];
	$margin = $_POST['margin'];
	$ground = $_POST['ground'];
	$matchdate= $_POST['matchdate'];
	$scorecardurl = $_POST['scorecardurl'];
	$mtype = $_POST['mtype'];
	
	switch($crud){
		case 'display': include("displaymatchresults.php");
						break;
		case 'update' : include("updatematchresults.php");
						break;
		case 'create' : include("creatematchresults.php");
						break;
		case 'delete' : include("deletematchresults.php");
						break;
		default:		echo "Undefined options";
	}
	$tablepage = "matchresults.php";
	include("footer.php");
?>