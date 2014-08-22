<?php
		
	if($playername == ""){
			echo '<font color="red"> Player name cannot be empty</font>';
			$tablepage = "playerprofile.php";
			include("footer.php");
			exit;
	}
	
	$player = $em->find('playerprofiles',"$playername");
	
	if($born =="") $born= $player->getborn();
	if($battingstyle == "") $battingstyle = $player->getbatting_style();
	if($bowlingstyle == "") $bowlingstyle = $player->getbowling_style();
	if($profileurl == "") $profileurl= $player->getprofileurl();
	
	if($player){
		$player->setborn($born);
		$player->setbatting_style($battingstyle);
		$player->setbowling_style($bowlingstyle);
		$player->setprofileurl($profileurl);
		
		$em->persist($player);
		$em->flush();
		
		echo "Row updated successfully\n";
	}else{
		echo "Player profile not present\n";	
	}
	

?>