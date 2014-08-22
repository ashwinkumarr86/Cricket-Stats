<?php
	
	if($teamrankrecid == ""){
			echo '<font color="red"> recod id should not be empty</font>';
			$tablepage = "teamrankings.php";
			include("footer.php");
			exit;
	}
	
	$team = $em->find('teamrankings',$teamrankrecid);
	if($team){
		
	
		if($matches == "") $matches = $team->getmatches();
		if($points == "") $points= $team->getpoints();
		if($rating == "") $rating =$team->getrating();
		
		$team->setmatches($matches);
		$team->setpoints($points);
		$team->setrating($rating);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$team->setmtype($mt);
		
		$mt = $em->getRepository('teams')->find(array('teamname'=>$teamrankname));
		$team->setteamrankname($mt);
		
		$em->persist($team);
		$em->flush();
		
		echo "Row updated\n";
	}else{
		echo "row not found\n";
	}
	
	

?>