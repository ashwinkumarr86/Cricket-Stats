<?php
		
		if($battingstatid == ""){
			echo '<font color="red"> Player ID cannot be empty</font>';
			$tablepage = "battingstats.php";
			include("footer.php");
			exit;
		}
		
		$batting = $em->find('battingstats',$battingstatid);
		if($batting){
			$em->remove($batting);
			$em->flush();
			echo "row removed \n";
		}else{
			echo "row not present\n";
		}

?>