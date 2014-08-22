<?php
	
	if($matchtype == ""){
			$matches = $em->getRepository('matchformat')->findAll();
	}
	else{
			$match = $em->find('matchformat',"$matchtype");
	}
	
?>	
<table border="1" style="width:300px">
		<th> Match Type </th>
		<th> Format name </th>
		<th> Description </th>
		<th> first match </th>
		<th> Current Leader </th>
		
<?php
	if($matchtype == ""){
	 foreach($matches as $match){
		echo "<tr>";
		echo "<td>" . $match->getmatchtype() ."</td>";
		echo "<td>" . $match->getformatname(). "</td>";
		echo "<td>" . $match->getdescription() . "</td>";
		echo "<td>" . $match->getfirstmatch() . "</td>";
		echo "<td>" . $match->getcurrentleader(). "</td>";
		echo "</tr>";
	}
	}else{
		if($match){
		echo "<tr>";
		echo "<td>" . $match->getmatchtype() ."</td>";
		echo "<td>" . $match->getformatname(). "</td>";
		echo "<td>" . $match->getdescription() . "</td>";
		echo "<td>" . $match->getfirstmatch() . "</td>";
		echo "<td>" . $match->getcurrentleader(). "</td>";
		echo "</tr>";
		}
		else {
		echo "no Rows to display\n";
		}
	}
?>
</table>
	
	
	