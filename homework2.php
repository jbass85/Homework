<?php
$cost = 9;
$discount = 0.0;
$final_price = 0.0;
$break ="<br />";

if ($cost <= 10.0){
	$discount=10.0;
}
if ($cost>10.0){
	$discount=20.0;
}

$final_price= $cost * ((100 - $discount) * 0.01);

echo $break.$break;
echo "The item costs \$$cost $break";
echo "The discount is $discount%$break";
echo "The final price is \$$final_price$break.$break";

$factor=5;

for($mult=1;$mult<50;$mult++){
	$product=$factor * $mult;
echo "$factor * $mult = ".$product.$break;}
	 

?>