<?php
	if($fieldingstatid == ""){
		echo "fielding stat id not given";
		$tablepage = "fieldingstats.php";
		include("footer.php");
		exit;
	}
		
	$fielding = $em->find('fieldingstats',$fieldingstatid);
	if($fielding){
		echo "Row already present\n";
		$tablepage = "fieldingstats.php";
		include("footer.php");
		exit;
	}
	
	$fielding = new FieldingStats();
	$fielding->setfieldingstatid($fieldingstatid);
	$fielding->setfieldername($fieldername);
	$fielding->setcountry($country);
	$fielding->setspan($span);
	$fielding->setmatches($matches);
	$fielding->setinnings($innings);
	$fielding->setdismissals($dismissals);
	$fielding->setcatches($catches);
	$fielding->setstumpings($stumpings);
	$fielding->setcatchesaswktkpr($catchesaswktkpr);
	$fielding->setcatchesasfielder($catchesasfielder);
	$fielding->setmaxdismissalsinng($maxdismissalsinng);
	$fielding->setdismissalsperinng($dismissalsperinng);
	$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
	$fielding->setmtype($mt);
	
	$em->persist($fielding);
	$em->flush();
	echo "Row created\n";
?>
<br/>