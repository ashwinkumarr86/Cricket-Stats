<?php

	if ($matchtype == ""){
			echo "Match type not given";
			$tablepage = "matchformat.php";
			include("footer.php");
			exit;
	}
	
	$match = $em->find('matchformat',"$matchtype");
	
	if($match){
		$em->remove($match);
		$em->flush();
		echo "Row deleted successfully";
	}else{
		echo "row not found\n";
	}
	
	
?>