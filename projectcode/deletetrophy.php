<?php

	if($trophy_id == ""){
		echo "Enter id for deleting a record";
		$tablepage = "trophy.php";
		include("footer.php");
		exit;
	}
	
	$trophy = $em->find('trophy',"$trophy_id");
	if($trophy){
		$em->remove($trophy);
		$em->flush();
		echo "Row deleted\n";
	}else{
		echo "Row not found\n";
	}
	
	
?>
<br/>