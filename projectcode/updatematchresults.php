<?php

	if($matchid==""){
		echo "Enter id for update";
		$tablepage = "matchresults.php";
		include("footer.php");
		exit;
	}
	$match = $em->find('matchresults',$matchid);
	if($match){
		if($teamone == "")$teamone = $match->getteamone();
		if($teamtwo == "")$teamtwo = $match->getteamtwo();
		if($winner == "")$winner = $match->getwinner();
		if($margin == "")$margin = $match->getmargin();
		if($ground == "")$ground = $match->getground();
		if($matchdate == "")$matchdate = $match->getmatchdate();
		if($scorecardurl == "")$scorecardurl = $match->getscorecardurl();
	
		$mt = $em->getRepository('teams')->find(array('teamname'=>$teamone));
		$match->setteamone($mt);
		$mt = $em->getRepository('teams')->find(array('teamname'=>$teamtwo));
		$match->setteamtwo($mt);
		$match->setwinner($winner);
		$match->setmargin($margin);
		$match->setground($ground);
		$match->setmatchdate($matchdate);
		$match->setscorecardurl($scorecardurl);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$match->setmtype($mt);
		
		$em->persist($match);
		$em->flush();
		
		echo "Row updated\n";
	}else{
		echo "row not present\n";
	}	
?>

<br/>