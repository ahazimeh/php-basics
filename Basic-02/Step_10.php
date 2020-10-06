<?php
function palindrome($string){
    if(!strcmp($string,strrev($string)))
    return 1;return 0;
}
echo palindrome("madam");
?>