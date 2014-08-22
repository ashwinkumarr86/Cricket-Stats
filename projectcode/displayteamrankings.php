<?php
		
		if($teamrankrecid == ""){
			$teams = $em->getRepository('teamrankings')->findAll();
		}else{
			$team = $em->find('teamrankings',$teamrankrecid);
		}
?>
	<table border="1" style="width:300px">
		<th> Team Record ID </th>
		<th> Team Rank Name </th>
		<th> Match Type </th>
		<th> Matches</th>
		<th> Points </th>
		<th> Rating </th>
<?php
	if($teamrankrecid == ""){
	 foreach($teams as $team){
		echo "<tr>";
		echo "<td>" . $team->getteamrankrecid() ."</td>";	
		echo "<td>" . $team->getteamrankname()->getteamname(). "</td>";
		echo "<td>" . $team->getmtype()->getmatchtype() . "</td>";
		echo "<td>" . $team->getmatches() . "</td>";
		echo "<td>" . $team->getpoints(). "</td>";
		echo "<td>" . $team->getrating(). "</td>";
			
		echo "</tr>";
		}
	}else if($team){
		echo "<tr>";
		echo "<td>" . $team->getteamrankrecid() ."</td>";
		echo "<td>" . $team->getteamrankname()->getteamname(). "</td>";
		echo "<td>" . $team->getmtype()->getmatchtype() . "</td>";
		echo "<td>" . $team->getmatches() . "</td>";
		echo "<td>" . $team->getpoints(). "</td>";
		echo "<td>" . $team->getrating(). "</td>";
			
		echo "</tr>";
	}else {
		echo "No records to display\n";
	}
?>
</table>
	