<?php

	if($fieldingstatid == ""){
		echo "Enter id for deleting a record";
		$tablepage = "fieldingstats.php";
		include("footer.php");
		exit;
	}
	
	$fielding = $em->find('fieldingstats',$fieldingstatid);
	
	if($fielding){
		$em->remove($fielding);
		$em->flush();
		echo "Record deleted\n";
	
	}else{
		echo "Record not present\n";
	}
	
?>
<br/>