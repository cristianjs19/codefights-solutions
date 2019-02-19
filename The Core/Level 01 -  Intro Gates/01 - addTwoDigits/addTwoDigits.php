<?php 

function addTwoDigits($n) {
    
    $array = str_split($n);
    
    $suma = $array[0] + $array[1];
    
    return $suma;

}

?>