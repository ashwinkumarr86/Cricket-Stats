<?php
	include("connection.php");
?>

<html>
<head>
	<title>TrophyRecords</title>
</head>

<body>
	
	<form action="trophyrecordsaction.php" method="post">
	Trophyrecord id: <input type="number" name="trophyrec_id">&nbsp;&nbsp;
	Season: <input type ="number" name="season"> </input><br/>
	Winner: <input type ="text" name="winner" maxlength="15"> </input>&nbsp;&nbsp;
	Margin: <input type ="text" name="margin" maxlength="80"> </input>
	Trophy id: <select name="trpyid">
				<?php
					$query = "select trophy_id from trophy";
					$result = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($result)){
						$tmp = '<option value = "';
						$tmp .= htmlspecialchars($row['trophy_id']);
						$tmp .= '">';
						$tmp .= htmlspecialchars($row['trophy_id']);
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