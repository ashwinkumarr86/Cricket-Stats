<?php
	if($plyrofmtchid == ""){
		echo "id not given";
		$tablepage = "playerofmatch.php";
		include("footer.php");
		exit;
	}
	
	$player = $em->find('playerofmatch',"$plyrofmtchid");
	
	if($player){
		echo "Player already present\n";
		$tablepage = "footer.php";
		include("footer.php");
		exit;
	}
	
	$player =  new PlayerOfMatch();
	$player->setplyrofmtchid($plyrofmtchid);
	$player->setname($name);
	$player->setctryname($ctryname);
	$player->setspan($span);
	$player->setmatches($matches);
	$player->setawards($awards);
	$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
	$player->setmtype($mt);
	
	$em->persist($player);
	$em->flush();
	
	echo "record inserted\n";
?>
<br/>