<?php

	if($fieldingstatid == ""){
		$fieldings = $em->getRepository('fieldingstats')->findAll();
	}else{
		$fielding = $em->find('fieldingstats',$fieldingstatid);
	}	
?>
		<table border="1" style="width:500px">
			<th>FieldingStat Id</th>
			<th>Fielder name</th>
			<th>Country</th>
			<th>Span</th>
			<th>Matches</th>
			<th>Innings</th>
			<th>Dismissals</th>
			<th>Catches</th>
			<th>Stumpings</th>
			<th>Catches(Wktkpr)</th>
			<th>Catches(Fielder)</th>
			<th>Max Dismissals</th>
			<th>Dismissals/Inning</th>
			<th>MatchType</th>
			
			
<?php
	if($fieldingstatid == ""){
		foreach($fieldings as $fielding){
				echo "<tr>";
				echo "<td>".$fielding->getfieldingstatid()."</td>";
				echo "<td>".$fielding->getfieldername()."</td>";
				echo "<td>".$fielding->getcountry()."</td>";
				echo "<td>".$fielding->getspan()."</td>";
				echo "<td>".$fielding->getmatches()."</td>";
				echo "<td>".$fielding->getinnings()."</td>";
				echo "<td>".$fielding->getdismissals()."</td>";
				echo "<td>".$fielding->getcatches()."</td>";
				echo "<td>".$fielding->getstumpings()."</td>";
				echo "<td>".$fielding->getcatchesaswktkpr()."</td>";
				echo "<td>".$fielding->getcatchesasfielder()."</td>";
				echo "<td>".$fielding->getmaxdismissalsinng()."</td>";
				echo "<td>".$fielding->getmaxdismissalsperinng()."</td>";
				echo "<td>".$fielding->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
		}
	}else if ($fielding){
				echo "<tr>";
				echo "<td>".$fielding->getfieldingstatid()."</td>";
				echo "<td>".$fielding->getfieldername()."</td>";
				echo "<td>".$fielding->getcountry()."</td>";
				echo "<td>".$fielding->getspan()."</td>";
				echo "<td>".$fielding->getmatches()."</td>";
				echo "<td>".$fielding->getinnings()."</td>";
				echo "<td>".$fielding->getdismissals()."</td>";
				echo "<td>".$fielding->getcatches()."</td>";
				echo "<td>".$fielding->getstumpings()."</td>";
				echo "<td>".$fielding->getcatchesaswktkpr()."</td>";
				echo "<td>".$fielding->getcatchesasfielder()."</td>";
				echo "<td>".$fielding->getmaxdismissalsinng()."</td>";
				echo "<td>".$fielding->getmaxdismissalsperinng()."</td>";
				echo "<td>".$fielding->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
	}else{
		echo "no record to display\n";
	}
	
?>
		</table>