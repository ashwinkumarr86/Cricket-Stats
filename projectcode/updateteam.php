<?php
	
	if($teamname == ""){
			echo '<font color="red"> Teamname cannot be empty</font>';
			$tablepage = "team.php";
			include("footer.php");
			exit;
	}
	
	$team = $em->find('teams',"$teamname");
	
	if($abbrv == "") $abbrv = $team->getabbrvteamname();
	if($nickname =="") $nickname= $team->getnickname();
	if($gvbody == "") $gvbody = $team->getgoverningbody();
	if($captain == "") $captain = $team->getcaptain();
	if($coach == "") $coach= $team->getcoach();
	if($status == "") $status =$team->getstatus();
	if($world == "") $world= $team->getworldcuphistory();
	
	
	$team->setabbrvteamname($abbrv);
	$team->setnickname($nickname);
	$team->setgoverningbody($gvbody);
	$team->setcaptain($captain);
	$team->setcoach($coach);
	$team->setstatus($status);
	$team->setworldcuphitory($world);
	$em->persist($team);
	$em->flush();
	
	echo "Row updated successfully\n";

?>