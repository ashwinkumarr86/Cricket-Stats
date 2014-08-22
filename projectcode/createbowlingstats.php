<?php
		
		if($bowlingstatid == ""){
			echo '<font color="red"> Player ID cannot be empty</font>';
			$tablepage = "bowlingstats.php";
			include("footer.php");
			exit;
		}
/*		
		if($matches == "") $matches = 0;
		if($innings == "") $innings = 0;
		if($overs == "") $overs = 0;
		if($maidenovers == "") $maidenovers = 0;
		if($runsagainst == "") $runsagainst = 0;
		if($wickets == "") $wickets = 0;
		if($bestbowlingiing == "") $bestbowlingiing = "";
		if($bestbowlingmatch == "") $bestbowlingmatch = "";
		if($average == "") $average = 0;
		if($economy == "") $economy = 0;
		if($strikerate == "") $strikerate= 0;
		if($fourwicketmatch == "") $fourwicketmatch = 0;
		if($fivewicketmatch == "") $fivewicketmatch = 0;
		if($tenwicketmatch == "") $tenwicketmatch = 0;*/
		
		$bowling = $em->find('bowlingstats',$bowlingstatid);
		
		if($bowling){
			echo "Record already present\n";
			$tablepage = "bowlingstats.php";
			include("footer.php");
			exit;		
		}
		
		$bowling = new BowlingStats();
		
		$bowling->setbowlingstatid($bowlingstatid);
		$bowling->setbowlername($bowlername);
		$bowling->setcountry($country);
		$bowling->setspan($span);
		$bowling->setmatches($matches);
		$bowling->setinnings($innings);
		$bowling->setovers($overs);
		$bowling->setmaiden_overs($maidenovers);
		$bowling->setruns_against($runsagainst);
		$bowling->setwickets($wickets);
		$bowling->setbestbowlinginng($bestbowlingiing);
		$bowling->setbestbowlingmatch($bestbowlingmatch);
		$bowling->setaverage($average);
		$bowling->seteconomy($economy);
		$bowling->setstrikerate($strikerate);
		$bowling->setfourwktinmtch($fourwicketmatch);
		$bowling->setfivewktinmtch($fivewicketmatch);
		$bowling->settenwktinmtch($tenwicketmatch);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$bowling->setmtype($mt);
		
		$em->persist($bowling);
		$em->flush();
		
		echo "row created";
	
		
?>