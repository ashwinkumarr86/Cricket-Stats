<?php
	if($trophy_id == ""){
		echo "trophy id not given";
		exit;
	}
	
	$trophy = $em->find('trophy',"$trophy_id");
	if($trophy){
		echo "trophy record already present\n";
		$tablepage ="trophy.php";
		include("footer.php");
		exit;
	}else{
		$trophy = new Trophy();
		$trophy->settrophy_id($trophy_id);
		$trophy->settrophyname($trophyname);
		$trophy->setdescription($description);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$trophy->setmtype($mt);
		$em->persist($trophy);
		
		$em->flush();
		
		echo "trophy record inserted\n";
	}
	
?>
<br/>