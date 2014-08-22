<?php
	if($trophyrec_id == ""){
		echo "trophyrecord id not given";
		exit;
	}
	
	$trophy = $em->find('trophyrecords',"$trophyrec_id");
	if($trophy){
		echo "Record alrady present\n";
		$tablepage = "trophyrecords.php";
		include("footer.php");
		exit;
	}
	$trophy = new TrophyRecords();
	$trophy->settrophyrecid($trophyrec_id);
	$trophy->setseason($season);
	$trophy->setwinner($winner);
	$trophy->setmargin($margin);
	
	$mt = $em->getRepository('trophy')->find(array('trophy_id'=>$trpyid));
	$trophy->settrpyid($mt);
	
	$em->persist($trophy);
	$em->flush();
	
	echo "Record created\n";
?>
<br/>