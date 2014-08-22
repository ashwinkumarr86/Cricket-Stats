<?php
	include("connection.php");
?>

<html>
<head>
	<title>Trophy</title>
</head>

<body>
	
	<form action="trophyaction.php" method="post">
	Trophy id: <input type="number" name="trophy_id"><br/>
	Trophy name: <input type ="text" name="trophyname" maxlength="50"> </input>&nbsp;&nbsp;
	Description: <input type ="text" name="description" maxlength="80"> </input>
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