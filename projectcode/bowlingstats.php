<html>
<head>
	<title>Bowling Stats</title>
</head>
<body>
	<?php
		include("connection.php");
		$query = "Select matchtype from matchformat";
		$result = mysqli_query($con,$query);
	?>
	<form action="bowlingstatsaction.php" method="post">
	ID: <input type ="number" name="bowlingstatid"> <br/>
	Bowling Player Name : <input type = "text" name ="bowlername" maxlength ="70"> </input><br/>
	Country : <input type = "text" name= "country" maxlength ="40"> <br/>
	Span : <input type = "text" name ="span" maxlength="20"> <br/>
	Matches : <input type = "number"  name = "matches"> <br/>
	Innings: <input type = "number" name ="innings"> <br/>
	Overs: <input type = "number"  name="overs"> <br/>
	Maiden Overs: <input type = "number" name="maidenovers"> <br/>
	Runs Against: <input type ="text" name ="runsagainst"> <br/>
	Wickets: <input type="number" name="wickets"><br/>
	Best Bowling Innig: <input type = "number" name="bestbowlingiing"><br/>
	Best Bowling Match: <input type ="number" name="bestbowlingmatch"> <br/>
	Average: <input type="number" step="any" name="average"> <br/>
	Economy: <input type="number" step ="any" name="economy"> <br/>
	strikerate: <input type="number" step ="any" name="strikerate"> <br/>
	Four wicket Match: <input type = "number" name ="fourwicketmatch"> <br/>
	Five wicket match: <input type = "number" name="fivewicketmatch"> <br/>
	Ten wicket match: <input type = "number" name="tenwicketmatch"> <br/>
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