<?php
		require_once "bootstrap.php";
		include("teams.php");
		$teamname = $_POST['teamname'];
		$abbrv = $_POST['abbrv'];
		$nickname = $_POST['nickname'];
		$gvbody = $_POST['governingbody'];
		$captain = $_POST['captain'];
		$coach = $_POST['coach'];
		$status =$_POST['status'];
		$world = $_POST['world'];
		
		$crud = $_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displayteam.php");
							break;
			case 'update': include("updateteam.php");
							break;
			case 'create': include("createteam.php");
							break;
			case 'delete' :include("deleteteam.php");
							break;
			default:	echo "undefiend action";
		}
		
		$tablepage = "team.php";
		include ("footer.php");
?>

