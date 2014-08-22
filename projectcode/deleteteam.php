<?php

		if($teamname == ""){
			echo '<font color="red"> Teamname cannot be empty</font>';
			$tablepage = "team.php";
			include("footer.php");
			exit;
		}
		
		$team = $em->find('teams',"$teamname");
		
		if($team){
			$em->remove($team);
			$em->flush();
			echo "Row deleted successfully\n";
		}else{
			echo "Team not found";
		}		

?>