<?php

//Declare variables

$cost = $_POST["cost"];
$discount = $_POST["discount"];
$final_price = $_POST["final_price"];
$break ="<br />";

//How much should I discount?

if ($cost <= 10.0){
	$discount=10.0;
}
if ($cost>10.0){
	$discount=20.0;
}

//Discount applied and final cost after discount

$discount = $cost * $discount * 0.01;
$final_price = $cost - $discount;


?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>You asked for it, here it is</h1>

        <label>Final Price:</label>
        <span><?php echo $final_price;?></span><br />
        </div>
        <br />
      <?php 


?>


       <form action="homework3.php" method="post">
       <label>Pick A Number, any Number</label>
       <input type="submit" name="factor"/><br />   
       </form> 
 
     
        
</body>
</html>

