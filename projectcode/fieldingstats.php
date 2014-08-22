<?php
	include("connection.php");
?>

<html>
<head>
	<title>FieldingStats</title>
</head>

<body>
	
	<form action="fieldingstatsaction.php" method="post">
	FieldingStat id: <input type="number" name="fieldingstatid"><br/>
	<!--Team 1: <input type ="text" name="teamone" maxlength="50"> </input>&nbsp;&nbsp;-->
	<!--Team 2: <input type ="text" name="teamtwo" maxlength="50"> </input>&nbsp;&nbsp;-->
	
	Fielder name: <input type ="text" name="fieldername" maxlength="70"/>&nbsp;&nbsp;
	Country: <input type ="text" name="country" maxlength="40"/>&nbsp;&nbsp;
	Span: <input type ="text" name="span" maxlength="20"/> <br/>
	Matches: <input type ="number" name="matches" />&nbsp;&nbsp;
	Innings: <input type ="number" name="innings" />&nbsp;&nbsp;
	Dismissals: <input type="number" name="dismissals"/><br/>
	Catches: <input type="number" name="catches" />&nbsp;&nbsp;
	Stumpings: <input type="number" name="stumpings">&nbsp;&nbsp;
	Catches(Wktkpr): <input type="number" name="catchesaswktkpr">&nbsp;&nbsp;
	Catches(Fielder): <input type="number" name="catchesasfielder"><br/>
	Max dismissals: <input type="text" name="maxdismissalsinng" maxlength="20">&nbsp;&nbsp;
	Dismissals/Innings: <input type="number" name="dismissalsperinng" step="any">&nbsp;&nbsp;
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
</body>
</html>