<?php
	if($id == ""){
		echo "id not given";
		$tablepage ="umpires.php";
		include("footer.php");
		exit;
	}
	if($nomasump=="")$nomasump=0;
	if($nomastvump=="")$nomastvump=0;
	if($nomasref=="")$nomasref=0;
	
	$umpire = $em->find('umpires',$id);
	if($umpire){
		echo "Umpire already present\n";
		$tablepage = "umpires.php";
		include("footer.php");
		exit;
	}
	$umpire = new Umpires();
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
	
	echo "record inserted\n";
	
?>
<br/>