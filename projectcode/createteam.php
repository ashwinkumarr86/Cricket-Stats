<?php
		
		if($teamname == ""){
			echo '<font color="red"> Teamname cannot be empty</font>';
			$tablepage = "team.php";
			include("footer.php");
			exit;
		}
		
		$team = $em->find('teams',"$teamname");
		if($team){
			echo "Team already present\n";
			$tablepage = "team.php";
			include("footer.php");
			exit;
		
		}
		
		$team = new Teams();
		$team->setteamname($teamname);
		$team->setabbrvteamname($abbrv);
		$team->setnickname($nickname);
		$team->setgoverningbody($gvbody);
		$team->setcaptain($captain);
		$team->setcoach($coach);
		$team->setstatus($status);
		$team->setworldcuphitory($world);
		
		$em->persist($team);
		$em->flush();
		
		echo "Row added successfully\n";
?>