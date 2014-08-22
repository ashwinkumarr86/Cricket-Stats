<?php
		
		if($playername == ""){
			echo '<font color="red"> Player name cannot be empty</font>';
			$tablepage = "playerprofile.php";
			include("footer.php");
			exit;
		}
		
		$player =  $em->find('playerprofiles',"$playername");
		
		if($player){
			echo "Player already exisiting\n";
			$tablepage = "playerprofile.php";
			include("footer.php");
			exit;
		}
		
		$player =  new PlayerProfiles();
		
		$player->setfullname($playername);
		$player->setborn($born);
		$player->setbatting_style($battingstyle);
		$player->setbowling_style($bowlingstyle);
		$player->setprofileurl($profileurl);
		
		$em->persist($player);
		$em->flush();
		
		echo "Player profile created\n";
?>