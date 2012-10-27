 		
 		
 		<?php
 		$factor = $_POST["factor"];
 		$break= "<br>";
 		
       for($mult=1;$mult<=50;$mult++){
       	$product=$factor * $mult;
       	echo "$factor * $mult = ".$product.$break;
       }
       ?>
       
       
