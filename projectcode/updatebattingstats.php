<?php
	if($battingstatid == ""){
			echo '<font color="red"> ID  cannot be empty</font>';
			$tablepage = "battingstats.php";
			include("footer.php");
			exit;
	}
	$batting = $em->find('battingstats',$battingstatid);
	
	if($battingstatid){
		if($battername == "") $battername = $batting->getbattername();
		if($country == "") $country = $batting->getcountry();
		if($span == "") $span =$batting->getspan();
		if($matches == "") $matches = $batting->getmatches();
		if($innings == "") $innings = $batting->getinnings();
		if($notouts == "") $notouts = $batting->getnotouts();
		if($runs == "") $runs = $batting->getruns();
		if($high_score == "") $high_score=$batting->gethigh_score();
		if($average == "") $average = $batting->getaverage();
		if($balls_faced == "") $balls_faced =$batting->getballs_faced();
		if($strikerate == "") $strikerate = $batting->getstrikerate();
		if($hundreds == "") $hundreds = $batting->gethundreds();
		if($fifties == "") $fifties = $batting->getfifties();
		if($zeroes == "") $zeroes = $batting->getzeroes();
		if($fours == "") $fours = $batting->getfours();
		if($sixers == "") $sixers = $batting->getsixers();
	
		$batting->setbattername($battername);
		$batting->setcountry($country);
		$batting->setspan($span);
		$batting->setmatches($matches);
		$batting->setinnings($innings);
		$batting->setnotouts($notouts);
		$batting->setruns($runs);
		$batting->sethigh_score($high_score);
		$batting->setaverage($average);
		$batting->setballs_faced($balls_faced);
		$batting->setstrikerate($strikerate);
		$batting->sethundreds($hundreds);
		$batting->setfifties($fifties);
		$batting->setzeroes($zeroes);
		$batting->setfours($fours);
		$batting->setsixers($sixers);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$batting->setmtype($mt);
		
		$em->persist($batting);
		$em->flush();
		
		echo "Row updated\n";
	}else{
		echo "Row not present\n";
	}

?>