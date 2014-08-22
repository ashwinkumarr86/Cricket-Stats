<?php
		require_once "bootstrap.php";
		include("battingstatsclass.php");
				
		$battingstatid = $_POST['battingstatid'];
		$battername = $_POST['battername'];
		$country = $_POST['country'];
		$span = $_POST['span'];
		$matches = $_POST['matches'];
		$innings = $_POST['innings'];
		$notouts =$_POST['notouts'];
		$runs = $_POST['runs'];
		$high_score = $_POST['highscore'];
		$average = $_POST['average'];
		$balls_faced= $_POST['ballsfaced'];
		$strikerate = $_POST['strikerate'];
		$hundreds = $_POST['hundreds'];
		$fifties = $_POST['fifties'];
		$zeroes = $_POST['zeroes'];
		$fours = $_POST['fours'];
		$sixers = $_POST['sixers'];
		$mtype = $_POST['matchtype'];
		$crud = $_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displaybattingstats.php");
							break;
			case 'update': include("updatebattingstats.php");
							break;
			case 'create': include("createbattingstats.php");
							break;
			case 'delete' :include("deletebattingstats.php");
							break;
			default:	echo "undefiend action";
		}
		
		$tablepage = "battingstats.php";
		include ("footer.php");
?>

