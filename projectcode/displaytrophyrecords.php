<?php

	if($trophyrec_id == ""){
		$trophys = $em->getRepository('trophyrecords')->findAll();
	}else{
		$trophy = $em->find('trophyrecords',$trophyrec_id);
	}
	
?>
		<table border="1" style="width:400px">
			<th>TrophyRecord Id</th>
			<th>Season</th>
			<th>Winner</th>
			<th>Margin</th>
			<th>Trophy Id</th>
<?php
	if($trophyrec_id == ""){
		foreach($trophys as $trophy){
				echo "<tr>";
				echo "<td>".$trophy->gettrophyrecid()."</td>";
				echo "<td>".$trophy->getseason()."</td>";
				echo "<td>".$trophy->getwinner()."</td>";
				echo "<td>".$trophy->getmargin()."</td>";
				echo "<td>".$trophy->gettrpyid()->gettrophyid()."</td>";
				echo "</tr>";
		}
	} else if($trophy){
				echo "<tr>";
				echo "<td>".$trophy->gettrophyrecid()."</td>";
				echo "<td>".$trophy->getseason()."</td>";
				echo "<td>".$trophy->getwinner()."</td>";
				echo "<td>".$trophy->getmargin()."</td>";
				echo "<td>".$trophy->gettrpyid()->gettrophyid()."</td>";
				echo "</tr>";
			}
	else{
			echo "no rows to display\n";
	}
	
?>
		</table>