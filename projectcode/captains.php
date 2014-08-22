<?php
	include("connection.php");
?>

<html>
<head>
	<title>Captains</title>
</head>

<body>
	
	<form action="captainsaction.php" method="post">
	Player id: <input type="number" name="captainrecid"><br/>
	Player name: <input type ="text" name="name" maxlength="50"> </input>&nbsp;&nbsp;
	Country: <input type ="text" name="ctryname" maxlength="30"> </input><br/>
	Span: <input type = "text" name ="span" maxlength="15"> </input> &nbsp;&nbsp;
	Matches: <input type = "number" name= "matches"> </input>&nbsp;&nbsp;<br/>
	Won: <input type = "number" name ="won">&nbsp;&nbsp;
	Lost: <input type = "number" name ="lost">&nbsp;&nbsp;
	Tied: <input type = "number" name ="tied">&nbsp;&nbsp;
	No Result: <input type = "number" name ="noresult">&nbsp;&nbsp;
	Draws: <input type = "number" name ="draw">&nbsp;&nbsp;<br/>
	Match Type: <select name="mtype">
				<?php
					$query = "select matchtype from matchformat";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						$tmp = '<option value = "';
						$tmp .= htmlspecialchars($row['matchtype']);
						$tmp .= '">';
						$tmp .= htmlspecialchars($row['matchtype']);
						$tmp .= '</option>';
						echo $tmp;
					}
				
				?>
				</select>
	<br/>
	<?php
		include("crud.php");
	?>
	</form>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
	
</body>
</html>