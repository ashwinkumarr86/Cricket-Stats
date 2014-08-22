<?php
		require_once "bootstrap.php";
		include("playerprofileclass.php");
			
		$playername = $_POST['fullname'];
		$born = $_POST['born'];
		$battingstyle = $_POST['battingstyle'];
		$bowlingstyle = $_POST['bowlingstyle'];
		$profileurl = $_POST['profileurl'];
		$crud = $_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displayplayerprofile.php");
							break;
			case 'update': include("updateplayerprofile.php");
							break;
			case 'create': include("createplayerprofile.php");
							break;
			case 'delete' :include("deleteplayerprofile.php");
							break;
			default:	echo "undefiend action";
		}
		
		$tablepage = "playerprofile.php";
		include ("footer.php");
?>

