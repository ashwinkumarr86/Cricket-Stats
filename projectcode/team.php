<html>
<head>
	<title>Teams </title>
</head>
<body>
	<form action="teamaction.php" method="post">
	Team Name: <input type ="text" name="teamname" maxlength = "20"> <br/>
	Abbrv : <input type = "text" name ="abbrv"> </input><br/>
	Nick Name : <input type = "text" name= "nickname" maxlength ="20"> <br/>
	Governing Body : <input type = "text" name ="governingbody" maxlength="20"> <br/>
	Captain : <input type = "text"  name = "captain" maxlength="20"> <br/>
	Coach: <input type = "text" name ="coach" maxlength="20"> <br/>
	Status: <input type = "text"  name="status" maxlength="1"> <br/>
	World Cup History: <input type = "text" name="world" maxlength="30"> <br/>
	
	<?php
		include("crud.php");
	?>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
</body>
</html>