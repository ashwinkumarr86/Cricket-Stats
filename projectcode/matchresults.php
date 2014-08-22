<?php
	include("connection.php");
?>

<html>
<head>
	<title>MatchResults</title>
</head>

<body>
	
	<form action="matchresultsaction.php" method="post">
	Match id: <input type="number" name="matchid"><br/>
	<!--Team 1: <input type ="text" name="teamone" maxlength="50"> </input>&nbsp;&nbsp;-->
	<!--Team 2: <input type ="text" name="teamtwo" maxlength="50"> </input>&nbsp;&nbsp;-->
	
	Team1: <select name="teamone">
				<?php
					$query = "select teamname from teams";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						$tmp = '<option value = "';
						$tmp .= htmlspecialchars($row['teamname']);
						$tmp .= '">';
						$tmp .= htmlspecialchars($row['teamname']);
						$tmp .= '</option>';
						echo $tmp;
					}
				
				?>
				</select>&nbsp;&nbsp;&nbsp;
				
	Team2:	<select name="teamtwo">
				<?php
					$query = "select teamname from teams";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						$tmp = '<option value = "';
						$tmp .= htmlspecialchars($row['teamname']);
						$tmp .= '">';
						$tmp .= htmlspecialchars($row['teamname']);
						$tmp .= '</option>';
						echo $tmp;
					}
				
				?>
				</select><br/>
	
	Winner: <input type ="text" name="winner" maxlength="50"> </input><br/>
	Margin: <input type ="text" name="margin" maxlength="25"> </input>&nbsp;&nbsp;
	Ground: <input type ="text" name="ground" maxlength="50"> </input>
	Match Date: <input type="date" name="matchdate"/><br/>
	Scorecard: <input type="text" name="scorecardurl" maxlength="100"/>
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