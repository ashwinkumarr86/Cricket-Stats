<?php
	
	
	if($groundname == ""){
			echo '<font color="red"> ground name cannot be empty</font>';
			$tablepage = "groundshtml.php";
			include("footer.php");
			exit;
	}
	
	$ground = $em->find('grounds',"$groundname");
	if($ground)
	{
		if($ctryname == "") $ctryname = $ground->getctryname();
		if($established == "") $established= $ground->getestablished();
		if($capacity == "") $capacity = $ground->getcapacity();
		if($firstend == "") $firstend = $ground->getfirstend();
		if($secondend == "") $secondend = $ground->getsecondend();
		
		$ground->setctryname($ctryname);
		$ground->setestablished($established);
		$ground->setcapacity($capacity);
		$ground->setfirstend($firstend);
		$ground->setsecondend($secondend);
		
		$em->persist($ground);
		$em->flush();
		
		echo "Record updated \n";
	}else{
		echo "record not present\n";
	}
	
	
	

?>