<?php

		require_once "bootstrap.php";
		include("teamrankingsclass.php");
		
		$teamrankrecid = $_POST['teamrankrecid'];
		$teamrankname = $_POST['teamname'];
		$mtype = $_POST['matchtype'];
		$matches = $_POST['matches'];
		$points = $_POST['points'];
		$rating = $_POST['rating'];
		
		$crud =$_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displayteamrankings.php");
							break;
			case 'update': include("updateteamrankings.php");
							break;
			case 'create':  echo "Currently this feature not supported";
							break;
			case 'delete' : echo "Currently this feature is not supported";
							break;
			default:	echo "undefined action";
		}
		
		$tablepage = "teamrankings.php";
		include("footer.php");
		
		

?>