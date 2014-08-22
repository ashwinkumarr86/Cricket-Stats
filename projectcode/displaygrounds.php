<?php
		
		//$ground = new Grounds();
		if($groundname == ""){
			$grounds = $em->getRepository('grounds')->findAll();
		}else{
			$grounds = $em->find('grounds',"$groundname");
		}
		
?>
		
		<table border="1" style="width:300px">
		<th> Ground Name </th>
		<th> Country Name </th>
		<th> Established </th>
		<th> Capacity </th>
		<th> First End </th>
		<th> Second End </th>
		
<?php
	 if($groundname == ""){
	   foreach($grounds as $ground){
		echo "<tr>";
		echo "<td>" . $ground->getgroundname() ."</td>";
		echo "<td>" . $ground->getctryname() . "</td>";
		echo "<td>" . $ground->getestablished() . "</td>";
		echo "<td>" . $ground->getcapacity() . "</td>";
		echo "<td>" . $ground->getfirstend(). "</td>";
		echo "<td>" . $ground->getsecondend(). "</td>";	
		echo "</tr>";
		}
	}
	else {
		if($grounds){
		echo "<tr>";
		echo "<td>" . $grounds->getgroundname() ."</td>";
		echo "<td>" . $grounds->getctryname() . "</td>";
		echo "<td>" . $grounds->getestablished() . "</td>";
		echo "<td>" . $grounds->getcapacity() . "</td>";
		echo "<td>" . $grounds->getfirstend(). "</td>";
		echo "<td>" . $grounds->getsecondend(). "</td>";	
		echo "</tr>";
		} else {
			echo  "No record to display\n";
		}
	
	}
?>
</table>
		
