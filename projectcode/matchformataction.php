<?php
		require_once "bootstrap.php";
		include("matchformats.php");
?>

<html>
<head> 
	<title> Match format Action </title>
</head>
<body>
	<?php
	$matchtype =  $_POST['matchtype'];
	$formatname = $_POST['formatname'];
	$des =  $_POST['description'];
	$firstmatch = $_POST['firstmatch'];
	$leader =$_POST['currentleader'];
	
	$crud = $_POST['crud'];
	
	switch($crud){
	
			case 'display':  include("displaymatchformat.php");
							 break;			
			case 'create':   include("creatematchformat.php");
							 break;
			case 'update' :  include("updatematchformat.php");
							 break;
			case 'delete':  include("deletematchformat.php");
							 break;
			default: 	echo "Undefined action received";
	}
	
	$tablepage = "matchformat.php";
	include("footer.php");
	?>
		
</body>
</html>