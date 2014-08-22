<?php
				
		if($playername == ""){
			$players = $em->getRepository('playerprofiles')->findAll();
		}else{
			$player = $em->find('playerprofiles',"$playername");
		}
		
?>
		
		<table border="1" style="width:300px">
		<th> Player Name </th>
		<th> Born </th>
		<th> Batting Style </th>
		<th> Bowling Style</th>
		<th> Profile Url</th>
		
<?php
	if($playername == ""){
	 foreach($players as $player){
		echo "<tr>";
		echo "<td>" . $player->getfullname() ."</td>";
		echo "<td>" . $player->getborn() . "</td>";
		echo "<td>" . $player->getbatting_style() . "</td>";
		echo "<td>" . $player->getbowling_style() . "</td>";
		echo "<td>" . $player->getprofileurl(). "</td>";	
		echo "</tr>";
		}
	}else if($player){
		echo "<tr>";
		echo "<td>" . $player->getfullname() ."</td>";
		echo "<td>" . $player->getborn() . "</td>";
		echo "<td>" . $player->getbatting_style() . "</td>";
		echo "<td>" . $player->getbowling_style() . "</td>";
		echo "<td>" . $player->getprofileurl(). "</td>";	
		echo "</tr>";
	
	}else{
		echo "No Player profiles to display\n";
	}
?>
</table>
		
