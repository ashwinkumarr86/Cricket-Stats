<?php

	if($matchid == ""){
		echo "Enter id for deleting a record";
		$tablepage = "matchresults.php";
		include("footer.php");
		exit;
	}
	$match = $em->find('matchresults',"$matchid");
	
	if($match){
		$em->remove($match);
		$em->flush();
		echo "Row removed\n";
	}else{
		echo "Row not present\n";
	}
?>
<br/>