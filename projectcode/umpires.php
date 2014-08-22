<?php
	include("connection.php");
?>

<html>
<head>
	<title>Umpires</title>
</head>

<body>
	
	<form action="umpiresaction.php" method="post">
	Umpire id: <input type="number" name="id"><br/>
	Umpire name: <input type ="text" name="name" maxlength="50"> </input>&nbsp;&nbsp;
	Span: <input type = "text" name ="span" maxlength="15"> </input> &nbsp;&nbsp;<br/>
	Matches as Umpire: <input type = "number" name= "nomasump"> </input>&nbsp;&nbsp;<br/>
	Matches as TVUmpire: <input type = "number" name ="nomastvump"> <br/>
	Matches as Referee: <input type = "number"  name = "nomasref"> </input> <br/>
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