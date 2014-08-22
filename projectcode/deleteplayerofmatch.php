<?php

	if($plyrofmtchid == ""){
		echo "Enter id for deleting a record";
		$tablepage = "playerofmatch.php";
		include("footer.php");
		exit;
	}
	
	$player = $em->find('playerofmatch',"$plyrofmtchid");
	
	if($player){
		$em->remove($player);
		$em->flush();
		echo "Record deleted\n";
	}
	else{
		echo "record not found\n";
	
	}
	
	
	
?>
<br/>