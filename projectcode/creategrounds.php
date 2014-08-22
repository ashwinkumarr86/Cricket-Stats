<?php
		
		if($groundname == ""){
			echo '<font color="red"> Ground name cannot be empty</font>';
			$tablepage = "groundshtml.php";
			include("footer.php");
			exit;
		}
		if($capacity == "") $capacity = 0;
		if($established == "") $established = 0;
		
		try{
		
		$ground = new Grounds();
		
		$ground->setgroundname($groundname);
		$ground->setctryname($ctryname);
		$ground->setestablished($established);
		$ground->setfirstend($firstend);
		$ground->setsecondend($secondend);
		$ground->setcapacity($capacity);
		
		$em->persist($ground);
		$em->flush();
		}catch (Exception $e){
			echo "Caught exception: ".$e->getMessage()."\n";
			$tablepage = "groundshtml.php";
			include("footer.php");
			exit;
		}
		echo "Record inserted successfully\n";
		
?>