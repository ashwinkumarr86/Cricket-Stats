<?php

	if($id == ""){
		$umpires = $em->getRepository('umpires')->findAll();
	}else{
		$umpire = $em->find('umpires',$id);
	}
?>
		<table border="1" style="width:300px">
			<th>Id</th>
			<th>Name</th>
			<th>Span</th>
			<th>NoMatchesAsUmpires</th>
			<th>NoMatchesAsTVUmpires</th>
			<th>NoMatchesASReferee</th>
			<th>Total</th>
			<th>Matchtype</th>
<?php	
	if($id == ""){
		foreach($umpires as $umpire){
				echo "<tr>";
				echo "<td>".$umpire->getid()."</td>";
				echo "<td>".$umpire->getname()."</td>";
				echo "<td>".$umpire->getspan()."</td>";
				echo "<td>".$umpire->getnomasump()."</td>";
				echo "<td>".$umpire->getnomastvump()."</td>";
				echo "<td>".$umpire->getnomasref()."</td>";
				$temp = $umpire->getnomasump()+$umpire->getnomastvump()+$umpire->getnomasref();
				echo "<td>".$temp."</td>";
				echo "<td>".$umpire->getmtype()->getmatchtype()."</td>";
				echo "</tr>";
		}
	}else if($umpire){
		echo "<tr>";
		echo "<td>".$umpire->getid()."</td>";
		echo "<td>".$umpire->getname()."</td>";
		echo "<td>".$umpire->getspan()."</td>";
		echo "<td>".$umpire->getnomasump()."</td>";
		echo "<td>".$umpire->getnomastvump()."</td>";
		echo "<td>".$umpire->getnomasref()."</td>";
		$temp = $umpire->getnomasump()+$umpire->getnomastvump()+$umpire->getnomasref();
		echo "<td>".$temp."</td>";
		echo "<td>".$umpire->getmtype()->getmatchtype()."</td>";
		echo "</tr>";
	}
	
	
?>
		</table>