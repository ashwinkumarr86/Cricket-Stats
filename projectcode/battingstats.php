<html>
<head>
	<title>Batting Stats</title>
</head>
<body>
	<?php
		include("connection.php");
		$query = "Select matchtype from matchformat";
		$result = mysqli_query($con,$query);
	?>
	<form action="battingstatsaction.php" method="post">
	ID: <input type ="number" name="battingstatid"> <br/>
	Batting Player Name : <input type = "text" name ="battername" maxlength ="70"> </input><br/>
	Country : <input type = "text" name= "country" maxlength ="40"> <br/>
	Span : <input type = "text" name ="span" maxlength="20"> <br/>
	Matches : <input type = "number"  name = "matches"> <br/>
	Innings: <input type = "number" name ="innings"> <br/>
	Not Outs: <input type = "number"  name="notouts"> <br/>
	Runs: <input type = "number" name="runs"> <br/>
	High Score: <input type ="text" name ="highscore"> <br/>
	Average: <input type="number" step="any" name="average"><br/>
	Balls Faced: <input type = "number" name="ballsfaced"><br/>
	Strike Rate: <input type ="number" step= "any" name="strikerate"> <br/>
	Hundreds: <input type="number" name="hundreds"> <br/>
	Fifties: <input type="number" name="fifties"> <br/>
	Zeroes: <input type="number" name="zeroes"> <br/>
	Fours: <input type = "number" name ="fours"> <br/>
	Sixers: <input type = "number" name="sixers"> <br/>
	Match Type : <select name="matchtype">
				<?php
						while($row = mysqli_fetch_array($result)){
							$tmp = '<option  value ="';
							$tmp .= htmlspecialchars($row['matchtype']);
							$tmp .= '">' ;
							$tmp .= htmlspecialchars($row['matchtype']);
							$tmp .= "</option>";
							echo  $tmp;
						}
				 ?>
			   </select> <br>
	
	<?php
		include("crud.php");
	?>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
</body>
</html>