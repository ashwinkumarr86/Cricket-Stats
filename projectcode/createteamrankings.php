<?php
		
		if($teamrankrecid == ""){
			echo '<font color="red"> Team ID cannot be empty</font>';
			$tablepage = "teamrankings.php";
			include("footer.php");
			exit;
		}
		
		$team = $em->find('teamrankings',"$teamrankrecid");
		if($team){
			echo "Team Id already present\n";
			$tablepage = "teamrankigns.php";
			include("footer.php");
			exit;
		
		}
		
		$team = new TeamRankings();
		$team->setteamrankrecid($teamrankrecid);
		$mt = $em->getRepository('teams')->find(array('teamname'=>$teamrankname));
		$team->setteamrankname($mt);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$team->setmtype($mt);
		$team->setmatches($matches);
		$team->setpoints($points);
		$team->setrating($rating);
		$team->setstatus($status);
		$team->setworldcuphitory($world);
		
		$em->persist($team);
		$em->flush();
		
		echo "Row added successfully\n";
?>