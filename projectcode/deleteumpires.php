<?php

	if($id ==""){
		echo "Enter id for deleting a record";
		$tablepage ="umpires.php";
		include("footer.php");
		exit;
	}
	
	$umpire = $em->find('umpires',$id);
	if($umpire){
		$em->remove($umpire);
		$em->flush();
		echo "Row deleted\n";
	}else{
		echo "row not found\n";
	}
?>
<br/>