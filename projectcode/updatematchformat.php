<?php
	if ($matchtype == ""){
			echo "Match type not given";
			exit;
	}
	
	$match = $em->find('matchformat',"$matchtype");
	if($match){
		if($formatname == "") $formatname = $match->getformatname();
		if($des == "") $des = $match->getdescription();
		if($firstmatch == "") $firstmatch = $match->getfirstmatch();
		if($leader == "") $leader = $match->getcurrentleader();
		
		$match->setformatname($formatname);
		$match->setdescription($des);
		$match->setfirstmatch($firstmatch);
		$match->setcurrentleader($leader);
	
		$em->persist($match);
		$em->flush();
		echo  "row updated\n";
	}else{
		echo "Row not present\n";
	}
	
	
	
?>