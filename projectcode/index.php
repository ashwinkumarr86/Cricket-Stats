<?php

	require_once "bootstrap.php";
	include("team.php");
	//create a teams
/*	
	$team = new Teams();
	$team->setTeamname("ashwinravichan");
	
	$em->persist($team);
	$em->flush();
*/	
	$teams = $em->getRepository('teams')->findAll();
	
	foreach($teams as $team)
	{
		echo $team->getTeamname();
		echo "\n";
	}
	
	echo  "created team with name".$team->getTeamname()."\n";
	
?>