
<html>
<head>
	<title>Player Profiles </title>
</head>
<body>
	<form action="playerprofileaction.php" method="post">
	Player Name: <input type ="text" name="fullname" maxlength = "50"> <br/>
	Born on: <input type = "text" name ="born" maxlength ="150"> </input><br/>
	Batting Style: <input type = "text" name= "battingstyle" maxlength ="30"> <br/>
	Bowling Style: <input type = "text" name ="bowlingstyle" maxlength="30"> <br/>
	Profile Url : <input type = "text"  name = "profileurl" maxlength="100"> <br/>
	
	<?php
		include("crud.php");
	?>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
</body>
</html>