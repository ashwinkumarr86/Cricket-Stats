<?php
		
		if($battingstatid == ""){
			$battings = $em->getRepository('battingstats')->findAll();
		}else{
			$batting = $em->find('battingstats',$battingstatid);
		}
		
?>
		
		<table border="1" style="width:300px">
		<th> Batting Stat Id </th>
		<th> Player Name </th>
		<th> Country </th>
		<th> Span </th>
		<th> Matches </th>
		<th> Innings </th>
		<th> Not Outs </th>
		<th> Runs </th>
		<th> High Score </th>
		<th> Average </th>
		<th> Balls Faced </th>
		<th> Strike Rate </th>
		<th> Hundreds </th>
		<th> Fifties </th>
		<th> Zeroes </th>
		<th> Fours </th>
		<th> Sixers </th>
		<th> Match Type </th>		
		
<?php
	if($battingstatid == ""){
	 foreach($battings as $batting){
		echo "<tr>";
		echo "<td>" . $batting->getbattingstatid() ."</td>";
		echo "<td>" . $batting->getbattername() . "</td>";
		echo "<td>" . $batting->getcountry() . "</td>";
		echo "<td>" . $batting->getspan() . "</td>";
		echo "<td>" . $batting->getmatches(). "</td>";
		echo "<td>" . $batting->getinnings(). "</td>";
		echo "<td>" . $batting->getnotouts(). "</td>";
		echo "<td>" . $batting->getruns(). "</td>";
		echo "<td>" . $batting->gethigh_score(). "</td>";
		echo "<td>" . $batting->getaverage(). "</td>";
		echo "<td>" . $batting->getballs_faced(). "</td>";
		echo "<td>" . $batting->getstrikerate(). "</td>";
		echo "<td>" . $batting->gethundreds(). "</td>";
		echo "<td>" . $batting->getfifties(). "</td>";
		echo "<td>" . $batting->getzeroes(). "</td>";
		echo "<td>" . $batting->getfours(). "</td>";
		echo "<td>" . $batting->getsixers(). "</td>";
		echo "<td>" . $batting->getmtype()->getmatchtype(). "</td>";		
		echo "</tr>";
	 }
   }else if ($batting){
		echo "<tr>";
		echo "<td>" . $batting->getbattingstatid() ."</td>";
		echo "<td>" . $batting->getbattername() . "</td>";
		echo "<td>" . $batting->getcountry() . "</td>";
		echo "<td>" . $batting->getspan() . "</td>";
		echo "<td>" . $batting->getmatches(). "</td>";
		echo "<td>" . $batting->getinnings(). "</td>";
		echo "<td>" . $batting->getnotouts(). "</td>";
		echo "<td>" . $batting->getruns(). "</td>";
		echo "<td>" . $batting->gethigh_score(). "</td>";
		echo "<td>" . $batting->getaverage(). "</td>";
		echo "<td>" . $batting->getballs_faced(). "</td>";
		echo "<td>" . $batting->getstrikerate(). "</td>";
		echo "<td>" . $batting->gethundreds(). "</td>";
		echo "<td>" . $batting->getfifties(). "</td>";
		echo "<td>" . $batting->getzeroes(). "</td>";
		echo "<td>" . $batting->getfours(). "</td>";
		echo "<td>" . $batting->getsixers(). "</td>";
		echo "<td>" . $batting->getmtype()->getmatchtype(). "</td>";		
		echo "</tr>";
	}else{
		echo "no rows to display\n";
	}
?>
</table>
		
