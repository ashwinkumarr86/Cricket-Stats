<?php

	if($trophyrec_id==""){
		echo "Enter id for update";
		$tablepage = "trophyrecords.php";
		include("footer.php");
		exit;
	}
	
	$trophy = $em->find('trophyrecords',"$trophyrec_id");
	if($trophy){
	if($season == "")$season = $trophy->getseason();
	if($winner == "")$winner = $trophy->getwinner();
	if($margin == "")$margin = $trophy->getmargin();
	
	$trophy->setseason($season);
	$trophy->setwinner($winner);
	$trophy->setmargin($margin);
	$mt = $em->getRepository('trophy')->find(array('trophy_id'=>$trpyid));
	$trophy->settrpyid($mt);
	
	$em->persist($trophy);
	$em->flush();
	
	echo "Record updated\n";
	}else{
		echo "record not found\n";
	}
?>

<br/>