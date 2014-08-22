<?php
	
		if($teamname == ""){
			$teams = $em->getRepository('teams')->findAll();
		}else{
			$team = $em->find('teams',"$teamname");
		}
		
?>
		
		<table border="1" style="width:300px">
		<th> Team Name </th>
		<th> Abbreviation </th>
		<th> NickName </th>
		<th> Governing Body </th>
		<th> Captain </th>
		<th> Coach </th>
		<th> Status </th>
		<th> World Cup History </th>
		
<?php
	if($teamname == ""){
		foreach($teams as $team){
		echo "<tr>";
		echo "<td>" . $team->getteamname() ."</td>";
		echo "<td>" . $team->getabbrvteamname() . "</td>";
		echo "<td>" . $team->getnickname() . "</td>";
		echo "<td>" . $team->getgoverningbody() . "</td>";
		echo "<td>" . $team->getcaptain(). "</td>";
		echo "<td>" . $team->getcoach(). "</td>";
		echo "<td>" . $team->getstatus(). "</td>";
		echo "<td>" . $team->getworldcuphistory(). "</td>";		
		echo "</tr>";
		}
	}else{
		if($team){
		echo "<tr>";
		echo "<td>" . $team->getteamname() ."</td>";
		echo "<td>" . $team->getabbrvteamname() . "</td>";
		echo "<td>" . $team->getnickname() . "</td>";
		echo "<td>" . $team->getgoverningbody() . "</td>";
		echo "<td>" . $team->getcaptain(). "</td>";
		echo "<td>" . $team->getcoach(). "</td>";
		echo "<td>" . $team->getstatus(). "</td>";
		echo "<td>" . $team->getworldcuphistory(). "</td>";		
		echo "</tr>";
		}else{
			echo  "No records to display\n";
		}	
	}
	
?>
</table>
		
