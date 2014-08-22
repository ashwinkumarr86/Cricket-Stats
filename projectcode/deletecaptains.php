<?php

	if($captainrecid == ""){
		echo "Enter id for deleting a record";
		$tablepage = "captains.php";
		include("footer.php");
		exit;
	}
	
	$captain = $em->find('captains',"$captainrecid");
	if($captain){
		$em->remove($captain);
		$em->flush();
		echo  "Row deleted\n";
	}else{
		echo "Row not present\n";
	}
?>
<br/>