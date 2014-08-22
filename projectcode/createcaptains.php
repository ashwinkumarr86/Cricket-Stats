<?php
	if($captainrecid == ""){
		echo "id not given";
		$tablepage = "captains.php";
		include("footer.php");
		exit;
	}
	
	if($mtype == 'A'){
		{
			$win_loss_ratio = $won/($lost +0.01);
			$win_percent = $won/($matches +0.01);
			$loss_percent = $lost/($matches + 0.01);
		}
	}else if($mtype == 'B') {
		$win_loss_ratio = 0.00;
		$loss_percent = 0.00;
		
		$win_percent = $won/($matches -($tied+$noresult)  +0.01);
	}else {
		$win_loss_ratio = $won/($lost + 0.01);
		$win_percent = $won/($matches + 0.01);
		$loss_percent = 0.00;
	}
	
	$captain = $em->find('captains',"$captainrecid");
	
	if($captain){
		echo "Record already present\n";
		$tablepage = "captains.php";
		include("footer.php");
		exit;
	}
	
	$captain =  new Captains();
	$captain->setcaptainrecid($captainrecid);
	$captain->setname($name);
	$captain->setctryname($ctryname);
	$captain->setspan($span);
	$captain->setmatches($span);
	$captain->setwon($won);
	$captain->setlost($lost);
	$captain->settied($tied);
	$captain->setnoresult($noresult);
	$captain->setdraw($draw);
	$captain->setwinlossratio($win_loss_ratio);
	$captain->setlosspercent($loss_percent);
	$captain->setwinpercent($win_percent);
	$mt = $em->getRepository('matchformat')->find(array('matchtype'=>$mtype));
	$captain->setmtype($mt);
	
	$em->persist($captain);
	$em->flush();
	
	echo "record created\n";
?>
<br/>