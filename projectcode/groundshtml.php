<html>
<head>
	<title>Grounds </title>
</head>
<body>
	<form action="groundsaction.php" method="post">
	Ground Name: <input type ="text" name="name" maxlength = "20"> <br/>
	Country Name: <input type = "text" name ="ctryname" maxlength= "30"> </input><br/>
	Established : <input type = "number" name= "established"> <br/>
	Capacity : <input type = "number" name ="capacity" > <br/>
	First End : <input type = "text"  name = "firstend" maxlength="50"> <br/>
	Second End: <input type = "text" name ="secondend" maxlength="50"> <br/>
	
	<?php
		include("crud.php");
	?>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
</body>
</html>