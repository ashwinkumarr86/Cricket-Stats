<?php

	if($trophyrec_id == ""){
		echo "Enter id for deleting a record";
		$tablepage = "trophyrecords.php";
		include("footer.php");
		exit;
	}
	$trophy = $em->find('trophyrecords',"$trophyrec_id");
	
	if($trophy){
		$em->remove($trophy);
		$em->flush();
		echo "Record removed\n";
	}
	else{
		echo "Record not found\n";
	}
?>
<br/>