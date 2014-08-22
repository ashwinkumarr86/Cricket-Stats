<?php

	if($plyrofmtchid == ""){
		$players = $em->getRepository('playerofmatch')->findAll();
	}else{
		$player =$em->find('playerofmatch',"$plyrofmtchid");
	}
	
?>
		<table border="1" style="width:300px">
			<th>Id</th>
			<th>Name</th>
			<th>Country</th>
			<th>Span</th>
			<th>Matches</th>
			<th>Awards</th>
			<th>Matchtype</th>
<?php
	if($plyrofmtchid == ""){
		foreach($players as $player){
				echo "<tr>";
				echo "<td>".$player->getplyrofmtchid()."</td>";
				echo "<td>".$player->getname()."</td>";
				echo "<td>".$player->getctryname()."</td>";
				echo "<td>".$player->getspan()."</td>";
				echo "<td>".$player->getmatches()."</td>";
				echo "<td>".$player->getawards()."</td>";
				echo "<td>".$player->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
		}
	}else if($player){
		echo "<tr>";
		echo "<td>".$player->getplyrofmtchid()."</td>";
		echo "<td>".$player->getname()."</td>";
		echo "<td>".$player->getctryname()."</td>";
		echo "<td>".$player->getspan()."</td>";
		echo "<td>".$player->getmatches()."</td>";
		echo "<td>".$player->getawards()."</td>";
		echo "<td>".$player->getmtype()->getmatchtype()."</td>";
		echo "</tr>";
	}else{
		echo "nor rows to display\n";
	}
	
	
?>
		</table>