<?php

	if($matchid == "" && $teamone == $teamtwo){
		$matches = $em->getRepository('matchresults')->findAll();
	}
	else if ($matchid != ""){
		$match = $em->find('matchresults',$matchid);
		$matches = "";
	}
	else if($teamone == $teamtwo){
		echo "No records present, please select two different teams";
		$tablepage = "matchresults.php";
		include("footer.php");
		exit;
	}else {
		$query = $em->createQuery("select u from matchresults u where (u.teamone = '$teamone' and u.teamtwo = '$teamtwo') or (u.teamone = '$teamtwo' and u.teamtwo = '$teamone')");
		$matches = $query->getResult();
	}
		
?>
		<table border="1" style="width:500px">
			<th>Match Id</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Winner</th>
			<th>Margin</th>
			<th>Ground</th>
			<th>MatchDate</th>
			<th>Scorecard</th>
			<th>Matchtype</th>
			
<?php
	if($matches){
		foreach($matches as $match){
				echo "<tr>";
				echo "<td>".$match->getmatchid()."</td>";
				echo "<td>".$match->getteamone()->getteamname()."</td>";
				echo "<td>".$match->getteamtwo()->getteamname()."</td>";
				echo "<td>".$match->getwinner()."</td>";
				echo "<td>".$match->getmargin()."</td>";
				echo "<td>".$match->getground()."</td>";
				echo "<td>".$match->getmatchdate()."</td>";
				echo "<td>".'http://espncricinfo.com'.$match->getscorecardurl()."</td>";
				echo "<td>".$match->getmtype()->getmatchtype()."</td>";
				
				echo "</tr>";
		}
	}else if ($match){
				echo "<tr>";
				echo "<td>".$match->getmatchid()."</td>";
				echo "<td>".$match->getteamone()->getteamname()."</td>";
				echo "<td>".$match->getteamtwo()->getteamname()."</td>";
				echo "<td>".$match->getwinner()."</td>";
				echo "<td>".$match->getmargin()."</td>";
				echo "<td>".$match->getground()."</td>";
				echo "<td>".$match->getmatchdate()."</td>";
				echo "<td>".'http://espncricinfo.com'.$match->getscorecardurl()."</td>";
				echo "<td>".$match->getmtype()->getmatchtype()."</td>";
				
				echo "</tr>";
	
	}else{
		echo "no Rows to display\n";
	}
	
?>
		</table>