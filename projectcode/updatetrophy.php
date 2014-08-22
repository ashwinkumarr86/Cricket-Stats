<?php

	if($trophy_id==""){
		echo "Enter id for update";
		$tablepage = "trophy.php";
		include("footer.php");
		exit;
	}
	
	$trophy = $em->find('trophy',"$trophy_id");
	
	if($trophyname == "")$trophyname = $trophy->gettrophyname();
	if($description == "")$description = $trophy->getdescription();
	
	$trophy->settrophyname($trophyname);
	$trophy->setdescription($description);
	$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
	$trophy->setmtype($mt);
	
	$em->persist($trophy);
	$em->flush();
	
	echo "row updated successfully\n";
	
?>

<br/>