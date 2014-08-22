<?php
	include("connection.php");
	
	if($bowlingstatid == ""){
			echo '<font color="red"> Player ID  cannot be empty</font>';
			$tablepage = "bowlingstats.php";
			include("footer.php");
			exit;
	}
	
	$bowling = $em->find('bowlingstats',$bowlingstatid);
	if($bowling){
	if($bowlername == "") $bowlername = $bowling->getbowlername();
	if($country == "") $country = $bowling->getcountry();
	if($span == "") $span =$bowling->getspan();
	if($matches == "") $matches = $bowling->getmatches();
	if($innings == "") $innings = $bowling->getinnings();
	if($overs == "") $overs = $bowling->getovers();
	if($maidenovers == "") $maidenovers = $bowling->getmaiden_overs();
	if($runsagainst == "") $runsagainst = $bowling->getruns_against();
	if($wickets == "") $wickets=$bowling->getwickets();
	if($bestbowlingiing == "") $bestbowlingiing = $bowling->getbestbowlinginng();
	if($bestbowlingmatch == "") $bestbowlingmatch =$bowling->getbestbowlingmatch();
	if($average == "") $average = $bowling->getaverage();
	if($economy == "") $economy = $bowling->geteconomy();
	if($strikerate == "") $strikerate = $bowling->getstrikerate();
	if($fourwicketmatch == "") $fourwicketmatch = $bowling->getfourwktinmtch();
	if($fivewicketmatch == "") $fivewicketmatch = $bowling->getfivewktinmtch();
	if($tenwicketmatch == "") $tenwicketmatch = $bowling->gettenwktinmtch();
	
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
		echo  "row updated\n";
	}else{
		echo "row not present\n";
	}

?>