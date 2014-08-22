<?php
		include("bowlingstatsclass.php");
		require_once "bootstrap.php";
				
		$bowlingstatid = $_POST['bowlingstatid'];
		$bowlername = $_POST['bowlername'];
		$country = $_POST['country'];
		$span = $_POST['span'];
		$matches = $_POST['matches'];
		$innings = $_POST['innings'];
		$overs =$_POST['overs'];
		$maidenovers = $_POST['maidenovers'];
		$runsagainst = $_POST['runsagainst'];
		$wickets = $_POST['wickets'];
		$bestbowlingiing= $_POST['bestbowlingiing'];
		$bestbowlingmatch = $_POST['bestbowlingmatch'];
		$average = $_POST['average'];
		$economy = $_POST['economy'];
		$strikerate = $_POST['strikerate'];
		$fourwicketmatch = $_POST['fourwicketmatch'];
		$fivewicketmatch = $_POST['fivewicketmatch'];
		$tenwicketmatch = $_POST['tenwicketmatch'];
		$mtype = $_POST['matchtype'];
		$crud = $_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displaybowlingstats.php");
							break;
			case 'update': include("updatebowlingstats.php");
							break;
			case 'create': include("createbowlingstats.php");
							break;
			case 'delete' :include("deletebowlingstats.php");
							break;
			default:	echo "undefiend action";
		}
		
		$tablepage = "bowlingstats.php";
		include ("footer.php");
?>

