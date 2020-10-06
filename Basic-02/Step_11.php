<?php
function isPrime($num){
    if($num<2)
    return 0;
    for($i=2;$i<=$num/2;$i++){
        if($num%$i==0)
    break;
    }
    if($i>($num/2))
    return 1;
    return 0;
}
echo isPrime(619);

?>