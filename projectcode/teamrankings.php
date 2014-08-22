<html>
<head>
	<title>Team Rankings</title>
</head>
<body>
	<?php
		include("connection.php");
		$query = "Select matchtype from matchformat";
		$result = mysqli_query($con,$query);
		
		$query2 = "Select teamname from teams";
		$result2 = mysqli_query($con,$query2);
	?>
	<form action="teamrankingsaction.php" method="post">
	Team ID: <input type ="number" name="teamrankrecid"> <br/>
	Team Rank Name:<select name="teamname">
					<?php
						while($row = mysqli_fetch_array($result2)){
							$tmp = '<option  value ="';
							$tmp .= htmlspecialchars($row['teamname']);
							$tmp .= '">' ;
							$tmp .= htmlspecialchars($row['teamname']);
							$tmp .= "</option>";
							echo  $tmp;
						}
					?>
					</select> <br>
	Match Type: <select name="matchtype">
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
	Matches: <input type = "number" name ="matches"> <br/>
	Points : <input type = "number"  name = "points"> <br/>
	Rating: <input type = "number" name ="rating"> <br/>
	
	<?php
		include("crud.php");
	?>
	<br/>
	<a href="CricketStats.php"> Click here to go main page </a>
</body>
</html>