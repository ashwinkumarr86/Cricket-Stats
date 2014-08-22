<?php
		require_once "bootstrap.php";
		include "grounds.php";
		
		$groundname = $_POST['name'];
		$ctryname = $_POST['ctryname'];
		$established = $_POST['established'];
		$capacity = $_POST['capacity'];
		$firstend = $_POST['firstend'];
		$secondend = $_POST['secondend'];
		
		$crud = $_POST['crud'];
		
		switch($crud){
		
			case 'display': include("displaygrounds.php");
							break;
			case 'update': include("updategrounds.php");
							break;
			case 'create': include("creategrounds.php");
							break;
			case 'delete' :include("deletegrounds.php");
							break;
			default:	echo "undefined action";
		}
		
		$tablepage = "groundshtml.php";
		include ("footer.php");
?>

