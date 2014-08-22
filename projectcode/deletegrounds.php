<?php

		
		if($groundname == ""){
			echo '<font color="red"> Ground name cannot be empty</font>';
			$tablepage = "groundshtml.php";
			include("footer.php");
			exit;
		}
		
		$ground = $em->find('grounds',"$groundname");
		
		if($ground){
			$em->remove($ground);
			$em->flush();
		}else{
			echo "ground not present\n";
		}

?>