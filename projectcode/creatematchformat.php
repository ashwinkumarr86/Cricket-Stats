<?php

		if ($matchtype == ""){
			echo "Match type not given";
			$tablepage = "matchformat.php";
			include("footer.php");
			exit;
		}
		
		$match = $em->find('matchformat',"$matchtype");
		
		if($match){
			echo "Match type already present\n";
			$tablepage = "matchformat.php";
			include("footer.php");
			exit;
		}
		$match = new MatchFormat();
		$match->setmatchtype($matchtype);
		$match->setformatname($formatname);
		$match->setdescription($des);
		$match->setfirstmatch($firstmatch);
		$match->setcurrentleader($leader);
		
		$em->persist($match);
		$em->flush();
		
		echo "row created \n";
?>