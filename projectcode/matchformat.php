<?php

?>

<html>
<head>
	<title>Match Format </title>
</head>

<body>
	
	<form action="matchformataction.php" method="post">
	Match Type: <input type ="text" name="matchtype" maxlength = "1"> </input>&nbsp;&nbsp;
	Format Name : <input type = "text" name ="formatname"> </input> &nbsp;&nbsp;<br/>
	Description : <input type = "text" name= "description"> </input>&nbsp;&nbsp;<br/>
	First match : <input type = "date" name ="firstmatch"> <br/>
	Current Leader : <input type = "text"  name = "currentleader"> </input> <br/>
	<?php
		include("crud.php");
	?>
	</form>
	<a href = "CricketStats.php"> Click here for Main Page </a><br/>
</body>
</html>