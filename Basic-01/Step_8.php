<?php
$array =["Egg","Milk","Cheese","Water","Pack","Tissues","Watermelon"];
echo "Hello Sir, do you have $array[0], $array[1], and $array[2]? Also if you sell fruits can I find a ".$array[count($array)-1]."?";
$arraym = array("eggs"=>array("balade","mazere3"),"milk"=>array("Fresh","Taanayel"),"water-pack"=>array("Tanoureen","Reem"));
echo "<br>Hey Sir, Please I need 1 pack of ".$arraym["eggs"][0]." eggs and 3 ".$arraym["water-pack"][1]." Water Pack";
?>