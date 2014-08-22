<?php

	if($id==""){
		echo "Enter id for update";
		$tablepage ="umpires.php";
		include("footer.php");
		exit;
	}
	
	$umpire = $em->find('umpires',$id);
	if($umpire){
		if($name == "")$name = $umpire->getname();
		if($span == "")$span = $umpire->getspan();
		if($nomasump == "")$nomasump = $umpire->getnomasump();
		if($nomastvump == "")$nomastvump = $umpire->getnomastvump();
		if($nomasref == "")$nomasref = $umpire->getnomasref();
		$total = $nomasump+$nomastvump+$nomasref;
		
		$umpire->setid($id);
		$umpire->setname($name);
		$umpire->setspan($span);
		$umpire->setnomasump($nomasump);
		$umpire->setnomastvump($nomastvump);
		$umpire->setnomasref($nomasref);
		$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
		$umpire->setmtype($mt);
		
		$em->persist($umpire);
		$em->flush();
		echo  "record updated\n";
	}else{
		echo "Record not found\n";
	}	
?>

<br/>