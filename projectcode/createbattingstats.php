<?php
		
		if($battingstatid == ""){
			echo '<font color="red"> Player ID cannot be empty</font>';
			$tablepage = "battingstats.php";
			include("footer.php");
			exit;
		}
	/*	
		if($matches == "") $matches = 0;
		if($innings == "") $innings = 0;
		if($notouts == "") $notouts = 0;
		if($runs == "") $runs = 0;
		if($average == "") $average = 0.0;
		if($ballsfaced == "") $ballsfaced =0;
		if($strikerate == "") $strikerate = 0;
		if($highscore == "") $highscore = '0';
		if($hundreds == "") $hundreds = 0;
		if($fifties == "") $fifties = 0;
		if($zeroes == "") $zeroes = 0;
		if($fours == "") $fours = 0;
		if($sixers == "") $sixers = 0;*/
		
		$batting = $em->find('battingstats',$battingstatid);
		
		if($batting){
			echo "Row already present\n";
			$tablepage = "battingstats.php";
			include("footer.php");
			exit;
		}
		
		$batting =  new BattingStats();
		$batting->setbattingstatid($battingstatid);
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
		
		echo "row created";

?>