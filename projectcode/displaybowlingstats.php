<?php
		
		if($bowlingstatid == ""){
			$bowlings = $em->getRepository('bowlingstats')->findAll();
		}else{
			$bowling = $em->find('bowlingstats',$bowlingstatid);
		}
		
?>
		
		<table border="1" style="width:300px">
		<th> Bowling Stat Id </th>
		<th> Player Name </th>
		<th> Country </th>
		<th> Span </th>
		<th> Matches </th>
		<th> Innings </th>
		<th> Overs </th>
		<th> Maiden Overs </th>
		<th> Runs Against</th>
		<th> Wickets </th>
		<th> Best Bowling Innings </th>
		<th> Best Bowling Match</th>
		<th> Average </th>
		<th> Economy </th>
		<th> Strikerate </th>
		<th> Four wicket match</th>
		<th> Five wicket match </th>
		<th> Ten wicket match </th>
		<th> Match Type </th>		
		
<?php
	if($bowlingstatid == ""){
	 foreach($bowlings as $bowling){
		echo "<tr>";
		echo "<td>" . $bowling->getbowlingstatid() ."</td>";
		echo "<td>" . $bowling->getbowlername() . "</td>";
		echo "<td>" . $bowling->getcountry() . "</td>";
		echo "<td>" . $bowling->getspan() . "</td>";
		echo "<td>" . $bowling->getmatches(). "</td>";
		echo "<td>" . $bowling->getinnings(). "</td>";
		echo "<td>" . $bowling->getovers(). "</td>";
		echo "<td>" . $bowling->getmaiden_overs(). "</td>";
		echo "<td>" . $bowling->getruns_against(). "</td>";
		echo "<td>" . $bowling->getwickets(). "</td>";
		echo "<td>" . $bowling->getbestbowlinginng(). "</td>";
		echo "<td>" . $bowling->getbestbowlingmatch(). "</td>";
		echo "<td>" . $bowling->getaverage(). "</td>";
		echo "<td>" . $bowling->geteconomy(). "</td>";
		echo "<td>" . $bowling->getstrikerate(). "</td>";
		echo "<td>" . $bowling->getfourwktinmtch(). "</td>";
		echo "<td>" . $bowling->getfivewktinmtch(). "</td>";
		echo "<td>" . $bowling->gettenwktinmtch(). "</td>";
		echo "<td>" . $bowling->getmtype()->getmatchtype(). "</td>";		
		echo "</tr>";
		}
	}else if ($bowling){
		echo "<tr>";
		echo "<td>" . $bowling->getbowlingstatid() ."</td>";
		echo "<td>" . $bowling->getbowlername() . "</td>";
		echo "<td>" . $bowling->getcountry() . "</td>";
		echo "<td>" . $bowling->getspan() . "</td>";
		echo "<td>" . $bowling->getmatches(). "</td>";
		echo "<td>" . $bowling->getinnings(). "</td>";
		echo "<td>" . $bowling->getovers(). "</td>";
		echo "<td>" . $bowling->getmaiden_overs(). "</td>";
		echo "<td>" . $bowling->getruns_against(). "</td>";
		echo "<td>" . $bowling->getwickets(). "</td>";
		echo "<td>" . $bowling->getbestbowlinginng(). "</td>";
		echo "<td>" . $bowling->getbestbowlingmatch(). "</td>";
		echo "<td>" . $bowling->getaverage(). "</td>";
		echo "<td>" . $bowling->geteconomy(). "</td>";
		echo "<td>" . $bowling->getstrikerate(). "</td>";
		echo "<td>" . $bowling->getfourwktinmtch(). "</td>";
		echo "<td>" . $bowling->getfivewktinmtch(). "</td>";
		echo "<td>" . $bowling->gettenwktinmtch(). "</td>";
		echo "<td>" . $bowling->getmtype()->getmatchtype(). "</td>";		
		echo "</tr>";
	}else{
		echo "No row to display\n";
	}
	
?>
</table>
		
