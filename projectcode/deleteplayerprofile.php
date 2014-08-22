<?php
		
		if($playername == ""){
			echo '<font color="red"> Player Name cannot be empty</font><br/>';
			$tablepage = "playerprofile.php";
			include("footer.php");
			exit;
		}
		
		$player = $em->find('playerprofiles',"$playername");
		if($player){
			$em->remove($player);
			$em->flush();
			echo "player profile removed\n";
		}else{
			echo  "player profile not found\n";
		}

?>