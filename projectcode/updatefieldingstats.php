<?php
	if($fieldingstatid == ""){
		echo "fielding stat id not given";
		$tablepage = "fieldingstats.php";
		include("footer.php");
		exit;
	}
		
	$fielding = $em->find('fieldingstats',$fieldingstatid);
	if($fielding){
		
	if($fieldername == "")$fieldername = $row['fieldername'];
	if($country == "")$country = $row['country'];
	if($span == "") $span = $row['span'];
	if($matches == "") $matches= $row['matches'];
	if($innings == "") $innings= $row['innings'];
	if($dismissals == "")$dismissals= $row['dismissals'];
	if($catches == "")$catches = $row['catches'];
	if($stumpings == "")$stumpings = $row['stumpings'];
	if($catchesaswktkpr =="") $catchesaswktkpr= $row['catchesaswktkpr'];
	if($catchesasfielder == "") $catchesasfielder= $row['catchesasfielder'];
	if($maxdismissalsinng == "") $maxdismissalsinng= $row['maxdismissalsinng'];
	if($dismissalsperinng == "") $dismissalsperinng = $row['dismissalsperinng'];
	
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
	echo "Row updated\n";
	}else{
	echo "Row not present\n";
	}
?>
<br/>