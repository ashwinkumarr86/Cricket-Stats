<?php

	if($trophy_id == ""){
		$trophys = $em->getRepository('trophy')->findAll();
	}else{
		$trophy =$em->find('trophy',"$trophy_id");
	}
?>
		<table border="1" style="width:400px">
			<th>Trophy Id</th>
			<th>Trophy Name</th>
			<th>Description</th>
			<th>Matchtype</th>
<?php	
	if($trophy_id == ""){
		foreach($trophys as $trophy){
				echo "<tr>";
				echo "<td>".$trophy->gettrophyid()."</td>";
				echo "<td>".$trophy->gettrophyname()."</td>";
				echo "<td>".$trophy->getdescription()."</td>";
				echo "<td>".$trophy->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
		}
	}else if ($trophy){
				echo "<tr>";
				echo "<td>".$trophy->gettrophyid()."</td>";
				echo "<td>".$trophy->gettrophyname()."</td>";
				echo "<td>".$trophy->getdescription()."</td>";
				echo "<td>".$trophy->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
	
	}else{
			echo "No Records to display\n";
	}
	
?>
		</table>