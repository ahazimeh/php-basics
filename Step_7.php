<?php
$birth_year = rand(1900,2019);
$current_year = date("Y");
if($current_year-$birth_year >=18)
echo "You can drive";
else
echo "You still a kid, go and play GTA"
?>