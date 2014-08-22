<?php

	if($teamone == $teamtwo){
		echo "Please select two different teams";
		exit;
	}
	
	$match = new MatchResults();
	$mt = $em->getRepository('teams')->find(array('teamname'=>$teamone));
	$match->setteamone($mt);
	$mt = $em->getRepository('teams')->find(array('teamname'=>$teamtwo));
	$match->setteamtwo($mt);
	$match->setwinner($winner);
	$match->setmargin($margin);
	$match->setground($ground);
	$match->setmatchdate($ground);
	$match->setscorecardurl($scorecardurl);
	$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
	$match->setmtype($mt);
	
	$em->persist($match);
	$em->flush();
	
	echo "Row created\n";
?>
<br/>