<?php

	if($captainrecid == ""){
		$captains = $em->getRepository('captains')->findAll();
	}else{
		$captain = $em->find('captains',"$captainrecid");
	}
?>
		<table border="1" style="width:400px">
			<th>Id</th>
			<th>Name</th>
			<th>Country</th>
			<th>Span</th>
			<th>Matches</th>
			<th>Won</th>
			<th>Lost</th>
			<th>Tied</th>
			<th>No Result</th>
			<th>Draw</th>
			<th>W/L ratio</th>
			<th>Win %</th>
			<th>Loss %</th>
			<th>Matchtype</th>
<?php
	if($captainrecid == ""){
		foreach($captains as $captain){
				echo "<tr>";
				echo "<td>".$captain->getcaptainrecid()."</td>";
				echo "<td>".$captain->getname()."</td>";
				echo "<td>".$captain->getctryname()."</td>";
				echo "<td>".$captain->getspan()."</td>";
				echo "<td>".$captain->getmatches()."</td>";
				echo "<td>".$captain->getwon()."</td>";
				echo "<td>".$captain->getlost()."</td>";
				echo "<td>".$captain->gettied()."</td>";
				echo "<td>".$captain->getnoresult()."</td>";
				echo "<td>".$captain->getdraw()."</td>";
				echo "<td>".$captain->getwinlossratio()."</td>";
				echo "<td>".$captain->getwinpercent()."</td>";
				echo "<td>".$captain->getlosspercent()."</td>";
				echo "<td>".$captain->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
		}
	}else if($captain){
		echo "<tr>";
		echo "<td>".$captain->getcaptainrecid()."</td>";
		echo "<td>".$captain->getname()."</td>";
		echo "<td>".$captain->getctryname()."</td>";
		echo "<td>".$captain->getspan()."</td>";
		echo "<td>".$captain->getmatches()."</td>";
		echo "<td>".$captain->getwon()."</td>";
		echo "<td>".$captain->getlost()."</td>";
		echo "<td>".$captain->gettied()."</td>";
		echo "<td>".$captain->getnoresult()."</td>";
		echo "<td>".$captain->getdraw()."</td>";
		echo "<td>".$captain->getwinlossratio()."</td>";
		echo "<td>".$captain->getwinpercent()."</td>";
		echo "<td>".$captain->getlosspercent()."</td>";
		echo "<td>".$captain->getmtype()->getmatchtype()."</td>";
		echo "</tr>";	
	}else{	
		echo "No rows to display\n";
	}	
?>
		</table>