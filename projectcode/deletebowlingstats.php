<?php
		
		if($bowlingstatid == ""){
			echo '<font color="red"> Player ID cannot be empty</font>';
			$tablepage = "bowlingstats.php";
			include("footer.php");
			exit;
		}
		
		$bowling = $em->find('bowlingstats',$bowlingstatid);
		
		if($bowling){
			$em->remove($bowling);
			$em->flush();
			echo "row deleted\n";
		}else{
			echo "Row not present\n";
		}

?>