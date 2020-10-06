<?php
function calculateArea($height, $width){
    $area = $height*$width;
    return $area;
}
$area = calculateArea(5,5);
echo $area;
$area = calculateArea(5,3);
echo "<br>$area";
?>