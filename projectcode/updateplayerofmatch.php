<?php

	if($plyrofmtchid==""){
		echo "Enter id for update";
		$tablepage = "playerofmatch.php";
		include("footer.php");
		exit;
	}
	$player= $em->find('playerofmatch',"$plyrofmtchid");
	if($player){
		if($name == "")$name = $player->getname();
		if($ctryname == "")$ctryname = $player->getctryname();
		if($span == "")$span = $player->getspan();
		if($matches == "")$matches = $player->getmatches();
		if($awards == "")$awards = $player->getawards();
		
		$player->setname($name);
		$player->setctryname($ctryname);
		$player->setspan($span);
		$player->setmatches($matches);
		$player->setawards($awards);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$player->setmtype($mt);
		
		$em->persist($player);
		$em->flush();
		
		echo "Record updated\n";
	}else{
		echo "Record not present\n";
	
	}
	
?>

<br/>